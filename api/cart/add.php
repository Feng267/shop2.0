<?php 
    /**
     * 添加购物车
     */
    if(!session_id())
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
    $goods_id = $_POST['goods_id'];
    $goods_name = $_POST['goods_name'];
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
    $goods_attr = $_POST['goods_attr'];
    $goods_price = $_POST['goods_price'];
    $goods_number = $_POST['goods_number'];
    $total_price = $_POST['total_price'];

    // 判断参数是否缺少
    $parameter = array("goods_id" => $goods_id, "goods_name" => $goods_name,  "cat_id" => $cat_id, "cat_name" =>  $cat_name, "goods_attr" =>  $goods_attr, "goods_price" =>  $goods_price, "goods_number" =>  $goods_number, "total_price" =>  $total_price);
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

    $exist = 0;// 是否存在相同的商品
    $sql = "select numb, goods_number, goods_attr from shop_cart_info where user_id = $user_id and goods_id = $goods_id";
    $result = mysqli_query($conn, $sql);
    while($rows = mysqli_fetch_assoc($result)){
        $exist = 1;
        // 用参数true把JSON字符串强制转成PHP数组，然后比较两个对象是否相等 
        $s1 = json_decode($rows['goods_attr'], true);        
        $s2 = json_decode($goods_attr, true);
        foreach($s1 as $key => $v){
            if($v != $s2[$key])
                $exist = 0;
            // echo $key . $v ;            
        }
        if($exist){
            $row = $rows;
            break;
        }

    }
    // // 若已有该商品，则更新该商品的数量和价格
    if($exist){
        // $row = mysqli_fetch_assoc($result);
        $goods_number += $row['goods_number'] ;// 商品数量
        $numb = $row['numb'];// 在表中的序号
        $total_price = $goods_price * $goods_num;
        $sql = "update shop_cart_info set goods_number = $goods_number, total_price = $total_price where numb = $numb";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_affected_rows($conn);
        
    }else{// 否则插入一条新记录
        $sql = "insert into shop_cart_info(user_id, goods_id, goods_name, cat_id, cat_name, goods_attr, goods_price, goods_number, total_price) value('$user_id', $goods_id, '$goods_name', $cat_id, '$cat_name', '$goods_attr', $goods_price, $goods_number, $total_price)";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_affected_rows($conn);        
    }
    $res = array('status'=> $count );// 查询结果作为状态码返回
    header('Content-Type:application/json');
    $res_json = json_encode($res, JSON_UNESCAPED_UNICODE);   //打包成json
    echo $res_json;  //输出数据

    
?>