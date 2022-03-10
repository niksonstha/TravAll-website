<?php
    session_start();
    include "conn.php";
    // include "signUpInsert.php";

    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = md5($_POST['password']); // sha1 


    $sql = "select fname,lname,uname,email from signup where email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    // print_r($result);
    // die;

    if(mysqli_num_rows($result)==1){
            while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['uname'] = $row['uname'];
                
            }
            $_SESSION['logged_in']=1;
            header("location:home.php");
    }
    else{
        include "header.php";
        ?>
         <div class="alert alert-warning" role="alert">
            account not exists
        </div>

        <?php

        }  
        
?>
