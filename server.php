<?php

$string_value = file_get_contents("dischi.json");
// var_dump($string_value);
$dischi_array = json_decode($string_value);
// var_dump($dischi_array);

// Operazioni.....

// Preparazione della risposta
$response = [
    "results" => $dischi_array,
];

header('Content-Type: application/json');
echo json_encode($response);