<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

$obj->excluirProduto();


?>