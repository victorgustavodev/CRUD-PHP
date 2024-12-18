<?php

define("HOST", "127.0.0.1");
define("USUARIO", "root");
define("SENHA", "root");
define("DB", "teste");

// $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possivel conectar!");
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conexao) {
    error_log("Erro de conexão: " . mysqli_connect_error());
    die("Erro ao conectar ao banco de dados. Contate o administrador.");
}

//Fecha a aplicação explicitamente para evitar que o usuário tenha contato com o erro!
// mysqli_close($conexao);

?>