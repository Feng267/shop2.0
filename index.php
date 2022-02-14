<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>唛多多商城</title>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />

</head>

<body>
	<!--页面顶部-->
	<?php include "mode_head.php" ?>

	<!--列表-->
	<div class="sort">
		<div class="py-container" style="background: white;">
			<div class="yui3-g SortList ">
				<div class="yui3-u Left all-sort-list">
					<div class="all-sort-list2">
						<div class="item">
							<h3><a href="search.php?&cat_level=0&cat_id=1">大家电</a></h3>
							<!-- <div class="item-list clearfix">
								<div class="subitem">
									<dl class="fore1">
										<dt><a href="">电子书1</a></dt>
										<dd><em><a href="">免费</a></em><em><a href="">小说</a></em><em><a href="">励志与成功</a></em><em><a href="">婚恋/两性</a></em><em><a href="">文学</a></em><em><a href="">经管</a></em><em><a href="">畅读VIP</a></em></dd>
									</dl>
								</div>
							</div> -->
						</div>
						<div class="item">
							<!-- <h3><a href="">手机/运营商/数码</a></h3> -->
							<h3>
								<a href="search.php?&cat_level=0&cat_id=55">热门推荐</a>/<a href="search.php?&cat_level=0&cat_id=71">海外购</a>/<a href="search.php?&cat_level=0&cat_id=170">苏宁房产</a>
							</h3>

						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=172">手机相机</a>/<a href="search.php?&cat_level=0&cat_id=266">电脑办公</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=321">厨卫电器</a>/<a href="search.php?&cat_level=0&cat_id=356">食品酒水</a>/<a href="search.php?&cat_level=0&cat_id=406">居家生活</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=455">厨房电器</a>/<a href="search.php?&cat_level=0&cat_id=492">生活电器</a>
							</h3>
						</div>
						<div class="item bo">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=511">个护健康</a>/<a href="search.php?&cat_level=0&cat_id=543">烹饪厨具</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=591">家装建材</a>/<a href="search.php?&cat_level=0&cat_id=709">奶粉尿裤</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=852">男装</a>/<a href="search.php?&cat_level=0&cat_id=889">男鞋</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=912">女装</a>/<a href="search.php?&cat_level=0&cat_id=948">女鞋</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=962">汽车生活</a>/<a href="search.php?&cat_level=0&cat_id=995">运动户外</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=11106">美妆洗护</a>/<a href="search.php?&cat_level=0&cat_id=1163">内衣配饰</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=1219">童装玩具</a>/<a href="search.php?&cat_level=0&cat_id=1292">珠宝首饰</a>
							</h3>
						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=1330">智能设备</a>/<a href="search.php?&cat_level=0&cat_id=1372">钟表眼镜</a>
							</h3>

						</div>
						<div class="item">
							<h3>
								<a href="search.php?&cat_level=0&cat_id=1402">皮具箱包</a>/<a href="search.php?&cat_level=0&cat_id=1441">邮币乐器</a>
							</h3>
						</div>
						<!-- <div class="item">
							<h3><a href="">工业品</a></h3>
						</div> -->
					</div>
				</div>
				<div class="yui3-u Center banerArea">
					<!--banner轮播-->
					<div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="active item">
								<a href="item.php?goods_id=57219"><img src="http://image4.suning.cn/uimg/b2c/newcatentries/0000000000-000000000861260464_2_800x800.jpg"  onerror="imgError()" /></a>
							</div>
							<div class="item">
								<a href="item.php?goods_id=40340"><img src="img/fouce2.jpg" onerror="imgError()" /></a>
							</div>
							<div class="item">
								<a href="item.php?goods_id=57219"><img src="img/fouce3.jpg" onerror="imgError()" /></a>
							</div>
							<div class="item">
								<a href="item.php?goods_id=57219"> <img src="img/fouce4.jpg" onerror="imgError()" /></a>
							</div>
						</div><a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a><a href="#myCarousel" data-slide="next" class="carousel-control right">›</a>
					</div>
				</div>
				<div class="yui3-u Right">
					<div class="news">
						<div onclick="javascript:window.location = 'user_center.php';" class="news-list unstyled">
							<?php
								include "logined.php";
							?>
							<!-- <img src="img/no_login.jpg" width="60" height="60" alt="">
							<div class="user_show">
								<p>Hi~欢迎来到多多！</p>
								<p class="user_tip">
									<a href="javascript:login();" class="user_login">登录</a>
									<a href="javascript:regist();" class="user_reg">注册</a>
								</p>
							</div> -->
						</div>
					</div>
					<ul  onclick="layerMsg()" class="yui3-g Lifeservice">
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-1"></i>
							<span class="service-intro">话费</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-2"></i>
							<span class="service-intro">机票</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-3"></i>
							<span class="service-intro">电影票</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-4"></i>
							<span class="service-intro">游戏</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-5"></i>
							<span class="service-intro">彩票</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-6"></i>
							<span class="service-intro">加油站</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-7"></i>
							<span class="service-intro">酒店</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-8"></i>
							<span class="service-intro">火车票</span>
						</li>
						<li class="yui3-u-1-4 life-item ">
							<i class="list-item list-item-9"></i>
							<span class="service-intro">众筹</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-10"></i>
							<span class="service-intro">理财</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-11"></i>
							<span class="service-intro">礼品卡</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-12"></i>
							<span class="service-intro">白条</span>
						</li>
					</ul>

					<div class="ads">
						<img src="img/ad1.jpg" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--秒杀-->
	<div class="show">
		<div class="py-container" style="margin-top: 30px;background: white;">
			<ul class="yui3-g Recommend seckill">
				<li class="yui3-u-1-6">
					<a class="sk_hd_lk" href="item.php" target="_blank" clstag="h|keycount|core|seckill_a">
						<div class="sk_tit">多多秒杀</div>
						<div class="sk_subtit">FLASH DEALS</div>
						<i class="sk_ico"></i>
						<div class="sk_desc">本场距离结束还剩</div>
						<div class="sk_cd">
							<div class="cd">
								<div class="cd_item cd_hour">
									<span class="cd_item_txt">01</span>
								</div>
								<div class="cd_item cd_minute">
									<span class="cd_item_txt">53</span>
								</div>
								<div class="cd_item cd_second">
									<span class="cd_item_txt">12</span>
								</div>
							</div>
						</div>
					</a>
				</li>
				<li class="yui3-u-5-24 ">
					<div data-index="8" class=" slider_item sk_item sk_item_9 slider_active" style="float: left; width: 200px;">
						<a class="sk_item_lk" href="item.php" target="_blank" clstag="h|keycount|core|seckill_b09">
							<div class="lazyimg lazyimg_loaded sk_item_img">
								<img src="" class="lazyimg_img" onerror="imgError()"  />
							</div>
							<p class="sk_item_name">威尔贝鲁（WELLBER）床护栏垂直升降婴儿童床围栏防摔掉床边挡板 斑马好伙伴2米</p>
							<div class="sk_item_price">
								<span class="mod_price sk_item_price_new"><i>&yen;</i><span class="now_price">179.00</span></span>
								<span class="mod_price sk_item_price_origin"><i>&yen;</i><span class="origin_price">239.00</span></span>
							</div>
						</a>
					</div>					
				</li>
			</ul>
		</div>
	</div>
	<!--今日推荐-->
	<div class="like">
		<div class="py-container" style="background:white;">
			<div class="title">
				<h3 class="fl" style="padding-left: 5px;">今日推荐</h3>
				<b class="border"></b>
			</div>
			<div class="bd">
				<ul class="clearfix yui3-g Favourate picLB" id="picLBxxl">
					<li class="yui3-u-5-24">
						<div data-index="11" class="slider_item sk_item sk_item_12 slider_active" style="float: left; width: 200px;">
							<a class="sk_item_lk" href="item.php?goods_id=26948" target="_blank" >
								<div class="lazyimg lazyimg_loaded sk_item_img">
									<img src="" class="lazyimg_img" onerror="imgError()" />
								</div>
								<p class="sk_item_name">雷神（ThundeRobot）911Air星战二代 15.6英寸窄边框游戏笔记本电脑九代i5-9300H 8G 512GSSD GTX1650</p>
								<div class="sk_item_price" style="background: none; ">
									<span class="mod_price sk_item_price_new " style="color:red;font-size: 20px;"><i>&yen;</i><span class="now_price">5759.00</span></span>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--智能先锋-->
	<div class="floorhd">
		<div class="grid_c1 floorhd_inner">
			<h3 class="floorhd_tit">智能先锋</h3>
		</div>
	</div>
	<div class="chn">
		<div class="grid_c1 row1 clearfix">
			<div class="box sort">
				<div class="box_hd">
					<a class="box_hd_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|chan#01_a">
						<h3 class="box_tit">手机频道</h3><i class="box_hd_arrow"></i><span class="box_subtit">一个极客的诞生</span>
					</a>
				</div>
				<div class="box_bd">
					<div class="sort_wrapper clearfix">
						<a class="sort_middle" href="item.php?goods_id=26948" target="_blank" title="手机频道" clstag="h|keycount|tech|chan#01_d01">
							<div class="lazyimg lazyimg_loaded sort_middle_img">
								<img src="//img11.360buyimg.com/babel/s170x180_jfs/t1/82438/6/3680/79121/5d1dcf64E6d60c587/41d8767a2ba111af.jpg!q90!cc_170x180" class="lazyimg_img" />
							</div>
						</a>
						<a class="sort_middle" href="item.php?goods_id=26948" target="_blank" title="游戏手机" clstag="h|keycount|tech|chan#01_d02">
							<div class="lazyimg lazyimg_loaded sort_middle_img">
								<img src="//img14.360buyimg.com/babel/s170x180_jfs/t1/54827/12/4252/76827/5d1f0f34E1cdccb84/7a4f917a201648c9.jpg!q90!cc_170x180" class="lazyimg_img" />
							</div>
						</a>
						<div class="sort_small_wrapper clearfix">
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="苹果" clstag="h|keycount|tech|chan#01_e01">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img12.360buyimg.com/babel/s80x999_jfs/t16483/122/2542720784/3429/ca0d8c92/5aaf7b8aN0421ba35.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="小米" clstag="h|keycount|tech|chan#01_e02">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img20.360buyimg.com/babel/s80x999_jfs/t17518/143/863284411/4529/e226718b/5aaf6391Ncf18bf61.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="荣耀" clstag="h|keycount|tech|chan#01_e03">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img20.360buyimg.com/babel/s80x999_jfs/t30835/232/523149060/4836/17c57a5b/5bf62149Nc89e1d75.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="华为" clstag="h|keycount|tech|chan#01_e04">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img10.360buyimg.com/babel/s80x999_jfs/t1/30148/35/4438/4580/5c7cf1fdE792cec7a/dd7001dd7e01b779.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="一加" clstag="h|keycount|tech|chan#01_e05">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img10.360buyimg.com/babel/s80x999_jfs/t16336/47/2421341146/4013/6d7a7f2c/5aaf64d2Na7219579.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="oppo" clstag="h|keycount|tech|chan#01_e06">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img30.360buyimg.com/babel/s80x999_jfs/t1/16815/31/10458/9243/5c85c7d8E74fbf9d2/51cbc5b8a94ab9e8.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="vivo" clstag="h|keycount|tech|chan#01_e07">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img12.360buyimg.com/babel/s80x999_jfs/t1/26867/11/4692/3808/5c34521bEb0845a91/bbb5bcb35febccd3.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="黑莓" clstag="h|keycount|tech|chan#01_e08">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img13.360buyimg.com/babel/s80x999_jfs/t1/11600/39/10517/3804/5c81da6cE0686d037/33975cad479065ff.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="天语" clstag="h|keycount|tech|chan#01_e09">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img13.360buyimg.com/babel/s80x999_jfs/t18334/219/925696439/23894/d0626c49/5ab22743N3d68441c.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="moto" clstag="h|keycount|tech|chan#01_e10">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img11.360buyimg.com/babel/s80x999_jfs/t17878/225/910089021/3580/6c91b988/5ab22721N04fc4aeb.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="sony" clstag="h|keycount|tech|chan#01_e11">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img13.360buyimg.com/babel/s80x999_jfs/t17479/312/902698708/3830/c6cf8c2d/5aaf7e1cN865cbce5.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
							<a class="sort_small" href="item.php?goods_id=26948" target="_blank" title="酷派" clstag="h|keycount|tech|chan#01_e12">
								<div class="lazyimg lazyimg_loaded sort_small_img">
									<img src="//img10.360buyimg.com/babel/s80x999_jfs/t16813/124/1046091033/4837/dfaa8951/5ab8ef2dN205cd265.jpg!q90" class="lazyimg_img" />
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="box tactic">
				<div class="box_hd">
					<a class="box_hd_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|chan#02_a">
						<h3 class="box_tit">新品首发</h3><i class="box_hd_arrow"></i><span class="box_subtit">逛撩课小魔方，发现超级新品</span>
					</a>
				</div>
				<div class="box_bd">
					<div class="tactic_cover tactic_cover_large">
						<a class="tactic_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|chan#02_b" title="新品首发">
							<div class="lazyimg lazyimg_loaded tactic_lk_img">
								<img src="//img10.360buyimg.com/babel/s350x370_jfs/t1/39294/13/7115/66489/5ce364d2E0eae12fc/ef2238659b639bb7.jpg!q90!cc_350x370" class="lazyimg_img" />
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="box act box_last">
				<div class="act_inner">
					<a class="act_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|acts#03_a" title="7.8-台式机新品发布">
						<div class="lazyimg lazyimg_loaded act_img">
							<img src="//img12.360buyimg.com/babel/s340x420_jfs/t1/82263/25/3948/87142/5d229bf8E9f8ca191/9ddd43e6973a5440.jpg!q90!cc_340x420" class="lazyimg_img" />
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="chn">
		<div class="grid_c1 row2 clearfix">
			<div class="box act act_multi">
				<div class="act_inner">
					<a class="act_lk" href="item.php?goods_id=26948">
						<div class="lazyimg lazyimg_loaded act_img">
							<img src="//img10.360buyimg.com/da/s340x200_jfs/t1/24366/31/2268/159384/5c1b1488E62847add/6acc8d97d25a03d2.jpg!q90!cc_340x200" class="lazyimg_img" />
						</div>
					</a>
					<a class="act_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|ads#04_a02">
						<div class="lazyimg lazyimg_loaded act_img">
							<img src="//img30.360buyimg.com/da/s340x200_jfs/t1/14681/33/2249/140792/5c1b0191E80b283de/1b485bde8da5d3a1.jpg!q90!cc_340x200" class="lazyimg_img" />
						</div>
					</a>
				</div>
			</div>
			<div class="box treasure">
				<a class="treasure_scene" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|joy#05_b01" title="教你拍照">
					<div class="treasure_scene_hd">
						<h4 class="treasure_scene_tit">教你拍照 &middot; <span class="treasure_scene_subtit">会拍照的男朋友</span></h4>
					</div>
					<div class="treasure_scene_bd">
						<ul class="treasure_list">
							<li class="treasure_item">
								<div class="lazyimg lazyimg_loaded treasure_img">
									<img src="//img11.360buyimg.com/babel/s130x130_jfs/t1/79476/17/2549/230068/5d0cb75bE02f96ee6/29d3b42032088f0b.jpg!q90!cc_130x130" class="lazyimg_img" />
								</div>
							</li>
							<li class="treasure_item">
								<div class="lazyimg lazyimg_loaded treasure_img">
									<img src="//img10.360buyimg.com/babel/s130x130_jfs/t30040/100/1290632710/208879/1f7e2225/5cdd0d92Nb78895a6.jpg!q90!cc_130x130" class="lazyimg_img" />
								</div>
							</li>
						</ul>
					</div>
					<div class="treasure_scene_gap"></div>
				</a>
				<a class="treasure_scene" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|joy#05_b02" title="王者荣耀">
					<div class="treasure_scene_hd">
						<h4 class="treasure_scene_tit">王者荣耀 &middot; <span class="treasure_scene_subtit">最强王者</span></h4>
					</div>
					<div class="treasure_scene_bd">
						<ul class="treasure_list">
							<li class="treasure_item">
								<div class="lazyimg lazyimg_loaded treasure_img">
									<img src="//img10.360buyimg.com/babel/s130x130_jfs/t24280/355/809346995/58119/d9407f0e/5b442f74N23caa058.jpg!q90!cc_130x130" class="lazyimg_img" />
								</div>
							</li>
							<li class="treasure_item">
								<div class="lazyimg lazyimg_loaded treasure_img">
									<img src="//img20.360buyimg.com/babel/s130x130_jfs/t25204/135/879942883/184800/ab064cb6/5b7e5415Nbcd29dbf.jpg!q90!cc_130x130" class="lazyimg_img" />
								</div>
							</li>
						</ul>
					</div>
				</a>
			</div>
			<div class="box sort box_last">
				<div class="box_hd">
					<a class="box_hd_lk" href="item.php?goods_id=26948" target="_blank" clstag="h|keycount|tech|chan#06_a">
						<h3 class="box_tit">电脑办公</h3><i class="box_hd_arrow"></i><span class="box_subtit">智能潮货 嗨购不停</span>
					</a>
				</div>
				<div class="box_bd">
					<div class="sort_wrapper clearfix">
						<a class="sort_large" href="item.php?goods_id=26948" target="_blank" title="京奇博物馆" clstag="h|keycount|tech|chan#06_b01">
							<div class="lazyimg lazyimg_loaded sort_large_img">
								<img src="//img20.360buyimg.com/babel/s350x180_jfs/t1/36098/32/13995/102471/5d1eb2b3Ea5a7df33/671011d836e969bd.jpg!q90!cc_350x180" class="lazyimg_img" />
							</div>
						</a>
						<a class="sort_large" href="item.php?goods_id=26948" target="_blank" title="办公设备" clstag="h|keycount|tech|chan#06_b02">
							<div class="lazyimg lazyimg_loaded sort_large_img">
								<img src="//img10.360buyimg.com/babel/s350x180_jfs/t1/48226/19/4739/64760/5d259aacEfb0f9b90/1fd804738a22635e.jpg!q90!cc_350x180" class="lazyimg_img" />
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--页面底部-->
	<?php include "mode_foot.php" ?>

	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/sui/sui.min.js"></script>

	<script src="js/Myajax.js"></script><!-- ajax封装函数  -->	
	<script src="js/extend.js"></script><!-- 自行封装的函数  -->
	<!-- 秒杀倒计时 -->
	<script type="text/javascript">
		$(document).ready(function() {
			var oDate = new Date();
			var nowTime = oDate.getTime(); //现在的毫秒数
			oDate.setDate(oDate.getDate() + 1); // 设定截止时间为第二天
			var targetDate = new Date(oDate.toLocaleDateString());
			run(targetDate);
		});

		function run(enddate) {
			getDate(enddate);
			setInterval("getDate('" + enddate + "')", 500);
		}

		function getDate(enddate) {
			var oDate = new Date(); //获取日期对象

			var nowTime = oDate.getTime(); //现在的毫秒数
			var enddate = new Date(enddate);
			var targetTime = enddate.getTime(); // 截止时间的毫秒数
			var second = Math.floor((targetTime - nowTime) / 1000); //截止时间距离现在的秒数

			var day = Math.floor(second / 24 * 60 * 60); //整数部分代表的是天；一天有24*60*60=86400秒 ；
			second = second % 86400; //余数代表剩下的秒数；
			var hour = Math.floor(second / 3600); //整数部分代表小时；
			second %= 3600; //余数代表 剩下的秒数；
			var minute = Math.floor(second / 60);
			second %= 60;
			var spanH = $('.cd_item_txt')[0];
			var spanM = $('.cd_item_txt')[1];
			var spanS = $('.cd_item_txt')[2];

			spanH.innerHTML = tow(hour);
			spanM.innerHTML = tow(minute);
			spanS.innerHTML = tow(second);
		}

		function tow(n) {
			return n >= 0 && n < 10 ? '0' + n : '' + n;
		}
	</script>

	<!-- 秒杀信息 -->
	<script type="text/javascript">
		let cat_ids = [5,6,8,9,10,12,13,14,15,16,17,18,19,20,21,23,24,26,27,28,29,31,32,33,34,35,36,37,42,43,44,46,47,48,50,51,52,57,58,59,61,62,63,65,66,1007,94,96,97,99,100,102,103,104,105,106,107,108,110,113,114,115,116,117,118,121,122,123,124,126,127,128,129,130,131,132,133,136,137,138,139,140,142,143,144,146,147,148,149,150,151,152,153,154,156,158,159,160,161,162,163,164,165,166,167,168,174,176,177,178,179,187,188,189,190,191,192,193,194,195,196,198,201,202,203,204,205,208,209,210,211,214,215,216,217,218,219,220,225,231,232,233,235,236,237,239,240,241,242,243,244,247,251,253,254,255,256,257,258,259,260,262,263,264,265,268,269,270,271,272,273,274,275,276,277,279,283,284,285,286,287,293,294,295,296,297,299,300,303,304,305,306,307,308,310,311,312,313,314,316,317,318,326,327,328,329,330,333,334,335,337,339,340,341,343,344,345,346,347,348,349,350,352,353,354,355,359,363,364,365,366,368,369,372,373,374,375,376,377,379,380,381,382,383,385,386,387,388,390,392,393,395,397,398,399,400,401,403,404,410,411,414,415,416,417,418,421,422,423,424,427,428,429,430,431,432,433,434,436,437,439,440,441,442,];// 商品三级分类的id，目前没有写专门的API，暂时通过这样的方式实现随机效果
		// console.log(cat_ids.length);
		// 请求商品列表信息
		var ajaxMenus={
			method: 'get',
			url: 'https://api-hmugo-web.itheima.net/api/public/v1/goods/search?cid=' + cat_ids[parseInt(Math.random()*(283+1),10)],
			data:{},
			success:function(value){
				// var order_detail = document.querySelector('.order_detail');// 所有订单
				var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
				var goods = obj.message.goods;
				// console.log(goods);
				let seckill = document.getElementsByClassName('seckill')[0];// “今日秒杀”的dom元素
				let recommend = document.getElementsByClassName("Favourate")[0];// “今日推荐”的dom元素
				let goods_item = seckill.children[1];
				let goods_item_2 = recommend.children[0];
				// console.log(goods_item_2);
				// let a = goods_item.getElementsByTagName('a')[0];
				// console.log(goods_item);onerror="imgError()"
				// console.log(goods_item.getElementsByTagName('a')[0]);

				// 渲染秒杀商品数据和今日推荐商品数据到页面				
				putSeckillInfo(seckill, goods_item, goods[0]);
				for(let i = 1; i < 4; i++){
					let node = goods_item.cloneNode(true);
					let node_2 = goods_item_2.cloneNode(true);
					putSeckillInfo(seckill,node,goods[i]);
					putSeckillInfo(recommend,node_2,goods[i+4]);
				}	
				
				// 渲染轮播图
				let carousel_inner_wrap = document.querySelector('.carousel-inner');// 轮播图片的父元素
				for(let i = 0; i < 4; i++){
					carousel_inner_wrap.children[i].querySelector('a').href = "item.php?goods_id=" + goods[i+9].goods_id;// 添加a标签链接				
					carousel_inner_wrap.children[i].querySelector('img').src = goods[i+9].goods_big_logo;// 添加图片地址
				}

				// 补充
				putSeckillInfo(recommend, goods_item_2, goods[8]);
				let node_2 = goods_item_2.cloneNode(true);
				putSeckillInfo(recommend, node_2, goods[9]);
			},
			error:function(value){
				console.log(value);
			}
		}
		$ajax(ajaxMenus);

		// 将秒杀商品的信息渲染到页面
		function putSeckillInfo(parent_node, node, data){
			// console.log(data);
			// 渲染秒杀商品数据到页面
			let a = node.getElementsByTagName("a")[0];
			a.title = data.goods_name;
			a.href = "item.php?goods_id=" + data.goods_id;
			node.getElementsByTagName("p")[0].innerHTML = data.goods_name;// 商品名称
			// a.href = "hhh";
			let goods_price = data.goods_price;// 商品价格
			if(goods_price == 0)// 价格为0时，改为99999
				goods_price = 99999;
			node.getElementsByClassName("now_price")[0].innerHTML = goods_price;// 秒杀价格
			
			if(node.getElementsByClassName("origin_price")[0]){
				node.getElementsByClassName("origin_price")[0].innerHTML = Math.round(goods_price * (1.05 + Math.random()));// 原价
			}
			node.getElementsByClassName("lazyimg_img")[0].src = data.goods_small_logo;// 图片

			parent_node.appendChild(node);
			// console.log(parseInt(Math.random()*(43+1),10));
		}

		
		// $.ajax({
		// 	type: "get",
		// 	url: "https://api-hmugo-web.itheima.net/api/public/v1/goods/search?cid=5",
		// 	success: (res) => {
		// 		// console.log(res)
		// 		// var t=$(".goodsbox a p").php(res.message.goods[0].goods_name)

		// 		var goodslist = $(".Recommend").children().eq(1)
		// 		for (var i = 0; i < 3; i++) {
		// 			var data = goodslist
		// 			// console.log('----'+data.children().find('p').php(res.message.goods[i].goods_name))
		// 			// console.log('----'+data.children().find('.sk_item_price').children().eq(0).php(res.message.goods[i].goods_price))
		// 			var li_html = goodslist.php()

		// 			var Li_list = "<li class='yui3-u-5-24'>" + li_html + "</li>"
		// 			$(".Recommend").append(Li_list)
		// 		}
		// 		// console.log(goodslist)

		// 	}
		// })
	</script>

	
	<!-- 其他数据渲染 -->
	<script type="text/javascript">	
		// 分类ID，对于页面的左边菜单栏
		const cat_menus = [[0],[1,2,3],[4,5], [6,7,8], [9,10,11], [12, 13], [14, 15], [16, 17], [18, 19], [20, 21], [22, 23], [24, 25], [26, 27], [28, 29]];
		// 菜单栏dom元素
		let cat_menu = document.getElementsByClassName('all-sort-list2')[0];
		// 菜单栏子项（item）
		let menu_items = cat_menu.children;

		// onmouseleave="outCatMenu()"
		/*
			1、侧边菜单栏
		 */
		/*
			本来是使用事件冒泡的，但发现不需要，所以注释了
		 */
		// 鼠标悬停事件
		// function onCatMenu(ev) {

		// 	var ev = ev || window.event;
		// 	var target = ev.target || ev.srcElement;
		// 	if (target.nodeName.toLowerCase() == 'h3') {
		// 		let clearFix = target.nextElementSibling;
		// 		// target.style.background = "gray";
		// 		target.className = 'h3_choosen';
		// 		clearFix.style.display = 'block';
		// 	}
		// 	if (target.nodeName.toLowerCase() == 'a') {
		// 		let clearFix = target.parentNode.nextElementSibling;
		// 		// console.log(clearFix.className);
		// 		if(clearFix.className == 'item-list clearfix'){
		// 			clearFix.style.display = 'block';
		// 			clearFix.previousElementSibling.className = "h3_choosen";
		// 		}
		// 	}
		// 	if (target.className.toLowerCase() == 'item-list clearfix') {
		// 		let clearFix = target;
		// 		// console.log(clearFix);
		// 		clearFix.style.display = 'block';
		// 	}
		// }

		// // 鼠标离开事件
		// function outCatMenu(ev) {
		// 	var ev = ev || window.event;
		// 	var target = ev.target || ev.srcElement;
		// 	// console.log(target.className, target.innerHTML, target);
		// 	// target.className
		// 	if (target.nodeName.toLowerCase() == 'h3') {
		// 		let clearFix = target.nextElementSibling;
		// 		// console.log('out');
		// 		target.className = '';
		// 		clearFix.style.display = 'none';
		// 	}
		// 	if (target.nodeName.toLowerCase() == 'a') {
		// 		let clearFix = target.parentNode.nextElementSibling;
		// 		// console.log('out');
		// 		if(clearFix.className == 'item-list clearfix')
		// 			clearFix.style.display = 'none';
		// 	}
		// }

		// 请求商品分类信息
		var ajaxMenus={
        method: 'get',
        url: 'https://api-hmugo-web.itheima.net/api/public/v1/categories',
        data:{},
        success:function(value){
            var obj = JSON.parse(value);// 将JSON格式的数据解析成数组
			let menus_info = obj.message;// 菜单信息
			for(let i = 0; i < menu_items.length ; i++){
				putItemList(menu_items[i], cat_menus[i], menus_info);
			}
        },
        error:function(value){
            console.log(value);
        }
    }
    $ajax(ajaxMenus);

	// 将二三级菜单详细信息插入页面，参数：父节点，一级分类id数组，分类信息
	function putItemList(parent_node, cat_ids, menus_info){
		let div_p = document.createElement("div");
		let div_subitem = document.createElement("div");
		div_p.className = "item-list clearfix";
		div_subitem.className = "subitem";

		cat_ids.forEach(v =>{// 一级标签遍历
			let one_menu = menus_info[v];
			if(one_menu.children){
				one_menu.children.forEach(v2 =>{// 二级标签遍历
					let tow_menu = v2;					
					let dl = document.createElement("dl");				
					dl.className = "fore1";
					if(tow_menu.children){
						let dt = document.createElement("dt");
						let a = document.createElement("a");
						a.innerHTML = v2.cat_name;
						a.href = "search.php?cat_id=" + v2.cat_id + "&cat_level=1";
						dt.appendChild(a);
						dl.appendChild(dt);
						let dd = document.createElement("dd");
						tow_menu.children.forEach( v3 =>{// 三级标签遍历
							let a = document.createElement("a");
							let em = document.createElement("em");
							a.innerHTML = v3.cat_name;
							a.href = "search.php?cat_id=" + v3.cat_id;
							em.appendChild(a);
							dd.appendChild(em);
						})
						dl.appendChild(dd);
						div_subitem.appendChild(dl);
					}
				})
				div_p.appendChild(div_subitem);
			}
		})
		parent_node.appendChild(div_p);// 插入到父节点
	}

	
	</script>
</body>
<?php
	session_start();
	// echo "<script>console.log('" . $_SESSION['user_id'] . "')</script>";
?>

</html>
