<?php
include "conn.php";

$id = $_GET['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$child = $_POST['child'];
$vehicle = $_POST['vehicle'];
$trip = $_POST['trip'];
$note = $_POST['note'];



$sql = "update cart set name='$name' , phone='$phone',email='$email',checkin='$checkin',checkout='$checkout',adult='$adults',child='$child',vehicle='$vehicle',trip='$trip',notes='$note' where id = '$id'";


$result = mysqli_query($conn,$sql);

if(!$result){
    die("Insertion unsuccessful".mysqli_error($conn));
}
else{
    header('location:cart.php?update=true');
}

?>