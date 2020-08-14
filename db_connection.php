<?php # Соединение с БД

try {
    $pdo = new PDO("mysql:host=localhost;dbname=marlintask", "root", "root");
}
catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных, ежже";
};

?>