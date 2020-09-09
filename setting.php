<?php
 include ("include\common.php");
if(!isset($_SESSION['email']))
{    
 header('Location:index.php');
}?>

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
        <title>CakeParlour Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
              
         <?php include("include/header.php");?>
        
        <div class="container-fluid">
            <div class="row row_style">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form action="setting_script.php" method="POST">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old password" name="oldpassword"  required = "true">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name=" newpassword" required = "true">
                            </div>
                             <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" name=" confirmpassword" required = "true">
                            </div>
                            
                            
                            <button type="submit" name="submit" class="btn btn-primary">change</button>
                        </form>
                    </div>
                </div>
            </div>
        
       <?php include("include/footer.php");
?>
    </body>
</html>
