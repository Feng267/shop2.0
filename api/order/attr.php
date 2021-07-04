<?php 
    /**
     * 通过session保存商品信息，并且应该先保存商品信息
     * 后验证是否登录，
     * 
     */
    session_start();
    // require "../../fun.php";

    // 获取请求携带的参数
    $goods_info = $_POST['goods_info'];// 商品ID和数量的json数组
    $isCart = @$_POST['isCart'];// 是否从购物车来

    // 判断参数是否缺少
    $parameter = array("goods_info" =>  $goods_info);
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
    $_SESSION['goods_info'] = $goods_info;

    $user_id = @$_SESSION['user_id'];// 用户id
    $flag = 0;// 返回的状态码，0表示失败
    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    
    // 从购物车来
    if(isset($isCart))
        $_SESSION['isCart'] = 1;

    if(isset($_SESSION['goods_info']) && $_SESSION['goods_info'] != '')
        $flag = 1;
    
    
    $res = array('status'=> $flag );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>