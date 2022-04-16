<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=thi", 'root', '');
} catch (\Throwable $th) {    
    die('<h2>connect database fall</h2>');
}