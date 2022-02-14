<!DOCTYPE html>
<html>
	<!-- 判断是否登录 -->
<?php
	include "isLogin.php";
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>结算页</title>
	<link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/getOrderInfo.css" />
    <link rel="stylesheet" href="./css/layui.css">  <!-- 引用的框架的样式 -->
</head>

<body>
<!--页面顶部-->
	<?php 
        include 'isLogin.php';
        include 'mode_head.php';
		if(!session_id())
        	session_start();
		
			// session_start();
		$goods_info = @$_SESSION['goods_info'];// 商品id_数组
		//$json = json_encode($arr,JSON_PRETTY_PRINT);
		if(!$goods_info)
		{
			$_SESSION['next_url'] = $_SERVER['REQUEST_URI'];// 记住当前页面的URL
			$url = "login.php";
			// header("Location: login.php");
			echo  "<script>window.location.href='" . $url . "'</script>";
			exit;
		}
		// 输出数据作为js的变量
		echo "<script>
			let goods_info = $goods_info;
			//console.log(typeof goods_info, goods_info);
		</script>";
    ?>

<div class="cart py-container">
		<!--主内容-->
		<div class="checkout py-container">
			<div class="checkout-tit">
				<h4 class="tit-txt">填写并核对订单信息</h4>
			</div>
			<div class="checkout-steps">
				<!--收件人信息-->
				<div class="step-tit">
					<h5>收件人信息<span><a href="shipping_address.php" data-toggle="modal" data-target=".edit" data-keyboard="false" class="newadd">新增收货地址</a></span></h5>
				</div>
				<div class="step-cont">
					<div class="addressInfo">
						<ul class="addr-detail">
							<li class="addr-item">
							  <div>
								<div onclick="changeAddress(this)" class="address_item con name selected "><a href="javascript:;" ><p class="addr_name_1">itLike</p><span title="点击取消选择"/>&nbsp;</span></a></div>
								<div class="con address">
									<span class="addr_name">itLike</span>
									<span class="addr_info">上海市松江区*****102街道</span>
									 <span class="addr_tel">185****8754</span>
									<span class="base">默认地址</span>
									<span class="edittext"><a data-toggle="modal" data-target=".edit" data-keyboard="false" onclick="javascript:window.location = 'shipping_address.php';" >编辑</a>&nbsp;&nbsp;<a href="javascript:void(0);"  onclick="layerMsg(); return false;" >删除</a></span>
								</div>
								<div class="clearfix"></div>
							  </div>							  
							</li>
							
						</ul>
						<!--添加地址-->
                          <div  tabindex="-1" role="dialog" data-hasfoot="false" class="sui-modal hide fade edit">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
						        <h4 id="myModalLabel" class="modal-title">添加收货地址</h4>
						      </div>
						      <div class="modal-footer">
						        <button type="button" data-ok="modal" class="sui-btn btn-primary btn-large">确定</button>
						        <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large">取消</button>
						      </div>
						    </div>
						  </div>
						</div>
						 <!--确认地址-->
					</div>
					<div class="hr"></div>
					
				</div>
				<div class="hr"></div>
				<!--支付和送货-->
				<div class="payshipInfo">
					<div class="step-tit">
						<h5>支付方式</h5>
					</div>
					<div class="step-cont">
						<ul class="payType">
							<li class="selected">微信付款<span title="点击取消选择"></span></li>
							<li>货到付款<span title="点击取消选择"></span></li>
						</ul>
					</div>
					<div class="hr"></div>
					<div class="step-tit">
						<h5>送货清单</h5>
					</div>
					<div class="step-cont">
						<ul class="send-detail">
							<li>
								<div class="sendGoods">
									<ul class="yui3-g">
										<li class="yui3-u-1-6">
											<span><img src="img/cart1.jpg" width="80px" height="80px" /></span>
										</li>
										<li class="yui3-u-7-12">
											<div class="desc"></div>
											<div class=" goods_attrs_text"></div>
										</li>
										<li class="yui3-u-1-12">
											<div class="price"></div>
										</li>
										<li class="yui3-u-1-12">
											<div class="num goods_item_num">X1</div>
										</li>
										<li class="yui3-u-1-12">
											<div class="exit">有货</div>
										</li>
									</ul>
								</div>
							</li>						

						</ul>
					</div>
					<div class="hr"></div>
				</div>

				<div class="cardInfo">
					<div class="step-tit">
						<h5>使用优惠/抵用</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="order-summary">
			<div class="static fr">
				<div class="list">
					<span><i class="number" id="order_total_text">2</i>件商品，总商品金额</span>
					<em class="allprice" id="order_price_text">¥5798.00</em>
				</div>
				<div class="list">
					<span>返现：</span>
					<em class="money">0.00</em>
				</div>
				<div class="list">
					<span>运费：</span>
					<em class="transport">0.00</em>
				</div>
			</div>
		</div>
		<div class="clearfix trade ">
			<div class="fc-price">应付金额:　<span class="price">¥5808.00</span></div>
			<div class="fc-receiverInfo">寄送至: <span class="addr_info">江苏省南京市*****102街道</span> 收货人：<span class="addr_name">itlike</span> <span class="addr_tel">185****8754</span></div>
		</div>
		<div class="submit">
			<a class="sui-btn btn-danger btn-xlarge" href="javascript:void(0);" onclick="createOrder();return false" >提交订单</a>
		</div>
	</div>
