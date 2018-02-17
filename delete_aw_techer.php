<?php
include "connection/connect.php";
$id=$_POST['txtid'];
$sql="DELETE FROM `tbl_aword_techer` WHERE `id_at`=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);

}
else{
    header("location:adword_techer.php");
}
?>