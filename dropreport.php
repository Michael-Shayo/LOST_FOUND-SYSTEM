<?php 
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM client_items WHERE id='$id'";
$data = mysqli_query($conn, $query);

if ($data){
    ?>
    <script type="text/javascript">
        alert("Data deleted successfully");
        window.open("adminDashbord.php","_self");
    </script>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        alert("please try again");
        window.open("adminDashbord.php","_self");
    </script>
    <?php
}
?>