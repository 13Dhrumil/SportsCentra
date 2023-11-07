
<html>
    <head>
        <title>Header Page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
            <link href="../CSS/User_Header.css" rel="stylesheet">
            <style>
                .bg
{
      background-color:deepskyblue;
}

.img
{
    width: 200px;
    height: 230px;
    margin-left: 20px;
    margin-top:20px;
    padding-bottom: 20PX;
}

.home
{
    text-decoration: none;
    margin-left: 200px;
    font-family: 'Times New Roman';
}

.dropdown
{
    text-decoration: none;
    margin-left: 10px;
    font-family: 'Times New Roman';
}

.combo
{
    text-decoration: none;
    margin-left: 20px;
    font-family: 'Times New Roman';
}

.contact
{
    text-decoration: none;
    margin-left: 20px;
    font-family: 'Times New Roman';
}

.logout
{
    text-decoration: none;
    margin-left: 25px;
    font-family: 'Times New Roman';
}

.search_icon
{
    margin-left: 400px; 
}

.wishlist_icon
{
    margin-left: 20px; 
}
            </style>
           
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg"  style="height:150px">
            <div class="container-fluid">
                <img src = "../Image/logo.png" class = "img"> 

                 <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <a href = "Home.php" class = "home" style = "color:black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg> 
                    <b>Home</b>
                    </a> 

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" style = "color:black;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Category</b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Cricket.php">Cricket</a></li>
                                <li><a class="dropdown-item" href="Football.php">Football</a></li>
                                <li><a class="dropdown-item" href="Hockey.php">Hockey</a></li>
                               
                            </ul>
                        </li>
                    </ul>

                    <a href = "Combo.php" class = "combo" style = "color:black;"><b>Combo</b></a>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" style = "color:black;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Brand</b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Cricket1.php">S.S Cricket Kit</a></li>
                                <li><a class="dropdown-item" href="Cricket2.php">S.G Cricket Kit</a></li>
                                <li><a class="dropdown-item" href="Cricket3.php">Adidas Cricket Kit</a></li>
                            </ul>
                        </li>
                    </ul>

                    
                    <a href = "Feedback.php" class = "contact" style = "color:black;"><b>Feedback</b></a>
                    <a href = "Contact.php" class = "contact" style = "color:black;"><b>Contact Us</b></a>
                    <a href = "Index.php" class = "logout" style = "color:black;"><b>Logout</b></a>

                    <!-- <a href = "#" class = "search_icon" style = "color:black;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>

                    -->

                    <!-- <a href = "#" class = "wishlist_icon" style = "color:black;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a> -->
                </div>
            </div>
        </nav>
    </body>
</html>
