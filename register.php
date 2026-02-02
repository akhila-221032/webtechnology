<?php
include "dbtest.php";

function registerUser() {
    global $conn;

    static $count = 0;
    $count++;

    if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        die("Form data missing");
    }

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password)
              VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "Registration Successful<br>";
        echo "Total registrations in this request: " . $count;
    } else {
        die("Registration Failed: " . mysqli_error($conn));
    }
}

registerUser();
?>
