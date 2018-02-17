<?php
include "connection/connect.php";
$id=$_POST['txtid'];
$sql="DELETE FROM `tbl_aword_lenner` WHERE `id_al`=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);

}
else{
    header("location:adword_Lenner.php");
}
?>