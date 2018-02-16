<?php
include "connection/connect.php";
$id=$_POST['txtiddepartu'];
$vocational=$_POST['txtvu'];
$diploma=$_POST['txtdu'];
$vocational_techer=$_POST['txtvtu'];
$diploma_techer=$_POST['txtdtu'];
$sql="UPDATE `tbl_department` SET `d_vocational`=$vocational,`d_diploma`=$diploma,`d_vocational_techer`=$vocational_techer,`d_diploma_techer`=$diploma_techer WHERE d_term='$id'";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    header("location:department.php");
}
?>