<?php 
    /**
     * 创建订单基本信息表
     */
    session_start();
    require "../../fun.php";
    $user_id = @$_SESSION['user_id'];
    if(!isset($user_id)){// 如果未登录
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    // 获取请求携带的参数
    $password = $_POST['password'];
    // 判断参数是否缺少
    $parameter = array("password");
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

    $flag = 0;// 密码是否正确
    $sql = "select password from user where user_id='$user_id'";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $row=mysqli_fetch_row($result);//获取密码
    // 验证通过
    if (password_verify($password, $row[0])) {
        $flag = 1;
    }
    
    $res = array('status'=> $flag );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>