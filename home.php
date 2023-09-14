<?php

?>

<?php include 'components/header.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <!-- header section starts  -->

 
    <header class="header">

    <nav>
        <div class="logo">
            <img src="image/" alt=""> <i></i>
        </div>
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="contacts.php">contacts</a></li>
            <li><a href="#" class="btn"> log in</a> </li><!-- Added onclick event to open the login popup -->
        </ul>
    </nav> 
    
    </nav>
    
    <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>
    

    <div class="home-content">
    <img src="image/brown.jpg" alt="">
    <div class="home-text-content">
        h1>Welcome To Web Lab </h1>
        <p>Web Prog Laboratory Activity</p>
        <a href="#">Learn More</a>
     </div>

    </div>

    <?php include 'components/footer.php'; ?>
