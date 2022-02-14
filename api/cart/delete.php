<?php
    session_start();
    include "../../fun.php";
    $user_id = $_SESSION['user_id'];
    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    // 获取请求携带的参数
    $numb = @$_POST['cart_numb'];

    // 判断参数是否缺少
    // $parameter = array("numb" => $numb);
    // foreach($parameter as $key => $v){
    //     if($v == ''){
    //         header("HTTP/1.1 400 error: parameter error!");
    //         $error['error'] = "the lack of $key!";
    //         header('Content-Type:application/json');
    //         $res_json = json_encode($error, JSON_UNESCAPED_UNICODE);   //打包成json
    //         echo $res_json;  //输出数据
    //         exit;
    //     }
    // }
    
    $sql = "DELETE FROM `shop_cart_info` WHERE `numb`= $numb ";
    if(!isset($numb))// 如果没有指定单个购物车序号，则表示删除前部
        $sql = "DELETE FROM `shop_cart_info` WHERE `user_id`= $user_id ";
    $result = mysqli_query($conn,$sql) or die('数据插入失败:'.mysqli_error($conn));
    //echo "<pre>";
    echo '200';
?>
