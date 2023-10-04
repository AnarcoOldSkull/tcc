<?php
require_once("../config/config.php");
require_once("../funcoes.php");
session_start();
if($_SESSION["usuario"]!="" && $_SESSION["permition"]!="2"){
echo "<h4>Você quer deixar seu Feedback sobre: </h4><br> - ".nome_fornecedor($_POST["fornecedor"])."<br> -  ".nome_corte($_POST["corte"])."<br> - ".nome_parte($_POST["peca"]);
echo select_estrelas();
echo botao_listar($_POST["fornecedor"], $_POST["corte"], $_POST["peca"]).submeter_feed($_POST["fornecedor"], $_POST["corte"], $_POST["peca"]);

}
?>