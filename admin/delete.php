<?php
include "connect.php";
$id=$_GET['id'];
$query="DELETE FROM query WHERE id='$id'";
$data=mysqli_query($con,$query);
if ($data){
    echo "Record deleted from database";
}
else{
    echo "Failed to delete record from database";
}
header("location:admin.php");
?>