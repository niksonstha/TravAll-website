<?php

include "conn.php";
include "header.php";
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
        <link rel="stylesheet" href="cartStyle.css">
        <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    
       
        <!-- <script src="https://kit.fontawesome.com/f93fb3145a.js" crossorigin="anonymous"></script> -->
    </head>

    <body>
        <div class="main">
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

                    <!-- <input type="text" id="search" placeholder="Please search here"> -->
                    <!-- <a href=""><i class="fa-solid fa-magnifying-glass"></i></a> -->
                    <!-- <a href="cart.php"><i class="fa-solid fa-cart-plus"></i></a> -->
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" onclick="return confirm('Are you sure you want to logout')"></i></i></a>

                </div>

                
            </header>
            <!-- header ends -->
            <div class="cart">

            <?php
                include "conn.php";

                $sql = "SELECT * FROM cart ORDER BY id DESC";
                $result = mysqli_query($conn,$sql) or die("Query failed");

                if(mysqli_num_rows($result)>0){ 
                    $sn =1;
            ?>

                    <h1>---------Your Cart---------</h1>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Adult</th>
                            <th>Children</th>
                            <th>Vehicle</th>
                            <th>Trip tp</th>
                            <th>Note</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['checkin'] ?></td>
                            <td><?php echo $row['checkout'] ?></td>
                            <td><?php echo $row['adult'] ?></td>
                            <td><?php echo $row['child'] ?></td>
                            <td><?php echo $row['vehicle'] ?></td>
                            <td><?php echo $row['trip'] ?></td>
                            <td><?php echo $row['notes'] ?></td>
                            <td><a href='edit.php?id=<?php echo $row['id']; ?> '><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href='delete.php?id=<?php echo $row['id']; ?>'><i class="fa-solid fa-trash-can" onclick="return confirm('Are you sure you want to delete')"></i></a></td>
                        </tr> 
                        <?php $sn++; } ?>
                        </tbody>
                    </table>
                    
                    <button id="submit2" type="submit" value="update"><a href="bookTrip.php">Add Now</a></button>
                    <?php
                }
                ?>
        </div>
  
    </div>


        
           
    </body>

    </html>
    <?php
} else {
    //  echo "you are not authorized";
    header('location:signIn.php?failed=true');
}
?>