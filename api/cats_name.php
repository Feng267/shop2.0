<?php
    include "../fun.php";
    // error_reporting(0);
    // session_start();
    // 获取请求携带的参数
    $cat_one_id = $_GET['cat_one_id'];
    $cat_two_id = $_GET['cat_two_id'];
    $cat_three_id = $_GET['cat_three_id'];

    // 判断参数是否缺少
    $parameter = array("cat_one_id" => $cat_one_id,  "cat_two_id" =>  $cat_two_id, "cat_three_id" =>  $cat_three_id);
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

    // 获取分类名称
    $sql = "select cat_name from cat_info where cat_id = $cat_one_id or cat_id = $cat_two_id or cat_id = $cat_three_id";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_affected_rows($conn);

    while($row = mysqli_fetch_row($result))
        $rows[] = $row;

    $res = $rows;// 查询结果
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据
    
    
?>

