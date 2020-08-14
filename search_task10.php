<?php
session_start();

$text = $_POST['query'];

require_once('db_connection.php');

$sql = "SELECT * FROM search WHERE query = :query";
$stmt = $pdo->prepare($sql);
$stmt->execute(['query' => $text]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = "Введённая запись уже присутствует в таблице";
    $_SESSION['message'] = $message;

    header("Location: /index.php");
    exit;
}

$sql = "INSERT INTO search (query) VALUES(:query)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['query' => $text]);

header("Location: /index.php");

?>