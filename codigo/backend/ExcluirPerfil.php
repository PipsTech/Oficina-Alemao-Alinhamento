<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();

$obj->excluirPerfil();
header("Location: ../frontend/home.php");



?>