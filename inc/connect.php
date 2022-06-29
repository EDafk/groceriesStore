<?php

//Connection to DB
$host = "localhost";
$name = "root";
$password = "";
$dbname = "final assignment";

$connection = mysqli_connect($host,$name,$password,$dbname);

if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}

?>