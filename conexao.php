<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "padaria1";

$conn = mysqli_($host, $user, $password, $db);

if (!$conn) {
    echo "Falha na conexão!";
}
?>