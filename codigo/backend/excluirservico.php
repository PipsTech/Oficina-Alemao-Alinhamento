<?php
ob_start();
require "ControleServico.php";
ob_end_clean();
$obj = new ControleServico();
$obj->excluirServico();


?>