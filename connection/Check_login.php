<?php
include "connect.php";
$user=$_POST['txtusername'];
$pass=$_POST['txtpassword'];
$result = mysqli_query($conn,"SELECT * FROM tb_login WHERE login_user='".$_POST['txtusername']."' and login_password='".$_POST['txtpassword']."'");
$objdata=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0){
    $_SESSION["Code"]=$objdata["login_code"];
    $_SESSION["School"]=$objdata["login_school"];
    $_SESSION["Schooltype"]=$objdata["login_school_type"];
    $_SESSION["Province"]=$objdata["login_province"];


    echo true;
}
else{
    echo "FailLogin".mysqli_error($conn);
}
?>