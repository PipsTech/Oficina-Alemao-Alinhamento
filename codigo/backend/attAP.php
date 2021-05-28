<?php
ob_start();
require "Calendario.php";
ob_end_clean();

$preco = $_POST['preco'];
$id = $_REQUEST['id'];
$obj = new Calendario();
$obj->setPreco($preco,$id);
header("Location: ../frontend/editarAgendamento.php?id=".$id);


?>