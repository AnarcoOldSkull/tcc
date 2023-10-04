<?php
require_once("../config/config.php");
require_once("../funcoes.php");
session_start();


if($_POST["usuariomail"]!="" && $_POST["provedor"]!="" && $_POST["dominio"]!="" && 
    $_POST["empresa"]!="" && $_POST["cnpj"]!="" && $_POST["endereco"]!="" && $_POST["cidade"]!="" && $_POST["estado"]!=""){
    $email=$_POST["usuariomail"]."@".$_POST["provedor"].$_POST["dominio"];
    $ratifica= "UPDATE CADASTRO SET  EMPRESA='".$_POST["empresa"]."',
                                                                  CNPJ='".$_POST["cnpj"]."',
                                                                  ENDERECO='".$_POST["endereco"]."',
                                                                  CIDADE='".$_POST["cidade"]."',
                                                                  ESTADO='".$_POST["estado"]."',
                                                                  EMAIL='".$email."'
                                                                  WHERE
                                                                  ID='".$_SESSION["id"]."'";
       
    $atualiza_cadastro=$db_sas_write->query($ratifica);    
    }

echo cadastro_ja_expandido($_POST);

?>