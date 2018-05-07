<?php


header("Content-Type: application/json; charset=UTF-8");
sleep(3);
if (strlen($_POST['slaptazodis']) > 5) {
    $response = [
        result => true
    ];
} else {
    $response = [
        result => false,
        error => 'Per trumpas slaptazodis'
    ];
}

echo json_encode($response);