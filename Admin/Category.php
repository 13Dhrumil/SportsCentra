<html>
    <head>
        <title>Category Page </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link href="../CSS/Category.css" rel="stylesheet">
    <link href="../CSS/Admin_Header.css" rel="stylesheet">
    <link href="../CSS/Admin_Footer.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('Header.php');
         ?>

       <center class="b border">
        <h1 class="h1">CATEGORY</h1>
        
        <table class="table w-75 mt-4 t">
            <thead>
                <tr>
                    
                    <th>Category_id</th>
                    <th>Category_name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead> 

            <tbody class = "mt-5">

            <?php
                $con = mysqli_connect("localhost","root","","admin");

                $q1 = "select * from category";

                $result = mysqli_query($con,$q1);

                while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
                {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td><a href='Update_Category.php?id=".$row[0]."'>Update</a>";
                    echo "<td><a href='Delete_Category.php?id=".$row[0]."'>Delete</a>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>            
            
</center>   


        <center>
            <a href="Add_Category.php" class="u"><h4 class="add">ADD CATEGORY</h4></a>
        </center>

        <?php

            include('Footer.php');
        ?>
    </body>
    </html>    

                


