<?php
$con=mysqli_connect("localhost","root","",'admin');
if(isset($_POST['submit']))
{
    $Category_name=$_POST['Category_name'];
    $q="insert into category(Category_name)values('$Category_name')";
    if(mysqli_query($con,$q))
    {
        header('Location:Category.php');
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
        <title>Add Category Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link href="../CSS/Add_Category.css" rel="stylesheet">
        <link href="../CSS/Admin_Header.css" rel="stylesheet">
        <link href="../CSS/Admin_Footer.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('Header.php');
        ?>

        <center class = "boder">
            <h1 class = "h1">ADD CATEGORY</h1>
                <FORM action="#" method="post">
                        <table class = "mt-5">
                        <tr class = "all_css">
                            <td>Category Name : </td> <td><input type = "text" name='Category_name' placeholder = "Enter category name" class = "text_box ms-2" autofocus></td>
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