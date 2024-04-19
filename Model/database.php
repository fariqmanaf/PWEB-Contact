<?php

$host = 'localhost';
$username = 'root';
$password = '';

$database = 'contact';
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error){
  die("koneksi database gagal: ".$conn->connect_error);
}
?>