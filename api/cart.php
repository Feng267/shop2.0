<?php
    if(!session_id())
        session_start();
    include "../fun.php";
    $user_id = @$_SESSION['user_id'];
    if(!isset($user_id)){// 如果未登录
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    $sql = "select shop_cart_info.*, goods_info.goods_small_logo as goods_pic from shop_cart_info,goods_info where user_id = '$user_id' and shop_cart_info.goods_id = goods_info.goods_id order by numb desc";
    $result = mysqli_query($conn,$sql) or die('数据插入失败:'.mysqli_error($conn));
    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    $json =  [
        'success' => 0,
        'data'=>$rows
    ];
    $result1 = json_encode($json,JSON_PRETTY_PRINT);
    //echo "<pre>";
    echo $result1;
?>
