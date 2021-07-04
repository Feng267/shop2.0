<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>支付页-成功</title>
	<link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/paysuccess.css" />

	
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script src="js/extend.js"></script><!-- 自行封装的公共函数  -->

</head>

<body>
<!--页面顶部-->
<?php 
		include "isLogin.php";
		include "mode_head.php";
		if(!session_id())
        	session_start(); 
	?>
<!--页面主体-->
<div class="cart py-container">
	<div class="paysuccess">
		<div class="success">
			<h3><img src="img/right.png" width="48" height="48">　恭喜您，支付成功啦！</h3>
			<div class="paydetail">
			<p>支付方式：微信支付</p>
			<p>支付金额：￥<span class="order_price_text"></span>元</p>
			<p class="button"><a href="order_info.php" class="sui-btn btn-xlarge btn-danger">查看订单</a>
				&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="sui-btn btn-xlarge ">继续购物</a></p>
			</div>
		</div>
	</div>
</div>
<!--页面底部-->
<?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->


<!-- 渲染页面 -->
<script>
	// 获取url携带的参数    
    let urlAttr = GetRequest();  
    let order_price = urlAttr.order_price;// 订单价格

	// 需要填充数据的页面标签
    let order_price_text = document.querySelector('.order_price_text');// 订单价格

	order_price_text.innerHTML = order_price;
</script>
</body>

</html>