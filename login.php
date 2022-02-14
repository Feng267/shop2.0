<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录面板</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" class="ico">
    <link rel="stylesheet" href="css/login.css">

    
    <!-- jQ文件 -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script src="./js/layui.all.js"></script>    <!-- 引用的框架  -->

    <script src="js/extend.js"></script><!-- 自行封装的公共函数  -->

    
</head>
<body>

    <section id="content">
<!--        头部-->
        <div class="c-header clearfix">
            <a href="javascript:" class="current">我要登录</a>
            <a href="javascript:">我要注册</a>
        </div>
<!--        内容-->
        <div class="c-body">
            <div class="dom" style="display: block;">
                <form action="" method="post">
                <div class="s1">
                    <h4>账&nbsp;&nbsp;号：</h4>
                    <input name="user" type="text" placeholder="用户名/手机号码/邮箱">
                </div>
                 <div class="s1"><h4>密&nbsp;&nbsp;码:</h4>
                     <input name="pwd" type="password" placeholder="请输入密码">
                 </div>
                 <div class="s2">
                     <input type="checkbox">
                     <span>记住密码</span>
                 </div>
                    <input type="submit" name="submit" class="btn" value="登&nbsp;录">
                </form>
                <div class="dom-footer">
                    <div class="login-another">
                        <a href="#">找回密码</a>
                        <span>|</span>
                        <span>还没注册账号？</span>
                        <a href="javascript:void(0);" onclick="layerMsg();return false;">注册账号</a>
                    </div>
                    <div class="login-three">
                        <span>使用第三方账号直接登录</span>
                        <div class="login-icon">
                            <a href="javascript:void(0);" onclick="layerMsg();return false;">
                                <img src="img/qq.svg">
                            </a>
                            <a href="javascript:void(0);" onclick="layerMsg();return false;">
                                <img src="img/weixin.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dom">
                <div class="dom" style="display: block;">
                    <form action="" method="post">
                        <div class="s1">
                            <h4>手机号码：</h4>
                            <input name="phone" type="text" placeholder="填写你的手机作为登录账户">
                        </div>
                        <div class="s1"><h4>用户名：</h4>
                            <input name="user" type="text" placeholder="中、英文均可，最长20个字符或10个汉字">
                        </div>
                        <div class="s1"><h4>密&nbsp;&nbsp;码：</h4>
                            <input name="pwd" type="password" placeholder="6-30位英文、数字、字符、区分大小写">
                        </div>
                        <!-- <div class="s1 msg-code"><h4>短信验证码：</h4>
                            <input name="msg" type="text" placeholder="填写短信验证码">
                            <input type="button" value="获取短信验证码">
                        </div> -->
                        <div class="s2">
                            <input type="checkbox">
                            <span>记住密码</span>
                        </div>
                        <input type="submit"  name="register" class="btn" value="注&nbsp;册">
                    </form>
                    <div class="dom-footer">
                        <div class="login-another">
                            <a  href="javascript:void(0);" onclick="layerMsg();return false;">找回密码</a>
                            <span>|</span>
                            <span>还没注册账号？</span>
                            <a href="#">注册账号</a>
                        </div>
                        <div class="login-three">
                            <span>使用第三方账号直接登录</span>
                            <div class="login-icon" onclick="layerMsg()">
                                <a  href="javascript:void(0);" onclick="layerMsg();return false;">
                                    <img src="img/qq.svg">
                                </a>
                                <a  href="javascript:void(0);" onclick="layerMsg();return false;">
                                    <img src="img/weixin.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    window.onload=function () {
//1.1获取需要的标签
        let as = document.getElementsByClassName('c-header')[0].getElementsByTagName('a');
        let contents = document.getElementsByClassName('dom');

        //1.2遍历
        for (let i=0; i<as.length; i++){
            //1.2.1取单个对象
            let a = as[i];
            a.id = i;

            //1.2.2监听鼠标的移动事件
            a.onclick = function () {
                //让所有的a的class都清除
                for (let j=0; j<as.length; j++){
                    as[j].className = '';
                    contents[j].style.display = 'none';
                }
                //设置当前a的class
                this.className = 'current';
                //从contents数组中取出对应的标签
                contents[this.id].style.display = 'block';
            }
        }
    }
</script>

<?php
error_reporting(0);  // 抑制错误函数
    if(!session_id())
        session_start();
include "fun.php";   // 连接服务器，连接数据库

$url = "index.php";// 登录/注册成功后跳转的地址
// 如果是在商品浏览页面因为没有登录而跳转到登录页面的，登录后跳转到该商品页面；
// 而若是因为点击了“立即购买”而需要登录的，登录后直接回道订单确定页面
if(isset($_GET['goods_id']))
    $url = 'item.php?goods_id=' . $_GET['goods_id'];

// if(isset($next_url)){
//     unset($_SESSION['next_url']);
//     $url = $next_url;
// } 
if(isset($_POST['submit']))             //如果按登录按键
{
    $user_id=$_POST['user'];         //获取输入的账号
    $password=$_POST['pwd']; //获取输入的密码
    // echo "<script>console.log('user_id=" . $user_id . ",password=" . $password ."')</script>";

    // 验证数据库账号密码是否一致
    $sql = "select password from user where user_id='$user_id'";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $row=mysqli_fetch_row($result);//获取密码
    // echo $row[0];
    // 验证通过
    if (password_verify($password, $row[0])) {
        $_SESSION['user_id']="$user_id";
        // $url = "index.php";// 登录成功后跳转
        // header("Location:$url");// 遇上bug，暂时放弃该方式跳转
        // session_write_close();
        $next_url = @$_SESSION['next_url'];// 未登录时点击了需要登录的界面
        if(isset($next_url)){
            unset($_SESSION['next_url']);
            $url = $next_url;
        }       
        // echo  "<script>console.log('$url')</script>";         
        // else
        //     header("Location:index.php");
        echo  "<script>window.location.href='" . $url . "'</script>";
        exit(0);
    } else {
        echo '<script>layerMsg(13);</script>';
    }
    
}

