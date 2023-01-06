<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "dantas2022";

global $conn;

try {
  $conn = new PDO('mysql:host=localhost;dbname=projeto_banco', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>