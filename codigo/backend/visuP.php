<?php 
 ob_start(); 
require "ControleProduto.php";
ob_end_clean();
                
 $id = $_REQUEST['id'];
 $obj3 = new ControleProduto();$obj3->setCookie($id);
 echo "helo ";
echo $id;
 ?>
