<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>产品列表页</title>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/list.css" />
    <link rel="stylesheet" href="./css/layui.css">  <!-- 引用的框架的样式 -->
</head>

<body>
<!--页面顶部-->
	<?php 
		include "mode_head.php";
		if(!session_id())
        	session_start(); 
	?>
<!--列表-->
<div class="main">
<div class="py-container">
	<!--面包屑-->
	<div  onclick="layerMsg()" class="bread">
		<ul class="fl sui-breadcrumb">
			<li>
				<a href="#">全部结果</a>
			</li>
			<li class="active">智能手机</li>
		</ul>
		<ul class="tags-choose">
			<li class="tag">全网通<i class="sui-icon icon-tb-close"></i></li>
			<li class="tag">63G<i class="sui-icon icon-tb-close"></i></li>
		</ul>
		<form class="fl sui-form form-dark">
			<div class="input-control control-right">
				<input type="text" />
				<i class="sui-icon icon-touch-magnifier"></i>
			</div>
		</form>
		<div class="clearfix"></div>
	</div>
	<!--规格-->
	<div  onclick="layerMsg()" class="clearfix selector">
		<div class="type-wrap">
			<div class="fl key">商品分类</div>
			<div class="fl value">
				<a href="#">手机</a>  <a href="#">电视</a>
			</div>
			<div class="fl ext"></div>
		</div>
		<div class="type-wrap logo">
			<div class="fl key brand">品牌</div>
			<div class="value logos">
				<ul class="logo-list">
					<li><img src="img/b1.jpg" /></li>
					<li><img src="img/b2.jpg" /></li>
					<li><img src="img/b3.jpg" /></li>
					<li><img src="img/b4.jpg" /></li>
					<li><img src="img/b5.jpg" /></li>
					<li><img src="img/b6.jpg" /></li>
					<li><img src="img/b7.jpg" /></li>
					<li><img src="img/b8.jpg" /></li>
					<li><img src="img/b9.jpg" /></li>
					<li><img src="img/b10.jpg" /></li>
					<li><img src="img/b11.jpg" /></li>
					<li><img src="img/b12.jpg" /></li>
					<li><img src="img/b14.jpg" /></li>
					<li><img src="img/b13.jpg" /></li>
					<li><img src="img/b19.jpg" /></li>
					<li><img src="img/b16.jpg" /></li>
					<li><img src="img/b17.jpg" /></li>
					<li><img src="img/b18.jpg" /></li>
				</ul>
			</div>

		</div>
		<div class="type-wrap">
			<div class="fl key">分辨率：</div>
			<div class="fl value">
				<ul class="type-list">
					<li>
						<a href="#">标清SD</a>
					</li>
					<li>
						<a>标清SD全高清FHD+</a>
					</li>
					<li>
						<a>高清HD</a>
					</li>
					<li>
						<a>+及以上</a>
					</li>
					<li>
						<a>其它分辨率</a>
					</li>
				</ul>
			</div>
			<div class="fl ext"></div>
		</div>
		<div class="type-wrap">
			<div class="fl key">显示屏尺寸</div>
			<div class="fl value">
				<ul class="type-list">
					<li>
						<a>4.0-4.9英寸</a>
					</li>
					<li>
						<a>4.0-4.9英寸</a>
					</li>
				</ul>
			</div>
			<div class="fl ext"></div>
		</div>
		<div class="type-wrap">
			<div class="fl key">摄像头像素</div>
			<div class="fl value">
				<ul class="type-list">
					<li>
						<a>1200万以上</a>
					</li>
					<li>
						<a>800-1199万</a>
					</li>
					<li>
						<a>1200-1599万</a>
					</li>
					<li>
						<a>1600万以上</a>
					</li>
					<li>
						<a>无摄像头</a>
					</li>
				</ul>
			</div>
			<div class="fl ext"></div>
		</div>
		<div class="type-wrap">
			<div class="fl key">价格</div>
			<div class="fl value">
				<ul class="type-list">
					<li>
						<a>0-500元</a>
					</li>
					<li>
						<a>500-1000元</a>
					</li>
					<li>
						<a>1000-1500元</a>
					</li>
					<li>
						<a>1500-2000元</a>
					</li>
					<li>
						<a>2000-3000元 </a>
					</li>
					<li>
						<a>3000元以上</a>
					</li>
				</ul>
			</div>
			<div class="fl ext">
			</div>
		</div>
		<div class="type-wrap">
			<div class="fl key">更多筛选项</div>
			<div class="fl value">
				<ul class="type-list">
					<li>
						<a>特点</a>
					</li>
					<li>
						<a>系统</a>
					</li>
					<li>
						<a>手机内存 </a>
					</li>
					<li>
						<a>单卡双卡</a>
					</li>
					<li>
						<a>其他</a>
					</li>
				</ul>
			</div>
			<div class="fl ext">
			</div>
		</div>
	</div>
	<!--商品列表 -->
	<div class="details">
		<!--列表头部-->
		<div class="sui-navbar">
			<div class="navbar-inner filter">
				<ul class="sui-nav"  onclick="layerMsg()">
					<li class="active">
						<a href="#">综合</a>
					</li>
					<li>
						<a href="#">销量</a>
					</li>
					<li>
						<a href="#">新品</a>
					</li>
					<li>
						<a href="#">评价</a>
					</li>
					<li>
						<a href="#">价格</a>
					</li>
				</ul>
			</div>
		</div>
		<!--列表内容-->
		<div class="goods-list">
			<ul class="yui3-g" id="goods_list_wrap">
				<li class="yui3-u-1-5">
					<!-- <a href=""> -->
					<div class="list-wrap">
						<a href="" style="text-decoration: none; color: #333" class="a_block">
						<div class="p-img">
							<img src=""  onerror="imgError()"/>
							<!-- <a href="item.html" target="_blank"><img src="img/goods1.jpg" /></a> -->
						</div>
						<div class="price">
							<strong>
									<em>¥</em>
									<i>2999.00</i>
								</strong>
						</div>
						<div class="attr">
							<em class="goods_name_text">一加 OnePlus 7 骁龙855旗舰性能</em>
						</div>
						<!-- <div class="cu">
							<em></em>
						</div> -->
						<div class="commit">
							<strong>
								<span class="blue_text">6.8万+</span>条评价
							</strong>
						</div>
						<div class="operate">
							<i class="goods-icons J-picon-tips J-picon-fix" data-idx="1" >自营</i>
							<i class="goods-icons J-picon-tips J-picon-fix" data-idx="1" >本地仓</i>
							<i class="goods-icons4 J-picon-tips" >满1000送200</i>
							<i class="goods-icons3 J-picon-tips J-picon-fix" >新品</i>
							<i class="goods-icons4 J-picon-tips" >赠</i><i class="goods-icons4 J-picon-tips" style="border-color:#4d88ff;color:#4d88ff;" >放心购</i>
						</div>
						</a>
					</div>
					<!-- </a> -->
				</li>
			</ul>
		</div>
		<!--分页-->
		<div class="fr page">
			<div class="sui-pagination pagination-large">
				<ul id="page_num_wrap">
					<li class="prev disabled" id="prev_btn">
						<a href="javascript:void(0);" data-cid="-1" onclick="alterPage(this);return false">«上一页</a>
					</li>
					<li class="active page_num_btn">
						<a href="javascript:void(0);" onclick="clickPage(this)" data-cid="1">1</a>
					</li>
					<li  class="page_num_btn">
						<a  href="javascript:void(0);" onclick="clickPage(this)" data-cid="2">2</a>
					</li>
					<li class="page_num_btn">
						<a href="javascript:void(0);" onclick="clickPage(this)" data-cid="3">3</a>
					</li>
					<li class="page_num_btn">
						<a href="javascript:void(0);" onclick="clickPage(this)" data-cid="4">4</a>
					</li>
					<li class="page_num_btn">
						<a href="javascript:void(0);" onclick="clickPage(this)" data-cid="5">5</a>
					</li>
					<li class="dotted"><span>...</span></li>
					<li class="next" id="next_btn">
						<a href="javascript:void(0);" data-cid="1" onclick="alterPage(this)">>下一页»</a>
					</li>
				</ul>
				<div>
					<span id="total_pagenum">共10页&nbsp;</span><span>
					到第<input onkeydown="if(event.keyCode==10||event.keyCode==13){transPagenum();return false;}" type="text" class="page_input">页
					<button class="page-confirm page_button" onclick="transPagenum()">确定</button>
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--热卖-->
	<div  onclick="layerMsg()" class="clearfix hot-sale">
		<div class="mt"><strong class="mt-title">商品精选</strong></div>
		<div class="mc">
			<ul data-type="48" class="goods-chosen-list clearfix">
				<li>
					<img data-lazy-advertisement="done" src="//misc.360buyimg.com/lib/img/e/blank.gif" class="err-poster" style="display: none;" />
					<div class="p-client-click" data-clickurl="https://item.jd.com/100005702210.html" >
						<div class="p-img">
							<img width="190" height="190" src="//img10.360buyimg.com/n1/s190x190_jfs/t1/79476/17/2549/230068/5d0cb75bE02f96ee6/29d3b42032088f0b.jpg" class="err-product" />
						</div>
						<div class="p-name">
							<em>OPPO K3 高通骁龙710 升降摄像头 VOOC闪充 8GB+128GB 秘境黑 全网通4G 全面屏拍照游戏智能<font class="skcolor_ljg">手机</font></em>
						</div>
					</div>
					<div class="p-price">
						<strong class="price">￥<span class="J-prom-p-100005702210">1899.00</span></strong>
					</div>
					<div class="p-review">
						<span class="number J-p-comm-ss-100005702210">4.3万+</span>人评价
					</div> </li>
				<li> <img data-lazy-advertisement="done" src="//misc.360buyimg.com/lib/img/e/blank.gif" class="err-poster" style="display: none;" />
					<div class="p-client-click" >
						<div class="p-img">
							<img width="190" height="190" src="//img14.360buyimg.com/n1/s190x190_jfs/t1/76114/3/924/177227/5cf22fa5Ee0494589/cfcb7f6f97ac3f6b.jpg" class="err-product" />
						</div>
						<div class="p-name">
							<em>酷派 cool 9 珍珠全面屏 4GB+64GB 人脸指纹双识别 私密双系统 8层镀陶 极光色 移动联通电信4G<font class="skcolor_ljg">手机</font> 双卡双待</em>
						</div>
					</div>
					<div class="p-price">
						<strong class="price">￥<span class="J-prom-p-100003603159">599.00</span></strong>
					</div>
					<div class="p-review">
						<span class="number J-p-comm-ss-100003603159">1400+</span>人评价
					</div> </li>
				<li > <img data-lazy-advertisement="done" src="//misc.360buyimg.com/lib/img/e/blank.gif" class="err-poster" style="display: none;" />
					<div class="p-client-click" data-clickurl="https://item.jd.com/48002254618.html" >
						<div class="p-img">
							<img width="190" height="190" src="//img13.360buyimg.com/n1/s190x190_jfs/t28012/78/1386142971/135851/b1ed4be4/5cdf8922Ned2c5ac4.jpg" class="err-product" />
						</div>
						<div class="p-name">
							<em>【双镜面】网红迷你小<font class="skcolor_ljg">手机</font> 移动联通版 时尚备用</em>
						</div>
					</div>
					<div class="p-price">
						<strong class="price">￥<span class="J-prom-p-48002254618">198.00</span></strong>
					</div>
					<div class="p-review">
						<span class="number J-p-comm-ss-48002254618">10+</span>人评价
					</div> </li>
				<li > <img data-lazy-advertisement="done" src="//misc.360buyimg.com/lib/img/e/blank.gif" class="err-poster" style="display: none;" />
					<div class="p-client-click" data-clickurl="https://item.jd.com/48925747081.html" >
						<div class="p-img">
							<img width="190" height="190" src="//img11.360buyimg.com/n1/s190x190_jfs/t1/56300/8/1582/93429/5cf618e0Ef6156283/d68a25782a890ddd.jpg" class="err-product" />
						</div>
						<div class="p-name">
							<em>优购（UooGou） T10 5.0英寸移动4G 2+16G内存 智能<font class="skcolor_ljg">手机</font> 老年机 香槟金</em>
						</div>
					</div>
					<div class="p-price">
						<strong class="price">￥<span class="J-prom-p-48925747081">258.00</span></strong>
					</div>
					<div class="p-review">
						<span class="number J-p-comm-ss-48925747081">20+</span>人评价
					</div> </li>
				<li > <img data-lazy-advertisement="done" src="//misc.360buyimg.com/lib/img/e/blank.gif" class="err-poster" style="display: none;" />
					<div class="p-client-click" data-clickurl="https://item.jd.com/100005945610.html" >
						<div class="p-img">
							<img width="190" height="190" src="//img10.360buyimg.com/n1/s190x190_jfs/t1/77241/13/696/153697/5cee1c4dEd83c97ba/184671c54b16f277.jpg" class="err-product" />
						</div>
						<div class="p-name">
							<em>OPPO Reno Z 4800万超清像素 超清夜景2.0 VOOC闪充 8GB+128GB 极夜黑 全网通4G 全面屏拍照智能游戏<font class="skcolor_ljg">手机</font></em>
						</div>
					</div>
					<div class="p-price">
						<strong class="price">￥<span class="J-prom-p-100005945610">2299.00</span></strong>
					</div>
					<div class="p-review">
						<span class="number J-p-comm-ss-100005945610">2200+</span>人评价
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
<!--页面底部-->
<?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->

