<?php

$user = "root";
$pass = "root";
$dbname = "Bibliotheque";
$host = "localhost";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connexion erreur" . $e->getMessage();
}
