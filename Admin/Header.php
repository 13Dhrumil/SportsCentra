<html>
    <head>
        <title>Header Page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link href="../CSS/Admin_Header.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg" style="height:120px">
            <div class="container">
                <img src = "../Image/logo.png" class = "img">

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <a href = "Home.php" class = "home" style = "color:black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg>
                    Home
                    </a>

                    <a href = "Category.php" class = "cat" style = "color:black;">Category</a>
                    <a href = "Product.php" class = "cat" style = "color:black;">Product</a>
                    <a href = "Feedback.php" class = "cat" style = "color:black;">Feedback</a>
                    <!-- <a href = "Order_Management.php" class = "order_management" style = "color:black;">Order Management</a>
                    <a href = "Generate_Bill.php" class = "bill" style = "color:black;">Generate Bill</a> -->

                    <a href = "Index.php" class = "cat" style = "color:black;">Logout</a>
                </div>
            </div>
        </nav>
    </body>
</html>