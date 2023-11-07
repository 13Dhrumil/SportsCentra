
<?php
$con=mysqli_connect("localhost","root","",'user');
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Email_Address=$_POST['Email_Address'];
    $Contact_Number=$_POST['Contact_Number'];
    $City=$_POST['City'];
    $q="insert into Order1(Name,Email_Address,Contact_Number,City)values('$Name','$Email_Address','$Contact_Number','$City')";
    if(mysqli_query($con,$q))
    {
        header('Location:View_Order.php');
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
        <title>Order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        
        <link href="../CSS/Order.css" rel="stylesheet">
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

.u
{
    text-decoration: none;
}

.add
{
    font-family: 'Times New Roman';
    font-weight: bold;
    margin-top:70px ;
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
    margin-top:80px;
    margin-left: 510px;
    padding: 10px;
    border-radius: 10px;
    width: 400px;
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
            <h1 class = "h1">Order</h1>
            <form action="" method="post">
                <table>
                    <tr class="all_css">
                        <td>Name : </td> <td><input type = "text" name='Name' placeholder = "Enter your Name"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Email Address : </td> <td><input type = "text" name='Email_Address' placeholder = "Enter your address"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Contact Number : </td> <td><input type = "text"  name='Contact_Number' placeholder = "Enter your number"></td>
                    </tr>

                    <tr class="all_css">
                        <td>City : </td> <td><input type = "text" name='City' placeholder = "Enter your city"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="submit">
                <!-- <button type="clear" class="btn btn-dark all_css clear">Clear</button> -->
            </form>
        </center>

        <center>
            <a href="View_Order.php" class="u"><h4 class="add">View Order</h4></a>
        </center>

        <?php
            include('Footer.php');
        ?>
    </body>
</html>