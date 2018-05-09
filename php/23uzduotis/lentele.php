<?php
//kad nerodytų bereikalingų errorų
error_reporting(0);
@ini_set('display_errors', 0);
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Prisijungiame prie duomenų bazės
$conn = new mysqli($servername, $username, $password, $dbname);
header("Content-Type: application/json; charset=UTF-8");

//patikrina ar nėra klaidos jungiantis prie serverio, čia -> yra kaip . (objekto metodas/atributas)
if ($conn->connect_error) {
    echo json_encode([
        success => false,
        error => $conn->connect_error
    ]);
    exit;
}
//sql eilutė, kuri paima nurodo ką reikia paimti iš duomenų bazės
$sql = 'SELECT * FROM radars';
//naujas kintamasis result, kuriame išsaugoma sql pateiktos komandos užklausos atsakas iš duomenų bazės - šiuo atveju visą radars lentelę
$result = $conn->query($sql);
//automobilių masyvas
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
