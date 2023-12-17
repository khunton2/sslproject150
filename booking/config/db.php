<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssl";
// $username = "btmcoth_vokse";
// $password = "9GCyxXoMvq";
// $dbname = "btmcoth_vokse";
// $conn;
try {
  $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->query("set names utf8");
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>