<?php 
include "connection/connect.php";
$_FILES["txtfile_techer"]["name"];
$_FILES["txtfile_techer"]["type"];
$_FILES["txtfile_techer"]["size"];
$_FILES["txtfile_techer"]["tmp_name"];
$_FILES["txtfile_techer"]["error"];
$id=$_POST['txtid'];
$nametecher=$_POST['txtnametecher'];
$name=$_POST['txtname'];
$year=$_POST['txtyear'];
$aword=$_POST['txtaword'];
$tier=$_POST['txttire'];
$department=$_POST['txtdepart'];
if($_FILES["txtfile_techer"]["tmp_name"]==""){
    $sql="UPDATE `tbl_aword_techer` SET `name_techer_at`='$nametecher',`name_at`='$name',`year_at`='$year',`aword_te`='$aword',`tier_at`='$tier',`department_at`='$department' WHERE `id_at`=$id";
   
}
else if(copy($_FILES["txtfile_techer"]["tmp_name"],"img/awordtecher/".$_FILES["txtfile_techer"]["name"])) // Upload/Copy
{
    $nameimg="img/awordtecher/".$_FILES["txtfile_techer"]["name"];
    // echo "Copy/Upload Complete.";
    $sql="UPDATE `tbl_aword_techer` SET `name_techer_at`='$nametecher',`name_at`='$name',`year_at`='$year',`aword_te`='$aword',`tier_at`='$tier',`department_at`='$department',`evidence_at`='$nameimg'WHERE `id_at`=$id";
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
    header("location:adword_techer.php");
}
?>