<html>
    <head>
        <title>Product Page </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
    <link href="../CSS/Product.css" rel="stylesheet">
    <link href="../CSS/Admin_Header.css" rel="stylesheet">
    <link href="../CSS/Admin_Footer.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('Header.php');
         ?>

       <center class="b border">
        <h1 class="h1">PRODUCT</h1>
        
        <table class="table w-75 mt-4 t">
            <thead>
                <tr>
                    <th>Product_id</th>
                    <th>Category_id</th>
                    <th>Product_name</th>
                    <th>Product_price</th>
                    <th>Product_image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead> 

            <tbody class = "mt-5">

            <?php
                $con = mysqli_connect("localhost","root","","admin");

                $q1 = "select * from product";

                $result = mysqli_query($con,$q1);

                while($row = mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td><a href='Update_Product.php?id=".$row[0]."'>Update</a>";
                    echo "<td><a href='Delete_Product.php?id=".$row[0]."'>Delete</a>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
            
    </center>    


        <center>
            <a href="Add_Product.php" class="u"><h4 class="add">ADD PRODUCT</h4></a>
        </center>

        <?php

            include('Footer.php');
        ?>
    </body>
</html> 