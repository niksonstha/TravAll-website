<?php
include "conn.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO `signup` (`fname`, `lname`,`uname`,`email`,`password`) VALUES ('$fname', '$lname','$uname','$email','$password')";
$result = mysqli_query($conn,$sql);

if(!$result){
    // die("Insertion unsuccessful".mysqli_error($conn));
    include "header.php";
    ?>
    <div class="alert alert-danger" role="alert">
        Account already exist!!!
    </div>
    <?php
}
else{
    header('location:signIn.php?success=true');
}
?>