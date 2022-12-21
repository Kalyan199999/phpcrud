<?php

$con=new mysqli("localhost","root","","USERS");
if(!$con)
{
    echo "connection failed" . $con->connect_error;
}
    

?>