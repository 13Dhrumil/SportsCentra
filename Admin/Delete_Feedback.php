<?php
$con=mysqli_connect("localhost","root","","user");
$ID=$_GET['id'];
$q="delete from feedback where ID=$ID";
if(mysqli_query($con,$q))
{
   header('Location:Feedback.php');
}

?>