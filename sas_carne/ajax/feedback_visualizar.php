<?php
require_once("../config/config.php");
require_once("../funcoes.php");

$query_corpo=$db_sas_read->query("SELECT * FROM FEEDBACK WHERE FORNECEDOR=".$_POST["fornecedor"]." AND TIPODECORTE=".$_POST["corte"]." AND PECA=".$_POST["peca"]);
while($corpo=$query_corpo->fetch_assoc()){
    $lista_preco[]=$corpo;
}
if(!empty($lista_preco)){
$tabelar="<table id=\"product_table\" class=\"table table-hover table-striped\">
        <thead>
        <tr></tr>
        <th></th>
        <th>EMPRESA</th>
        <th>COMPLEMENTOS</th>
        <th>PRODUTO</th>
        <th>AVALIZACAO</th>
        <th>FEEDBACK</th>
        <th>DATA</th>
        </tr>
        </thead>
        <tbody>";
        $i=1;
        foreach($lista_preco as $lista_atual){
            $tabelar.="<tr>
                       <td>".$i."</td>
                       <td>".nome_fornecedor($lista_atual["FORNECEDOR"])."</td>
                       <td>".nome_endereco($lista_atual["FORNECEDOR"])."<br>".nome_cidade($lista_atual["FORNECEDOR"])."<br>".get_estado(nome_estado($lista_atual["FORNECEDOR"]))."</td>
                       <td>".nome_corte($lista_atual["TIPODECORTE"])."<br>".nome_parte($lista_atual["PECA"])."</td>
                       <td>".apresentar_estrelas($lista_atual["ESTRELAS"])."</td>
                       <td>".$lista_atual["FEEDBACK"]."</td>
                       <td>".date("d/m/Y h:i:s", strtotime($lista_atual["DATA_FEEDBACK"]))."</td>
                       </tr>";
                       $i++;
        }
$tabelar.="<tbody></table>".botao_listar($_POST["fornecedor"],$_POST["corte"],$_POST["peca"]);
}else{
    $tabelar="<h3>Nenhum Feedback Adicionado Ainda!!</h3><br>".botao_listar($_POST["fornecedor"],$_POST["corte"],$_POST["peca"]);
}
echo $tabelar;
?>
<script>
$(document).ready(function() {
    $('#product_table').DataTable();
} );
</script>