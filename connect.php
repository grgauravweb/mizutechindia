<?php
$server="148.72.232.183:3306";
$username="akhilesh";
$password="Shah@78655";
$database="akhilesh_db";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("Connection error". mysqli_connect_error());
}
else{
    echo "Connection successful";
}
header("location:index.php");
?>