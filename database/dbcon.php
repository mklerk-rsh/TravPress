<?php

$hostname="localhost";
$username="root";
$password="";
$database="travpressblog";

//connection string
$con=mysqli_connect($hostname,$username,$password,$database);

//check if coonection is working fine
if (!$con) {
    die(mysqli_error($con));
}

?>
