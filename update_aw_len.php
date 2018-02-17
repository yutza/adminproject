<?php 
include "connection/connect.php";
$_FILES["txtfile_len"]["name"];
$_FILES["txtfile_len"]["type"];
$_FILES["txtfile_len"]["size"];
$_FILES["txtfile_len"]["tmp_name"];
$_FILES["txtfile_len"]["error"];
$id=$_POST['id'];
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$department=$_POST['txtdepaerment'];
if($_FILES["txtfile_len"]["tmp_name"]==""){
    $sql="UPDATE `tbl_aword_lenner` SET `name_al`='$name',`year_al`='$year',`aword_al`='$aword',`tier_al`='$tier',`department_al`='$department' WHERE `id_al`=$id";
   
}
else if(copy($_FILES["txtfile_len"]["tmp_name"],"img/awordstudent/".$_FILES["txtfile_len"]["name"])) // Upload/Copy
{
    $nameimg="img/awordstudent/".$_FILES["txtfile_len"]["name"];
    // echo "Copy/Upload Complete.";
    $sql="UPDATE `tbl_aword_lenner` SET `name_al`='$name',`year_al`='$year',`aword_al`='$aword',`tier_al`='$tier',`department_al`='$department',`evidence_al`='$nameimg' WHERE `id_al`=$id";
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
    header("location:adword_Lenner.php");
}
?>