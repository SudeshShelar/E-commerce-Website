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
    <link rel="stylesheet" href="footer.css">
</head>

<body>







    <div role="tabpanel">
        <!-- Nav tabs -->

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>name</th>
            <th>number</th>
            <th>email</th>
            <th>address</th>
            <th>pin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
   <tbody>
        <!-- Tab panes -->
        <?php
        session_start();
        $a = $_SESSION['name'];
        echo "<center><h1>" . $a . "</h1></center>";
require"dbcon.php";
$sql = "SELECT * FROM personal WHERE id='$a' ";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "</tr>";
}

    
mysqli_close($con);
        ?>

        </tbody>
        </table>
    </div>
    </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--bottom code for footer-->


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



</body>

</html>