<?php
require_once("../config/config.php");
require_once("../funcoes.php");

$pecas=select_pecas("onchange=\"peca_change()\"",$_POST["corte"])
      ."<div class=\"mb-3\">
         <label for=\"custo\" class=\"form-label\">Custo da Peça /Kg:</label>
         <input type=\"text\" class=\"form-control\" name=\"custo\" id=\"custo\" onkeypress=\"$(this).mask('#.##0,00', {reverse: true});\" placeholder=\"Digite o Custo da Peça\">
       </div>
       <div class=\"mb-3\">
            <button class=\"btn indi\" id=\"atual\" onclick=\"registrar_preco()\">Atualizar</button>
        </div>";
        echo $pecas;
?>