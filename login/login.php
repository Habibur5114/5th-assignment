<?php
session_start();
if(isset($_SESSION["username"])){
  header("location:index.php");
}
$email =$_POST["email"] ?? '';
$password =$_POST['password'] ??'';
$errorMessage = '';

if($email =="habib@gmail.com" && $password ="pass123"){
  $_session["username"] = "Habiba";
  header("location:index.php");
}else if($email =="tonu@gmail.com" && $password ="tonu123"){
  $_session["username"] = "Habiba";
  header("location:index.php");
}else if($email == "tamim@gmail.com" && $password = "tamim123"){
  $_session["username"] = "Habiba";
  header("location:index.php");

}

else if($email != "" || $password !=""){
  $errorMessage = "invalid email on password";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div>
    <h2 class="pb-5">Simple Auth Example</h2>
    
</div>
<form active ="login.php" method="POST">
  <div class="form-group ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@company.com" required="">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="*******" required="">
  </div>
  <div>
    <?php
    echo $errorMessage;
    ?>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"  required="" >
    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>