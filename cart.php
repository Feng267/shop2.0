<!DOCTYPE html>
<html>
<head>
    <title>购物车</title>
	<link rel="icon" href="img/favicon.ico">
    <meta charset="utf-8" >
    <link rel="stylesheet" type="text/css" href="css/base.css" />   <!-- 页面头部css -->
    <link rel="stylesheet" type="text/css" href="css/layui.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" href="./css/layui.css">   <!-- 引用的框架的css -->
    <!-- <script type="text/javascript" src="layui/layui.all.js"></script> -->
    <script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src='./js/jquery.min.js'></script>        <!-- jq  -->
    <script src="js/Myajax.js"></script><!-- ajax封装函数  -->	
	<script src="js/extend.js"></script><!-- 自行封装的函数  -->
    <script type="text/javascript" src="./js/cart.js"></script>

</head>
<body>
    <!-- 页面顶部 -->
    <?php 
        include 'isLogin.php';
        include 'mode_head.php';
        if(!session_id())
            session_start();
    ?>         <!-- 页眉导航 -->
    <!-- 购物车显示区域 -->
    <div id="cart_display">
        <div id="cart_title"><h4 style="color: #E2231A; font-size: 18px">全部商品</h4></div>
       <div id="navigation" class="yui3-g cart-th">
            <!-- <div style="margin-left: 190px; display: inline-block;font-size: 10px;color: black;">商品</div>
            <div style="margin-left: 360px; display: inline-block;font-size: 10px;color: black;">单价</div>
            <div style="margin-left: 60px; display: inline-block;font-size: 10px;color: black;">数量</div>
            <div style="margin-left: 90px; display: inline-block;font-size: 10px;color: black;">小计</div>
            <div style="margin-left: 64px; display: inline-block;font-size: 10px;color: black;">操作</div> -->
            <div class="yui3-u-1-4">
                <input type="checkbox" name="" value="" id="all" /> 全部
            </div>
            <div class="yui3-u-1-4">商品</div>
            <div class="yui3-u-1-8">单价（元）</div>
            <div class="yui3-u-1-8">数量</div>
            <div class="yui3-u-1-8">小计（元）</div>
            <div class="yui3-u-1-8">操作</div>
        </div>

        <!-- 加入购物车的项目显示区域 -->
        <div id="test1" >
        </div>

        <!-- 背景图 -->
        <div id="background" ></div>

        <div id="jiesuan" style="position: fixed;bottom: 0;background-color:white">
            <div  class="select_cd" style="font-size: 10px;color: black"><input type="checkbox" id="box" onclick="allSelect()"> 全选</div>
            <div style="margin-left: 10px; display: inline-block;font-size: 10px; color: black; cursor: pointer;"  onclick="selectremove();" >删除选中的商品</div>
            <div style="margin-left: 10px; display: inline-block; font-size: 10px; color: black; font-weight: bold;cursor: pointer;" onclick="allremove();">全部删除</div>
            <div style="width: 100px; margin-left: 350px; display: inline-block;font-size: 10px; color: black; " id="SPnumber">已选择0件商品</div>
            <div style="width: 200px; margin-left: 10px; display: inline-block; font-size: 10px; color: black; font-weight: bold;" id="zongjia">总价：￥0.00</div>
            <div id="anniu1"><input type="button" value="结算" onclick="Pay();"></div>
        </div>
    </div>
    
    <?php include 'goTop.php';?>          <!-- 返回顶部按钮 -->
    <?php include "mode_foot.php"; ?>   <!-- 底部法律说明 -->
    
</body>
</html>