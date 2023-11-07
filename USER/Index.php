
 <?php
$con=mysqli_connect("localhost","root","",'user');
if(isset($_POST['submit']))
{
    $User_name=$_POST['User_name'];
    $Password=$_POST['Password'];
    $q="insert into login(User_name,Password)values('$User_name','$Password')";
    if(mysqli_query($con,$q))
    {
        header('Location:Home.php');
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
        <title>User Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
        <!-- <link href="../CSS/User_Index.css" rel="stylesheet"> -->

        
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
        <center class = "boder">
            <h1 class="h1">LOGIN</h1><br>
            <form action="#" method="post">
                <table>
                    <tr class="all_css">
                        <td>User Name :  </td> <td><input type="text" name='User_name' placeholder="Enter User Name"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Password :  </td> <td><input type="password" name='Password' placeholder="Password"></td>
                    </tr>                   
                </table>
                <!-- <a href = "Reset_Password.php" class = "all_css resetpass">Reset Password?</a>  -->
                <br><br>
                 <!-- <a href = "Home.php"> -->
                    <input type="submit" name='submit'> 
                </a>
            </form>
        </center>
    </body>
</html>