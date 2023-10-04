<?php
require_once("../config/config.php");
if($_POST["user"]!="" && $_POST["pas"]!=""){
    $testemunha=$db_sas_read->query("SELECT * FROM CADASTRO WHERE USUARIO='".$_POST["user"]."'");
    while($mediocampo=$testemunha->fetch_assoc()){
        $testecompleto[$mediocampo["ID"]]=$mediocampo;
    }
    if(empty($testecompleto)){
        $cadastrar=$db_sas_write->query("INSERT INTO CADASTRO (USUARIO, 
                                                               PASSWORD,
                                                               TIPOCADASTRAL) 
                                                               VALUES 
                                                               ('".$_POST["user"]."',
                                                               '".md5($_POST["pas"])."',
                                                               1)");
        echo "<script>alert(\"Usuário cadastrado corretamente!!\"
                            +\"Acesse agora o sistema para demais funcionalidades\");</script>";
    }else{
        echo "<script>alert(\"Usuário já cadastrado!!\"
                            +\"Se você ainda não está cadastrado, por favor use outro usuario!!\");</script>";
    }
}
?>