
<?php
    include "fun.php";
    error_reporting(0);
    if(!session_id())
        session_start();
    // 按退出登录按钮时销毁用户id
    if(isset($_POST['outLogIn'])){
        unset($_SESSION['user_id']);     // 销毁 account  
        //header('location:index.php');
    }
    
    $user_id = @$_SESSION['user_id'];// 获取session中的用户id
    // 显示用户头像和昵称
    $f_item = '请<a href="login.php" target="_blank" style="padding-left: 10px;">登录</a>　<span><a href="login.php" target="_blank">免费注册</a></span>';

    // 如果已经登录了
    if(isset($user_id)){
        $sql = "select name, head_pic from user_info where tel = '$user_id'";  //设置sql语句
        $result=mysqli_query($conn,$sql);//执行查询
        $row=mysqli_fetch_assoc($result);//获取密码
        $img_src = $row['head_pic'];
        $user_name .= $row['name'];
            
        $f_item = '<div class="NotLogin">
        <a href="user_center.php"><img src="' . $img_src . '" style="width: 30px;height: 28px;border-radius: 50%;"></a>
        　<span><a href="#">' . $user_name . ' </a></span>
        <span><form style="display: inline-block;" method="post"><input type="submit" name="outLogIn" value="退出登录" id="outt"></form></span>
    </div>';

        // $f_item = $user_logined;
    }
    
?>
<!-- 引用的样式 -->
<link rel="sty/lesheet" href="./css/layui.css">


<!-- jQ的文件 -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.jqzoom/jquery.jqzoom.js"></script>
<!-- <script type="text/javascript" src="js/plugins/jquery.jqzoom/zoom.js"></script> -->
<script src="js/extend.js"></script><!-- 自行封装的公共函数  -->
<script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->
<script src="js/Myajax.js"></script><!-- ajax封装函数  -->


<div id="nav-bottom" style="background: white;">
		<!--顶部-->
		<div class="nav-top">
			<div class="top">
				<div class="py-container">
					<div class="shortcut">
						<ul class="fl">
							<li class="f-item">您好！</li>
							<li class="f-item">
                                <?php echo $f_item;// 用户信息 ?>
                            </li>
						</ul>
						<ul class="fr">
							<li class="f-item"><a href="index.php">首页 |</a></li>
							<li class="f-item "><a href="order_info.php">我的订单</a></li>
							<li class="f-item space"></li>
							<li class="f-item"><a href="cart.php">购物车</a></li>
							<li class="f-item space"></li>
							<li class="f-item"><a href="user_center.php">个人中心</a></li>
							<li class="f-item space"></li>
							<li class="f-item" onclick="layerMsg()"><a >企业采购</a></li>
							<li  class="f-item space"></li>
							<li onclick="layerMsg()" class="f-item"><a >客户服务</a></li>
							<li class="f-item space"></li>
							<li onclick="layerMsg()" class="f-item"><a >客户服务</a></li>
							<li class="f-item space"></li>
							<li onclick="layerMsg()" class="f-item"><a >网站导航</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--头部-->
			<div class="header">
				<div class="py-container" style="background: white;">
					<div class="yui3-g Logo" style=" width:1200px;">
						<div class="yui3-u Left logoArea" style="padding-top: 20px;">
							<a href="index.php">
								<img src="img/logo.png" width="60" height="60" alt="" style="float:left; margin-right: 10px;">
								<div style="font-size: 28px; color: #2b2b2b; margin-top: 18px;">唛多多商城</div>
							</a>
						</div>
						<div class="yui3-u Center searchArea">
							<div class="search">
								<form action="" class="sui-form form-inline">
									<div class="input-append">
										<input onkeydown="if(event.keyCode==10||event.keyCode==13){serarch_goods(); return false;}" type="text" id="autocomplete"  class="input-error input-xxlarge" />
										<a class="sui-btn btn-xlarge btn-danger" href="javascript:void(0);" onclick="serarch_goods()">搜索</a>
									</div>
								</form>
							</div>
							<div class="hotwords">
								<ul>
									<li class="f-item">运动清凉节</li>
									<li class="f-item">数码家电</li>
									<li class="f-item">每100-50</li>
									<li class="f-item">家具直降</li>
									<li class="f-item">AMD新品</li>
									<li class="f-item">海尔巅峰</li>
									<li class="f-item">清凉家装</li>
								</ul>
							</div>
						</div>
						<img src="img/gifgoods.gif" alt="" style="display: inline; position: absolute;right: 300px; top: 50px;">
					</div>
					<div class="yui3-g NavList" style="background: white;">
						<div class="yui3-u Left all-sort">
							<h4 onclick="javascript:window.location = 'index.php';">全部商品分类</h4>
						</div>
						<div class="yui3-u Center navArea">
							<ul class="nav">
								<li onclick="layerMsg()" class="f-item">限时抢购</li>
								<li onclick="layerMsg()" class="f-item">优惠券</li>
								<li onclick="layerMsg()" class="f-item">PLUS会员</li>
								<li onclick="layerMsg()" class="f-item">闪购</li>
								<li onclick="layerMsg()" class="f-item">拍卖</li>
								<li onclick="layerMsg()" class="f-item">海囤全球</li>
							</ul>
						</div>
						<div class="yui3-u Right" style="background: white;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>