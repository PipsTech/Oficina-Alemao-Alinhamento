<?php 
 ob_start(); 
require "ControleServico.php";
ob_end_clean();              
 $id = $_REQUEST['id'];
 $obj3 = new ControleServico();$obj3->setCookieS($id);
 echo "helo ";
echo $id;
 ?>