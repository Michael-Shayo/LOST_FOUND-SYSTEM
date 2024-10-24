<?php 
include('config.php');

if(!isset($_SESSION['logged_in'])) :
    header('Location: login.php');
endif;

$query=" select * from user";
$result = mysqli_query($conn , $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\css\admindashboard.css">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset\fontawesome-free-6.2.1-web\css\all.min.css">
    <script src="asset\jQuery\jQuery.min.js"></script>
    <script src="asset/jQuery/popper.min.js"></script>
    <script src="asset\Bootstrap-4\js\bootstrap.min.js"></script>
    <title>CLIENTS LIST</title>
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark">

        <a href="#" class="navbar-brand">
            <img src="logo.jpg" alt="" width="50px">
            <span class="logo-text">MZUMBE LOST AND FOUND SYSTEM </span>
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <i class="fas "></i>
                <a href="adminDashbord.php" class="nav-link">Reports</a>
            </li>
            <li class="nav-item">
                <i class="fas fa-sign-out"></i>
                <a href="adminLogout.php" class="nav-link">Logout</a>
            </li>
        </ul>

        </nav>
        <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>CLIENTS</h2>
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
                <div class="message">
                    <?php if(isset($_SESSION['message1'])) :  ?>

                        <h5 class="alert alert-danger">
                            <?= $_SESSION['message1']; ?>
                        </h5>

                        <?php
                        unset($_SESSION['message1']);
                    
                        endif; ?>
                </div>
            </center>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                           // Your query execution code
                            // $query = "SELECT * FROM some_table";

                            if ($result->num_rows > 0) {
                             while ($row = $result->fetch_assoc()) {
                                ?>
                                <td><?php echo $row ['firstName']; ?></td>
                                <td><?php echo $row ['lastName']; ?></td>
                                <td><?php echo $row ['email']; ?></td>
                                <td><?php echo $row ['phoneNumber']; ?></td>
                                <td><?php echo $row ['addres']; ?></td>
                                <td>
                                    <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger"> Delete</a>   
                                </td>
                                
                                </tr>
                                <?php
                             }
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
    
</body>
</html>