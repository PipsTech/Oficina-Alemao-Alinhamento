<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

if($_POST){
    $imageSize = mysqli_real_escape_string($obj->__getcon() ,$_FILES["imagem"]["size"] ) ;
    $imageName = mysqli_real_escape_string($obj->__getcon() ,$_FILES["imagem"]["name"] ) ;
    $imageType = mysqli_real_escape_string($obj->__getcon() ,$_FILES["imagem"]["type"] ) ;
    $imageData = mysqli_real_escape_string($obj->__getcon() ,file_get_contents($_FILES["imagem"]["tmp_name"]) ) ;
}
//move_uploaded_file($_FILES["imagem"]["tmp_name"],"uploads/".$_FILES["imagem"]["name"]);
$obj->alteraImagemProduto($imageData);
header("Location: ../frontend/editarProduto.php");




?>