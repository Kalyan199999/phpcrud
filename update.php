<?php

include "connection.php";

$id=$_GET['updateid'];

$sql="SELECT * from table1 where id='$id'";
$result=$con->query($sql);

$row=$result->fetch_assoc();
$name=$row['name'];
$mail=$row['mail'];
$mobile=$row['mobile'];
$pass=$row['password'];

if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['mobile'];
    $pass=$_POST['password'];

    $sql="UPDATE table1 set id='$id',name='$name',mail='$mail',mobile='$phone',password='$pass' where id='$id'";


    if($con->query($sql))
    {
        echo "Updated successfully";
        //header('location:display.php');
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
    <input type="text" class="form-control"   placeholder="Name" name="name" autocomplete="off" value="<?php echo $name;?>">  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   placeholder="Enter email" name="mail" autocomplete="off" value="<?php echo $mail;?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="number" class="form-control"   placeholder="Phone" name="mobile" autocomplete="off" value="<?php echo $mobile;?>"> 
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off" value="<?php echo $pass; ?>">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>
  </body>
</html>