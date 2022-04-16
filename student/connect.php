<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=nhanvien", $username, $password);
} catch (\Throwable $th) {
    die('loi database');
}