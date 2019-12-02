<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cart";

$con=myssqli_connect("localhost","root","","cart");

if(mysqli_connect_errno()){
    die("database connection failed".mysqli_connect_error());
}
?>