<?php 
 ob_start(); 
require "ControleServico.php";
ob_end_clean();
                
 $id = $_REQUEST['id'];
 $obj3 = new ControleServico();$obj3->setCookieSF($id);
 echo "helo ";
echo $id;
 ?>