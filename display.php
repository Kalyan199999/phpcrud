<?php
include "connection.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <title>Index</title>

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User </a></button>
        <table class="table">
  <thead>
    <tr>
       <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from table1";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        $id=$row['id'];
        $name=$row['name'];
        $mail=$row['mail'];
        $mobile=$row['mobile'];
        $pass=$row['password'];

        echo "
        <tr>
      <td >$id</td>
      <td>$name</td>
      <td>$mail</td>
      <td>$mobile</td> 
      <td>$pass</td> 
      <td>
      <button class='btn btn-primary'><a href='update.php?updateid=$id' class='text-light'>Update</a></button>
      <button class='btn btn-danger'><a href='delete.php?deleteid=$id' class='text-light'> Delete</a></button>
    </td>
      
    </tr> ";
      }
    }
    
    ?>
    

    


  </tbody>
</table>
        

    
    
    </div>

    
</body>
</html>