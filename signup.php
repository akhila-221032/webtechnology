<?php
require 'vendor/autoload.php'; // Composer autoload for MongoDB

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->mydatabase->users;

$email = $_POST['email'] ?? ''; // example: get email from form

// Search for existing user
$existingUser = $collection->findOne(['email' => $email]);

if ($existingUser) {
    echo "User already exists";
} else {
    $collection->insertOne([
        'email' => $email,
        'name' => $_POST['name'] ?? '',
        'password' => $_POST['password'] ?? ''
    ]);
    echo "User registered successfully";
}
?>