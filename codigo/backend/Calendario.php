<?php

class Calendario{

    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;
    protected  $f = null;
    public   $l = false;
    public function __construct()
    {
       
        $this->con = new mysqli($this->host, $this->root, $this->pass);
        mysqli_select_db($this->con, 'tis');
        if ($this->con->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->con->connect_error;
            exit();
        }
    }
    function __getcon()
    {
        return $this->con;
    }

    function addAgendamento($data,$horario,$telefone,$servico,$preco,$forma){
        $id = isset($_COOKIE['id']);
        $comando = "SELECT Id_Cliente FROM cliente WHERE Telefone = '$telefone'";
        $res = mysqli_query($this->con,$comando);
        $x = $res->fetch_assoc();
         $idc = $x['Id_Cliente'];
         $status = false;
         $comando2 = "SELECT Id_Anuncio FROM anuncio_serviço WHERE Titulo = '$servico'";
         $res3 = mysqli_query($this->con,$comando2);
         $z = $res3->fetch_assoc();
         $ids = $z['Id_Anuncio'];
         $horariofinal = $horario.":00";
        $df = str_replace("/","-",$data);
        $comInsert = "insert into agenda (Data_Agendamento,Horario,Id_Cliente,Id_Funcionario,Status_Prestação,Id_Anuncio,Preço,FormaPagamento) values (STR_TO_DATE('$df', '%d-%m-%Y'),'$horariofinal','$idc','$id','$status','$ids','$preco','$forma')";
        $res2 = mysqli_query($this->con,$comInsert);
        header("Location: ../frontend/agendaEletronica.php");
    }

   

    function getAgendamentos($data){
        $comando = "SELECT * FROM agenda WHERE Data_Agendamento = '$data'";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            
            $array[$i] = $item;
            $i++;
        }
    
   
       
        $tam = sizeof($array);
                $z="";
                    $a ="<div><h1>Agendamentos do Dia ";$g=" </h1>"; 
                    $a = $a.$data.$g;
                    $b ="<a href='editarAgendamento.php?id=";$h="'><p>O cliente ";
                    $c=" tem o serviço ";$d=" agendado para ";$e=" no preço de ";$f=" por meio de ";$j="</p></a></div>";  
                    
                    if($array == null){
                        $g ="<p> Não possui agendamentos</p></div>" ;
                        return $a.$g;
                    }        
                    for($i = 0;$i< $tam;$i++){
                        $res = $array[$i];
                        $preco = $res['Preço'];
                        $hora = $res['Horario'];
                        $ids = $res['Id_Anuncio'];
                        $idc = $res['Id_Cliente'];
                        $ida = $res['Id_Agendamento'];
                        $idv = $res['Id_Venda'];
                        $forma = $res['FormaPagamento'];

                        $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
                        $res3 = mysqli_query($this->con,$comando3);
                        $y = $res3->fetch_assoc();
                        $nomeCli = $y['Nome'];

                        if($ids != 0){

                        $comando2 = "SELECT Titulo FROM anuncio_serviço WHERE Id_Anuncio = '$ids'";
                        $res2 = mysqli_query($this->con,$comando2);
                        $x = $res2->fetch_assoc();
                        $servico = $x['Titulo'];
                        
                        
                        $z= $z.$b.$ida.$h.$nomeCli.$c.$servico.$d.$hora.$e.$preco.$f.$forma.$j;
                        }
                        else{
                            $comando4 = "SELECT Id_Produto,Preco,Quantidade FROM vendas WHERE Id_Venda = '$idv'";
                            $res4 = mysqli_query($this->con,$comando4);
                            $w = $res4->fetch_assoc();
                            $quant = $w['Quantidade'];
                            $preco1 = $w['Preco'];
                            $idp = $w['Id_Produto'];
                            $comando5 = "SELECT Nome FROM produto WHERE Id_Produto = '$idp'";
                            $res5 = mysqli_query($this->con,$comando5);
                            $t = $res5->fetch_assoc();
                            $nomep = $t['Nome'];
                            $z = $z.$b.$h.$nomeCli." tem a retirada do produto ".$nomep." prevista para ".$hora.$e.$preco1.$f.$forma.$j;

                        }
                    } 
                    return $a.$z;

    }

    function excluir($id){
        $fun = "DELETE FROM agenda WHERE Id_Agendamento = '$id'";
        isset($this->con);
        $ress = mysqli_query($this->con, $fun);
        
        header('Location: ../frontend/agendaEletronica.php');
    }
    function setCliente($tel,$id){

        $comando = "SELECT Id_Cliente FROM cliente WHERE Telefone = '$tel'";
        $res = mysqli_query($this->con,$comando);
        $x = $res->fetch_assoc();
        $idc = $x['Id_Cliente'];
        $fun = "UPDATE agenda SET Id_Cliente = '$idc' WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }

    function setServico($nome,$id){

        $comando = "SELECT Id_Anuncio FROM anuncio_serviço WHERE Titulo = '$nome'";
        $res = mysqli_query($this->con,$comando);
        $x = $res->fetch_assoc();
        $idc = $x['Id_Anuncio'];
        $fun = "UPDATE agenda SET Id_Anuncio = '$idc' WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }

    function setPreco($preco,$id){

        $fun = "UPDATE agenda SET Preço = '$preco' WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }

    function setHorario($hora,$id){
        $horario = $hora.":00";
        $fun = "UPDATE agenda SET Horario = '$horario' WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }
    function setData($data,$id){
        $df = str_replace("/","-",$data);
        $fun = "UPDATE agenda SET Data_Agendamento = STR_TO_DATE('$df', '%d-%m-%Y') WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }
    function setForma($forma,$id){
        $fun = "UPDATE agenda SET FormaPagamento = '$forma' WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);

    }
    
    

}






?>