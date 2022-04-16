<?php

require_once('connect.php');
function getStudent()
{
    global $conn;
    $sql = 'SELECT  * from student';
    $result = $conn->query($sql);
    return $conn;
}

function addStudent($name, $age, $address, $telephone)
{
    global $conn;
    $sql = 'INSERT INTO `student` (`id`, `name`, `age`, `address`, `telephone`) VALUES (NULL, ?,?,?,?);';
    $stm = $conn->prepare($sql);
    $data  = [$name, $age, $address, $telephone];
    try {
        $stm->execute($data);
    } catch (\Throwable $th) {
        die("loi truy van");
    }
}