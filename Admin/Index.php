
<head>
        <html>
        <title>Admin Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
        <link href="../CSS/Index.css" rel="stylesheet">
    </head>
    <body class="bg">
        <center>
            <form action="#" class="border" method="post">
            <h1 class="h1">LOGIN</h1><br>
            <table cellpadding=010 cellspacing=20>
                <tr class="all_css">
                    <tr class="all_css">
                        <td>Admin Name :  </td> <td><input type="text" name='A_name' placeholder="Enter Admin Name" class="input_type" autofocus></td>
                    </tr>

                    <tr class="all_css">
                        <td>Password :  </td> <td><input type="password" name='A_pass' placeholder="Password" class="input_type"></td>
                    </tr>                   
                </table>
                <br>
            
                    <input type="submit"  name='login' value='login' class="btn btn-dark all_css">
            </form>
        </center>
    </body>
</html  >


<?php
$con=mysqli_connect("localhost","root","",'admin');
if(isset($_POST['login']))
{
    //echo "hi";
    $user=$_POST['A_name'];
    $pass=$_POST['A_pass'];
    $q="select *  from login where Name='$user' && Password='$pass'";
    $result=mysqli_query($con,$q);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //echo $row['name'];
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header('Refresh:2s');
        echo "Login successfully";
        header("Location:Home.php");
    }
    
    
}
?>