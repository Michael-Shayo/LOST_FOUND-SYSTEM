<?php 
include('config.php');

if(!isset($_SESSION['logged_in'])) :
    header('Location: dashboard.php');

endif;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\css\dashboard.css">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset\fontawesome-free-6.2.1-web\css\all.min.css">
    <!-- <script src="jQuery/jQuery.min.js"></script>
    <script src="jQuery/popper.min.js"></script> -->
    <script src="asset\Bootstrap-4\js\bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar">

            <div class="logo">
                <a href="#" class="navbar-brand">
                    <img src="logo.jpg" alt="" width="40px">
                    <span class="brand-text">
                    MZUMBE LOST AND FOUND SYSTEM
                    </span>
                </a>
            </div>

            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="message.php" class="nav-link">MESSAGE</a>
                </li>
            </ul> -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out"></i>
                        <span>LOGOUT</span>
                    </a>
                </li>
            </ul>
        </nav>
            
            <div class="content">
                <h1>WELCOME TO  MZUMBE LOST AND FOUND SYSTEM</h1>
                <div>
                    <button type="button" onclick="requestPage()" ><span></span>REPORT LOST DEVICE</button>
                </div>
                <div>
                    <button type="button" onclick="requestPage1()"><span></span>FOUND DEVICE</button>
                </div>

            </div>

    </div>
    <script>
        function requestPage(){
            window.location.href = "updtaes.php";
        }
        function requestPage1(){
            window.location.href = "foundItem.php";
        }
    </script>
</body>
</html>