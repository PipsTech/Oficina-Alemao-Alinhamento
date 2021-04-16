<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quant = $_POST['quantidade'];
if($_POST){
    $imageName = mysqli_real_escape_string($obj->__getcon() ,$_FILES["image"]["name"] ) ;
    $imageType = mysqli_real_escape_string($obj->__getcon() ,$_FILES["image"]["type"] ) ;
    $imageData = mysqli_real_escape_string($obj->__getcon() ,file_get_contents($_FILES["image"]["tmp_name"]) ) ;
}

$obj-> cadastraProduto($nome,$descricao,$preco,$quant,$imageData);
?>
