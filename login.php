<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
  <link href="asset\fontawesome-free-6.2.1-web\css\all.min.css" rel="stylesheet">
  <link href="asset\css\client.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<body>
    
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="outer-cover">
                        <div class="cover">
                            <header>Login Form</header>
                                <form action="loginVerification.php" method="POST">
                                    <div class="form-group">
                                        <label for="">E-mail:</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password:</label>
                                        <input type="password" name="pasword" class="form-control" placeholder="Enter your password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit_btn"><span></span>SUBMIT</button>
                                    </div>
                
                                </form>
                                <center>
                                    <div class="message">
                                        <?php if(isset($_SESSION['message'])) : ?>
                                            <h5 class="alert alert-danger">
                                                <?= $_SESSION['message']; ?>
                                            </h5>
                                            <?php 
                                                unset($_SESSION['message']);                            
                                            endif; ?>
                                    </div>
                                </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script scr="asset\Bootstrap-4\js\bootstrap.min.js"></script>
<script scr="asset\fontawesome-free-6.2.1-web\js\all.min.js"></script>

</body>
</html>