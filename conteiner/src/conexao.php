<?php
// Configurações de conexão com o banco de dados
$host = 'db';  // Nome do serviço do contêiner MySQL
$usuario = 'user';  // Nome de usuário do MySQL
$senha = 'userpassword';  // Senha do MySQL
$banco = 'simples_login';  // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
