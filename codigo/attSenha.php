<?php
ob_start();
require "Autentica_loginCliente.php";
ob_end_clean();
$veia = $_POST['Confirmar'];
$senha = $_POST['senha'];
$conf = $_POST['Verificar'];
if($obj->getSenha() == $veia && $conf == $senha){
$obj->alteraSenhaCliente($senha);
header("Location: perfil.php");
}
else{
    echo "Dados incompatíveis! Volte e tente novamente";
    
}

?>