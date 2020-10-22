<?php
// criando a conexão entre o PHP e o MySQL
$conn = new PDO("mysql:host=localhost;dbname=fiap", "root","");

$stmt = $conn->prepare("select * from events");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(!$results){
    exit("Nenhum registro encontrado!");
}

foreach($results as $row){
    // print_r($row);

    foreach($row as $key => $value){
        echo "<strong>$key</strong>: $value<br />";
    }
    echo "<br />";
}
?>