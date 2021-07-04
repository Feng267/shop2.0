<?php 
    /**
     * 修改密码
     */
    session_start();
    require "../../fun.php";
    $user_id = @$_SESSION['user_id'];
    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    // 获取请求携带的参数
    $password = $_POST['password'];// 密码

    // 判断参数是否缺少
    $parameter = array("password");
    foreach($parameter as $key => $v){
        if($v == ''){
            header("HTTP/1.1 400 error: parameter error!");
            $error['error'] = "the lack of $key!";
            header('Content-Type:application/json');
            $res_json = json_encode($error, JSON_UNESCAPED_UNICODE);   //打包成json
            echo $res_json;  //输出数据
            exit;
        }
    }

    $hash = password_hash("$password", PASSWORD_DEFAULT);// 密码的hash散列只
    $sql = "update user set password = '$hash' where user_id = $user_id";  //设置sql语句
    $result=mysqli_query($conn,$sql);//执行查询
    $count = mysqli_affected_rows($conn);        

    $res = array('status'=> $count );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>