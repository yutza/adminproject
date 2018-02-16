<?php
include "connection/connect.php";
$_FILES["txtevi"]["name"];
$_FILES["txtevi"]["type"];
$_FILES["txtevi"]["size"];
$_FILES["txtevi"]["tmp_name"];
$_FILES["txtevi"]["error"];

if(copy($_FILES["txtevi"]["tmp_name"],"img/awordstudent/".$_FILES["txtevi"]["name"])) // Upload/Copy
{
    $nameimg="img/awordstudent/".$_FILES["txtevi"]["name"];
    // echo "Copy/Upload Complete.";
}
$name=$_POST['txtnamei'];
$year=$_POST['txtyeasi'];
$aword=$_POST['txtawordi'];
$tier=$_POST['txttiei'];
$depart=$_POST['txtdepaerti'];


$sql="INSERT INTO `tbl_aword_student`( `name_as`, `year_as`, `aword_as`, `tier_as`, `department_as`, `evidence_as`) VALUES ('$name','$year','$aword','$tier','$depart','$nameimg')";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);

}
else{
    header("location:adword_student.php");
}
?>