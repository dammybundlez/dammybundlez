<!DOCTYPE html>
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
                <li><a  href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a class="active"href="contact.html">Contact</a></li>
                <li><a href="shop.html"><i class="fa fa-shopping-bag bag"></i></a></li>
                <i id="close" class="fa fa-times times"></i>
            </ul>
            <div id="bar">
                <a href="cart.html"><i style="padding: 0 20px 3px 0;" class="fa fa-shopping-bag"></i></a>
                <i class="fa fa-outdent"></i>
            </div>
        </div>
    </section>
    
    <section id="contactheader" class="contactheder" style="text-align:center"> 
        <h2>#Letstalk</h2>
        <p>conversation matters</p>
     </section>

     <section id="contact" class="contact">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>56 balogun street allen</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>333 444 5555, 111 222 3333</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Saturday: 9.00am t0 16.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18224.95232436816!2d3.
            3331225829813613!3d6.601473964751946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x
            103b91c06598afcf%3A0x31bba15235214e5c!2sBalogun%20Street!5e0!3m2!1sen!2sng!4v1671468613607
            !5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
             referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </section>

     <section id="formdetails">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We would love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="ppl">
            <div>
                <img src="img/maleprofile.png" width="10%" alt="">
                <p><span>John Doe</span> Senior Marketer Manager <br>
                    Phone: 222 333 2222 <br> Email: Jonhdoe@example.com</p>
            </div>
            <div>
                <img src="img/maleprofile.png" width="10%" alt="">
                <p><span>Jane Doe</span> Junior Marketer Manager <br>
                    Phone: 222 333 2222 <br> Email: Janedoe@example.com</p>
            </div>
            <div>
                <img src="img/maleprofile.png" width="10%" alt="">
                <p><span>Frank Doe</span> Senior Distrbution Manager <br>
                     Phone: 222 333 2222 <br> Email: Frankdoe@example.com</p>
            </div>
        </div>
     </section>
    <section id="newsletter">
        <div class="newsletter1">
        <h4>Sign Up for Newsletter</h4>
        <p>Get email updates about our latest shops and <span style="color: rgb(214, 139, 35);">updated offers</span></p>
        </div>
        <div class="newsletter2">
            <form action="" id="form">
                <input type="text" placeholder="Enter Your Email">
                <button class="normal">Sign Up</button>
            </form>
        </div>
    </section>

    <footer id="footer">
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
                            <p style="font-size: 10px; color: black; font-weight: 600;">Downlaod on the</p>
                            <h4 style="margin: 0;">App Store</h4>
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
</html>