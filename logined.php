<?php
    include "fun.php";
    error_reporting(0);
    if(!session_id())
        session_start(); 
    $user_id = $_SESSION['user_id'];
    $img_src = "img/no_login.jpg";
    $user_name = "Hi~欢迎来到多多！";
    $a1_href = "login.php";
    $a2_href = "user_center.php";
    $a1_text = "登录";
    $a2_text = "注册";
    // 如果已经登录，则显示用户名称和头像
    if(isset($user_id)){
        $sql = "select name, head_pic from user_info where tel = '$user_id'";  //设置sql语句
        $result=mysqli_query($conn,$sql);//执行查询
        $row=mysqli_fetch_assoc($result);//获取密码
        $img_src = $row['head_pic'];
        $user_name .= $row['name'];
        $a1_text = "退出";
        $a2_text = "修改";
    }
    echo '<img src="' . $img_src . '" width="60" height="60" alt="">
    <div class="user_show">
        <p class="user_name_text">' . $user_name . '</p>
        <p class="user_tip">
            <a href="' . $a1_href . '" class="user_login">' . $a1_text . '</a>
            <a href="' . $a2_href . '" class="user_reg">' . $a2_text . '</a>
        </p>
    </div>'
?>

