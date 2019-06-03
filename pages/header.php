<?php require_once './config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./index.php" class="navbar-brand">Classificados</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                <li><a><?php /*echo $_SESSION['usuario'];*/ ?></a></li>
                <li><a href="meus-anuncios.php">Meus Anúncios</a></li>
                <li><a href="sair.php">Sair</a></li>
                
                
                
                <?php else: ?>
                <li><a href="cadastre-se.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
                
                <?php endif; ?>
            </ul>
        </div>
    </nav>