<?php
$databaseHost = 'localhost';
$databaseName = 'ota'; //table users 
$databaseUsername = 'root';
$databasePassword = '';

// $password = "";
// $username = "root";
// $servername = "localhost";
// $db = "training";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$mysqli) {
    die("Connection failed: ".mysqli_connect_error());
  }



//   $conn = new PDO("mysql:host=$databaseHost;dbname=crud", $databaseUsername, $databasePassword); //pdo
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>