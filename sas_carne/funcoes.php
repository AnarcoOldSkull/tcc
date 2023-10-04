<?php
require_once("config/config.php");
function selecionar_corpo($main, $inferior, $cabecalho){
     
  $corpo="<div id=\"botoes\">
        <h3 id=\"tit\">SAS Carne</h3>
        ".$cabecalho."
        </div>
        <div id=\"corpo\">

        <div id=\"mainapresenta\">
        ".$main."
        </div>
        <div id=\"bootshow\">
        ".$inferior."
        </div>
        </div>";
        return $corpo;
}

function header_informativo_logon($entra){
          
    $return="<form method=\"post\" action=\"http://localhost/sas_carne/\" name=\"form\">";
       
        $return.= "<input type=\"hidden\" value=\"".$entra["USUARIO"]."\" name=\"usuario\"/>";
        $return.= "<input type=\"hidden\" value=\"".$entra["TIPOCADASTRAL"]."\" name=\"permition\"/>";
        $return.= "<input type=\"hidden\" value=\"".$entra["ID"]."\" name=\"id\"/>";
        $return.= "<input type=\"submit\" value=\"true\" id=\"permissao\" hidden/>";

    $return.="</form>";
    echo $return;
?>
<script>
document.getElementById("permissao").click();
</script>
<?php
}
function header_informativo_logoff(){
          
    $return="<form method=\"post\" action=\"http://localhost/sas_carne/\" name=\"form\">";
       
        $return.= "<input type=\"hidden\" value=\"true\" name=\"logoff\"/>";
        $return.= "<input type=\"submit\" value=\"true\" id=\"send\" hidden/>";

    $return.="</form>";
    echo $return;
?>
<script>
document.getElementById("send").click();
</script>
<?php
}

function session_sas($atribuido){
if(key_exists("usuario",$atribuido)){    
if($atribuido["usuario"]!="" && $atribuido["permition"]!=""){
$_SESSION["usuario"]=$atribuido["usuario"];
$_SESSION["permition"]=$atribuido["permition"];
$_SESSION["id"]=$atribuido["id"];
}
}else{
    if($_POST["logoff"]!=""){
        $_SESSION["usuario"]="";
        $_SESSION["permition"]="";
        $_SESSION["id"]="";
    }
}
}

function select_tipos_cortes($function){
    global $db_sas_read;
    $dados_select=$db_sas_read->query("SELECT * FROM CORTES");
    while($val_prod=$dados_select->fetch_assoc()){
        $prod[$val_prod["ID"]]=$val_prod;
    }
    $retorno="<select class=\"form-select\" name=\"cortes\" id=\"cortes\" ".$function.">
               <option value=\"\">Selecionar o tipo de corte</option>";
    foreach($prod as $variavel){
        $retorno.="<option value=\"".$variavel["ID"]."\">".$variavel["TIPODECORTE"]."</option>";
    }
    $retorno.="</select>";
    return $retorno;
}

