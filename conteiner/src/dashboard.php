<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

echo "Bem-vindo, " . $_SESSION['username'] . "! Você é um " . $_SESSION['tipo_usuario'] . ".";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Página Inicial/Dashboard</h2>
    <p>Conteúdo exclusivo para médicos ou pacientes pode ser exibido aqui.</p>
</body>
</html>
