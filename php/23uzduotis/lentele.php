<?php
error_reporting(0);
@ini_set('display_errors', 0);
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Prisijungiame prie duomenų bazės
$conn = new mysqli($servername, $username, $password, $dbname);
header("Content-Type: application/json; charset=UTF-8");


if ($conn->connect_error) {
    echo json_encode([
        success => false,
        error => $conn->connect_error
    ]);
    exit;
}

$sql = 'SELECT * FROM radars';
$result = $conn->query($sql);
$autos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $autos[] = $row;
    }
}

echo json_encode([
    success => true,
    data => $autos
]);
