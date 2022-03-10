<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravAll-Live life with no excuses, travel with no regret</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/f93fb3145a.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="main">
        <!-- header starts  -->
        <header>
            <div class="logo"><a href="home.php"><nav>T</nav>rav <nav>A</nav> ll</div>
            
            <div class="navbar">
            
                <a href="home.php">HOME</a>
                <a href="">PACKAGES</a>
                <a href="">SERVICES</a>
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
                
            </div>
            
            <div class="icons">
                
                <input type="text" id="search" placeholder="Please search here"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                <a href=""><i class="fa-solid fa-user"></i></a>
            </div>

        </header>
     <!-- header ends -->
    

     <div class="form2">
       
        <form action="signing.php" method="post">
            <h2>Sign In Form</h2>
            <div class="email2">
                <label>Email:</label> 
                <input type="email" name="email" id="email" placeholder="Enter your email" required>

            </div>
            <div class="password2">
                <label>Password:</label>
                <input type="password" name="password" id="password2" placeholder="Enter your password" required>

            </div>
            
            
            <div class="btn">
                <input type="submit" value="Login" class="btn2">
            </div>
        </form>
        <form action="signup.php">


            <input type="submit" value="Create new account" class="btn2">
        </form>
        


       
    </div>

    </div>

</body>

</html>