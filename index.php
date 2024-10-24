<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset\css\index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

<div class="navbar">
    <img src="img\favicon.png" class="logo">
    <ul>
        <li>
            <a href="index.php">
                <h2>MZUMBE LOST AND FOUND SYSTEM</h2>
            </a>
        </li>
    </ul>
    
</div>

<center>
    <div class="message">
        <?php if(isset($_SESSION['message'])) :  ?>

            <h5 class="alert alert-success">
                <?= $_SESSION['message']; ?>
            </h5>

            <?php
            unset($_SESSION['message']);
        
            endif; ?>
    </div>
</center>

<div class="content">
    <h1>WELCOME TO MZUMBE LOST AND FOUND SYSTEM </h1>

    <div class="buttons">
        <!-- LOG IN BUTTON -->
        <div>
        <a href="adminLogin.php"><button ><span></span>ADMIN LOG IN</button></a>

        <div>
                   <!-- LOG IN BUTTON -->
        <div>
        <a href="login.php"><button ><span></span>LOG IN</button></a>

        <div>
            <!-- SIGN UP BUTTON -->
            <a href="registration.php"><button ><span></span>REGISTER</button></a>
    
        </div>
    </div>

</div>
</body>
</html>
    
    
