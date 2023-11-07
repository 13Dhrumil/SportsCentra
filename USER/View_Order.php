<html>
    <head>
        <title>View Order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link href="../CSS/Category.css" rel="stylesheet">
    <link href="../CSS/Admin_Header.css" rel="stylesheet">
    <link href="../CSS/Admin_Footer.css" rel="stylesheet">
    <style>
        .ud
{
text-decoration: none;
}

.h1
{
    margin-left: 5px;
    font-family: 'Times New Roman';
    font-weight: bold;
}

.border
{
    margin-top: 100px;
    margin-left: 370px;
    padding: 50px;
    border-radius: 20px;
    width: 700px;
    box-shadow: 10px 20px 30px;
    background-color: whitesmoke
}

.t
{
    font-family: 'Times New Roman';
    font-weight: bold;
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
    </style>
    </head>
    <body>
        <?php
            include('Header.php');
         ?>

       <center class="b border">
        <h1 class="h1">VIEW ORDER</h1>
        
        <table class="table w-75 mt-4 t">
            <thead>
                <tr>
                    
                    <th>Id </th>
                    <th>Name</th>
                    <th>Email_Address</th>
                    <th>Contact_Number</th>
                    <th>City</th>
                    <th>Delete</th>
                </tr>
            </thead> 

            <tbody class = "mt-5">

            <?php
                $con = mysqli_connect("localhost","root","","user");

                $q1 = "select * from order1";

                $result = mysqli_query($con,$q1);

                while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
                {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td><a href='Delete_view.php?id=".$row[0]."'>Delete</a>";
                    echo "</tr>";
                }
                    
            ?>
        </tbody>
        </table>            
            
</center>   


        

        <?php

            include('Footer.php');
        ?>
    </body>
    </html>