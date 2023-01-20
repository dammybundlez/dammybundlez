<?php
// PHP program to pop an alert
// message box on the screen
// Display the alert box 
echo '<script>alert("Welcome to Geeks for Geeks")</script>';

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-Cart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/g-cart.png" class="logo" alt="G G-Cart"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="active" href="shop.html"><i class="fa fa-shopping-bag bag"></i></a></li>
                <i id="close" class="fa fa-times times"></i>
            </ul>
            <div id="bar">
                <i style="padding: 0 20px 3px 0;" class="fa fa-shopping-bag"></i>
                <i class="fa fa-outdent"></i>
            </div>
        </div>
    </section>
    
    <section id="pageheader" class="blogheader "> 
       <h2>#readmore</h2>
       <p>Read all case studies about our products</p>
    </section>
    <section id="cart" class="section-p1" >
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Add</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i> </a></td>
                    <td><img src="img/sale.png" alt=""></td>
                    <td>T-Shirt by Adidas</td>
                    <td>115.45</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i> </a></td>
                    <td><img src="img/sale.png" alt=""></td>
                    <td>T-Shirt by Adidas</td>
                    <td>115.45</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i> </a></td>
                    <td><img src="img/sale.png" alt=""></td>
                    <td>T-Shirt by Adidas</td>
                    <td>115.45</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="cartadd" class="section-p1">
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
                    <td>$ 355</td>
                </tr>
                <tr>
                    <td>Free Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Procced to buy</button>
        </div>
    </section>
     <section class="section-p1" id="pagnations">
        <a href="">1</a>
        <a href="">2</a>
        <a href=""><i class="fa fa-arrow-right" style="font-size:10px"></i></a>
    </section>

    
    <footer id="footer" class="section-p1">
       <div>
            <div style="padding-bottom: 10px;"><span>Contact</span></div>
            <p><span style="font-weight: 10; font-weight: 500; color: rgb(37, 34, 34);">Address</span>: 23 Afolabi aina avenue</p>
            <p><span style="font-weight: 10; font-weight: 500; color: rgb(37, 34, 34);">Phone</span>: 080 8000 8000</p>
            <p><span style="font-weight: 10; font-weight: 500; color: rgb(37, 34, 34);">Hours</span>: 10:00 - 20:00, Mon-Sat</p>
            <div style="padding-top: 10px; padding-bottom: 10px;"><span>Follow Us</span></div>
            <div class="social" style="color: rgb(76, 92, 121); margin: 5px;">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-pinterest"></i>
                <i class="fa fa-youtube"></i>
            </div>
       </div>
       <div>
            <div style="padding-bottom: 10px;"><span>About</span></div>
            <p>About Us</p>
            <p>Delivry Information</p>
            <p>Privacy policy</p>
            <p>Terms and Conditions</p>
            <p>Contact Us</p>
       </div>
       <div>
        <div style="padding-bottom: 10px;"><span>My Account</span></div>
            <p>Sign In</p>
            <p>View Cart</p>
            <p>My Wallet</p>
            <p>Track My Order</p>
            <p>Help</p>
       </div>
       <div>
            <div style="padding-bottom: 10px;"><span>Install App</span></div>
            <p>From App Store or Google Play</p>

                <div id="appstore">
                    <div class="appstore1" style="display:flex; justify-content: center; align-items: center;
                        text-align: center; border: 1px solid rgb(76, 92, 121); padding: 6px 20px ; margin: 4px;  border-radius: 3px;">
                        <div>
                            <i style="margin-right: 7px; font-size: 23px;" class="fab fa-apple"></i>  
                        </div>                
                        <div>
                            <p style="font-size: 10px; color: black; font-weight: 600;">Downlaod on the  <br><span style="margin: 0;">App Store</span></p>     
                        </div> 
                    </div>
                    <div class="appstore1" style="display:flex; justify-content: center; align-items: center;
                    text-align: center; border: 1px solid rgb(76, 92, 121); padding: 11px 20px ; margin-top: 4px;">
                    <i style="margin-right: 7px;" class="fab fa-google-play"></i>
                    <p>Google Play</p>
                    </div>              
                </div><p style="display: inline-block;">Secured Payment Gateway</p>
       </div>
    </footer>
</body>
<script src="script.js"></script>
</html> -->