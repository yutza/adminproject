<?php 
include "connection/connect.php";
$_FILES["txtfile_al"]["name"];
$_FILES["txtfile_al"]["type"];
$_FILES["txtfile_al"]["size"];
$_FILES["txtfile_al"]["tmp_name"];
$_FILES["txtfile_al"]["error"];
$id=$_POST['txtid'];
$nameal=$_POST['txtnameal'];
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$department=$_POST['txtdepart'];
if($_FILES["txtfile_al"]["tmp_name"]==""){
    $sql="UPDATE `tbl_asword_alumni` SET `name_al`='$nameal',`name_aword_al`='$name',`year_al`='$year',`tire_al`='$tier',`depart_al`='$department' WHERE `id_al`=$id";
   
}
else if(copy($_FILES["txtfile_al"]["tmp_name"],"img/aswordalumni/".$_FILES["txtfile_al"]["name"])) // Upload/Copy
{
    $nameimg="img/aswordalumni/".$_FILES["txtfile_al"]["name"];
    // echo "Copy/Upload Complete.";
    $sql="UPDATE `tbl_asword_alumni` SET `name_al`='$nameal',`name_aword_al`='$name',`year_al`='$year',`tire_al`='$tier',`depart_al`='$department',`evironment_al`='$nameimg' WHERE `id_al`=$id";
}

$query=mysqli_query($conn,$sql);
if(!$query){
echo "ERROR".mysqli_error($conn);;
}else{
 /*var_dump($name);
 var_dump($year);
 var_dump($aword);
 var_dump($tier);
 var_dump($department);
 var_dump($id);*/
    header("location:asword_alumni.php");
}
?>