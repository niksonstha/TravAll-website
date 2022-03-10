<?php
$id = $_GET['id'];
include "conn.php";

$sql = "Delete from cart where id = '$id' ";

$result = mysqli_query($conn,$sql);
if(!$result){
    die("Failed to delete" . mysqli_error($conn));
}
else{
    header('location:cart.php?del=true');
}

?>