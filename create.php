<?php


$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed");
}
// echo "Connection successful!";

$sql = "CREATE DATABASE travell";
$result = mysqli_query($conn,$sql);

if(!$result){
    die("Database creation failed!: ".mysqli_error($conn));
}
echo "Database creation successful";

?>