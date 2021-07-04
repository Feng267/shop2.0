<?php 
    /**
     * 修改订单状态
     */
    session_start();
    require "../../fun.php";
    $user_id = @$_SESSION['user_id'];
    $order_ids = $_SESSION['order_ids'];

    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    // 获取请求携带的参数
    $status = @$_POST['status'];// 订单状态
    $order_id = @$_POST['order_id'];// 订单ID
    if(isset($order_id)){// 如果是前端传递单个订单ID，则只修改单个
        $order_ids = [];
        $order_ids[0] = $order_id;
    }

    // 判断参数是否缺少
    $parameter = array( "status" => $status);
    foreach($parameter as $key => $v){
        if($v == ''){
            header("HTTP/1.1 400 error: parameter error!");
            $error['error'] = "the lack of $key!";
            header('Content-Type:application/json');
            $res_json = json_encode($error, JSON_UNESCAPED_UNICODE);   //打包成json
            echo $res_json;  //输出数据
            exit;
        }
    }

    // 开启事务并设置还原点
    $sql = "start transaction; savepoint sq1";
    $result = mysqli_query($conn,$sql);

    foreach($order_ids as $v){
        $sql = "update order_info set order_status = $status where order_id='$v'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_affected_rows($conn);
        
    }

    // 成功则提交事务，失败则回滚
    if($count == 1){
        $sql = "commit";
        $result = mysqli_query($conn,$sql);
    }else{
        $sql = "rollback to sq1";
        $result = mysqli_query($conn,$sql);

        // 返回错误信息
        header("HTTP/1.1 400 error: insert failed!");
        $error['error'] = "error: insert failed!";
        header('Content-Type:application/json');
        $res_json = json_encode($error, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit;
    }
    mysqli_close($conn);// 关闭MySQL连接

    // 生成订单后清除session
    if($flag == 1){
        unset($_SESSION['order_ids']); 
        unset($_SESSION['order_ids_json']); 
        // $_SESSION['order_ids'] = json_encode($order_ids, JSON_UNESCAPED_UNICODE);
    }

    $res = array('status'=> $count);// 查询结果作为状态码返回，若是成功返回1，失败则是-1
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>