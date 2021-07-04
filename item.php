<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>商品详情页面</title>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/item.css" />
	<link rel="stylesheet" type="text/css" href="css/zoom.css" />    <link rel="stylesheet" href="./css/layui.css">  <!-- 引用的框架的样式 -->

</head>

<body>

	<!--页面顶部-->
	<?php 
		include "mode_head.php";
		if(!session_id())
        	session_start(); 
	?>
	

	<!--主体内容-->
	<div class="py-container">
		<div id="item">
			<div class="crumb-wrap">
				<ul class="sui-breadcrumb">
					<li>
						<a href="#"></a>
					</li>
					<li>
						<a href="#"></a>
					</li>
					<li>
						<a href="#"></a>
					</li>
					<li class="active"></li>
				</ul>
			</div>
			<!--product-info-->
			<div class="product-info">
				<div class="fl preview-wrap">
					<!--放大镜效果-->
					<div class="zoom">
						<!--第一个预览-->
						<div id="preview" class="spec-preview">
							<span class="jqzoom"><img id="big_pic" jqimg="img/detailimg1.jpg" src="" onerror="imgError()" width="400px" /></span>
						</div>
						<!--下方的缩略图-->
						<div class="spec-scroll">
							<a class="prev">&lt;</a>
							<!--左右按钮-->
							<div class="items">
								<ul id="small_pic">
									<li><img src="" bimg="img/detailimg1.jpg" onmousemove="preview(this)" /></li>
								</ul>
							</div>
							<a class="next">&gt;</a>
						</div>
					</div>
				</div>
				<div class="fr itemInfo-wrap">
					<div class="sku-name">
						<h4></h4>
					</div>
					<!-- <div class="news"><span>【6期免息+赠大额购物卡】麒麟980，4800万AI四摄，光学屏内指纹；nova5i享6期免息+购机赠大额购卡</span></div> -->
					<div class="summary">
						<div class="summary-wrap">
							<div class="fl title">
								<i>价　　格</i>
							</div>
							<div class="fl price">
								<i>¥</i>
								<em id="price_txt"></em>
								<span>降价通知</span>
							</div>
							<div class="fr remark">
								<div id="comment-count" class="comment-count item fl" style="margin-right: 20px;">
									<p class="comment" style="margin-bottom: 0px;font-size: 14px;">累计评价</p>
									<a class="count" href="#none" style="font-size: 18px;">4.9万+</a>
								</div>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>促　　销</i>
							</div>
							<div class="fl fix-width">
								<i class="goods-icons4 J-picon-tips" style="margin-top: 6px; margin-right: 7px;">满送活动</i>
								<em class="t-gray">满1000.00送200.00元，或满2000.00送500.00元</em>
							</div>
						</div>
					</div>
					<div class="support">
						<div class="summary-wrap">
							<div class="fl title">
								<i>增值业务</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">高价回收, 卖了赚钱</em>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>配 送 至</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">江苏南京市雨花台区 有货支持
									次日达 自提 免举证退换货 原厂维修</em>
							</div>
						</div>
					</div>
					<div class="clearfix choose">
						<div id="specification" class="summary-wrap clearfix">
							<dl>
								<dt>
									<div class="fl title">
										<i>选择颜色</i>
									</div>
								</dt>
								<dd><a href="javascript:void(0);" class="selected s1">绮境森林<span title="点击取消选择">&nbsp;</span>
									</a></dd>
								<dd><a href="javascript:void(0);" class="s1 ">仲夏紫<span title="点击取消选择">&nbsp;</span></a></dd>
								<dd><a href="javascript:void(0);" class="s1">亮黑色<span title="点击取消选择">&nbsp;</span></a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
										<i>优惠活动</i>
									</div>
								</dt>
								<dd>
									<a href="javascript:void(0);" class="selected s2">
										积分返现
										<span title="点击取消选择">&nbsp;</span></a>
								</dd>
								<dd><a href="javascript:void(0);" class="s2">好评返e卡<span title="点击取消选择">&nbsp;</span></a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
										<i>购买方式</i>
									</div>
								</dt>
								<dd><a href="javascript:void(0);" class="selected s3">标配<span title="点击取消选择">&nbsp;</span></a></dd>
								<dd><a href="javascript:void(0);" class="s3">赠送百元商城权益礼包<span title="点击取消选择">&nbsp;</span></a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
										<i>套　　装</i>
									</div>
								</dt>
								<dd><a href="javascript:void(0);" class="selected s4">优惠套装1<span title="点击取消选择">&nbsp;</span>
									</a></dd>
								<dd><a href="javascript:void(0);" class="s4">优惠套装2<span title="点击取消选择">&nbsp;</span></a></dd>
								<dd><a href="javascript:void(0);" class="s4">优惠套装3<span title="点击取消选择">&nbsp;</span></a></dd>
								<dd><a href="javascript:void(0);" class="locked">优惠套装4<span title="点击取消选择">&nbsp;</span></a></dd>
							</dl>


						</div>

						<div class="summary-wrap">
							<div class="fl title">
								<div class="control-group">
									<div class="controls">
										<input autocomplete="off" type="text" value="1" minnum="1" class="itxt" id="goods_number_text" />
										<a href="javascript:void(0)" class="increment plus" data-num="1" onclick="alterNumb(this);return false">+</a>
										<a href="javascript:void(0)" data-num="-1" class="increment mins" onclick="alterNumb(this);return false">-</a>
									</div>
								</div>
							</div>
							<div class="fl">
								<ul class="btn-choose unstyled">
									<li>
										<a href="javascript:void(0);" data-cid="-1" onclick="addShopCart();return false" class="sui-btn  btn-danger addshopcar">加入购物车</a>
									</li>
									<li>
										<a href="javascript:void(0);" data-cid="-1" onclick="buyNow();return false;" class="sui-btn  btn-danger addshopcar" id="btn_buy_now">立即购买</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--商品详情-->
			<div class="clearfix product-detail">
				<div class="fl aside">
					<div class="mt_xg">
						<h3>达人选购</h3>
					</div>
					<div class="tab-content tab-wraped">
						<div id="index" class="tab-pane active">
							<ul class="goods-list unstyled recommend_goods_list">
								<li>
									<div class="list-wrap">
										<a href="#" style="text-decoration: none;">
											<div class="p-img">
												<img src="img/daren1.jpg" onerror="imgError()" width="153" height="117" />
											</div>
											<div class="attr blue_text">
												<em></em>
											</div>
											<div class="price" style="margin-top: 5px;">
												<strong>
													<em>¥</em>
													<i></i>
												</strong>
											</div>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div id="profile" class="tab-pane">
							<p>推荐品牌</p>
						</div>
					</div>
				</div>
				<div class="fr detail">

					<div class="tab-main intro">
						<ul class="sui-nav nav-tabs tab-wraped">
							<li class="active">
								<a href="#one" data-toggle="tab">
									<span>商品介绍</span>
								</a>
							</li>
							<li>
								<a href="#two" data-toggle="tab">
									<span>规格与包装</span>
								</a>
							</li>
							<li>
								<a href="#three" data-toggle="tab">
									<span>售后保障</span>
								</a>
							</li>
							<li>
								<a href="#four" data-toggle="tab">
									<span>商品评价</span>
								</a>
							</li>
							<li>
								<a href="#five" data-toggle="tab">
									<span>手机社区</span>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
						<div class="tab-content tab-wraped">
							<div id="one" class="tab-pane active">
								<ul class="parameter2 p-parameter-list">
									<li title="华为nova 5 Pro"></li>
								</ul>
								<!-- 商品详情介绍 -->
								<div class="intro-detail" id="detail_content">
									<img src="img/intro1.jpg" />
									<img src="img/intro2.jpg" />
									<img src="img/intro3.jpg" />
								</div>
							</div>
							<div id="two" class="tab-pane">
								<p>规格与包装</p>
							</div>
							<div id="three" class="tab-pane">
								<p>售后保障</p>
							</div>
							<div id="four" class="tab-pane">
								<p>商品评价</p>
							</div>
							<div id="five" class="tab-pane">
								<p>手机社区</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--页面底部-->	
    <?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->


	<!--侧栏面板开始-->
	<div class="J-global-toolbar">
		<div class="toolbar-wrap J-wrap">
			<div class="toolbar">
				<div class="toolbar-panels J-panel">

					<!-- 购物车 -->
					<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="" class="title"><i></i><em class="title">购物车</em></a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('cart');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div id="J-cart-tips" class="tbar-tipbox hide">
									<div class="tip-inner">
										<span class="tip-text">还没有登录，登录后商品将被保存</span>
										<a href="#none" class="tip-btn J-login">登录</a>
									</div>
								</div>
								<div id="J-cart-render">
									<!-- 列表 -->
									<div id="cart-list" class="tbar-cart-list">
									</div>
								</div>
							</div>
						</div>
						<!-- 小计 -->
						<div id="cart-footer" class="tbar-panel-footer J-panel-footer">
							<div class="tbar-checkout">
								<div class="jtc-number"> <strong class="J-count" id="cart-number">0</strong>件商品 </div>
								<div class="jtc-sum"> 共计：<strong class="J-total" id="cart-sum">¥0</strong> </div>
								<a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
							</div>
						</div>
					</div>

					<!-- 我的关注 -->
					<div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('follow');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div class="tbar-tipbox2">
									<div class="tip-inner"> <i class="i-loading"></i> </div>
								</div>
							</div>
						</div>
						<div class="tbar-panel-footer J-panel-footer"></div>
					</div>

					<!-- 我的足迹 -->
					<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('history');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div class="jt-history-wrap">
									<ul>
										<!--<li class="jth-item">
										<a href="#" class="img-wrap"> <img src=".portal/img/like_03.png" height="100" width="100" /> </a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>
									<li class="jth-item">
										<a href="#" class="img-wrap"> <img src="portal/img/like_02.png" height="100" width="100" /></a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>-->
									</ul>
									<a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="tbar-panel-footer J-panel-footer"></div>
					</div>

				</div>

				<div class="toolbar-header"></div>

				<!-- 侧栏按钮 -->
				<div class="toolbar-tabs J-tab">
					<div onclick="cartPanelView.tabItemClick('cart')" class="toolbar-tab tbar-tab-cart" data="购物车" tag="cart">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count " id="tab-sub-cart-count">0</span>
					</div>
					<div onclick="cartPanelView.tabItemClick('follow')" class="toolbar-tab tbar-tab-follow" data="我的关注" tag="follow">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count hide">0</span>
					</div>
					<div onclick="cartPanelView.tabItemClick('history')" class="toolbar-tab tbar-tab-history" data="我的足迹" tag="history">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count hide">0</span>
					</div>
				</div>

				<div class="toolbar-footer">
					<div class="toolbar-tab tbar-tab-top"> <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
					<div class="toolbar-tab tbar-tab-feedback"> <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
				</div> -->

				<div class="toolbar-mini"></div>

			</div>

			<div id="J-toolbar-load-hook"></div>

		</div>
	</div>

	<!-- 各类PHP组件 -->
	<?php include 'goTop.php';?>          <!-- 返回顶部按钮 -->
	<!-- jQ的文件 -->
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery.jqzoom/jquery.jqzoom.js"></script>
	<script type="text/javascript" src="js/plugins/jquery.jqzoom/zoom.js"></script>

	<script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->


	<script src="js/Myajax.js"></script><!-- ajax封装函数  -->
	<script src="js/extend.js"></script><!-- 自行封装的公共函数  -->
	<script src="js/pages/item_extend1.js"></script><!-- 扩展函数 -->

	<!-- 数据渲染到页面 -->
	<script>
		// 全局变量
		let cat_ids = [];// 商品的分类id
		let cat_names = [];// 商品的分类名称

		// 需要填充数据的页面标签
		let big_pic = document.getElementById("big_pic"); // 大图片
		let small_pic_wrap = document.getElementById('small_pic'); // 小图片父级标签
		let small_pic = small_pic_wrap.querySelectorAll('img')[0]; // 小图片
		let goods_name = document.querySelector('.sku-name').children[0]; // 商品名字
		let goods_price = document.getElementById('price_txt'); // 商品价格
		let detail_content = document.getElementById('detail_content'); // 商品详情描述的主要内容
		let parameters_wrap = document.querySelector('.p-parameter-list'); // 商品属性的父节点
		let attr = parameters_wrap.children[0]; // 商品属性
		let cats_name_wrap = document.querySelector(".sui-breadcrumb"); // 分类名称的父节点
		let cats_name = cats_name_wrap.querySelectorAll("a"); // 分类名称子节点
		let recommend_list_wrap = document.querySelector('.recommend_goods_list'); // “达人推荐”的父标签
		let recommend_item = recommend_list_wrap.children[0]; // 商品推荐标签（li)
		let s1 = document.querySelectorAll('.s1'); // 选择颜色
		let s2 = document.querySelectorAll('.s2'); // 优惠活动
		let s3 = document.querySelectorAll('.s3'); // 购买方式
		let s4 = document.querySelectorAll('.s4'); // 套装
		
		// 获取url携带的参数		
		let urlAttr = GetRequest();
		let goods_id = urlAttr.goods_id;// 商品ID
		if (!goods_id)
			goods_id = 47858; // 若url中没有附带商品id则赋一个默认值 

		// 请求商品详情信息
		var ajaxGoodsDetail = {
			method: 'get',
			url: 'https://api-hmugo-web.itheima.net/api/public/v1/goods/detail',
			data: {
				goods_id: goods_id
			},
			success: function(value) {
				var obj = JSON.parse(value); // 将JSON格式的数据解析成数组
				var goods_detail = obj.message;
				putGoodsDetail(goods_detail); // 渲染页面
			},
			error: function(value) {
				console.log(value);
			}
		}
		$ajax(ajaxGoodsDetail);

		// 渲染商品信息到页面
		function putGoodsDetail(info) {
			big_pic.src = info.goods_small_logo; // 大图片
			big_pic.setAttribute("jqimg", info.goods_small_logo);
			goods_name.innerHTML = info.goods_name; // 商品名称
			goods_price.innerHTML = info.goods_price; // 商品价格
			detail_content.innerHTML = info.goods_introduce; // 商品详情
			document.title = info.goods_name; // 设置页面标题
			// 填充小图片（ul>li>img)
			info.pics.forEach(v => {
				let li = document.createElement("li");
				let mid_pic = small_pic.cloneNode(true);
				mid_pic.src = v.pics_mid;
				mid_pic.setAttribute("bimg", v.pics_mid);
				li.appendChild(mid_pic);
				small_pic_wrap.appendChild(li);
			})
			info.attrs.forEach(v => {
				let att = attr.cloneNode(true);
				att.title = v.attr_name;
				att.innerHTML = v.attr_name + "：" + v.attr_value;
				parameters_wrap.appendChild(att);
			})

			// 删除小图数组的第一个节点
			let children = small_pic_wrap.children;
			small_pic_wrap.removeChild(children[0]);

			// 删除商品属性数组的第一个节点
			children = parameters_wrap.children;
			parameters_wrap.removeChild(children[0]);

			let {
				cat_one_id,
				cat_two_id,
				cat_three_id
			} = info;
			cat_ids = [cat_one_id, cat_two_id, cat_three_id];
			// 请求商品分类信息
			var ajaxCatsInfo = {
				method: 'get',
				url: "api/cats_name.php",
				data: {
					cat_one_id: cat_one_id,
					cat_two_id: cat_two_id,
					cat_three_id: cat_three_id
				},
				success: function(value) {
					var obj = JSON.parse(value); // 将JSON格式的数据解析成数组
					cat_names = obj;// 分类名称数组
					cat_names.forEach((v, i) => {
						cats_name[i].innerHTML = v;
						cats_name[i].href = "search.php?cat_id=" + cat_ids[i] + "&cat_level=" + i;
					})
					cats_name_wrap.children[3].innerHTML = info.goods_name;


				},
				error: function(value) {
					console.log(value);
				}
			}
			$ajax(ajaxCatsInfo);

			// 请求左侧”达人选购“商品信息
			var ajaxRecommend = {
				method: 'get',
				url: 'https://api-hmugo-web.itheima.net/api/public/v1/goods/search',
				data: {
					cid: cat_three_id,
					pagesize:100
				},
				success: function(value) {
					var obj = JSON.parse(value); // 将JSON格式的数据解析成数组
					var goods_info = obj.message.goods;
					goods_info.forEach(v => {
						let node = recommend_item.cloneNode(true);
						node.querySelector("a").href = "item.php?goods_id=" + v.goods_id; // 链接属性
						node.querySelector("em").innerHTML = v.goods_name; // 商品名称
						node.querySelector("i").innerHTML = v.goods_price; // 商品名称
						node.querySelector("img").src = v.goods_small_logo; // 商品名称
						recommend_list_wrap.appendChild(node);
					})
				},
				error: function(value) {
					console.log(value);
				}
			}
			$ajax(ajaxRecommend);

			// 删除“达人推荐”数组的第一个节点
			children = recommend_list_wrap.children;
			recommend_list_wrap.removeChild(children[0]);
		}

		// 获取商品的属性
		function getGoodsAttr(){
			let selected = document.querySelectorAll('.selected'); // 选择了的商品属性
			let attrs = {
				"颜色": removeHTMLTag(selected[0].innerHTML),
				"优惠活动": removeHTMLTag(selected[1].innerHTML),
				"购买方式": removeHTMLTag(selected[2].innerHTML),
				"套装": removeHTMLTag(selected[3].innerHTML),
			}
			let attrs_json = JSON.stringify(attrs);// 商品属性
			return attrs_json;
		}

		// 添加购物车
		function addShopCart() {
			let goods_number = parseInt(document.querySelector('#goods_number_text').value);// 商品数量
			let attrs_json = getGoodsAttr();
			// 请求携带的参数
			let data = {
				goods_id: goods_id,
				goods_name: goods_name.innerHTML,
				cat_id: cat_ids[2],
				cat_name: cat_names[2],
				goods_attr: attrs_json,
				goods_price: parseInt(goods_price.innerHTML),
				goods_number: goods_number,
				total_price: goods_number * parseInt(goods_price.innerHTML)
			}
			// 加入购物车
			var ajaxAddCart = {
				method: 'post',
				url: "api/cart/add.php",
				data:data,
				success: function(value) {
					let obj = JSON.parse(value); // 将JSON格式的数据解析成数组
					let status = parseInt(obj.status);
					layerMsg(status);
					if(status == 3){// 未登录
						setTimeout(function (){
							window.open('login.php?goods_id=' + goods_id,'_self');                        
						}, 2000);
					}
				},
				error: function(value) {
					console.log(value);
				}
			}
			$ajax(ajaxAddCart);
		}

		// 立即购买
		function buyNow(){
			let goods_number = parseInt(document.querySelector('#goods_number_text').value);// 商品数量
			let goods_info = {
				goods_id: goods_id,
				goods_number: goods_number,
				goods_attr: getGoodsAttr()
			}
			let goods_info_arr = [];
			goods_info_arr[0] = goods_info;
			let goods_info_json = JSON.stringify(goods_info_arr);// 商品信息

			var ajaxGoodsInfo = {
				method: 'post',
				url: 'api/order/attr.php',
				data: {
					goods_info: goods_info_json
				},
				success: function(value) {
					var obj = JSON.parse(value); // 将JSON格式的数据解析成数组
					var status = obj.status;
					window.open('get-orderinfo.php','_self');                        
				},
				error: function(value) {
					console.log(value);
				}
			}
			$ajax(ajaxGoodsInfo);
			
		}

		// 增减购买数量按钮
		function alterNumb(e){
			let goods_number_text = document.querySelector("#goods_number_text");
			let goods_num = parseInt(goods_number_text.value);
			let num = parseInt(e.getAttribute('data-num'));
			goods_num += num;
			goods_num = goods_num > 0 ? goods_num : 1;

			goods_number_text.value = goods_num;
		}


		// 执行函数
		exclusive(s1, 's1');
		exclusive(s2, 's2');
		exclusive(s3, 's3');
		exclusive(s4, 's4');

	</script>
	<!--页面底部  结束 -->
</body>

</html>