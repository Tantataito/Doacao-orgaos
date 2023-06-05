<?php
// Conectar ao banco de dados MySQL (Xampp)
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "orgaosdoacao";
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Esse código verifica a conexão com o banco de dados
if (!$conexao) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO doadores (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conexao, $sql)) {
  echo "Registro realizado com sucesso!";
} else {
  echo "Erro ao registrar: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
