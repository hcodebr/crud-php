<?php
$conn = new PDO("mysql:host=localhost;dbname=fiap", "root","");

$stmt = $conn->prepare("delete from events where id=:id");

$id = 3;

$stmt->bindParam(":id", $id);

if($stmt->execute()){
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
}

?>