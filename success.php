<?php include 'include/common.php';
if(!isset($_SESSION['email']))
{ header('Location:index.php');}
$user_id=$_SESSION['id'];
$query="UPDATE users_items SET status='Confirmed' WHERE users_items.user_id='$user_id[0]' and users_items.status='Added to cart'";
$result=mysqli_query($con, $query)or die(mysqli_error($con ));
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Order Placed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("include/header.php");?>
        
  <div class="container">
            <div class="jumbotron row_style">
                 <h2>Your order is successfully placed</h2>
                 <p>  Thank you for shopping with us. <a href="products.php"><b>Click here </b></a> to purchase any other item. </p>
      </div>
    </div>
        
   
       
<?php include("include/footer.php");
?>
        
    </body>
</html>
