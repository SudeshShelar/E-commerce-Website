<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <style>
        .container {
            width: 150%;
            margin-top: 10px;

        }
    </style>

</head>



<body>


    <div>

        <!--home-->
        <header>
            <!---
      <div class="logo"><a href="#">E-Mart</a></div>
      -->
            <div class="logo">
                <img src="homeimg/logo.jpeg" style="height: 100px;" alt="Logo">
            </div>


            <div class="search">

                <input type="text" placeholder="search products" id="input">
                <ion-icon class="s" name="search"></ion-icon>
                <!--- <ul>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
  
          </ul>-->
            </div>
            <!--
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <a href="#about">About</a>
          <a href="#base">Base</a>
          <a href="#blog">Blog</a>
          <a href="#contact">Contact</a>
          <a href="#custom">Custom</a>
          <a href="#support">Support</a>
          <a href="#tools">Tools</a>
        </div>
      </div>-->


            <div class="heading">
                <ul>
                    <li><a href="home.html" class="under">HOME</a></li>
                    <li><a href="product.html " class="under">OUR PRODUCTS</a></li>
                    <li><a href="contact.html" class="under">CONTACT US</a></li>
                    <li><a href="aboutus.html" class="under">ABOUT US</a></li>
                    <li><a href="login.php" class="under">LOGIN</a></li>
                    <li><a href="user.php" class="under">USER</a></li>



                    <!--<a href="user.html" id="bottle" ><img src="homeimg/user.jpeg" alt="bottle" class="thumbnails" /></a>-->

                </ul>
            </div>
            <div class="heading1">
                <ion-icon name="menu" class="ham"></ion-icon>
            </div>
        </header>


    </div>




    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <form action="savepers.php"  method="POST" role="form">
                        <legend>save info</legend>

                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" id="lname" name="lname"
                                placeholder="Enter Full Name" require>
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail Address</label>
                            <input type="text" class="form-control" id="lname" name="email"
                                placeholder="Enter Full Name" require>
                        </div>

                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="number" class="form-control" id="number" name="number"
                                placeholder="Enter Mobile Number" require>
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="laddress" name="laddress"
                                placeholder="Enter Address" require>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="">Pin code</label>
                                <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Address"
                                    require>
                            </div>
                            <div>


                                <button type="submit" name="save" value="save"
                                        class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>






    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<!--footer-->

<footer>
    <div class="footer0">
        <h2 class="d1">E-Mart</h2>
    </div>
    <div class="footer1 ">
        Connect with us at<div class="social-media">
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>

            </a>
            <a href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
        </div>
    </div>
    <div class="footer2">
        <div class="product">
            <div class="heading">Products</div>
            <div class="div">Sell your Products</div>
            <div class="div">Advertise</div>
            <div class="div">Pricing</div>
            <div class="div">Product Buisness</div>

        </div>
        <div class="services">
            <div class="heading">Services</div>
            <div class="div">Return</div>
            <div class="div">Cash Back</div>
            <div class="div">Affiliate Marketing</div>
            <div class="div">Others</div>
        </div>
        <div class="Company">
            <div class="heading">Company</div>
            <div class="div">Complaint</div>
            <div class="div">Careers</div>
            <div class="div">Affiliate Marketing</div>
            <div class="div">Support</div>
        </div>
        <div class="Get Help">
            <div class="heading">Get Help</div>
            <div class="div">Help Center</div>
            <div class="div">Privacy Policy</div>
            <div class="div">Terms</div>
            <div class="div">Login</div>
        </div>
    </div>
    <div class="footer3">E-Mart © <h4>E-Mart</h4> 2020-2024</div>
</footer>



</html>