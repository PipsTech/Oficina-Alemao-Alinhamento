<?php 
 ob_start(); 
require "Calendario.php";
ob_end_clean();

 $obj = new Calendario();
 $data = $_REQUEST['data'];
 $obj->getAgendamentos($data);

 ?>