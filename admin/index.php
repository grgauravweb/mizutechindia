<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "connect.php";
    $username=$_POST["username"];
    $password=$_POST["password"];
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($con, $username);
    $password=mysqli_real_escape_string($con, $password);
    $sql="Select * from admin where user_name='$username' AND password='$password'";
    $result=mysqli_query($con, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location:admin.php");
    }
    else{
        $showError="invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
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
    <style>
    form{
        float:center;
    }
    </style>
</head>
<body>
    <?php
    if($login){
        echo "You are logged in";
    }
    if($showError){
        echo "error.$showError.";
    }
    ?>
    <h1 class="container my-5">Admin Login</h1>
    <form action="index.php" method="post" class="container my-5 form-signin">
    <div class="form-group">
    <label for="name">Username:</label>
     <input type="text" name="username" class="form-control" required><br>
     </div>
     <div class="form-group">
     <label for="name">Password:</label> 
     <input type="password" name="password" class="form-control" requied><br>
     </div>
     <div class="form-group" align="center">
        <input type="submit" class="btn btn-primary" value="Login" name="submit">
        </div>
    </form>
</body>
</html>