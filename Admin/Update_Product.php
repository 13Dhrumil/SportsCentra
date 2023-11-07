<?php
$link=mysqli_connect("localhost","root","","admin");
$ID=$_GET['id'];

if(isset($_POST['submit']))
{
    // $Category_name=$_POST['Category_name'];
    $str = "update product set Product_name='".$_POST['Product_name']."' where Product_id=".$_REQUEST['id'];

    if(mysqli_query($link,$str))
        header("Location:Product.php");
    else
        echo "record not Updated plz check query..".$str;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product</title>
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

        <center class = "boder">
            <h1 class = "h1">UPDATE PRODUCT</h1>
            <form action="#" method="Post">
                <table class = "mt-5" cellpadding=10 cellspacing=20>
                    <tr class = "all_css">
                        <td>Category I'D : </td> <td><input type = "text" name="Category_id" placeholder = "Enter category I'D" class = "text_box ms-2" autofocus></td>
                    </tr>
                    <tr class = "all_css pt-5">
                        <td>Product Name : </td> <td><input type = "text" name="Product_name" placeholder = "Enter product name" class = "text_box ms-2" autofocus></td>
                    </tr>
                    <tr class = "all_css">
                        <td>Product Price : </td> <td><input type = "text" name="Product_price" placeholder = "Enter product price" class = "text_box ms-2" autofocus></td>
                    </tr>


                    <tr class = "all_css">
                        <td>Product image : </td> <td><input type = "file" name="Product_image" placeholder = "Enter product price" class = "text_box ms-2" autofocus></td>
                    </tr>


                    <tr class = "all_css">
                        <td>Product description :</td> <td><input type = "text" name="Product_description" placeholder = "Enter product price" class = "text_box ms-2" autofocus></td>
                    </tr>

                </table>
                <br>
                <input type="submit" name="submit"  class="btn btn-secondary all_css">
            </form>
        </center>

        <?php
            include('Footer.php');
        ?>
    </body>
</html>