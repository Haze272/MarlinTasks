<?php

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=marlintask", "root", "root");
$sql = "INSERT INTO search (query) VALUES(:query)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['query' => $text]);

header("Location: /index.php");
?>