<?php
include('config.php');
// loginVerification.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password fields are set
    if (isset($_POST['submit_btn']) ){
        $email = $_POST['email'];
        $pasword = $_POST['pasword'];

        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT pasword FROM admin WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $email);

        // Execute the statement
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        // Store the result
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();

            // Compare the plaintext password directly
            if ($pasword === $stored_password) {
          // Authentication successful
        header("Location: adminDashbord.php");
        $_SESSION['logged_in'] = true;
        exit(0);
echo"admin";
            } 
        } else {
            header("Location: login.php");
            $_SESSION['message'] = "Incorrect Login Details";
            exit(0);
        }

        $stmt->close();
        $conn->close();
    } 
}
?>
