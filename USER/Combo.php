<html>
    <head>
        <title>Combo Page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
            
            <link href="../CSS/User_Header.css" rel="stylesheet">
            <link href="../CSS/User_Footer.css" rel="stylesheet">
            <link href="../CSS/User_Cricket.css" rel="stylesheet">
           
    </head>
    <body>
        <?php
            include('Header.php');
        ?>

        <center>
            <h1>Combo</h1>
        </center>

        <div class="container">
            <div class="row cards">
                <div class="col-4">
                    <div class="card">
                        <a href = "">
                            <img src="../Image/c2.jpg" class="card-img-top cardd" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="p">Combo 1</p>
                            <p class="card-text"><b>₹500.00</b></p>
                            <a href="Order.php" class="btn btn-secondary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <a href = "">
                            <img src="../Image/c3.jpg" class="card-img-top cardd" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="p">Combo 2</p>
                            <p class="card-text"><b>₹1000.00</b></p>
                            <a href="Order.php" class="btn btn-secondary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <a href = "">
                            <img src="../Image/h1.jpg" class="card-img-top cardd" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="p">Combo 3</p>
                            <p class="card-text"><b>₹1500.00</b></p>
                            <a href="Order.php" class="btn btn-secondary">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include('Footer.php');
        ?>
    </body>
</html>