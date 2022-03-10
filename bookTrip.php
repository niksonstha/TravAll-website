<?php

include "conn.php";
session_start();

if (isset($_SESSION['email'])) {
?>
    


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TravAll-Live life with no excuses, travel with no regret</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="book.css">
        <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    
       
        <!-- <script src="https://kit.fontawesome.com/f93fb3145a.js" crossorigin="anonymous"></script> -->
    </head>

    <body>
        <div class="main">

        <?php 


            if(isset($_POST['submit'])){
                include "conn.php";


                
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

                $sql = "INSERT INTO `book` (`name`, `phone`, `email`, `checkin`, `checkout`, `adult`, `child`, `vehicle`, `trip` ,`notes`) VALUES ('$name', '$phone', '$email', '$checkin', '$checkout', '$adults', '$child','$vehicle','$trip', '$note');";
                
                
                
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
                header("location:bookTrip.php");
                }

            }

            if(isset($_POST['submit2'])){
                include "conn.php";
                
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                $adults = $_POST['adults'];
                $child = $_POST['child'];
                $vehicle = $_POST['vehicle'];
                $trip = $_POST['trip'];
                $note = $_POST['notes'];

                $sql = "INSERT INTO `cart` (`name`, `phone`, `email`, `checkin`, `checkout`, `adult`, `child`, `vehicle`, `trip` ,`notes`) VALUES ('$name', '$phone', '$email', '$checkin', '$checkout', '$adults', '$child','$vehicle','$trip', '$note');";
                
                
                
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
                header("location:cart.php");
                }


                
                
            }
        ?>



            <!-- header starts  -->
            <header>
                <div class="logo"><a href="home.php">
                        <nav>T</nav>rav <nav>A</nav> ll</div>

                <div class="navbar">

                    <a href="home.php">HOME</a>
                    <a href="packages.php">PACKAGES</a>
                    <a href="">SERVICES</a>
                    <a href="">ABOUT US</a>
                    <a href="contact.php">CONTACT US</a>

                </div>

                <div class="icons">

                    <input type="text" id="search" placeholder="Please search here">
                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="cart.php"><i class="fa-solid fa-cart-plus"></i></a>
                    <a href="signIn.php"><i class="fa-solid fa-user"></i></a>
                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" onclick="return confirm('Are you sure you want to logout')"></i></i></a>

                </div>

                
            </header>
            <!-- header ends -->
            <div class="book_content">
                <h1>Reservation Form</h1>

            </div>

            
        </div>
        
    <div class="bookTrip">
        
             <div class="content_left">
        
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="same">
                        <div class="sname">
                            <label>Full name</label> 
                            <input type="text" name="name" required class="name">

                        </div>
                        <div class="sphone">
                            <label>Phone</label>
                            <input type="text" name="phone" required class="phone">
                            
                        </div>
                    </div>
                    Email <input type="email" name="email" class="email" required>
                    Date Check In <input type="date" name="checkin" class="checkin" required>
                    Date Check Out <input type="date" name="checkout" class="checkout" required>
                    Adults <input type="number" name="adults" class="adult" required>
                    Children <input type="number" name="child" class="child" required>

                    <div class="opt">
                        <label>Vehicle</label> 
                        <select name="vehicle" id="vehicle" required>
                            <option disabled>Please select</option>
                            <option >Two wheel</option>
                            <option >Four wheel</option>
                            <option >Air ways</option>
                            <option >Nothing</option>
                        </select>

                        <label>Trip to</label> 
                        <select name="trip" id="trip" required>
                            <option value="" disabled>Please select</option>
                            <option >Mustang</option>
                            <option >Pokhara</option>
                            <option >Kathmandu</option>
                            <option >Manang</option>
                            <option >Dargeeling</option>
                            <option >Sikkim</option>
                            <option >ABC Base camp</option>
                        </select>

                    </div>
                    Notes <textarea name="notes" id="note" cols="30" rows="10"></textarea>

                    <div class="btn">

                        <input type="submit" name="submit" id="submit" value="Reserve Now">
                        <input type="submit" name="submit2" id="submit2" value="Add to cart">
                    </div>
        
                </form>
                                
        
            </div>
                        
            <div class="content_right">

                <p>Address:</p>
                <h2>Chandragiri,<br>
                 Satungal,kathmandu</h2>
                 <p>Phone:</p>
                 <h2>(+977)9813483314</h2>
                 <p>Email:</p>
                 <h2>sthanikson10@gmail.com</h2>

            </div>

    </div> 
    
    

        <div class="footer">
            Copyright ©2022 All rights reserved | This template is made with by NIKSON SHRESTHA
        </div>
           
    </body>

    </html>

    <?php
    } else {
        //  echo "you are not authorized";
        header('location:signIn.php?failed=true');
    }
    
    
    ?>