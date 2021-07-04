<?php
    if(isset($_POST["submit"]))
    {
            

        $img = @$_POST["img"];    //头像
        $nickname = @$_POST["nickname"];    //昵称
        $sex = @$_POST["sex"];   //性别
        $phone = @$_POST["phone"];   //手机
        $email = @$_POST["email"];   //邮箱

        //更新数据库信息
        include "fun.php";
        $sql = "UPDATE `user_info` SET `name`='$nickname',`gender`=" . "'$sex'" . ",`mailbox`='$email' WHERE `tel`='$phone'";
        // echo $sql;
        // echo "<script>console.log('$sql')</script>";
        mysqli_query($conn,$sql) or die('数据更新失败:'.mysqli_error($conn));

        if(mysqli_affected_rows($conn))
            echo "<script>layerMsg(12);</script>";
    }
?>