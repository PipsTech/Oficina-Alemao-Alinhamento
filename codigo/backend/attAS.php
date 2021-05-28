<?php
ob_start();
require "Calendario.php";
ob_end_clean();

$ser = $_POST['ser'];
$id = $_REQUEST['id'];
$obj = new Calendario();
$obj->setServico($ser,$id);
header("Location: ../frontend/editarAgendamento.php?id=".$id);


?>