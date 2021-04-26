<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();

$email = $_POST['email'];
$obj->alteraEmailCliente($email);
header("Location: ../frontend/perfil.php");



?>