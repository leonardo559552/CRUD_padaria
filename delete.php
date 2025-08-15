<?php
// Configuração do banco
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "padaria1";

// Conectar
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se foi enviado um ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Preparar e executar exclusão
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redireciona de volta para a listagem
        header("Location: read.php?msg=Usuario+excluido+com+sucesso");
        exit();
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID inválido.";
}

$conn->close();
?>