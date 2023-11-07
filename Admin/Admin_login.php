<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="../CSS/Admin_Login.css" rel="stylesheet">
</head>
<body>
    <center>
     <!-- <img src = "../Image/Admin/background2jpg.jpg" class = "img"> -->
        <h1 class="h1">LOGIN</h1>
            <form>
                <table>
                    <tr class="all css">
                        <td>Admin Name : </td>
                        <td><input type="text" placeholder="Enter Admin Name"></td>
                    </tr>

                    <tr class="all css">
                        <td>Password : </td>
                        <td><input type="password" placeholder="Password"></td>
                    </tr>
                </table>
                <br>
                <button type="button" class="btn btn-info all_css">Login</button>
                <a href = "Home.php">
                    <button type="button" class="btn btn-dark all_css">Login</button>
                </a>
            </form>
</center>
</body>
</html>