<?php include ("include/common.php");

    
$name= mysqli_escape_string($con,$_POST['name']);
$email= mysqli_escape_string($con,$_POST['email']);
$message= mysqli_escape_string($con,$_POST['message']);


$query="INSERT INTO user_feedback(name,email,message) values('$name','$email','$message')";
$result= mysqli_query($con, $query)or die(mysqli_error($con));

header('Location:feedback.php');

?>