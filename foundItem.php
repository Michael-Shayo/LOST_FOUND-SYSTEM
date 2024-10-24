<?php 
include('config.php');

if(!isset($_SESSION['logged_in'])) :
    header('Location: dashboard.php');
    exit();
endif;

$query = "SELECT * FROM client_items";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/updates.css">
    <link rel="stylesheet" href="asset/Bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset/fontawesome-free-6.2.1-web/css/all.min.css">
    <script src="asset/Bootstrap-4/js/bootstrap.min.js"></script>
    <style>
        .container-box {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            padding: 1rem;
        }
        .box {
            background: transparent;
            width: 380px;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-box {
            background: #ff6;
            padding: 1rem;
            border-radius: 1rem;
        }
        .image-box {
            padding: 0.25rem;
        }
        .image-box img {
            width: 100%;
            border-radius: 1rem;
            box-shadow: 5px 5px 5px black;
        }
        .info-box {
            margin-top: 1rem;
            background: #fff;
            padding: 1rem;
            border-radius: 1rem;
        }
        .info-box p {
            font-size: 15px;
            font-weight: bold;
        }
        .info-box h6 {
            margin-top: 1rem;
        }
    </style>
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
            <h1>WELCOME TO MZUMBE LOST AND FOUND SYSTEM</h1>
        </div>

        <div class="container-box">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="box">
                    <div class="card-box">
                        <div class="image-box">
                            <img src="img/<?php echo $row['files']; ?>" alt="Image" />
                        </div>
                        <div class="info-box">
                            <p><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></p>
                            <p>0<?php echo $row['phoneNumber']; ?></p> 
                            <h6>The descriptions</h6>
                            <p><?php echo $row['description']; ?></p> 
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>         
</body>
</html>
