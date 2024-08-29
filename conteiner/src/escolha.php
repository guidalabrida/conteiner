<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'simples_login');

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_usuario = $_POST['tipo_usuario'];
    $username = $_SESSION['username'];

    $sql = "UPDATE usuarios SET tipo_usuario='$tipo_usuario' WHERE username='$username'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Tipo de usuário atualizado com sucesso!";
        // Redirecionar para uma página inicial ou dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Tipo de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Escolha seu tipo de usuário</h2>
        <form method="POST">
            <label>
                <input type="radio" name="tipo_usuario" value="medico" required> Médico
            </label><br><br>
            <label>
                <input type="radio" name="tipo_usuario" value="paciente" required> Paciente
            </label><br><br>
            <input type="submit" value="Continuar">
        </form>
    </div>
</body>
</html>
