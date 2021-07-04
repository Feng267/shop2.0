
<?php   
    /**
     * 返回用户的收获地址
     */

    if(!session_id())
        session_start();
    require "../fun.php";
    $user_id = @$_SESSION['user_id'];
    if(!isset($user_id)){// 如果未登录
        // echo 3;
        $res = array('status'=> 3 );// 查询结果作为状态码返回
        header('Content-Type:application/json');
        $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
        echo $res_json;  //输出数据
        exit();
    }
    
    
    $sql = "select numb,received_people, received_tel, received_addr, postcode from received_info where user_id = '$user_id'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_affected_rows($conn);

    // 整理查询结果
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    $res = array('data'=> $rows, 'total'=> $count, 'success' => 0);
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据
    
    
?>