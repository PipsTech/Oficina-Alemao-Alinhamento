<?php

class ControleServico{

    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;

    public function __construct(){
    //session_start();
    $this->con = new mysqli($this->host, $this->root, $this->pass);
    mysqli_select_db($this->con, 'tis');
    if ($this->con->connect_errno) {
        echo "Failed to connect to MySQL: " . $this->con->connect_error;
        exit();
    }
    }   
    function __getcon(){
    return $this->con;
    }
    function cadastraServico($nome,$descricao,$preco,$conteudo){
        if (isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $reg = "insert into anuncio_serviço (Descrição,Preço_Estimado,Titulo,Id_Funcionario,Imagem) values ('$descricao','$preco','$nome','$id','$conteudo')";
        mysqli_query($this->con,$reg);
        header("Location: ../frontend/homeFun.php");
        }
    }
    function veServico($id){
        $comando = "SELECT * FROM `anuncio_serviço` WHERE Id_Anuncio = '$id'";
        $res = mysqli_query($this->con,$comando);
        //$c = $res->fetch_array();
        return $res;
    }
    function orgServico(){

        $comando = "SELECT * FROM anuncio_serviço";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
                    $d = "";
                    $x = '<div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                       <img class="card-img-top" src="data:image/jpeg;base64,';
                       $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title">
                            <script>
                            function getSId';$p='(){
                                let thomas = document.getElementById("';$bah='");
                                var gabriel = thomas.getAttribute("id");
                                    console.log(gabriel);
                                window.location="../backend/visuS.php?id="+gabriel;
                            }
                            </script>
                          <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getSId';$jorge='()" id="';$y='" value="';$o='" >
                         
                          </h4>

                     <p class="card-text">';
                     $z = '</p>
                     </div>
                     <div class="col">
                         <a href="https://api.whatsapp.com/send?phone=553195281401&text=Ola%20Estou%20interessado%20na%20contratação%20do%20serviço%20de%20';$h='" class="btn btn-outline-success btn-block">Agendar Serviço</a>
                                    </div>
                                    </div>
                                </div>
                             </div>
                        </div>';  
                    $w= '</p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-outline-danger btn-block">';             
                    for($i = 0;$i< $tam;$i++){
                        $res = $array[$i];
                        $img = base64_encode($res['Imagem']);
                        $nome = $res['Titulo'];
                        $preco = $res['Preço_Estimado'];
                        $desc = $res['Descrição'];
                        $id = $res['Id_Anuncio'];
                            $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$preco.$z.$nome.$h;
                    } 
                    return $d;


    }
    function orgSerFun(){

        $comando = "SELECT * FROM anuncio_serviço";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $d = "";
        $x = '<div class="col-12 col-md-6 col-lg-4">
        <div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
           $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
                <script>
                function getSId';$p='(){
                    let thomas = document.getElementById("';$bah='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuS.php?id="+gabriel;
                }
                function gettSId';$pi='(){
                    let thomas = document.getElementById("';$ba='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuSF.php?id="+gabriel;
                }
                </script>
              <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getSId';$jorge='()" id="';$y='" value="';$o='" >
             
              </h4>

         <p class="card-text">';
        $w = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-outline-success btn-block" onclick="gettSId';$b='()" >Editar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        for($i = 0;$i< $tam;$i++){
            $res = $array[$i];
        $img = base64_encode($res['Imagem']);
        $nome = $res['Titulo'];
        $preco = $res['Preço_Estimado'];
        $desc = $res['Descrição'];
        $id = $res['Id_Anuncio'];
        $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$pi.$id.$ba.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$id.$b;
        } 
        return $d;


    }
    function setCookieS($id){
        setcookie('Id_Anuncio', $id, time() + 3600, '/');
        header('Location: ../frontend/verServico.php');

    }
    function setCookieSF($id){
        setcookie('Id_Anuncio', $id, time() + 3600, '/');
       header('Location: ../frontend/editarServico.php');

    }
    function excluirServico(){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "DELETE FROM anuncio_serviço WHERE Id_Anuncio = '$a'";
            isset($this->con);
            $ress = mysqli_query($this->con, $fun);
            if ($ress == true) {
                echo "Conta excluída com sucesss\n";
            } else {
                echo "Parabens! seus dados são nossos para sempre";
            }
            header('Location: ../frontend/homeFun.php');
        }
       
    }
    function alteraNomeServico($nome){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Titulo = '$nome' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        }        
    }
    function alteraDescricaoServico($desc){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Descrição = '$desc' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function alteraPrecoServico($preco){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Preço_Estimado = '$preco' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function alteraImagemServico($img){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Imagem = '$img' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }

}



?>