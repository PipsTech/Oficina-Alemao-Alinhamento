<?php

class Calendario{

    protected $host = "localhost";
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
        $comando = "SELECT * FROM agenda WHERE Data_Agendamento = '$data' ORDER BY Horario";        
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            
            $array[$i] = $item;
            $i++;
        }
       
        $tam = sizeof($array);
                $z="";
                    $a ="<div><h1><b><u>Agendamentos do Dia: ";$g=" </u></b></h1></div>"; 
                    $a = $a.$data.$g;
                    $b ="<p></p><div><a href='editarAgendamento.php?id=";$h="'><p class='btn btn-lg btn-block btn-primary text-uppercase' style='font-size:14px;'>O cliente ";
                    $c=" tem o serviço ";$d=" agendado para ";$e=" no preço de R$";$f=",00 por meio de ";$j="</p></a></div>";  
                    $o="<p></p>
                        <div><p class='btn btn-lg btn-block btn-success text-uppercase' style='font-size:13.5px'>O cliente ";$s="</p></div>";
                    if($array == null){
                        $g ="<p class='btn btn-lg btn-block btn-danger text-uppercase'> *Não possui agendamentos*</p></div>" ;
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
                        
                        
                        $z = $z.$b.$ida.$h.$nomeCli.$c.$servico.$d.$hora.$e.$preco.$f.$forma.$j;
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
                            $z = $z.$o.$nomeCli." tem a retirada do produto ".$nomep." prevista para ".$hora.$e.$preco1.$f.$forma.$s;

                        }
                    } 
                    return $a.$z;


    }

    function addAgendamentoRetirada($data,$horario,$forma,$idc){
       
        
        $array = array();
        $comando = "SELECT Id_Venda FROM vendas WHERE Id_Cliente = '$idc' AND Status_Reserva = FALSE";
        $res = mysqli_query($this->con,$comando);
        $i=0;
        $horariofinal = $horario.":00";
       echo $horariofinal;
        $df = str_replace("/","-",$data);
        echo $df;
        //echo STR_TO_DATE($df, '%d-%m-%Y');
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        for($i=0;$i<$tam;$i++){
           $aux = $array[$i];
         // $v = $aux->fetch_assoc();
           $idv = $aux['Id_Venda'];  
           $comando2 = "INSERT INTO `agenda`( `Horario`, `Id_Cliente`, `FormaPagamento`, `Id_Venda`,`Data_Agendamento`) VALUES ('$horariofinal','$idc','$forma','$idv',STR_TO_DATE('$df', '%d-%m-%Y'))";
           echo $idv;
            $res2 = mysqli_query($this->con,$comando2);
           
           $fun = "UPDATE vendas SET Status_Reserva = TRUE WHERE Id_Venda= '$idv'";
            $res= mysqli_query($this->con, $fun);
        }

    
    }

    function printSerAgendados(){

          
        $comando = "SELECT * FROM agenda WHERE Id_Anuncio != 0 ORDER BY Data_Agendamento";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p><div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
           $b ='" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
             
             
              </h4>
         <p class="card-text">';
        $c = '</p>
        <div class="row">
            <div class="col">
                <a href="../backend/finalizaServico.php?id=';$d='" class="btn btn-outline-success btn-block">Finalizar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
    $x = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-danger btn-block">Finalizado</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        for($i = 0;$i< $tam;$i++){
            $res = $array[$i];
            $ids = $res['Id_Anuncio'];
            $idc = $res['Id_Cliente'];
            $id = $res['Id_Agendamento'];
            $preco = $res['Preço'];
            
            $comando2 = "SELECT Titulo,Imagem FROM anuncio_serviço WHERE Id_Anuncio = '$ids'";
            $res2 = mysqli_query($this->con,$comando2);
            $t = $res2->fetch_assoc();
            $nomes = $t['Titulo'];
            $img = base64_encode($t['Imagem']);
            $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
            $res3 = mysqli_query($this->con,$comando3);
            $ax = $res3->fetch_assoc();
            $nomec = $ax['Nome'];
            $comando4 = "SELECT Data_Agendamento,Status_Prestação FROM agenda WHERE Id_Cliente = '$idc' AND Id_Anuncio = '$ids'";
            $res4 = mysqli_query($this->con,$comando4);
            $aux = $res4->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $status = $aux['Status_Prestação'];
                if($status){
    
                    $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$x;
                    }
                else{
               $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$c.$id.$d;
                }
    
        } 
        return $z;
        }
    
        function printSerFechados(){
    
              
            $comando = "SELECT * FROM agenda WHERE Id_Anuncio != 0 AND Status_Prestação = TRUE ORDER BY Data_Agendamento";
            $res = mysqli_query($this->con,$comando);
            $array = array();
            $i =0;
            while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
                $array[$i] = $item;
                $i++;
            }
            $tam = sizeof($array);
            $z = "";
            $a = '<div class="col-12 col-md-6 col-lg-4">
            <p></p><div class="card">
               <img class="card-img-top" src="data:image/jpeg;base64,';
               $b ='" alt="Card image cap" style="width: 338px; height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">
                 
                 
                  </h4>
        
             <p class="card-text">';
            $c = '</p>
            <div class="row">
                <div class="col">
                    <a href="../backend/finalizaServico.php?id=';$d='" class="btn btn-outline-success btn-block">Finalizar</a>
                </div>
            </div>
        </div>
        </div>
        </div>';
        $x = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-danger btn-block">Finalizado</a>
            </div>
        </div>
        </div>
        </div>
        </div>';
            for($i = 0;$i< $tam;$i++){
                $res = $array[$i];
                $ids = $res['Id_Anuncio'];
                $idc = $res['Id_Cliente'];
                $id = $res['Id_Agendamento'];
                $preco = $res['Preço'];
                
                $comando2 = "SELECT Titulo,Imagem FROM anuncio_serviço WHERE Id_Anuncio = '$ids'";
                $res2 = mysqli_query($this->con,$comando2);
                $t = $res2->fetch_assoc();
                $nomes = $t['Titulo'];
                $img = base64_encode($t['Imagem']);
                $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
                $res3 = mysqli_query($this->con,$comando3);
                $ax = $res3->fetch_assoc();
                $nomec = $ax['Nome'];
                $comando4 = "SELECT Data_Agendamento,Status_Prestação FROM agenda WHERE Id_Cliente = '$idc' AND Id_Anuncio = '$ids'";
                $res4 = mysqli_query($this->con,$comando4);
                $aux = $res4->fetch_assoc();
                $data = $aux['Data_Agendamento'];
                $status = $aux['Status_Prestação'];
                if($status){
    
                    $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$x;
                    }
                else{
               $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$c.$id.$d;
                }
        
            } 
            return $z;
            }
    
            function printSerAbertos(){
    
              
                $comando = "SELECT * FROM agenda WHERE Id_Anuncio != 0 AND Status_Prestação = FALSE ORDER BY Data_Agendamento";
                $res = mysqli_query($this->con,$comando);
                $array = array();
                $i =0;
                while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
                    $array[$i] = $item;
                    $i++;
                }
                $tam = sizeof($array);
                $z = "";
                $a = '<div class="col-12 col-md-6 col-lg-4">
                <p></p><div class="card">
                   <img class="card-img-top" src="data:image/jpeg;base64,';
                   $b ='" alt="Card image cap" style="width: 338px; height: 300px;">
                    <div class="card-body">
                        <h4 class="card-title">
                     
                     
                      </h4>
            
                 <p class="card-text">';
                $c = '</p>
                <div class="row">
                    <div class="col">
                        <a href="finalizaServico.php?id=';$d='" class="btn btn-outline-success btn-block">Finalizar</a>
                    </div>
                </div>
            </div>
            </div>
            </div>';
            $x = '</p>
    <div class="row">
    </div>
    </div>
    </div>
    </div>';
                for($i = 0;$i< $tam;$i++){
                    $res = $array[$i];
                    $ids = $res['Id_Anuncio'];
                    $id = $res['Id_Agendamento'];
                    $idc = $res['Id_Cliente'];
                    $preco = $res['Preço'];
                    
                    $comando2 = "SELECT Titulo,Imagem FROM anuncio_serviço WHERE Id_Anuncio = '$ids'";
                    $res2 = mysqli_query($this->con,$comando2);
                    $t = $res2->fetch_assoc();
                    $nomes = $t['Titulo'];
                    $img = base64_encode($t['Imagem']);
                    $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
                    $res3 = mysqli_query($this->con,$comando3);
                    $ax = $res3->fetch_assoc();
                    $nomec = $ax['Nome'];
                    $comando4 = "SELECT Data_Agendamento,Status_Prestação FROM agenda WHERE Id_Cliente = '$idc' AND Id_Anuncio = '$ids'";
                    $res4 = mysqli_query($this->con,$comando4);
                    $aux = $res4->fetch_assoc();
                    $data = $aux['Data_Agendamento'];
                    $status = $aux['Status_Prestação'];
                    if($status){
    
                        $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$x;
                        }
                    else{
                   $z = $z.$a.$img.$b.' O cliente '.$nomec.' agendou '.$nomes.' por R$'.$preco.'  na data '.$data.$c.$id.$d;
                    }
            
                } 
                return $z;
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

    function finalizaCompra($id){
        $fun = "UPDATE agenda SET Status_Prestação = TRUE WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);
        $comando = "SELECT Id_Venda FROM agenda WHERE Id_Agendamento = '$id'";
        $res2 = mysqli_query($this->con,$comando);
        $x = $res2->fetch_assoc();
        $idv = $x['Id_Venda'];
        $fun2 = "UPDATE vendas SET Status_Retirada = TRUE WHERE Id_Venda= '$idv'";
        $res3= mysqli_query($this->con, $fun2);
        $comando2 = "SELECT Id_Produto,Quantidade FROM vendas WHERE Id_Venda = '$idv'";
        $res4 = mysqli_query($this->con,$comando2);
        $z = $res4->fetch_assoc();
        $idp = $z['Id_Produto'];
        $quant = $z['Quantidade'];
        $comando3 = "SELECT Quantidade FROM produto WHERE Id_Produto = '$idp'";
        $res5 = mysqli_query($this->con,$comando3);
        $y = $res5->fetch_assoc();
        $quantVeia = $y['Quantidade'];
        $quantNova= $quantVeia - $quant;
        $fun3 = "UPDATE produto SET Quantidade = $quantNova WHERE Id_Produto= '$idp'";
        $res6= mysqli_query($this->con, $fun3);

    }

    function finalizaServico($id){
        //$fun = "INSERT INTO agenda (Status_Prestação) VALUES (TRUE)";
        $fun = "UPDATE agenda SET Status_Prestação = TRUE WHERE Id_Agendamento= '$id'";
        $res= mysqli_query($this->con, $fun);
       header("Location: ../frontend/vendas.php");
        
    }
 
}
