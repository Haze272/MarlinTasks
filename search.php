<?php

require_once('db_connection.php');

$text = $_POST['text'];

$sql = "INSERT INTO search (query) VALUES(:query)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['query' => $text]);

header("Location: /index.php");

?>