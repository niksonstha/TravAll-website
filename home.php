<?php

include "conn.php";
session_start();

if (!isset($_SESSION['uname'])) {
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
        <link rel="stylesheet" href="font.css">
        <!-- <link rel="stylesheet" href="font2.css"> -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        
        <!-- <script src="https://kit.fontawesome.com/f93fb3145a.js" crossorigin="anonymous"></script> -->
    </head>

    <body>
        <div class="main">
            <!-- header starts  -->
            <header>
                <div class="logo"><a href="#">
                        <nav>T</nav>rav <nav>A</nav> ll</div>

                <div class="navbar">

                    <a href="">HOME</a>
                    <a href="packages.php">PACKAGES</a>
                    <a href="">SERVICES</a>
                    <a href="">ABOUT US</a>
                    <a href="contact.php">CONTACT US</a>

                </div>

                <div class="icons">

                    <input type="text" id="search" placeholder="Please search here">
                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="cart.php"><i class="fa-solid fa-cart-plus"></i></a>
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" onclick="return confirm('Are you sure you want to logout')"></i></i></a>

                </div>

            </header>
            <!-- header ends -->
            <div class="content">

                <h1>Travell Itinerary</h1>
                <h5> “A journey of a thousand miles begins with a single step”</h5>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque voluptatem esse beatae corporis, deleniti voluptate voluptates aliquam inventore ex quod doloremque expedita est fugiat ut non, eligendi adipisci quia est fugiat ut non, eligendi adipisci quia.</p>

                <button class="cn"><a href="bookTrip.php">BOOK A TRIP</a></button>

            </div>
        </div>


        <div class="container">
            <div class="heading">
                <h4>WE'RE OFFERING THESE POPULAR SERVICES</h4>
                <h2>Getting Adventure with Services</h2>


            </div>

            <div class="cards">
                <div class="card1">
                    <h3>Desert Riding Turning <br> So much Flowery</h3><br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum sequi ex deserunt ullam aperiam accusamus corporis repellendus consectetur illo totam?</p>
                    <p class="p1"><a href="">READ MORE</a></p>
                    <img src="image/bg5.jpg" alt="">
                </div>

                <div class="card2">
                    <h3>Relaxation in the <br>
                        Local Beach Campfire</h3><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolor quo asperiores obcaecati quasi quidem inventore labore fugiat fuga natus?</p>
                    <p class="p2"><a href="">READ MORE</a></p>
                    <img src="image/bg6.jpg" alt="">
                </div>

                <div class="card3">
                    <h3>Forest Exploration <br> with Energy Package</h3><br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, quisquam id dignissimos quae sapiente et fuga error distinctio exercitationem temporibus!</p>
                    <p class="p3"><a href="">READ MORE</a></p>
                    <img src="image/bg7.jpg" alt="">
                </div>
            </div>
        </div>


        <div class="book">
            <div class="content2">

                <h2>Get Ready for Real <br> time Adventure</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus impedit nihil eos itaque est unde sed, rerum hic! Dicta assumenda mollitia asperiores aliquid culpa, expedita voluptate quas perferendis praesentium in distinctio. Praesentium.</p>


            </div>
            <form action="bookTrip.php">
                <button type="submit" name="btn" id="btn-c">BOOK A TRIP</button>
            </form>
        </div>


        <div class="package">
            <div class="heading2">
                <h4>WE’RE OFFERING THESE TRIP PACKAGES</h4>
                <h2>Famous Trips Packages</h2>
            </div>

            <div class="cards">
                <div class="card1">
                    <img src="image/bg.jpg" alt="">
                    <div class="icon">
                        <i class="fa-solid fa-location-arrow"></i><label class="l">Mustang</label>
                        <i class="fa-solid fa-calendar-days"></i><label class="d">5 days 6 nights</label>
                    </div>
                    <p>The best view comes after the hardest climb.</p>
                    <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ipsum.</p>
                    <a href="">READ MORE</a>

                    <!-- <img src="bg5.jpg" alt="desert" srcset=""> -->
                </div>

                <div class="card2">
                    <img src="image/bg.jpg" alt="">
                    <div class="icon">
                        <i class="fa-solid fa-location-arrow"></i><label class="l">Mustang</label>
                        <i class="fa-solid fa-calendar-days"></i><label class="d">5 days 6 nights</label>
                    </div>
                    <p>The best view comes after the hardest climb.</p>
                    <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ipsum.</p>
                    <a href="">READ MORE</a>
                </div>

                <div class="card3">
                    <img src="image/bg.jpg" alt="">
                    <div class="icon">
                        <i class="fa-solid fa-location-arrow"></i><label class="l">Mustang</label>
                        <i class="fa-solid fa-calendar-days"></i><label class="d">5 days 6 nights</label>
                    </div>
                    <p>The best view comes after the hardest climb.</p>
                    <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ipsum.</p>
                    <a href="">READ MORE</a>
                </div>
            </div>


        </div>

        <div class="place">
            <div class="heading2">
                <h4>WE’RE OFFERING THESE TRIP PACKAGES</h4>
                <h2>Popular Places Around the Nepal</h2>
            </div>
            <div class="img">
                <img src="image/p1.jpg" class="img1" alt=""><img src="image/p2.jpg" class="img2" alt=""><img src="image/p3.jpg" class="img3" alt=""><img src="image/p4.jpg" class="img4" alt="">
            </div>
        </div>

        <div class="member">
            <div class="heading2">
                <h4>WE’RE OFFERING THESE TRIP PACKAGES</h4>
                <h2>Intelligent Team Members</h2>
            </div>
            <div class="photo">
                <div class="pp1">
                    <img src="image/pp1.png" alt="">
                </div>
                <div class="pp2">
                    <img src="image/pp1.png" alt="">
                </div>
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

