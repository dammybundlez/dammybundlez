<?php
require_once 'header.php';
require_once 'database.php';
require_once "navbar.php";


$id = 0;
if (isset($_GET['id'])){
    $id = ((INT)($_GET['id']));
}
$statement = $pdo->prepare("SELECT * FROM products2 WHERE id = :id ");
$statement->bindValue(':id' , $id);
$statement->execute();
$products2 = $statement->fetch(PDO::FETCH_ASSOC);

$statement2 = $pdo->prepare('SELECT * FROM products2 ORDER BY id');
$statement2->execute();
$products1 = $statement2->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container" id="sproductitem">
<section id="productsec">
    <div id="bigs">
     <img style="width: 100%;" src="<?= $products2['image']?>">
    </div>
    <div class="imgtext" id="imgtext">           
        <h6><?= $products2['brand']?></h6>
        <h4><?= $products2['product']?></h4>
        <h2>&#x20A6; <?= $products2['price']?></h2>
        <select name="size" id="size">
            <option value="select your size">Select your size</option>
            <option value="Extra Large">Extra Large</option>
            <option value="Large">Large</option>
            <option value="Medium">Medium</option>
            <option value="Small">Small</option>      
        </select>
        <input type="number" value="1">
        <button class="normal">Add to Cart</button>
        <h4>Product Details</h4>
        <span><?= $products2['description']?></span>
    </div>
</section>
<div id="hope2">
                Delivery Details
</div>
</div>

<div class="container" >
        <section id="cart" style="margin:20px 0" >    
                <h3>Featured Products</h3>                
                <div class="cart-pro">                   
                    <?php foreach ($products1 as $product): ?>   
                        <a style="text-decoration:none" href="sproduct.php?id=<?=$product['id']?>">  
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
                            <h4> &#x20A6;  <?= $product['price']?></h4>
                        </div>              
                    <!-- <a href=""><i class="fas fa-shopping-cart cart"></i></a>                -->
                      </div> </a>
                    <?php endforeach; ?>                   
                </div>                  
        </section> 
</div>


<?php include_once 'footer.php'?>
</body>
</html>