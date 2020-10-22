<?php
$conn = new PDO("mysql:host=localhost;dbname=fiap", "root","");

$stmt = $conn->prepare("insert into events (title, local_event, start_at, end_at, site) values(:title, :local_event, :start_at, :end_at, :site)");

// $title = $_POST["title"];
$title = "Fiap Summit";
$local_event = "Unidade Lins";
$start_at = "2020-10-21 19:00";
$end_at = date('Y-m-d H:i');
$site = "www.fiap.com.br";

$stmt->bindParam(":title", $title);
$stmt->bindParam(":local_event", $local_event);
$stmt->bindParam(":start_at", $start_at);
$stmt->bindParam(":end_at", $end_at);
$stmt->bindParam(":site", $site);

if($stmt->execute()){
    echo "Dados cadastrados com sucesso!";
}

?>