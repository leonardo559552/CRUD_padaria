<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "padaria1";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir charset para evitar problemas com acentuação
$conn->set_charset("utf8");
?>