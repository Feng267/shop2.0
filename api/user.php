<?php
    session_start();
    include "../fun.php";  //连接数据库
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `user_info` WHERE `tel`=$user_id";
    $result = mysqli_query($conn,$sql) or die('数据插入失败:'.mysqli_error($conn));
    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    $json =  [
        'success' => 0,
        'data'=>$rows
    ];
    $result1 = json_encode($json,JSON_PRETTY_PRINT);
    echo $result1;
?>
