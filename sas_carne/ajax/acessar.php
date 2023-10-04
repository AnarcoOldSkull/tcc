<?php
require_once("../config/config.php");
require_once("../funcoes.php");
if($_POST["usua"]!="" && $_POST["pass"]!=""){
    $entrada=$db_sas_read->query("SELECT * FROM CADASTRO WHERE USUARIO='".$_POST["usua"]."' AND PASSWORD='".md5($_POST["pass"])."'");
    while($verifica=$entrada->fetch_assoc()){
        $armazenamento=$verifica;
    }
    
    header_informativo_logon($armazenamento);
}
?>