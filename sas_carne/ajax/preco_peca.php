<?php
require_once("../config/config.php");
require_once("../funcoes.php");

if($_POST['peca']!="" && $_POST["fornecedor"]!=""){
$dados_preco=$db_sas_read->query("SELECT * FROM PRODUTOS WHERE FORNECEDOR=".$_POST["fornecedor"]." AND PARTE=".$_POST["peca"]);
while($preco=$dados_preco->fetch_assoc()){
    $retificando=$preco;
}
//echo($_POST["fornecedor"]." ".$_POST["peca"]);
if($retificando["PRECO"]=="0.00"){
    echo "";
}else{
echo $retificando["PRECO"];
}
}
?>