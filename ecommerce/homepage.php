<?php
/** @var $pdo \PDO */
require_once "database.php";

$statement = $pdo->prepare('SELECT * FROM products2');
$statement->execute();
$products2 = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement1 = $pdo->prepare('SELECT * FROM newarrival ORDER BY id');
$statement1->execute();
$products3 = $statement1->fetchAll(PDO::FETCH_ASSOC);

include_once "header.php";
include_once "navbar.php";


?>        
<div class="search2">
      <form action="shop.php" id="form">
      <input name="search" class="" type="text" placeh  older="search">
      <button type="submit">SEARCH</button>
      </form>
    </div>
<div class="container">
    <section id="hopebg">
        <div id="hope1">
            <ul>
                <div class="icon"><i class="fa fa-wrench" aria-hidden="true"></i> <li><a href="electronics.php">Electronics</a></li></div>
                <div class="icon"><i class="fa fa-female" aria-hidden="true"> </i> <li><a href="clothings.php">&nbsp;Clothings</a></li></div>
                <div class="icon"><i class="fa fa-medkit" aria-hidden="true"></i><li><a href="health.php">Health</a></li></div>
                <div class="icon"><i class="fa fa-tablet" aria-hidden="true"></i> <li><a href="phone.php">&nbsp;Phones & Tablets</a></li></div>
                <div class="icon"><i class="fa-solid fa-gamepad"></i> <li><a href="gaming.php"> Gamings</a></li></div>
                <div class="icon"><i class="fa-solid fa-baby"></i><li><a href="baby.php">&nbsp; Baby</a></li></div>
                <div class="icon"><i class="fa-solid fa-shirt"></i><li><a href="fashion.php"> Fashion</a></li></div>
                <div class="icon"><i class="fa fa-car" aria-hidden="true"></i><li><a href="automobile.php">&nbsp;Automobiles</a></li></div>
                <div class="icon"><i class="fa-solid fa-dumbbell"></i><li><a href="sportimg.php">Sportings Goods</a></li></div>
            </ul>
        </div>
        <div id="hope">
            <h4>Trade-in-offer</h4> 
            <h2>Super value deals</h2>
                <h1> On all products</h1> 
            <p>Save more with coupons & up to 70% off</p>
            <!-- <button>Shop now</button> -->
        </div>
    </section>
</div>
    
   
<div class="container">
    <section id="cart" >    
            <h3>Featured Products</h3>             
            <div class="cart-pro">               
                <?php foreach ($products2 as $product): ?> 
                  <a style="text-decoration:none" href="sproduct.php?id=<?= $product['id']?>">  
                    <div class="cart-pro-con">                 
                    <img src="<?= $product['image']?>" alt="">
                    <div class="des">
                        <span><?= $product['brand']?></span>
                        <h5><?= $product['product']?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;<?= $product['price']?></h4>
                    </div>              
                <!-- <a href=""><i class="fas fa-shopping-cart cart"></i></a>                -->
                    </div> </a>
                <?php endforeach; ?>
                
            </div>                  
    </section> 
</div>

   <div class="container">
    <section id="cart">
        <h3>New Arrivals</h3>
        <div class="cart-pro"> 
            <?php foreach ($products3 as $product): ?>      
                <a style="text-decoration:none" href="newarrivalsproduct.php?id=<?= $product['id']?>">
                <div class="cart-pro-con">                 
                <img src="<?= $product['image']?>" alt="">
                <div class="des">
                    <span><?= $product['brand']?></span>
                    <h5><?= $product['product']?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;<?= $product['price']?></h4>
                </div>              
                </div> 
            </a>
            <?php endforeach; ?>
     </div>
    </section> 
</div>

<div class="container">
   <section id="feature" >
        <div class="fe-box">
            <img style="width: 85%" src="img\freeshipping.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img style="width:70%" src="img/order.png" alt="">
            <h6>Order Online</h6>
        </div>
        <div class="fe-box">
            <img style="width:100%" src="img/save.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img style="width:100%" src="img/promotion.png" alt="">
            <h6>Promo Ads
            </h6>
        </div>
        <div class="fe-box">
            <img style="width:100%" src="img/sale.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img style="width:100%" src="img/support.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>
</div>
   
<section id="banner" class="section-m1">
</section>

    
<div class="container">
<section id="bannerad">
    <div class="bannerad-pro">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>Check Items</span>
        <button class="white">GO!!!</button>
    </div>   
    <div class="bannerad-pro">
        <h4>January Season</h4>
        <h2>Awoof sale</h2>
        <span>Check Items</span>
        <button class="white">GO!!!</button>
    </div>      
</section>
</div>

<div class="container">
<section id="bannerad1">
    <div class="bannerad-pro1" style="">
        <h2>SEASONAL SALE</h2>
        <h3>Winter collection -50% Off</h3>
    </div>   
    <div class="bannerad-pro1" style="">
        <h2>SEASONAL SALE</h2>
        <h3>Spring/Summer 2022</h3>          
    </div>  
    <div class="bannerad-pro1" style="">
        <h2>SEASONAL SALE</h2>
        <h3>New Trendy Prints</h3>
    </div>   
</section>
</div>
    
    <?php include_once "footer.php"?>
    </body>
<script src="script.js"></script>
</html>