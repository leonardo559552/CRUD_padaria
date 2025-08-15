<?php
require_once "db.php"; // Inclui a conexão com o banco
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Padaria Pão e Confia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Seu style.css -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Padaria Pão e Confia</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="usuarios/create.php">Cadastrar Usuário</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <h1 class="text-center mb-3">Sistema de Gestão - Padaria</h1>
        <p class="text-center text-muted mb-5">Escolha uma das opções abaixo:</p>

        <div class="row g-4">
            <!-- Usuários -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Usuários</h5>
                        <p class="card-text">Gerenciar clientes, funcionários e administradores.</p>
                        <a href="usuarios/read.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Categorias -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Gerenciar categorias de produtos.</p>
                        <a href="categorias/read.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Gerenciar lista de produtos e estoque.</p>
                        <a href="produtos/read.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Pedidos -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pedidos</h5>
                        <p class="card-text">Visualizar e administrar pedidos dos clientes.</p>
                        <a href="pedidos/read.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Itens do Pedido -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Itens do Pedido</h5>
                        <p class="card-text">Gerenciar itens vinculados aos pedidos.</p>
                        <a href="pedido_itens/read.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center p-3 mt-5">
        &copy; <?php echo date("Y"); ?> Padaria Pão e Confia. Todos os direitos reservados.
    </footer>
</body>
</html>