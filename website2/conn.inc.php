<?php
$dsn = 'mysql:host=localhost;dbname=b7020211_db1';
$user = 'b7020211';
$password = 'Yasuo1';
try {
$pdo = new PDO($dsn, $user, $password);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
echo 'Connection failed again: ' . $e->getMessage();
}
?>