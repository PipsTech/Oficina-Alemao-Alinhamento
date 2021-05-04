<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();

$nome = $_POST['nome'];
echo "<script>console.log('Debug Objects: " . $nome . "' );</script>";
$obj->alteraNomeCliente($nome);
header("Location: ../frontend/perfil.php");




?>