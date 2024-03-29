<?php
session_start();
if(isset($_SESSION['bad'])){
    echo"<script>alert('User already registered with the email');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Abhirup Pal">
    <meta name="keywords" content="">
    <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">
    <!-- Title Page-->
    <title>Patron Accounting LLP</title>

    <!-- Icons font CSS-->
    <link href="regform/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="regform/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="regform/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="regform/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="regform/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="registerMaster.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="USERNAME" name="username">
                               </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="PASSWORD" name="password">
                               </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="email" name="email">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="regform/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="regform/vendor/select2/select2.min.js"></script>
    <script src="regform/vendor/datepicker/moment.min.js"></script>
    <script src="regform/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="regform/js/global.js"></script>

</body>
</html>
<?php
    unset($_SESSION['bad']);
?>
<!-- end document-->
