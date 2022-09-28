<?php
$id=$_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "DELETE FROM users WHERE id=$id";
    $conn->query($sql);
    
    $_SESSION['message'] = "Employee is deleted";
    header("Location: superadmin.php");
    exit(0);
?>