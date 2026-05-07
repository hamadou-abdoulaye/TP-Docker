<?php
$host = 'db';
$user = 'root';
$pass = 'rootpassword';
$db   = 'testdb';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
echo "<h1>Connexion MySQL réussie !</h1>";
?>
