<?php
include 'fonctions.php' ;
$dbb = conx();
$res = $dbb->prepare('select * from produits');
  $res->execute();
?>
<?php include 'header.php' ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <?php foreach($res->fetchAll() as $row){ ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="/projet/admin/uploads/<?php echo $row['image'] ?>" alt="">
                        </div>
                        <h2><a href=""><?php echo $row['titre'] ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo $row['prix'] ?></ins>  
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" 
                            data-product_id="70" rel="nofollow" href="/add_to_cart.php?add-to-cart=<?php echo $row['id'] ?>">Add to cart</a>
                        </div>                       
                    </div>
                </div>
              <?php } ?>
            </div>
            
    
        </div>
    </div>

    <?php include 'footer.php' ?>