<?php
// Include the database connection file
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the POST data
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $addres = $_POST['addres'];
    $phoneNumber = $_POST['phoneNumber'];
    $pasword = $_POST['pasword'];

    // $query = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', email = '$email', phoneNumber = '$phoneNumber', addres = '$addres', pasword = '$pasword' WHERE id = '$id'";
    
    $query = "INSERT INTO user ( firstName , lastName , email , phoneNumber ,addres, pasword ) VALUES ( '$firstName' , '$lastName' , '$email' , '$phoneNumber' , '$addres', '$pasword' )";
   
    if ($conn->query($query) === TRUE) {
        echo "<h1>inserting data:</h1> " ;
        header("Location: adminDashbord.php");
    } else {
        echo "<h1>Error in inserting data:</h1> " . $conn->error;
    }
    
    }


// Close the database connection
$conn->close();
?>
