<?php 
include('config.php');

if(isset($_POST['submit_btn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phone'];
    $description = $_POST['description'];
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'img/'. $file_name;

    $query = "INSERT INTO client_items ( firstName , lastName , phoneNumber , files, description) VALUES ( '$firstName' , '$lastName' , '$phoneNumber' , '$file_name' ,'$description' )";


    if ($conn->query($query) === TRUE) {
        if(move_uploaded_file($tempname, $folder)){
    }
    header("Location: updtaes.php");
   }
    $conn->close();
}

?>