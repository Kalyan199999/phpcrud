<?php

include "connection.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['mobile'];
    $pass=$_POST['password'];

    $sql="INSERT into table1 (name,mail,mobile,password) values ('$name','$mail','$phone','$pass')";


    if($con->query($sql))
    {
        //echo "1 record inserted";
        header('location:display.php');
    }


}

?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >

    <title>CRUD OOPERATIONS</title>
  </head>
  <body>
    <div class="container my-5">

    <form method="post">

    <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control"   placeholder="Name" name="name" autocomplete="off">  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   placeholder="Enter email" name="mail" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="number" class="form-control"   placeholder="Phone" name="mobile" autocomplete="off">
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
  </body>
</html>