<?php
include "connection/connect.php";
$_FILES["txteviu"]["name"];
$_FILES["txteviu"]["type"];
$_FILES["txteviu"]["size"];
$_FILES["txteviu"]["tmp_name"];
$_FILES["txteviu"]["error"];

if(copy($_FILES["txteviu"]["tmp_name"],"img/awordstudent/".$_FILES["txteviu"]["name"])) // Upload/Copy
{
    $nameimg="img/awordstudent/".$_FILES["txteviu"]["name"];
    // echo "Copy/Upload Complete.";
}
$id=$_POST['idtxt'];
$naem=$_POST['txtnameiu'];
$year==$_POST['txtyeasiu'];
$aword==$_POST['txtawordiu'];
$tier==$_POST['txttieiu'];
$depart==$_POST['txtdepaertiu'];
var_dump($name);
var_dump($year);
var_dump($aword);
var_dump($tier);
var_dump($depart);
var_dump($id);
$sql="UPDATE `tbl_aword_student` SET `name_as`='$name',`year_as`='$year',`aword_as`='$aword',`tier_as`='$tier',`department_as`='$depart',`evidence_as`='$nameimg' WHERE id_as=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    //header("location:adword_student.php");
}
?>