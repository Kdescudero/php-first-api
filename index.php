<?php 

header('Content-Type: application/json');

$datos = [
    'frutas' => ["Manzana", "Pera", "Naranja", "Mandarina"], 
    'amigos' => ["Kevin", "Yolo", "Juli"],
];
$name = "Some";

/*
 echo '{';
$totalData = count($datos) - 1;
$count = 0;
foreach($datos as $key=>$dato) {
    echo '"' . $key . '" : [';
    $totalRecords = count($dato) - 1;
    foreach($dato as $key1=>$value) {
        echo '"' . $value . ($key1 < $totalRecords? '", ' : '"');
    }
    echo ($count < $totalData? '], ' : ']');
    $count ++;
    echo '}';
}
 */
echo json_encode($datos);