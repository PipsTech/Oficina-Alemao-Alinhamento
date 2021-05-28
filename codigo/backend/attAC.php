<?php
ob_start();
require "Calendario.php";
ob_end_clean();

$tel = $_POST['tel'];
$id = $_REQUEST['id'];
$obj = new Calendario();
$obj->setCliente($tel,$id);
header("Location: ../frontend/editarAgendamento.php?id=".$id);


?>