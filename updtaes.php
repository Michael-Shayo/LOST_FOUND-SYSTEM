<?php session_start(); 
    if(!isset($_SESSION['logged_in'])) :
        header('Location: dashboard.php');
    
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\css\updates.css">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset\fontawesome-free-6.2.1-web\css\all.min.css">
    <script src="asset\jQuery\jQuery.min.js"></script>
    <script src="asset\jQuery\popper.min.js"></script>
    <script src="asset\Bootstrap-4\js\bootstrap.min.js"></script>
    <title>UPDATES PAGE</title>
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

        <h1>SERVICES</h1>

        <div class="message">
            <center>
                <?php if(isset($_SESSION['message'])) : ?>

                    <h5 class="alert alert-success">
                        <?= $_SESSION['message']; ?>
                    </h5>

                    <?php unset($_SESSION['message']);
                            endif;
                            ?>
            </center>
        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-mobile"></i>
                        </div>
                    </div>
                    <h3>MOBILE DEVICES</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <h3>WATCH</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <h3>KEY</h3>
                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-address-card"></i>
                        </div>
                    </div>
                    <h3>ID CARD</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-laptop"></i>
                        </div>
                    </div>
                    <h3>LAPTOP</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="box" data-toggle="modal" data-target="#modal1">
                        <div class="icon-box">
                            <i class="fas fa-people-carry-box"></i>
                        </div>
                    </div>
                    <h3>OTHER</h3>
                </div>
            </div>

        <!------ MODAL FORMS ----->

        <!-- modal form 1 -->
        <div class="modal" id="modal1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="card">
                        <div class="card-header">
                            <h3>Fill the form below</h3>
                        </div>
                        <div class="card-body">
                        <form action="requestform.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" name="firstName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" name="lastName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="roomsNumber">Phone Number:</label>
                                    <input type="number" name="phone" class="form-control" maxlength="10" required>
                                </div>
                                <div class="form-group">
                                    <label for="roomsNumber">Description</label>
                                   
                                    <textarea name="description" id="" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="serviceType">Image</label>
                                    <br />
                                    <input type="file" name="image" value="image" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" name="submit_btn" type="submit">Submit</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</body>
</html>