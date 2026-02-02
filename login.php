<?php
include "dbtest.php";

$email = $_POST['email'];
$password = $_POST['password'];

function validateLogin($conn, $email, $password) {
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);

    if (!$res) {
        die("Query failed");
    }

    if (mysqli_num_rows($res) > 0) {
        return true;
    } else {
        return false;
    }
}

$status = validateLogin($conn, $email, $password);

if ($status) {
    print "Login Successful";
} else {
    print "Invalid Login Details";
}
?>