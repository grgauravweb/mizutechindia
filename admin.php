<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    <link rel="icon" href="../images/logo/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-3">
    <h1>Welcome <?php echo $_SESSION['username'] ?> </h1>
        <br>
        <div class="table-responsive-sm">
        <table class="table" border="2px">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">query</th>
                <th scope="col">date</th>
                <th scope="col">Delete row</th>
            </tr>
            <?php
include "connect.php";
$sql="SELECT `id`, `name`, `email`, `phone`, `query`, `date` FROM query";
$result=mysqli_query($con,$sql);
if($result-> num_rows>0){
    while($row=$result-> fetch_assoc()){
        echo "<tr><td scope='row'>". $row["id"]."</td>
        <td scope='row'>". $row["name"]."</td>
        <td scope='row'>". $row["email"]."</td>
        <td scope='row'>". $row["phone"]."</td>
        <td scope='row'>". $row["query"]."</td>
        <td scope='row'>". $row["date"]."</td>
        <td scope='row'><a href='delete.php?id=$row[id]'>Delete</a></td>
        </tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}
?>
        </table>
</div>
        <br>
        <a href="logout.php" class="btn btn-danger">logout</a>
    </div>
</body>

</html>