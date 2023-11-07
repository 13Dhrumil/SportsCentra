<html>
    <head>
        <title>Reset Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link href="../CSS/Reset_Password" rel="stylesheet">
       
    </head>
    <body>
        <center>
            <h1 class="h1">Reset Password</h1><br>
            <form>
                <table>
                    <tr class="all_css">
                        <td>Password :  </td> <td><input type="Password" placeholder="New Password"></td>
                    </tr>

                    <tr class="all_css">
                        <td>Confirm Password :  </td> <td><input type="password" placeholder="Confirm Password"></td>
                    </tr>                   
                </table>
                <a href = "User_Login.php" class = "all_css resetpass"><--Back To Login</a>
                <br><br>
                <button type="button" class="btn btn-dark all_css">Reset Password</button>
            </form>
        </center>
    </body>
</html>