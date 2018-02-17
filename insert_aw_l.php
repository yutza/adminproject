<?php
include "connection\connect.php";
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$depart=$_POST['txtdepart'];;

$_FILES["txtfile_len"]["name"];
$_FILES["txtfile_len"]["type"];
$_FILES["txtfile_len"]["size"];
$_FILES["txtfile_len"]["tmp_name"];
$_FILES["txtfile_len"]["error"];
if(copy($_FILES["txtfile_len"]["tmp_name"],"img/awordlenner/".$_FILES["txtfile_len"]["name"])) // Upload/Copy
{
    $nameimg="img/awordlenner/".$_FILES["txtfile_len"]["name"];
    // echo "Copy/Upload Complete.";
}
//var_dump($nameimg);
$sql="INSERT INTO `tbl_aword_lenner`(`name_al`, `year_al`, `aword_al`, `tier_al`, `department_al`, `evidence_al`) VALUES ('$name','$year','$aword','$tier','$depart','$nameimg')";
$query=mysqli_query($conn,$sql);
if(!$query){
echo "ERROR".mysqli_error($conn);
}
else{
    
    header("location:adword_Lenner.php");
}
?>