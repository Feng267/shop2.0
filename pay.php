<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>微信支付页</title>
	<link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/weixinpay.css" />	
    <link rel="stylesheet" href="./css/layui.css">  <!-- 引用的框架的样式 -->
	<style>
		.confirm_btn{
			margin-left: 100px;
		}
	</style>
</head>
<body>
<!--页面顶部-->
	<?php 
		include "isLogin.php";
		include "mode_head.php";
		if(!session_id())
        	session_start(); 
	?>
<!--主内容-->
<div class="cart py-container">
	<div class="checkout py-container  pay">
		<div class="checkout-tit">
			<h4 class="fl tit-txt"><span class="success-icon"></span><span  class="success-info">订单提交成功，请您及时付款！订单号：<span class="order_id_text"></span></span></h4>
			<span class="fr"><em class="sui-lead">应付金额：</em><em  class="orange money">￥<span class="order_price_text"></span></em>元</span>
			<div class="clearfix"></div>
		</div>
		<div class="checkout-steps">
			<div class="fl weixin">微信支付</div>
			<div class="fl sao">
				<!-- <p class="red">二维码已过期，刷新页面重新获取二维码。</p> -->
				<div class="fl code">
					<img src="img/weixincode_big.jpg" alt="" width="300" height="300">
					<div class="saosao">
						<p>请使用微信扫一扫</p>
						<p>扫描二维码支付</p>
					</div>
				</div>
				<div class="fl phone">

				</div>

			</div>
			<div class="clearfix"></div>
			<p>
				<a href="pay.php" target="_blank">> 其他支付方式</a>
				<button type="button" class="confirm_btn layui-btn  layui-btn-lg" onclick="confirmPay()">确认支付</button>
		</p>
		</div>
	</div>
</div>
<!--页面底部-->
<?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">
			$(function(){
				$("ul.payType li").click(function(){
					$(this).css("border","2px solid #E4393C").siblings().css("border-color","#ddd");
				})
			})
		</script>

<!-- 渲染页面 -->
<script>
	// 获取url携带的参数    
    let urlAttr = GetRequest();  
    let order_price = urlAttr.order_price;// 订单价格
    let order_id = urlAttr.order_id;// 订单ID
    let single = urlAttr.single;// 订单ID
// 	console.log(order_price, order_id, single);

	// 需要填充数据的页面标签
    let order_id_text = document.querySelector(".order_id_text");// 订单编号
    let order_price_text = document.querySelector('.order_price_text');// 订单价格

	order_id_text.innerHTML = order_id;
	order_price_text.innerHTML = order_price;

	// 确认支付
	function confirmPay(){
		// 如果是从商品详情页面或者是个人订单页面过来的，只有一个ID，则更新单个订单ID的状态
		let data = {};
		if(single == 1){
			data = {
				status: 1,
				order_id: order_id
			}
		}
		else{
			data = {
					status: 1,					
				}
		}
		let ajaxConfirmPay={
			method: 'post',
			url: 'api/order/status.php',
			data: data,
			success:function(value){
				// console.log(value);
				// var order_detail = document.querySelector('.order_detail');// 所有订单
				var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
				let status = obj.status;
				if(status == 1){
					layerMsg(14);// 支付成功
					let url = "pay-success.php?order_price=" + order_price; 
					setTimeout(function (){
						window.open(url,'_self');                        
					}, 2000);
				}
				else
					layerMsg(15);
				// addr_count = obj.total;
				// putAddressList(info);
				

			},
			error:function(value){
				console.log(value);
			}
		}
		$ajax(ajaxConfirmPay);
	}

</script>
</body>

</html>