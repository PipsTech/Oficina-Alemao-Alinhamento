<?php
ob_start();
require "ControleServico.php";
ob_end_clean();
$obj = new ControleServico();
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
if($_POST){
    $imageName = mysqli_real_escape_string($obj->__getcon() ,$_FILES["image"]["name"] ) ;
    $imageType = mysqli_real_escape_string($obj->__getcon() ,$_FILES["image"]["type"] ) ;
    $imageData = mysqli_real_escape_string($obj->__getcon() ,file_get_contents($_FILES["image"]["tmp_name"]) ) ;
}

$obj-> cadastraServico($nome,$descricao,$preco,$imageData);
?>