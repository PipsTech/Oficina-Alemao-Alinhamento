<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();
$obj->logOut();


?>