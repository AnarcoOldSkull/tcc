<?php

$user="root";
$pass="";
$server="localhost";

        $db_sas_read = new mysqli($server, $user, $pass, "sas_carne");
        $db_sas_write = new mysqli($server, $user, $pass, "sas_carne");

        $db_sas_read->set_charset('utf8');
        $db_sas_write->set_charset('utf8');
        
        if($db_sas_read->connect_errno>0){
            die("Não foi possivel realizar a conexão [".$db_sas_read->erro."]");
        }
        
        if($db_sas_write->connect_errno>0){
            die("Não foi possivel realizar a conexão [".$db_sas_write->erro."]");
        }
?>