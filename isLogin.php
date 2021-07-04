<?php
    error_reporting(0);  // 抑制错误函数

    if(!session_id())
        session_start();
    $user_id=@$_SESSION['user_id'];

    // 判断是否登录
    if(!$user_id)
    {
        $_SESSION['next_url'] = $_SERVER['REQUEST_URI'];// 记住当前页面的URL
        header("Location: login.php");
        exit;
    }
?>
