<?php
require_once("../config/config.php");
require_once("../funcoes.php");

$query_corpo=$db_sas_read->query("SELECT * FROM PRODUTOS WHERE PRECO!=\"0.00\"");
while($corpo=$query_corpo->fetch_assoc()){
    $lista_preco[]=$corpo;
}
$tabelar="<table id=\"product_table\" class=\"table table-hover table-striped\">
        <thead>
        <tr></tr>
        <th></th>
        <th>EMPRESA</th>
        <th>COMPLEMENTOS</th>
        <th>PRODUTO</th>
        <th>PREÇO ATUAL</th>
        <th>FEEDBACK</th>
        </tr>
        </thead>
        <tbody>";
        $i=1;
        foreach($lista_preco as $lista_atual){
            $tabelar.="<tr>
                       <td>".$i."</td>
                       <td>".nome_fornecedor($lista_atual["FORNECEDOR"])."</td>
                       <td>".nome_endereco($lista_atual["FORNECEDOR"])."<br>".nome_cidade($lista_atual["FORNECEDOR"])."<br>".get_estado(nome_estado($lista_atual["FORNECEDOR"]))."</td>
                       <td>".nome_corte($lista_atual["TIPODECORTE"])."<br>".nome_parte($lista_atual["PARTE"])."</td>
                       <td>R$ ".$lista_atual["PRECO"]."</td>
                       <td>".botao_feedback($lista_atual["FORNECEDOR"],$lista_atual["TIPODECORTE"],$lista_atual["PARTE"])."</td>
                       </tr>";
                       $i++;
        }
$tabelar.="<tbody></table>";
echo $tabelar;
?>
<script>
$(document).ready(function() {
    $('#product_table').DataTable();
} );
</script>