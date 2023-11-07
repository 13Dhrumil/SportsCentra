<?php
$con=mysqli_connect("localhost","root","",'user');
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Email_Address=$_POST['Email_Address'];
    $Phone_Number=$_POST['Phone_Number'];
    $q="insert into feedback(Name,Email_Address,Phone_Number)values('$Name','$Email_Address','$Phone_Number')";
    if(mysqli_query($con,$q))
    {
        header('Location:Contact.php');
        echo "Record into successfully";
    }
    else
    {
        echo "Record are not success";
    }
}

?>

<html>
    <head>
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        
        <link href="../CSS/Feedback.css" rel="stylesheet">
        <link href="../CSS/User_Header.css" rel="stylesheet">
        <link href="../CSS/User_Footer.css" rel="stylesheet">

        <style>
            h1
{ 
    margin-top: 40px;
    font-family: 'Times New Roman';
    font-weight: bold;
}

.all_css
{
    font-weight: bold;
}

.clear
{
    margin-left: 20px;
}

.img
{
    margin-top: 130px; 
    height: 150px;
    width: 300px;
    margin-left: 100px;
}

.boder
{
    margin-top:100px;
    margin-left: 510px;
    padding: 50px;
    border-radius: 20px;
    width: 500px;
    box-shadow: 10px 20px 30px;
    background-color:whitesmoke;
}
            </style>
          
    </head>
    <body>
        
        <?php
            include('Header.php');
        ?>
        <center class = "boder">
        <!-- <img src = "../Image/logo.jpg" class = "img">  -->
        
            <h1>Feedback</h1>
            <form action="#" method="post">
                <table>
                    <tr class="all_css">
                        <td>Name : </td> <td><input type = "text" name='Name' placeholder = "Enter your name"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Email Address : </td> <td><input type = "mail" name='Email_Address' placeholder = "Enter your email address"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Phone Number : </td> <td><input type = "text"name='Phone_Number' placeholder = "Enter phone number"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" name='submit'>
               
            </form>
        </center>
        <?php
            include('Footer.php');
        ?>
    </body>
</html>