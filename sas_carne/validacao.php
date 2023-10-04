<?php

$query_corpo=$db_sas_read->query("SELECT * FROM CADASTRO WHERE EMPRESA!='NULL'");
while($corpo=$query_corpo->fetch_assoc()){
    $para_corpo[]=$corpo;
}

$tabelar="<table id=\"product_table\" class=\"table table-hover table-striped\">
        <thead>
        <tr></tr>
        <th></th>
        <th>EMPRESA</th>
        <th>CNPJ</th>
        <th>COMPLEMENTOS</th>
        <th>VALIDACAO</th>
        </tr>
        </thead>
        <tbody>";
        $i=1;
        foreach($para_corpo as $estrutura){
        if($estrutura["TIPOCADASTRAL"]==2){
            $exibicao="Aprovado";

        }elseif($estrutura["NEGADO"]==1){
            $exibicao="Reprovado";

        }else{
            $exibicao="<button class=\"btn btn-button\" id=\"aprov\" onclick=\"retornar(1,".$estrutura["ID"].")\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-lg\" viewBox=\"0 0 16 16\">
                      <path d=\"M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z\"/>
                    </svg>
                    </button>
                   <button class=\"btn btn-button\" id=\"reprov\" onclick=\"retornar(0,".$estrutura["ID"].")\">
                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-circle\" viewBox=\"0 0 16 16\">
                      <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                      <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
                    </svg>
                   </button>";
        }
        $tabelar.="<tr>
                   <td>".$i."</td>
                   <td>".$estrutura["EMPRESA"]."</td>
                   <td>".$estrutura["CNPJ"]."</td>
                   <td>".$estrutura["ENDERECO"]."<br>".$estrutura["CIDADE"]."<br>".get_estado($estrutura["ESTADO"])."<br>".$estrutura["EMAIL"]."</td>
                   <td id=\"respostavalida".$estrutura["ID"]."\" ";
        if($exibicao=="Aprovado"){
            $tabelar.="style=\"background: green; color: red; text-align: center; vertical-align: middle; font-weight: bold\"";
        }elseif($exibicao=="Reprovado"){
            $tabelar.="style=\"background: red; color: yellow; text-align: center; vertical-align: middle; font-weight: bold\"";
        }            
           
        $tabelar.=">".$exibicao."
                   </td>
                   </tr>";
        }
$tabelar.="<tbody></table>";
echo selecionar_corpo($tabelar, "","");

?>
<script>
document.getElementById("corpo").style.border="none";
</script>
