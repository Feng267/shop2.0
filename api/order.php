<?php
/**
 * 请求所有订单信息
 */
require "../fun.php";  //连接数据库
$user_id = @$_SESSION['user_id'];
if(!isset($user_id)){// 如果未登录
    $res = array('status'=> 3 );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据
    exit();
}

//获得全部数据的行数，赋值给下面的count
$sql = "select order_info.*, order_detail.goods_id, order_detail.cat_id, order_detail.goods_attr, order_detail.goods_price, order_detail.goods_number, order_detail.order_summary, goods_info.goods_small_logo, goods_info.cat_name, goods_info.goods_name   from order_info,order_detail,goods_info where order_info.user_id = $user_id and order_info.order_id = order_detail.order_id and order_detail.goods_id = goods_info.goods_id order by date desc";	//获得该用户的订单所有订单信息
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

while($rows = mysqli_fetch_assoc($result)){  
    $array[] = $rows;// 将返回的数据汇总起来成数组
}
$res = array('code'=>0,"msg"=>"","count"=>$count,'data'=>$array);       //layui规定的数据格式 code=0，成功。为1，失败。msg为错误信息。count为信息总数。date为数据。
header('Content-Type:application/json');
$res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
echo $res_json;  //输出数据
?>