<!--页面底部-->
    <?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/pages/getOrderInfo.js"></script>
<script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->

<script src="js/Myajax.js"></script><!-- ajax封装函数  -->	
<script src="js/extend.js"></script><!-- 自行封装的公共函数  -->

<!-- 页面渲染 -->
<script>	
	// 全局变量
	let addr_count = 1;// 收货地址数量
	// let goods_number = 1;// 单个商品数量
	let order_price = 0;// 订单总价
	let order_total = 0;// 商品总数量
	let goods_ids = [];// 商品ID
	let cat_ids = [];// 分类ID
	let cat_names = [];// 分类名称
	let goods_attrs = [];// 商品属性
	let goods_prices = [];// 商品单价
	let goods_numbers = [];// 商品数量
	let order_summarys = [];// 订单小计
	let order_id = '';// 返回的订单ID


	// 需要填充数据的页面标签
    let addr_detail_wrap = document.querySelector(".addr-detail");// 收货地址父标签
	let addr_item = addr_detail_wrap.children[0];// 第一个收货地址
    let goods_warp = document.querySelector('.send-detail');// 商品的父标签
    let goods_item = goods_warp.children[0]// 商品元素
	let order_total_text = document.querySelector("#order_total_text");// 商品总数量
	let order_price_text = document.querySelector("#order_price_text");// 总价
	let trade_wrap = document.querySelector('.trade');// 底部订单元素
    // let page_num_btn = document.querySelectorAll('.page_num_btn');// 页码按钮

	// 获取url携带的参数    
    // let urlAttr = GetRequest();  
    // let goods_id = urlAttr.goods_id;// 商品id
    // // let goods_number = urlAttr.goods_number;// 商品名称	
    // let isCart = urlAttr.isCart;// 是否从购物车跳转过来的
    // goods_number = urlAttr.goods_number;
	// console.log(isCart);

	// 请求收货地址信息
	function getAddressInfo( pagenum = 1, pagesize = 10){
		let ajaxAddressInfo={
			method: 'get',
			url: 'api/address.php',
			data:{},
			success:function(value){
				// var order_detail = document.querySelector('.order_detail');// 所有订单
				var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
				let info = obj.data;
				addr_count = obj.total;
				putAddressList(info);
				

			},
			error:function(value){
				console.log(value);
			}
		}
		$ajax(ajaxAddressInfo);
	}

	// 渲染收货地址列表
	function putAddressList(info){
		info.forEach((v, i)=>{
			// console.log(v, i);
			let item = addr_item.cloneNode(true);
			item.querySelector(".addr_name_1").innerHTML = v.received_people;// 收货人
			item.querySelector(".addr_name").innerHTML = v.received_people ;// 收货人
			item.querySelector(".addr_info").innerHTML = v.received_addr;// 收货人
			item.querySelector(".addr_tel").innerHTML = v.received_tel;// 收货人
			item.querySelector(".address_item").setAttribute("data-index",i);// 添加收货地址数组下标			
			// item.querySelector(".address_item").onclick=changeAddress()// 添加收货地址数组下标
			// changeAddress
			if(i){// 不是默认地址时
				// console.log(item.querySelector(".selected"), item.querySelector(".base"));
				item.querySelector(".selected").className = "address_item con name ";
				item.querySelector(".base").style.display = "none";
			}
			if(!i)// 第一个地址，默认地址
				putSelectedAddress(v);
			addr_detail_wrap.appendChild(item);// 插入子节点
		})

		// 删除收货地址列表数组的第一个节点
		let children = addr_detail_wrap.children;
		addr_detail_wrap.removeChild(children[0]);
	}

	// 渲染已选择的收获地址信息
	function putSelectedAddress(info){
		trade_wrap.querySelector(".addr_name").innerHTML = info.received_people ;// 收货人
		trade_wrap.querySelector(".addr_info").innerHTML = info.received_addr;// 收货人
		trade_wrap.querySelector(".addr_tel").innerHTML = info.received_tel;
	}

	// 请求商品详情信息
	function getGoodsInfo(goods_id, goods_number = 1, goods_attr){
		var ajaxGoodsDetail = {
			method: 'get',
			url: 'https://api-hmugo-web.itheima.net/api/public/v1/goods/detail',
			data: {
				goods_id: goods_id
			},
			success: function(value) {
				// var order_detail = document.querySelector('.order_detail');// 所有订单
				var obj = JSON.parse(value); // 将JSON格式的数据解析成数组
				var goods_detail = obj.message;
				let item = goods_item.cloneNode(true);// 深度复制节点

				let goods_attr_text = '';// 商品属性的文本
				goods_attr = JSON.parse(goods_attr);
				for(let i in goods_attr){
					goods_attr_text += i + ":  " + goods_attr[i] + " "
				}
				// goods_attr.forEach((v,i)=>{
				// 	goods_attr_text += i + ": " + v + " "
				// })
				// console.log(goods_attr, typeof goods_attr);
				putGoodsDetail(item,goods_detail, goods_number, goods_attr_text); // 渲染页面
				
				// 整理数据
				goods_ids.push(goods_id);
				goods_numbers.push(goods_number);
				cat_ids.push(goods_detail.cat_id);
				// cat_names.push(goods_detail.cat_name);
				goods_prices.push(goods_detail.goods_price);
				
			},
			error: function(value) {
				console.log(value);
			}
		}
		$ajax(ajaxGoodsDetail);
	}
	
	// 渲染商品信息到页面
	function putGoodsDetail(item,info, goods_number = 1, goods_attr = '') {
		// console.log(item,info, goods_number, typeof goods_number);
		item.querySelector("img").src = info.goods_small_logo;
		item.querySelector(".desc").innerHTML = info.goods_name;
		item.querySelector(".price").innerHTML = info.goods_price;
		item.querySelector(".num").innerHTML = "X" + goods_number;		
		item.querySelector(".goods_attrs_text").innerHTML = goods_attr;
		
		order_price += info.goods_price * goods_number;// 订单总价
		order_total += parseInt(goods_number);// 订单总数量
		goods_warp.appendChild(item);	

		order_summarys.push(info.goods_price * goods_number);

		putOrderDetail();// 渲染订单信息

	}


	// 渲染订单信息到页面
	function putOrderDetail() {
		order_price_text.innerHTML = "￥" + order_price;// 订单小计
		trade_wrap.querySelector(".price").innerHTML = "￥" + order_price;// 实付价格
		order_total_text.innerHTML = order_total;// 订单中商品的数量		
		// createOrder();
		
	}

	// 创建订单
	function createOrder(){
		let received_people  =  trade_wrap.querySelector(".addr_name").innerHTML;// 收货人
		let received_addr  = trade_wrap.querySelector(".addr_info").innerHTML;// 收货人
		let received_tel  = trade_wrap.querySelector(".addr_tel").innerHTML;

		// 发送的参数
		let data_arr = [];
		let goods_arr = goods_warp.children;
		let data = {
			received_people: received_people,
			received_addr: received_addr,
			received_tel: received_tel,
			order_summarys: JSON.stringify(order_summarys),
			goods_ids:JSON.stringify(goods_ids),
			cat_ids:JSON.stringify(cat_ids),
			goods_attrs: JSON.stringify(goods_attrs),
			goods_prices: JSON.stringify(goods_prices),
			goods_numbers: JSON.stringify(goods_numbers),
			total:goods_ids.length
		}
		console.log(data, "data");

		var ajaxCreateOrder = {
			method: 'post',
			url: "api/order/add.php",
			data:data,
			success: function(value) {
				// console.log(value, 'value');
				let obj = JSON.parse(value); // 将JSON格式的数据解析成数组
				// console.log(value);
				let status = parseInt(obj.status);
				order_id = obj.order_id;
				// console.log(status, typeof status);
				if(status == 1){
					layerMsg(10);
					let url = "pay.php?order_price=" + order_price + "&order_id=" + order_id; 
					setTimeout(function (){
						window.open(url,'_self');                        
					}, 2000);
				}
				else
					layerMsg(11);
				
					
			},
			error: function(value) {
				console.log(value);
			}
		}
		$ajax(ajaxCreateOrder);
	}

	// 切换收货地址
	function changeAddress(e){
		// let addr_list = addr_detail_wrap.children;// 所有收货地址
		let address_items_p = document.querySelectorAll('.addr-item');// 收货地址的父元素（li）
		let address_items = document.querySelectorAll('.address_item');// 收货地址名字元素
		let index = e.getAttribute('data-index');// 所选择的数组下标
		// console.log(e, address_items);
		for(let i = 0; i < address_items.length; i++){
			address_items[i].className = "address_item con name ";
		}
		e.className = "address_item con name selected";// 添加选中效果
		let info = {
			received_people: address_items_p[index].querySelector('.addr_name').innerHTML,
			received_addr: address_items_p[index].querySelector('.addr_info').innerHTML,
			received_tel: address_items_p[index].querySelector('.addr_tel').innerHTML,
		}
		console.log(info);
		putSelectedAddress(info);// 渲染新选中的地址
	}
	getAddressInfo();// 获取收获地址
	// getGoodsInfo(goods_id);
	goods_info.forEach((v, i)=>{
		// console.log(v, i);
		getGoodsInfo(v.goods_id, v.goods_number, v.goods_attr);
		goods_attrs.push(v.goods_attr);
		// for(let goods_id  in v){
		// 	getGoodsInfo(goods_id, v[goods_id]);
		// }		
	})

	// 删除商品数组的第一个节点
	let children = goods_warp.children;
	goods_warp.removeChild(children[0]);

</script>

</body>

</html>