// 注册
if($_POST['register'] != ''){
    // $register = $_POST['register'];
    // echo "<script>console.log('$register')</script>";
    // $_POST['register'] = '';
    // if($_POST['register'] != ''){
    //     $register = $_POST['register'];
    //     echo "<script>console.log('$register')</script>";
    // // $_POST['register'] = '';
    // }else
    //     echo "<script>console.log('register')</script>";
    // 获取提交的参数
    $user_id=$_POST['phone'];         //获取输入的手机号码
    $name =$_POST['user'];         //获取输入的用户名
    $password=$_POST['pwd']; //获取输入的密码
    $hash = password_hash("$password", PASSWORD_DEFAULT);// 密码的hash散列只

    // echo "<script>console.log('user_id=" . $user_id . ",name=" . $name  . ",password=" . $hash ."')</script>";

    // 注册账号
    $sql = "insert into user(user_id, password) values('$user_id','$hash')";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $count = mysqli_affected_rows($conn);        

    // 补充用户信息
    if($count == 1){
        $head_pic = "img/head_pic/default.jpg";// 默认头像
        $sql = "insert into user_info(name, tel, head_pic) values('$name', '$user_id', '$head_pic');";
        $result=mysqli_query($conn,$sql);//执行查询
        $count = mysqli_affected_rows($conn); 
    }
    // $row=mysqli_fetch_row($result);//获取密码
    // // echo $row[0];
    // // 验证通过
    if ($count == 1) {
        $_SESSION['user_id']="$user_id";
        // $url = "index.php";// 登录成功后跳转
        // header("Location:$url");// 遇上bug，暂时放弃该方式跳转
        $next_url = @$_SESSION['next_url'];// 未登录时点击了需要登录的界面
        if(isset($next_url)){
            unset($_SESSION['next_url']);
            $url = $next_url;
        }   
        // session_write_close();
        // echo  "<script>console.log('$url')</script>"; 
        echo  "<script>window.location.href='" . $url . "'</script>";
        exit(0);
    }
}


// if(isset($_POST['return']))  //如果按返回键
// {
//     header("Location:index.php");
// }
// if(isset($_POST['goLogup']))  //如果按注册键
// {
//     header("Location:logup.php");
// }
?>


</body>
</html>


<?php
error_reporting(0);  // 抑制错误函数
    if(!session_id())
        session_start();
include "fun.php";   // 连接服务器，连接数据库

$url = "index.php";// 登录/注册成功后跳转的地址
// 如果是在商品浏览页面因为没有登录而跳转到登录页面的，登录后跳转到该商品页面；
// 而若是因为点击了“立即购买”而需要登录的，登录后直接回道订单确定页面
if(isset($_GET['goods_id']))
    $url = 'item.php?goods_id=' . $_GET['goods_id'];

if(isset($_POST['submit']))             //如果按登录按键
{
    $user_id=$_POST['user'];         //获取输入的账号
    $password=$_POST['pwd']; //获取输入的密码
    // 验证数据库账号密码是否一致
    $sql = "select password from user where user_id='$user_id'";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $row=mysqli_fetch_row($result);//获取密码
    // 验证通过
    if (password_verify($password, $row[0])) {
        $_SESSION['user_id']="$user_id";
        $next_url = @$_SESSION['next_url'];// 未登录时点击了需要登录的界面
        if(isset($next_url)){
            unset($_SESSION['next_url']);
            $url = $next_url;
        }       
        echo  "<script>window.location.href='" . $url . "'</script>";
        exit(0);
    } else {
        echo '<script>layerMsg(13);</script>';
    }
    
}

// 注册
if($_POST['register'] != ''){
    // 获取提交的参数
    $user_id=$_POST['phone'];         //获取输入的手机号码
    $name =$_POST['user'];         //获取输入的用户名
    $password=$_POST['pwd']; //获取输入的密码
    $hash = password_hash("$password", PASSWORD_DEFAULT);// 密码的hash散列只
    // 注册账号
    $sql = "insert into user(user_id, password) values('$user_id','$hash')";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $count = mysqli_affected_rows($conn);        

    // 补充用户信息
    if($count == 1){
        $head_pic = "img/head_pic/default.jpg";// 默认头像
        $sql = "insert into user_info(name, tel, head_pic) values('$name', '$user_id', '$head_pic');";
        $result=mysqli_query($conn,$sql);//执行查询
        $count = mysqli_affected_rows($conn); 
    }
    // // 验证通过
    if ($count == 1) {
        $_SESSION['user_id']="$user_id";
        $next_url = @$_SESSION['next_url'];// 未登录时点击了需要登录的界面
        if(isset($next_url)){
            unset($_SESSION['next_url']);
            $url = $next_url;
        }   
        echo  "<script>window.location.href='" . $url . "'</script>";
        exit(0);
    }
}
?>