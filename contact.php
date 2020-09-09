<?php
include ("include/common.php");
?>

<html>
    <head>
        <title>Contact Us | Cake Parlour Store.com</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/bootstrap.min.js"></script>
    </head>
        <body style="padding-top: 50px;">
    
    
    <?php include ("include/header.php"); ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           
                <form  method="post" action="user_feedback.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <button type="submit" name="submit" class="btn btn-primary">submit</button><br><br>
				    </div>
				</form>
        </div>
    </div>



  <div class="col-sm-3">
	       <div class="contactinfo">
	           <h2 class="title">Contact Info</h2>
	               <address>
	               	<p>SHUBHODEEP ADAK</p>
				    <p>Don Bosco Hostel</p>
				    <p>Kumbalagodu,Mysore Road,</p>
				    <p>Karnataka,INDIA</p>
				    <p>Phone:(+91)  77177 52595 </p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: shubhodeepadak9@gmail.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On:</h2>
                   <img src="img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0">
                   <img src="img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;">
               </div>
            </div>
        </div>
    </div>
</div>


 <?php include ("include/footer.php"); ?>
    

</body>