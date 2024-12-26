<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['msg']);

    // Database connection
    $servername = "localhost";
    $username = "root";  // Default XAMPP username
    $password = "";      // Default XAMPP password (empty)
    $dbname = "users"; // Name of the database you created

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank you for your feedback, $name. We will get back to you shortly.'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='contact.php';</script>";
    }

    $conn->close();
}
?>
