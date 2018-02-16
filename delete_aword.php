<?php
include "connection/connect.php";
$id=$_POST['txtiddelete'];
$sql="DELETE FROM `tbl_aword_student` WHERE id_as=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);

}
else{
    header("location:adword_student.php");
}
?>