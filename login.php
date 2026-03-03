<?php
<<<<<<< HEAD
<<<<<<< HEAD
session_start();
require __DIR__ . '/config/db.php';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (!$email || !$password) {
die("Email and password are required.");
}
// Find user
$user = $users->findOne(['email' => $email]); if (!$user) {
die("User not found. <a href='index.html'>Go back</a>");
}
// Verify password
if (!password_verify($password, $user['password'])) {
die("Invalid password. <a href='index.html'>Go back</a>");
}
// Login success
$_SESSION['user'] = $user['email'];
header("Location: dashboard.php");
exit;
=======
=======
>>>>>>> 6e524e56e8c6671809b58526623a410f4219990c
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
<<<<<<< HEAD
>>>>>>> ef42eaa47e0db0b5bec82762e345cac39451d6a4
=======
=======
session_start();
require __DIR__ . '/config/db.php';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (!$email || !$password) {
die("Email and password are required.");
}
// Find user
$user = $users->findOne(['email' => $email]); if (!$user) {
die("User not found. <a href='index.html'>Go back</a>");
}
// Verify password
if (!password_verify($password, $user['password'])) {
die("Invalid password. <a href='index.html'>Go back</a>");
}
// Login success
$_SESSION['user'] = $user['email'];
header("Location: dashboard.php");
exit;
>>>>>>> 5cba59c5d90b32d39f3deac1b01b14ac578d5299
>>>>>>> 6e524e56e8c6671809b58526623a410f4219990c
