<?php

$naam = $_GET['naam'];
$code = $_GET['code'];
$question = $_GET['question'];


$host = 'localhost';
$dbname = 'bit';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO users (naam, code, question)
VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$naam,$code,$question]);


header("Location: tel.php?naam=$naam&code=$code");


?>