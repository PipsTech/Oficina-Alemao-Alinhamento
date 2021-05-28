<?php
ob_start();
require "Calendario.php";
ob_end_clean();

$hora = $_POST['hora'];
$id = $_REQUEST['id'];
$obj = new Calendario();
$obj->setHorario($hora,$id);
header("Location: ../frontend/editarAgendamento.php?id=".$id);


?>