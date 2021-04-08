<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quant = $_POST['quantidade'];
$obj-> cadastraProduto($nome,$descricao,$preco,$quant);
?>