<?php

include "./includes/connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO contact (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message') ");


    if ($query) {
        $alert = "Your mail has been submitted";
        $color = "success";
    }
}

?>








<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-sdge">
    <meta name="viewport" content="width-device, initial-scale=1.0">
    <title>Afrorock Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    
   <link rel="stylesheet" href="new-project.css">
</head>
    
    
<body>
<?php if (isset($alert)) {
    ?>
        <div class="alert alert-<?php echo $color ?>">
            <?php echo $alert ?>
        </div>
    <?php
    }
    ?>
    <section id="header">
        <a href=""><img src="images/Afrorock%20logo%2011.jpeg" class="logo" alt="" height="50" width="150"></a>
         <div>
            <ul id="navbar">
                <li><a href="new-project-home.php">Home</a></li>
                <li><a href="new-project-shop.php">Shop</a></li>
                <li><a href="new-project-blog.php">Blog</a></li>
                <li><a href="new-project-about.php">About</a></li>
                <li><a class="active" href="new-project-contact.php">Contact</a></li>
                <li id="lg-bag"><a href="new-project-cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="new-project-cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, we love to hear from you</p>
    </section>
    
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>289 Ipaja Road Agege Lagos</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 16:00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d667.9053782578771!2d3.303382362816662!3d6.623871736770883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b911b86d49eff%3A0x85033121e3d42414!2s293%20Ipaja%20Rd%2C%20Magbon%20102212%2C%20Lagos!5e0!3m2!1sen!2sng!4v1642868850281!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    
    <section id="form-details">
        <form action="" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="name" placeholder="Your Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal" name="submit">Submit</button>
        </form>
        
        <div class="people">
            <div>
                <img src="images/Afrorock%20ceo.jpeg" alt="">
                <p><span>Olayinka Jegede</span>Senior Marketing Manager <br> Phone: +234 704 453 5434 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="images/virus%201.jpeg" alt="">
                <p><span>Tanimowo Ayomide</span>Senior Marketing Manager <br> Phone: +234 704 453 5434 <br> Email: contact@example.com</p>
            </div>
        </div>
    </section>
    
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>specail offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
    
    
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="images/Afrorock%20logo%2011.jpeg" alt="" width="200px">
            <h4>Contact</h4>
            <p><strong>Address: </strong>289 Ipaja Road, Agege, Lagos</p>
            <p><strong>Phone: </strong>+234 7033 329 5471</p>
            <p><strong>Hours: </strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us </h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="images/app%20store.jpeg" alt="" width="200px">
                <img src="images/google%20play.jpeg" alt="" width="200px">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="images/payment%20gateway.jpeg" alt="" width="290px">
        </div>
        
        <div class="copyright">
            <p>© 2022, Afrorock Website</p>
        </div>
    </footer>
    
    <script src="new-project.js"></script>
</body>


</html>