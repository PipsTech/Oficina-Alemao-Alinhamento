<?php
ob_start();
require "../backend/Autentica_loginCliente.php";
ob_end_clean();
$obj->logOut();
header("Location: ./home.php");


?>