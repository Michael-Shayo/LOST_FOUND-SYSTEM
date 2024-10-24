<?php 
include('config.php');

// Check if the user is already logged in
if (isset($_SESSION['admin_ID'])) {
    // Redirect to the system page or any other authorized page
    // header("Location: system.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset\css\client.css">
    <title>Log in</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>ADMIN LOG IN </h1>
                    <p>Log in to the Admin Account.</p>
                </div>
                <div class="col-md-6">
                    <div class="outer-cover">
                        <div class="cover">
                            <header>Login Form</header>
                                <form action="adminVerification.php" method="POST">
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

    <script src="asset\jQuery\jQuery.min.js"></script>
    <script src="asset\Bootstrap-4\js\bootstrap.min.js"></script>
</body>
</html>