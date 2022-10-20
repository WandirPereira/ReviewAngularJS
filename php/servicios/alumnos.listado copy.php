<?php
$conn = new mysqli('127.0.0.1:3306', 'root', 'senha@1234', 'univer_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
} 
//else{
   // echo "conn successful";
//}


$sql = "SELECT * FROM alumnos ORDER BY nombre ASC";

// Retorna un json
//header('Content-Type: application/json');

$resultado = $conn->query($sql);
//echo $result;

// if($row = $resultado->fetch_assoc()){
//     echo $row;
// }else{
//     echo array();
// }

// if ($resultado) {
//     while ($row = $resultado->fetch_assoc()) {
//         echo $row['nombre'];
//     }
// }

if ($resultado) {
    while ($row = $resultado->fetch_assoc( $resultado)) {
        echo $rows;
    } 
    // else {
    //     echo array();
    // }
}

$conn-> close();
?>
