<?php
//这是请求所有商品信息并分页的php

// 未登录无权限访问
// error_reporting(0);  // 抑制错误函数

//     session_start();
//     $acc=@$_SESSION['acc'];

//     // 判断是否登录
//     if(!$acc)
//     {
//         echo "Not login";
//         $isLogin = false;
//     }
//     else
//         $isLogin = true;

require "../fun.php";  //连接数据库
$user_id = @$_SESSION['user_id'];
// $user_id = @$_POST['user_id'];
if(!isset($user_id)){// 如果未登录
    $res = array('status'=> 3 );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据
    exit();
}
// if(!$user_id){
//     $user_id = '12345678901';
// }

//获得全部数据的行数，赋值给下面的count
$sql = "select order_info.*, order_detail.goods_id, order_detail.cat_id, order_detail.goods_attr, order_detail.goods_price, order_detail.goods_number, order_detail.order_summary, goods_info.goods_small_logo, goods_info.cat_name, goods_info.goods_name   from order_info,order_detail,goods_info where order_info.user_id = $user_id and order_info.order_id = order_detail.order_id and order_detail.goods_id = goods_info.goods_id order by date desc";	//获得该用户的订单所有订单信息
// echo $sql;
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

while($rows = mysqli_fetch_assoc($result)){  
    $array[] = $rows;// 将返回的数据汇总起来成数组
}
// '待付款','已付款待发货','已发货待收货','已收货待评价','历史订单'
// $order_operation = ['付款','催发货','确认收货','评价','评价'];
// $order_operation = ['待付款'=>'付款','已付款待发货'=>'催发货','已发货待收货'=>'确认收货', '已收货待评价'=>'评价','历史订单'=>'追加评价'];

// echo $goods_detail_info_array;
$res = array('code'=>0,"msg"=>"","count"=>$count,'data'=>$array);       //layui规定的数据格式 code=0，成功。为1，失败。msg为错误信息。count为信息总数。date为数据。
header('Content-Type:application/json');
$res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
echo $res_json;  //输出数据

// 借鉴的：
//这是请求所有商品信息并分页的php

// require "fun.php";  //连接数据库

// $limit = $_POST["limit"];      //一页显示多少行
// $page = $_POST["page"];         //第几页
// $mutiple = $limit*($page-1);      //计算出页的起始行
// $where = @$_POST['cat_id'];        //获取默认显示的分类

// //获得全部数据的行数，赋值给下面的count
// $sql1 = "select * from goods_info where cat_id = $where";	//获得goods_info的所有数据
// $result = mysqli_query($conn,$sql1);
// $count = mysqli_num_rows($result);

// //一次从$mutiple行开始，选择$limit行数据
// $sql2 = "select * from goods_info where cat_id = $where limit $mutiple,$limit";
// $array = array();
// $result = mysqli_query($conn,$sql2);
// while($rows = mysqli_fetch_assoc($result)){  
//     $array[] = $rows;
// }

// $arr = array('code'=>0,"msg"=>"","count"=>$count,'data'=>$array);       //layui规定的数据格式 code=0，成功。为1，失败。msg为错误信息。count为信息总数。date为数据。
// $row2 = json_encode($arr, JSON_UNESCAPED_UNICODE);   //打包成json格式
// header('Content-Type:application/json');

// echo $row2;  //输出数据
?>
