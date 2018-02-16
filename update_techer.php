<?php
include "connection/connect.php";
$id=$_POST['txtidtecheru'];
$techer=$_POST['txttecheru'];
$subject=$_POST['txtsubjectu'];
$sql="UPDATE `tbl_techer` SET `t_techer`=$techer,`t_subject`=$subject WHERE t_tem='$id'";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    header("location:techer.php");
}
?>