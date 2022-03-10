<?php

include "conn.php";
session_start();

if (!isset($_SESSION['email'])) {
    header('location:signIn.php?failed=true');
}
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

       


            <!-- header starts  -->
            <header>
                <div class="logo"><a href="home.php">
                        <nav>T</nav>rav <nav>A</nav> ll</div>

                <div class="navbar">

                    <a href="home.php">HOME</a>
                    <a href="packages.php">PACKAGES</a>
                    <a href="">SERVICES</a>
                    <a href="">ABOUT US</a>
                    <a href="">CONTACT US</a>

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
                <h1>Cart Update</h1>

            </div>

            
        </div>
        
    <div class="bookTrip">
        
             <div class="content_left">
                    <?php
                        include "conn.php";
                        $id = $_GET['id'];
                        $sql = "select * from cart where id =".$id;
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){

                        
                    ?>
        
                        <form action="update.php?id=<?php echo $id; ?> " method="post">
                            <div class="same">
                                <div class="sname">
                                    <label>Full name</label> 
                                    <input type="text" name="name" class="name" value="<?php echo $row['name'] ?>">

                                </div>
                                <div class="sphone">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="phone" value="<?php echo $row['phone'] ?>">
                                    
                                </div>
                            </div>
                            Email <input type="email" name="email" class="email" value="<?php echo $row['email'] ?>">
                            Date Check In <input type="date" name="checkin" class="checkin" value="<?php echo $row['checkin'] ?>">
                            Date Check Out <input type="date" name="checkout" class="checkout" value="<?php echo $row['checkout'] ?>">
                            Adults <input type="number" name="adults" class="adult" value="<?php echo $row['adult'] ?>">
                            Children <input type="number" name="child" class="child" value="<?php echo $row['child'] ?>">

                            <div class="opt">
                                <label>Vehicle</label> 
                                <select name="vehicle" id="vehicle" value="<?php echo $row['vehicle'] ?>">
                                    <option disabled>Please select</option>
                                    <option >Two wheel</option>
                                    <option >Four wheel</option>
                                    <option >Air ways</option>
                                    <option >Nothing</option>
                                </select>

                                <label>Trip to</label> 
                                <select name="trip" id="trip" value="<?php echo $row['trip'] ?>">
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
                            Notes <textarea name="note" id="note" cols="30" rows="10" value="<?php echo $row['note']; ?>"></textarea>

                            <div class="btn">

                            <button id="submit2" type="submit" value="update">Update</button>
                            </div>
                
                        </form>
                 <?php } }?>                   
        
            </div>
                        
            <div class="content_right">

                <p>Address:</p>
                <h2>98 West 21th Street,<br>
                 Suite 721 New York NY 10016</h2>
                 <p>Phone:</p>
                 <h2>(+1) 435 3533</h2>
                 <p>Email:</p>
                 <h2>sthanikson10@gmail.com</h2>

            </div>

    </div> 
    
    <div class="about">
            <div class="aboutPage">
                <div class="aa">
                    <label>About Agency</label>

                </div>
                <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to</p>
            </div>
            <div class="navLinks">
                <div class="nl">
                    <label>Navigation Links</label>

                </div>
                <a href="">HOME</a>
                <a href="">PACKAGES</a>
                <a href="">SERVICES</a>
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
            </div>
            <div class="feed">
                <div class="if">
                    <label>Instgram Feed</label>

                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore sed vero molestiae quod a suscipit aut earum unde fugiat, cupiditate autem, quasi voluptate porro quia, quas corporis eos amet tempore?</p>
            </div>

        </div>

        <div class="footer">
            Copyright ©2022 All rights reserved | This template is made with by NIKSON SHRESTHA
        </div>
           
    </body>

    </html>

   