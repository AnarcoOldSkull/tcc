<?php
require_once("../config/config.php");
if($_POST["mostrar"]!=""){
    $mainstrar=$db_sas_read->query("SELECT * FROM MAIN_APRESENTA WHERE ID='".$_POST["mostrar"]."'");
    while($mainmostrar=$mainstrar->fetch_assoc()){
        $valormostrar=$mainmostrar;
    }
    echo $valormostrar["DESCRICAO"];
}
?>