<?php

$conn = new PDO("mysql:host=localhost;dbname=fiap", "root","");

$stmt = $conn->prepare("select * from events");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(!$results){
    exit("Nenhum registro encontrado");
}


foreach($results as $row){
    // print_r($row);

    foreach($row as $key => $value){
        echo "$key: $value<br />";
    }
    echo "<br />";
}


?>