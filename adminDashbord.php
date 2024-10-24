<?php 
include('config.php');

if(!isset($_SESSION['logged_in'])) :
    header('Location: login.php');
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\css\admindashboard.css">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/glyphicon.css">
    <link rel="stylesheet" href="asset\fontawesome-free-6.2.1-web\css\all.min.css">
    <script src="asset\jQuery\jQuery.min.js"></script>
    <script src="asset/jQuery/popper.min.js"></script>
    <script src="asset\Bootstrap-4\js\bootstrap.min.js"></script>
    <title>CLIENT LIST</title>


</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <a href="#" class="navbar-brand">
            <img src="logo.jpg" alt="" width="50px">
            <span class="logo-text">MZUMBE LOST AND FOUND SYSTEM </span>
        </a>

      <ul class="navbar-nav">
            <li class="nav-item active">
                <i class="fas fa-user"></i>
                <a href="clients.php" class="nav-link">User</a>
            </li>
            <li class="nav-item">
                <i class="fas fa-sign-out"></i>
                <a href="adminLogout.php" class="nav-link">Logout</a>
            </li>
        </ul>

    </nav>
    
                <h2 style="text-align: center">The lost Reports</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Description</th>
                            <th>file</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                        <tr>
                            <?php
                            $que = "SELECT * FROM client_items";
                            $data = mysqli_query($conn , $que);

                            if ($data->num_rows > 0) {
                             while ($row = $data->fetch_assoc()) {
                                ?>
                                <td><?php echo $row ['firstName']; ?></td>
                                <td><?php echo $row ['lastName']; ?></td>
                                <td><?php echo $row ['phoneNumber']; ?></td>
                                <td><?php echo $row ['description']; ?></td>
                                <td><img src="img/<?php echo $row ['files']; ?>"style="height: 6rem;" alt="No image"></td>
                                <td><a href="dropreport.php?id=<?=$row['id'];?>" class="btn btn-danger"> Delete</a></td>
                        </tr>
                                <?php
                             }
                            }
                        

                            ?>
                        </td>
                    </tbody>

                </table>
                
            </div>
            
        </div>
        
    </div>

</body>
</html>