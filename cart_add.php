<?php
include ("include/common.php");
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$insert_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id[0]', '$item_id', 'Added to cart')";
$result= mysqli_query($con, $insert_query)or die($con);
header('location:products.php');
?>
