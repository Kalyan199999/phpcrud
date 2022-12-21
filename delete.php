<?php

include "connection.php";

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE from table1 where id='$id'";

    if($con->query($sql))
    {
        //echo "deleted successfully";
        header('location:display.php');
    }
}

?>