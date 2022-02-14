<?php 
    /**
     * 创建订单
     * 本是想一个订单号对应多个“订单详情”实现一个订单多种商品
     * 但发现每种商品还是单独一个订单号好一点
     * 在不改变表结构的前提下，用事务写入订单信息
     * 有可能存在因订单号相同而插入失败的风险
     */
    session_start();
    require "../../fun.php";
    $user_id = @$_SESSION['user_id'];
    $isCart = @$_SESSION['isCart'];// 是否从购物车而来
    $flag = 0;// 是否写入订单成功
    $order_ids = [];// 订单ID数组

    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    // 获取请求携带的参数
    $received_addr = $_POST['received_addr'];
    $received_tel = $_POST['received_tel'];
    $received_people = $_POST['received_people'];
    $order_summarys = json_decode($_POST['order_summarys'], true);// 订单价格
    $goods_ids = json_decode($_POST['goods_ids'], true);// 商品ID
    $cat_ids = json_decode($_POST['cat_ids'], true);// 分类ID
    $goods_attrs = json_decode($_POST['goods_attrs'], true);// 商品属性
    $goods_prices = json_decode($_POST['goods_prices'],true);// 商品价格
    $goods_numbers = json_decode($_POST['goods_numbers'],true);// 商品数量
    $total = $_POST['total'];// 订单的数量

    // 判断参数是否缺少
    $parameter = array( "received_addr" => $received_addr, "received_tel" =>  $received_tel, "received_people" => $received_people, "order_summarys" => $order_summarys, "goods_ids" => $goods_ids, "cat_ids" => $cat_ids , "goods_attrs" => $goods_attrs, "goods_prices" => $goods_prices, "goods_numbers" => $goods_numbers, "goods_numbers" => $goods_numbers, "total" => $total);
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

    // 如果是从购物车来的，创建订单后要删除购物车的数据
    if(isset($isCart)){
        $goods_info = json_decode($_SESSION['goods_info'], true);
    }
    for($i = 0; $i < $total; $i++){
        $order_id = date('YmdHis', time()) . substr(microtime(), 2, 3) . sprintf('%03d', rand(0, 999));// 22位的订单id
        $order_ids [] = $order_id;

        // 插入订单基本信息
        $sql = "insert into order_info(order_id, user_id, total_price, received_addr, received_tel, received_people) values(
            '$order_id', '$user_id', $order_summarys[$i], '$received_addr', '$received_tel','$received_people'
        )";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        $count = mysqli_affected_rows($conn);
        // 插入订单详情表
        if($count == 1){
            $sql = "insert into order_detail(order_id, user_id, goods_id, cat_id, goods_attr, goods_price, goods_number, order_summary) values('$order_id', '$user_id', $goods_ids[$i], $cat_ids[$i], '$goods_attrs[$i]', $goods_prices[$i], $goods_numbers[$i], $order_summarys[$i]
            )";
            // echo $sql;
            $result = mysqli_query($conn,$sql);
            $count = mysqli_affected_rows($conn);
        }

        // 删除购物车信息
        if(isset($isCart) && $count == 1){
            $sql = "delete from shop_cart_info where numb = " .$goods_info[$i]['numb'] ;
            $result = mysqli_query($conn,$sql);
            $count_3 = mysqli_affected_rows($conn);
            // $flag  = $$count_2;
        }
        
        $flag  = $count;// 插入成功标志
        
        
    }
    // 成功则提交事务，失败则回滚
    if($flag == 1){
        $sql = "commit";
        $result = mysqli_query($conn,$sql);
    }else{
        $sql = "rollback to sq1";
        $result = mysqli_query($conn,$sql);

        // 返回错误信息
        header("HTTP/1.1 401 error: insert failed!");
        $error['error'] = "error: insert failed!";
        header('Content-Type:application/json');
        $res_json = json_encode($error, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit;
    }
    mysqli_close($conn);// 关闭MySQL连接

    // 生成订单后清除旧的session数据，并保存新数据
    if($flag == 1){
        unset($_SESSION['goods_info']); 
        unset($_SESSION['isCart']); 

        $_SESSION['order_ids'] = $order_ids;// 用以PHP操作的订单ID数组
        $_SESSION['order_ids_json'] = json_encode($order_ids, JSON_UNESCAPED_UNICODE);// 用以前端操作的订单ID数组
    }
    // $order_id = date('YmdHis', time()) . substr(microtime(), 2, 5) . sprintf('%03d', rand(0, 9));// 22位的订单id

    
    $res = array('status'=> $flag, 'order_id'=> $order_id );// 查询结果作为状态码返回，若是成功返回1，失败则是-1
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>