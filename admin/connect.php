<?php
$server="localhost";
$username="root";
$password="";
$database="database_name";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("Connection error". mysqli_connect_error());
}
header("admin.php");
?>
