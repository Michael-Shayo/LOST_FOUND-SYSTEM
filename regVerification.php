<?php 
session_start();
include('config.php');

if(isset($_POST['submit_btn']))
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];
    $addres = $_POST['addres'];
    $pasword = $_POST['pasword'];


    $query = "INSERT INTO user ( firstName , lastName , email , phoneNumber , addres , pasword ) VALUES ( '$firstName' , '$lastName' , '$email' , '$phoneNumber' , '$addres' , '$pasword' )";
   
    if ($conn->query($query) === TRUE) {
        header("Location: login.php");
    } else {
        echo "<h1>Error in inserting data:</h1> " . $conn->error;
    }
    
    $conn->close();
}
?>
    