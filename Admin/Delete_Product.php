<?php
$con=mysqli_connect("localhost","root","","admin");
$ID=$_GET['id'];
$q="delete from product where Product_id=$ID";
if(mysqli_query($con,$q))
{
   header('Location:Product.php');
}

?>