function select_pecas($function, $tipo){
    global $db_sas_read;
    $dados_select=$db_sas_read->query("SELECT * FROM PARTES WHERE TIPODECORTE=".$tipo);
    while($corte_peca=$dados_select->fetch_assoc()){
        $peca[$corte_peca["ID"]]=$corte_peca;
    }
    $retorno="<div class=\"mb-3\">
               <label for=\"peca\" class=\"form-label\">Peça:</label><br>
               <select class=\"form-select\" name=\"peca\" id=\"peca\" ".$function.">
               <option value=\"\">Selecionar a peça</option>";
    foreach($peca as $variavel){
        $retorno.="<option value=\"".$variavel["ID"]."\">".$variavel["PARTE"]."</option>";
    }
    $retorno.="</select>
              </div>";
    return $retorno;
}
function transformar_em_cadastrado($verifica){
    if(isset($verifica["EMPRESA"])){
        $retornavel["empresa"]=$verifica["EMPRESA"];
    }
    if(isset($verifica["CNPJ"])){
        $retornavel["cnpj"]=$verifica["CNPJ"];
    }
    if(isset($verifica["ENDERECO"])){
        $retornavel["endereco"]=$verifica["ENDERECO"];
    }
    if(isset($verifica["CIDADE"])){
        $retornavel["cidade"]=$verifica["CIDADE"];
    }
    if(isset($verifica["ESTADO"])){
        $retornavel["estado"]=$verifica["ESTADO"];
    }
    if(isset($verifica["EMAIL"])){
        $temp=explode("@",$verifica["EMAIL"]);
        $retornavel["usuariomail"]=$temp[0];
        $temp2=explode(".",$temp[1]);
        $retornavel["provedor"]=$temp2[0];
        if(isset($temp2[2])){
        $retornavel["dominio"]=".".$temp2[1].".".$temp2[2];    
        }elseif(isset($temp2[1])){
            $retornavel["dominio"]=".".$temp2[1];
        }
    }
    return $retornavel;
}
function cadastro_ja_expandido($post){
    if(key_exists("EMPRESA",$post)){
    $post=transformar_em_cadastrado($post);
    }
    $corpo="<div class=\"mb-3\">
            <label for=\"emper\" class=\"form-label\">Empresa:</label>
            <input type=\"text\" class=\"form-control\" name=\"emper\" id=\"emper\" value=\"".$post["empresa"]."\" placeholder=\"Nome da Empresa\"\" disabled>
        </div>
        <div class=\"mb-3\">
            <label for=\"cnp\" class=\"form-label\">CNPJ:</label>
            <input type=\"text\" class=\"form-control\" name=\"cnp\" id=\"cnp\" maxlength=\"18\" value=\"".$post["cnpj"]."\" onkeypress=\"$(this).mask('##.###.###/####-##', {reverse: false});\" placeholder=\"CNPJ da Empresa\"\" disabled>
        </div>
        <div class=\"mb-3\">
            <label for=\"ender\" class=\"form-label\">Endereço:</label>
            <input type=\"text\" class=\"form-control\" name=\"ender\" id=\"ender\" value=\"".$post["endereco"]."\" placeholder=\"Endereço da Empresa\"\" disabled>
        </div>
        <div class=\"mb-3\">
            <label for=\"cida\" class=\"form-label\">Cidade:</label>
            <input type=\"text\" class=\"form-control\" name=\"cida\" id=\"cida\" value=\"".$post["cidade"]."\" placeholder=\"Cidade da Sede da Empresa\"\" disabled>
        </div>
        <div class=\"mb-3\">
            <label for=\"esta\" class=\"form-label\">Estado:</label>
            ".select_estado($post["estado"])."
        </div>
        <div class=\"mb-3\" id=\"tomail\">
            <label for=\"frontmail\" class=\"form-label\">E-mail:</label><br>
            <input type=\"text\" class=\"form-control\" name=\"frontmail\" id=\"frontmail\" value=\"".$post["usuariomail"]."\" placeholder=\"Usuario do E-mail da Empresa\"\" disabled>@
            <input type=\"text\" class=\"form-control\" name=\"provmail\" id=\"provmail\" value=\"".$post["provedor"]."\" placeholder=\"Provedor do E-mail da Empresa\"\" disabled>
        </div>
        <div id=\"dome\">
        <select name=\"domainmail\" id=\"domainmail\" disabled>
        <option value=\"\">Selecione o Dominio</option>
        <option value=\".com.br\" ";
if($post["dominio"]==".com.br"){
        $corpo.="selected";            
        }
$corpo.="<option value=\".com\" ";
        if($post["dominio"]==".com"){
        $corpo.="selected";            
        }
$corpo.=">.com</option>
        <option value=\".br\" ";
        if($post["dominio"]==".br"){
        $corpo.="selected";            
        }
$corpo.=">.br</option>
        <option value=\".com.br\" ";
        if($post["dominio"]==".com.br"){
        $corpo.="selected";            
        }
$corpo.=">.com.br</option>
        <option value=\".edu\" ";
        if($post["dominio"]==".edu"){
        $corpo.="selected";            
        }
$corpo.=">.edu</option>
        <option value=\".net\" ";
        if($post["dominio"]==".net"){
        $corpo.="selected";            
        }
$corpo.=">.net</option>
        <option value=\".gov\" ";
        if($post["dominio"]==".gov"){
        $corpo.="selected";            
        }
$corpo.=">.gov</option>
        <option value=\".mil\" ";
        if($post["dominio"]==".mil"){
        $corpo.="selected";            
        }
$corpo.=">.mil</option>
        </select>
        </div>";
        
return $corpo;
}
function testa_complemento(){
    global $db_sas_read;
    global $_SESSION;
    
    $testa_complemento=$db_sas_read->query("SELECT * FROM CADASTRO WHERE ID=\"".$_SESSION["id"]."\"");
    while($complemento=$testa_complemento->fetch_assoc()){
        $confirmacao=$complemento;
    }
    return $confirmacao;
}

