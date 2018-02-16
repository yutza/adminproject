<?php
session_start();
$host="localhost";
$user="root";
$pass="12345678";
$database="u418775192_data";

$conn=mysqli_connect($host,$user,$pass,$database);

/*if(mysqli_connect_error()){
 die('Fail');
}
else{
    echo"OK";
}*/
?>