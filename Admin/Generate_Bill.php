<html>
    <head>
        <title>Generate Bill Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link href="../CSS/Add_Product.css" rel="stylesheet">
        <link href="../CSS/Admin_Header.css" rel="stylesheet">
        <link href="../CSS/Admin_Footer.css" rel="stylesheet">
    </head>
    <body>
    <?php
            include('Header.php');
        ?>
        <center>
            <h1 class = "h1 mt-5">Generate Bill</h1>
            <form>
                <table>
                    <tr class = "all_css">
                        <td>Date : </td> <td><input type = "date"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Time : </td> <td><input type = "time"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>User Name : </td> <td><input type = "text"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Product I'D : </td> <td><input type = "text"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Product Name : </td> <td><input type = "text"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Quantity : </td> <td><input type = "number"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Product Price : </td> <td><input type = "text"></td>
                    </tr>

                    <tr class = "all_css">
                        <td>Total : </td> <td><input type = "text"></td>
                    </tr>
                </table>
                <br>
                <button type="button" class="btn btn-dark all_css">Submit</button>
                <button type="clear" class="btn btn-dark all_css clear">Clear</button>
            </form>
        </center>
        <?php
            include('Footer.php');
        ?>
    </body>
</html>