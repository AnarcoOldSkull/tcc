<?php
require_once("../config/config.php");
require_once("../funcoes.php");

if($_POST["custo"]!="" && $_POST["fornecedor"]!="" && $_POST["corte"]!="" && $_POST["peca"]!=""){
    $text1="UPDATE PRODUTOS SET PRECO='".$_POST["custo"]."' WHERE FORNECEDOR=".$_POST["fornecedor"]." AND TIPODECORTE=".$_POST["corte"]." AND PARTE=".$_POST["peca"];
    $atualizando_preco=$db_sas_write->query($text1);

$select=$db_sas_read->query("SELECT ID FROM PRODUTOS WHERE FORNECEDOR=".$_POST["fornecedor"]." AND TIPODECORTE=".$_POST["corte"]." AND PARTE=".$_POST["peca"]);
while($selected=$select->fetch_assoc()){
    $updateid=$selected;
}
$text2="INSERT INTO ATUALIZACOES (PRODUTO, PRECO, DATA_ATUALIZACAO) VALUES (".$updateid["ID"].",'".$_POST["custo"]."','".date("Y-m-d h:i:s")."')";
$historico=$db_sas_write->query($text2);
echo "Preço ajustado corretamente!!
O novo valor para seu produto é RS".$_POST["custo"];
}
?>