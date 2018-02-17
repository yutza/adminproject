<?php
include "connection/connect.php";
$id=$_POST['txtid'];
$sql="DELETE FROM `tbl_asword_alumni` WHERE `id_al`=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROE".mysqli_error($conn);

}
else{
    header("location:asword_alumni.php");
}
?>