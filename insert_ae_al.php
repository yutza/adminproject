<?php
include "connection\connect.php";
$nameal=$_POST['txtnameal'];
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
//$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$depart=$_POST['txtdepart'];;

$_FILES["txtfile_al"]["name"];
$_FILES["txtfile_al"]["type"];
$_FILES["txtfile_al"]["size"];
$_FILES["txtfile_al"]["tmp_name"];
$_FILES["txtfile_al"]["error"];
if(copy($_FILES["txtfile_al"]["tmp_name"],"img/aswordalumni/".$_FILES["txtfile_al"]["name"])) // Upload/Copy
{
    $nameimg="img/aswordalumni/".$_FILES["txtfile_al"]["name"];
    // echo "Copy/Upload Complete.";
}
//var_dump($nameimg);
$sql="INSERT INTO `tbl_asword_alumni`(`name_al`, `name_aword_al`, `year_al`, `tire_al`, `depart_al`, `evironment_al`) VALUES ('$nameal','$name','$year','$tier','$depart','$nameimg')";
$query=mysqli_query($conn,$sql);
if(!$query){
echo "ERROR".mysqli_error($conn);
}
else{
    
    header("location:asword_alumni.php");
}
?>