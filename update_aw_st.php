<?php 
include "connection/connect.php";
$_FILES["txtevi"]["name"];
$_FILES["txtevi"]["type"];
$_FILES["txtevi"]["size"];
$_FILES["txtevi"]["tmp_name"];
$_FILES["txtevi"]["error"];
$id=$_POST['id'];
$name=$_POST['txtnamei'];
$year=$_POST['txtyeasi'];
$aword=$_POST['txtawordi'];
$tier=$_POST['txttiei'];
$department=$_POST['txtdepaerti'];
if($_FILES["txtevi"]["tmp_name"]==""){
    $sql="UPDATE `tbl_aword_student` SET `name_as`='$name',`year_as`='$year',`aword_as`='$aword',`tier_as`='$tier',`department_as`='$department' WHERE `id_as`=$id";
   
}
else if(copy($_FILES["txtevi"]["tmp_name"],"img/awordstudent/".$_FILES["txtevi"]["name"])) // Upload/Copy
{
    $nameimg="img/awordstudent/".$_FILES["txtevi"]["name"];
    // echo "Copy/Upload Complete.";
    $sql="UPDATE `tbl_aword_student` SET `name_as`='$name',`year_as`='$year',`aword_as`='$aword',`tier_as`='$tier',`department_as`='$department',`evidence_as`='$nameimg' WHERE `id_as`=$id";
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
    header("location:adword_student.php");
}
?>