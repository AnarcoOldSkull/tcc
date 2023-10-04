<?php
require_once("../config/config.php");
require_once("../funcoes.php");
if(!empty($_POST)){
if($_POST["informar"]==1){
$permicao=$db_sas_write->query("UPDATE CADASTRO SET TIPOCADASTRAL=2
                                                    WHERE
                                                    ID=\"".$_POST["whytoo"]."\"");
$insert_produtos="INSERT INTO PRODUTOS (FORNECEDOR, TIPODECORTE, PARTE, PRECO) VALUES ";
$query_partes=$db_sas_read->query("SELECT * FROM PARTES");
while($partes=$query_partes->fetch_assoc()){
    $insert_produtos.="('".$_POST["whytoo"]."','".$partes["TIPODECORTE"]."','".$partes["ID"]."','0.00'),";
}
$insert_produtos=substr($insert_produtos,0,-1);
$inserindo=$db_sas_write->query($insert_produtos);
                                                
}
if($_POST["informar"]==0){
$permicao=$db_sas_write->query("UPDATE CADASTRO SET NEGADO=1
                                                    WHERE
                                                    ID=\"".$_POST["whytoo"]."\"");
}
}
?>