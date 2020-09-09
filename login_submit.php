  
<?php 
include ("include/common.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      $password = MD5($password);
      
      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 0) {
      	$error = "Your Login Name or Password is invalid";
        
      	header('location:index.php? message=wrong credentials.');
      
    
      }else {
      	$_SESSION['id']= mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    header('location:products.php');
         
      }
   }
?>