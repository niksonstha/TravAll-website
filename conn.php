<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'travell';

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die("Connection failed");
}

?>