<?php 
include "connection/connect.php";
$tem=$_POST['txttemup'];
$depart=$_POST['txtdepartup'];
$company=$_POST['txtcompanyup'];
$sql="UPDATE `tb_quality` SET `q_dapartment`=' $depart',`q_company`='$company' WHERE `tem_quality`='$tem'";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);
}
else{
    /*var_dump($tem);
    var_dump($depart);
    var_dump($company);*/
    header("location:quality.php");
}
?>