function nome_corte($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM CORTES WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["TIPODECORTE"];
}
function nome_parte($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM PARTES WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["PARTE"];
}
function nome_fornecedor($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM CADASTRO WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["EMPRESA"];
}
function nome_endereco($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM CADASTRO WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["ENDERECO"];
}
function nome_cidade($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM CADASTRO WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["CIDADE"];
}
function nome_estado($id){
    global $db_sas_read;
    $query_fornecedor=$db_sas_read->query("SELECT * FROM CADASTRO WHERE ID=".$id);
    while($fornecedor=$query_fornecedor->fetch_assoc()){
        $intermedia=$fornecedor;
    }
    return $intermedia["ESTADO"];
}
function botao_feedback($forne,$corte,$parte){
    $string="<button class=\"btn indi\"onclick=\"chamar_feedback($forne,$corte,$parte)\">Feedback</button>";
    return $string;
}
function botao_listar($forne,$corte,$parte){
    $string="<button class=\"btn indi\"onclick=\"listar_again()\" title=\"Listar\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-card-list\" viewBox=\"0 0 16 16\">
              <path d=\"M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z\"/>
              <path d=\"M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z\"/>
            </svg>
            </button>
            <button class=\"btn indi\" onclick=\"adicionar_feed($forne,$corte,$parte)\" title=\"Adicionar Feedback\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-plus-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z\"/>
            </svg>
            </button>";
    return $string;
}
function apresentar_estrelas($numero){
    $estrelas="";
    for($i=1;$i<=$numero; $i++){
        $estrelas.="<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                      <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>
                    </svg>";
    }
   return $estrelas; 
}
function select_estrelas(){
    $star="<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                      <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>
                    </svg>";
        $estrelas="<br><br><h6>Descrição:<h6>
                    <textarea name=\"descricao_feedback\" id=\"descricao_feedback\" class=\"form-control\" style=\"width: 95%\" rows=\"5\"></textarea>
                   <h6>Quantas estrelas você dá para o produto?</h6>";
        for($j=1;$j<=5;$j++){
         $estrelas.="<input type=\"radio\" class=\"form-check-input\" id=\"star".$j."\" name=\"star\" value=\"".$j."\">
                <label for=\"star".$j."\">";
            for($i=1;$i<=$j;$i++){
                $estrelas.=$star;
            }
         $estrelas.="</label><br>";

        }
        $estrelas.="<br>";

    return $estrelas;
}
function submeter_feed($forne,$corte,$parte){
    $botaozinho="<button class=\"btn indi\" id=\"botaozinhosubmeter\" onclick=\"feed_submeter($forne,$corte,$parte)\" title=\"Submeter Feedback\">
                 Enviar
                 </button>";
                 return $botaozinho;
}
function select_estado($id){
    global $db_sas_read;
    $siglas = $db_sas_read->query("SELECT * FROM UF");
    while($sg=$siglas->fetch_assoc()){
        $sig[]=$sg;
    }
    $estado="<select class=\"form-select\" name=\"esta\" id=\"esta\"";
    if($id!=""){
        $estado.="disabled";
    }
    $estado.=">
            <option value=\"\">Selecion o Estado</option>";
    foreach($sig as $uf){
        $estado.="<option value=\"".$uf["ID"]."\" ";
        if($uf["ID"]==$id){
            $estado.=" selected";
        }
        $estado.=">".$uf["SIGLA"]." - ".$uf["ESTADO"]."</option>";
    }
    $estado.="</select>";
    return $estado;
}
function get_estado($id){
    global $db_sas_read;
    $este_estado=$db_sas_read->query("SELECT * FROM UF WHERE ID=\"".$id."\"");
    while($estado=$este_estado->fetch_assoc()){
        $uf=$estado;
    }
    return $uf["SIGLA"]." - ".$uf["ESTADO"];
}
?>