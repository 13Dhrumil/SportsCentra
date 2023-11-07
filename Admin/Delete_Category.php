<?php
$con=mysqli_connect("localhost","root","","admin");
$ID=$_GET['id'];
$q="delete from category where Category_id=$ID";
if(mysqli_query($con,$q))
{
   header('Location:Category.php');
}

?>