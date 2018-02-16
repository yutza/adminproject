<?php
include "connection/connect.php";
$id=$_POST['txtidup'];
$st=$_POST['txtstu'];
$len=$_POST['txtlenu'];
$ict=$_POST['txtictu'];
$ictlen=$_POST['txtictlenu'];
$sql="UPDATE `tb_budget` SET `b_statements`=$st,`b_learning`=$len,`b_ict`=$ict,`b_ict_learning`=$ictlen WHERE b_term='$id'";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);
}
else{
    header("location:butget.php");
}
?>