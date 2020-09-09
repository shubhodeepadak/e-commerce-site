<?php 
require ("include/common.php");
include ("modal.php");

?>



<html>
    <head>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Welcome to CakeParlour store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
          <?php include("include/header.php");?>
          <?php include("include/check_if_added.php");?>
      
        
        <div class="container">
            <div class="jumbotron row_style">
                 <h1> Welcome to our E-CakeParlour Store!</h1>
                 <p> We have the best strawberry, chocolates and vanilla cakes for you. No need to hunt around, we have all in one place</p>
      </div>
    </div>


        <div class="container">
               <div class="row text-center">
                     <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="img/1.jpg" alt="cakes">
                              <div class="caption">
                                <h3>round lighted cake with strawberry</h3>
                                 <p>Price Rs 2559.00</p>

                                </div>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
                             <?php } else { if(check_if_added(1))
                             { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                              else { ?>
                             <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                      </div>

                   <div class="col-sm-6 col-md-3 thumbnail">
                      <img src="img/2.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Black Forest Cake</h3><br>
                            <p>Price Rs 599.00</p>
                            
                        </div> 
                       <?php if (!isset($_SESSION['email'])) { ?> 
                       <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
                       <?php } else { if(check_if_added(2))
                        { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                         else { ?>
                            <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                  </div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/3.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Ferrero Rochers Chocolate Cake</h3>
                            <p>Price Rs 1999.00</p>
                        </div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(3))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>


<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/4.jpg" alt="cakes">
                        <div class="caption">
                            <h3> Dillicious Creamy Vanilla Cake</h3>
                            <p>Price Rs 699.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added(4))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?></div>
</div>
</div>

<div class="container">
<div class="row text-center">
<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/5.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Glass Cup Lot On White Surface</h3>
                            <p>Price Rs 1549.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(5))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?></div>

<div class="col-sm-6 col-md-3 thumbnail">
    <img src="img/13.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Round Chocolate Coated Cake</h3>
                            <p>Price Rs 899.00</p>

</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(6))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/14.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Yummy Rounded Pineapple Cake</h3>
                            <p>Price Rs 999.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(7))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/8.jpg" alt="cakes">
                        <div class="caption">
                            <h3>White And Red Cake With Strawberry On Top</h3>
                            <p>Price Rs 2199.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(8))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

</div>
</div>
<div class="container">
<div class="row text-center">
<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/9.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Brown And White Cake With Strawberry On Top</h3>
                            <p>Price Rs 2399.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(9))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
 <img src="img/10.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Round Red And White Cake With Cookies</h3>
                            <p>Price Rs 899.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(10))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/11.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Chocolate Cookie On Blue Surface Cake</h3>
                            <p>Price Rs 4299.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(11))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="img/12.jpg" alt="cakes">
                        <div class="caption">
                            <h3>Disney Frozen Vanilla Cake</h3>
                            <p>Price Rs 1700.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else { if(check_if_added(12))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

</div>
</div>
<?php include("include/footer.php");
?>
</body>
</html>
