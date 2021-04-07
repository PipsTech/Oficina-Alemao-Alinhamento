<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();

$telefone = $_POST['telefone'];
$obj->alteraTelefoneCliente($telefone);
header("Location: perfil.php");




?>