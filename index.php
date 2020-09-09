<?php 
require ("include/common.php");
if (isset($_SESSION['email'])) { header('location: products.php'); }
?>

    <head>

     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>CakeParlour Store</title>
        
    <link href="css/index.css" rel="stylesheet" type="text/css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     
        <?php include("include/header.php");?>
        
        <div class="content">
            <div class="bannerimage">
                <img src="img/demo1.jpg" alt="introductive">
                <div class="innerbannerimage">
                    <div class="bannercontent">
                        <h1>Biggest Online Cake Shop</h1>
                        <p>Flat 20% OFF on all products</p>
                        <a href="products.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
             <div class="row">
                <a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="img/1.jpg" alt="cake"></img>
                    <div class="caption">
                       <center>
                         <h4>Buy Now</h4>
                        </center>
                 </div></a>

                <a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="img/10.jpg" alt="cake"></img>
                   <div class="caption">
                      <center>
                        <h4>Buy Now</h4>
                       </center>
                    </div>
                </a>
                <a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="img/11.jpg" alt="cake"></img>
                   <div class="caption">
                      <center>
                        <h4>Buy Now</h4>
                      </center>
                    </div>
                </a>
            </div>
        </div>
        
<?php include("include/footer.php");
?>
</body>
    
</html>

