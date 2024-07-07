<?php
require_once __DIR__ . '/vendor/autoload.php';

use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

$guzzleClient = new \GuzzleHttp\Client();
$graph = new Graph();
$graph->setAccessToken($accessToken);

$user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

$email = $user->getMail();
$name = $user->getDisplayName();

// Save user's email and name in your database
$host = '127.0.0.1:3306';
$username = 'u304902958_knlms';
$password = 'Dipyadhosting@2024';
$database = 'u304902958_lmspanel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $conn->real_escape_string($email);
$name = $conn->real_escape_string($name);
$sql = "INSERT INTO users (email, name) VALUES ('$email', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "User data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();