<!-- jQ文件 -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->

<script src="js/Myajax.js"></script><!-- ajax封装函数  -->	
<script src="js/extend.js"></script><!-- 自行封装的公共函数  -->
<script src="js/pages/item_extend1.js"></script><!-- 扩展函数 -->

<!-- 页面渲染 -->
<script>
	// 全局变量
	let pagenum = 1;// 页码
	const pagesize = 10;// 一页的大小
	let total_page = 0;// 总页数

	// 需要填充数据的页面标签
    let goods_list_wrap = document.getElementById("goods_list_wrap");// 商品列表父标签
	let goods_item_ori = goods_list_wrap.children[0];// 商品元素
	let goods_item = goods_item_ori.cloneNode(true);
	// console.log(goods_bakaup);
    let operate_type = document.querySelector('.operate');// 商品特性的父标签
    let total_pagenum = document.getElementById('total_pagenum');// 商品总页数元素
	let prev_btn = document.querySelector("#prev_btn");// 上一页按钮
	let next_btn = document.querySelector("#next_btn");// 上一页按钮

	let page_num_wrap = document.querySelector('#page_num_wrap');// 页码按钮父节点
    let page_num_btn = document.querySelectorAll('.page_num_btn');// 页码按钮
    let autocomplete = document.querySelector('#autocomplete');// 搜索框
	
	// 获取url携带的参数    
    let urlAttr = GetRequest();  
    let cat_level = urlAttr.cat_level;// 商品分类id
    let cat_id = urlAttr.cat_id;// 商品分类id
    let query = urlAttr.query;// 商品名称模糊搜索
	pagenum = urlAttr.pagenum ? urlAttr.pagenum : 1;
	
	// 请求商品列表信息
	function getGoodsList( pagenum = 1, pagesize = 10){
		let ajaxGoodsList={
			method: 'get',
			url: 'https://api-hmugo-web.itheima.net/api/public/v1/goods/search',
			data:{
				query: query,
				cid: cat_id,
				pagenum: pagenum,
				pagesize: pagesize
			},
			success:function(value){
				var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
				var goods_list = obj.message.goods;
				// 渲染页面
				total_page = Math.ceil(obj.message.total / 10);
				total_pagenum.innerHTML = "共" + total_page + "页";
				putGoodsList(goods_list);// 渲染商品数据
				// 若页数少于5页，则删除多页的页码按钮
				for(let i = 4; i >= total_page && total_page > 0; i--){
					page_num_wrap.removeChild(page_num_btn[i]);
				}
				if(!total_page){
					layerMsg(9);// 该商品关键字不存在
				}

			},
			error:function(value){
				console.log(value);
			}
		}
		$ajax(ajaxGoodsList);
	}	

	// 渲染商品列表
	function putGoodsList(goods_list){
		goods_list.forEach(v=>{
			let item = goods_item.cloneNode(true);
			item.querySelector("a").href = "item.php?goods_id=" + v.goods_id;// 超链接
			item.querySelector("i").innerHTML = v.goods_price;// 价格
			item.querySelector(".goods_name_text").innerHTML = v.goods_name;// 名称
			item.querySelector("img").src = v.goods_small_logo;
			let attr = item.querySelector('.operate');// 复制商品特性
			// 删除几个商品特性，暂时作为“随机效果”
			for(let i = 0; i < 2; i++){
				let index = randomNum(0,4);
				children = attr.children;
				attr.removeChild(children[index]);
			}
			goods_list_wrap.appendChild(item);// 插入子节点
		})
	}

	// 上下页函数
	function alterPage(e){
		let next = parseInt(e.getAttribute('data-cid'));
		pagenum += next;
		pagenum = pagenum > 0 ? pagenum : 1;
		// 判断页码上下界
		if(pagenum == 1)
			prev_btn.className = "prev disabled";
		else
			prev_btn.className = "prev";
		if(pagenum == total_page)
			next_btn.className = "next disabled";
		else
			next_btn.className = "next";

		if(pagenum < 1 || pagenum > total_page)// 防止页码超出
			pagenum += (-1) * next;
		
		clearDomList(goods_list_wrap, 1);// 清除之前的商品
		getGoodsList(pagenum);// 获取新的商品
	}
	// 点击按钮选择页码
	function clickPage(e){
		page = parseInt(e.innerHTML);
		clearDomList(goods_list_wrap, 1);// 清除之前的商品
		getGoodsList(page);// 获取新的商品
	}

	// 点击跳转输入的页面
	function transPagenum(){
		let page_input = parseInt(document.querySelector('.page_input').value);// 输入的页面
		if(page_input <= total_page){
			total_page = page_input;
			clearDomList(goods_list_wrap, 1);// 清除之前的商品
			getGoodsList(page_input);
		}
		else
			layerMsg(8);// 弹窗警告
	}

	// 请求商品分类信息
	function getCategoryInfo(){
		var ajaxMenus={
			method: 'get',
			url: 'https://api-hmugo-web.itheima.net/api/public/v1/categories',
			data:{},
			success:function(value){
				var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
				let menus_info = obj.message;// 菜单信息
				let flag = 0;
				for(let i = 0; i < 29; i++){
					// 如果是一级分类则显示该一级分类下的第一个三级分类的商品
					if(cat_id == menus_info[i].cat_id){
						cat_id = menus_info[i].children[0].children[0].cat_id;
						console.log(cat_id, 'cat_id');
						break;
					}
					// 否则便是二级分类，则显示该二级分类下的第一个三级分类的商品
					menus_info[i].children.forEach(v=>{
						// 如果是一级分类则显示该一级分类下的第一个三级分类的商品
						if(cat_id == v.cat_id){
							cat_id = v.children[0].cat_id;
							console.log(cat_id, 'cat_id');
							flag = 1;
						}
						
					});
					if(flag)
						break;
				}
				getGoodsList();// 获取商品列表
			},
			error:function(value){
				console.log(value);
			}
		}
		$ajax(ajaxMenus);
	}
	
	// 如果是一、二级分类，则先查找到三级分类的ID后再获取商品列表，否则直接搜索商品
	if(cat_level != undefined){
		getCategoryInfo();
	}
	else
		getGoodsList();

	// 调用函数
	exclusive(page_num_btn, "page_num_btn", "active");// 切换被点击效果
</script>
</body>

</html>