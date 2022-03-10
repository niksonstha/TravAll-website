<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravAll-Live life with no excuses, travel with no regret</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/f93fb3145a.js" crossorigin="anonymous"></script> -->
</head>

<body>

    <div class="main">
        <!-- header starts  -->
        <header>
            <div class="logo"><a href="home.php"><nav>T</nav>rav <nav>A</nav> ll</div>
            
            <div class="navbar">
            
                <a href="home.html">HOME</a>
                <a href="">PACKAGES</a>
                <a href="">SERVICES</a>
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
                
            </div>
            
            <div class="icons">
                
                <input type="text" id="search" placeholder="Please search here"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                <a href="signIn.php"><i class="fa-solid fa-user"></i></a>
            </div>

        </header>
        <!-- header ends -->

       <div class="form">
           <form action="signupInsert.php" method="post">
               <h2>Sign Up Form</h2>
               <div class="fname">
                   <label>First Name:</label> 
                   <input type="text" name="fname" id="fname" required placeholder="Enter your first name">

               </div>
               <div class="lname">
                   <label>Last Name:</label>
                   <input type="text" name="lname" id="fname" required placeholder="Enter your last name">

               </div>
               <div class="uname">
                   <label>Username:</label>
                   <input type="text" name="uname" id="uname" required placeholder="Enter your last name">

               </div>
               <div class="email">
                   <label>Email:</label>
                   <input type="email" name="email" id="email" required placeholder="Enter your email">

               </div>
               <div class="password">
                   <label>Password:</label>
                   <input type="password" name="password" id="password" required placeholder="Enter your password">

               </div>
              
               <input type="submit" value="Register" name="submit" id="btn">
               
               
            </form>
       </div>



    </div>

</body>

</html>