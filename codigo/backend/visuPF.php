<?php 
 ob_start(); 
require "ControleProduto.php";
ob_end_clean();
                
 $id = $_REQUEST['id'];
 $obj3 = new ControleProduto();$obj3->setCookieF($id);
 echo "helo ";
echo $id;
 ?>