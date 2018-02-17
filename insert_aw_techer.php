<?php
include "connection\connect.php";
$nametecher=$_POST['txtnametecher'];
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$depart=$_POST['txtdepart'];;

$_FILES["txtfile_techer"]["name"];
$_FILES["txtfile_techer"]["type"];
$_FILES["txtfile_techer"]["size"];
$_FILES["txtfile_techer"]["tmp_name"];
$_FILES["txtfile_techer"]["error"];
if(copy($_FILES["txtfile_techer"]["tmp_name"],"img/awordtecher/".$_FILES["txtfile_techer"]["name"])) // Upload/Copy
{
    $nameimg="img/awordtecher/".$_FILES["txtfile_techer"]["name"];
    // echo "Copy/Upload Complete.";
}
//var_dump($nameimg);
$sql="INSERT INTO `tbl_aword_techer`(`name_techer_at`, `name_at`, `year_at`,`aword_te`, `tier_at`, `department_at`, `evidence_at`) VALUES ('$nametecher','$name','$year','$aword','$tier','$depart','$nameimg')";
$query=mysqli_query($conn,$sql);
if(!$query){
echo "ERROR".mysqli_error($conn);
}
else{
    
    header("location:insert_aw_techer.php");
}
?>