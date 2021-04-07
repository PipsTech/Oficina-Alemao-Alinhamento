<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

$email = $_POST['email'];
$obj->alteraEmailFuncionario($email);
header("Location: perfilFuncionario.php");



?>