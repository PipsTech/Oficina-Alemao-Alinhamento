<?php
ob_start();
require "../backend/Autentica_loginFuncionario.php";
ob_end_clean();
$obj->logOut();


?>