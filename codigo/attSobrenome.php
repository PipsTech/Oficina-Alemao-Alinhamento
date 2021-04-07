<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();

$sobrenome = $_POST['sobrenome'];
$obj->alteraSobrenomeCliente($sobrenome);
header("Location: perfil.php");




?>