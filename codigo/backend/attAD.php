<?php
ob_start();
require "Calendario.php";
ob_end_clean();

$data = $_POST['data'];
$id = $_REQUEST['id'];
$obj = new Calendario();
$obj->setData($data,$id);
header("Location: ../frontend/editarAgendamento.php?id=".$id);


?>