<?php
$conn = new PDO("mysql:host=localhost;dbname=fiap", "root","");

$stmt = $conn->prepare("update events set title= :title, local_event= :local_event where id=:id");

// $title = $_POST["title"];
$title = "Fiap Summit 2020";
$local_event = "Unidade Paulista";
$id = 3;

$stmt->bindParam(":title", $title);
$stmt->bindParam(":local_event", $local_event);
$stmt->bindParam(":id", $id);

if($stmt->execute()){
    echo "Dados alterados com sucesso!";
}

?>