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
    
    <section id="header">
        <a href=""><img src="images/Afrorock%20logo%2011.jpeg" class="logo" alt="" height="50" width="150"></a>
         <div>
            <ul id="navbar">
                <li><a href="new-project-home.php">Home</a></li>
                <li><a href="new-project-shop.php">Shop</a></li>
                <li><a href="new-project-blog.php">Blog</a></li>
                <li><a href="new-project-about.php">About</a></li>
                <li><a href="new-project-contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="new-project-cart.php"><i class="far fa-shopping-bag"></i></a></li>
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
    
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quanitity</td>
                    <td>Subtotal</td>        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/A1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/B1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/C1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$300.00</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$330.00</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to Checkout</button>
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