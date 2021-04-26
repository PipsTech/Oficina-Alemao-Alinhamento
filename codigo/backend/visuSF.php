<?php 
 ob_start(); 
require "ControleFuncionario.php";
ob_end_clean();
                
 $id = $_REQUEST['id'];
 $obj3 = new Funcionario();$obj3->setCookieSF($id);
 echo "helo ";
echo $id;
 ?>