<?php

$cabecalho="Se você é um fornecedor de carnes, e quer manter todos cientes dos seus produtos e preços por favor clique no botão abaixo e complete o restante do seu cadastro
        <div class=\"mb-3\">
            <button class=\"btn indi\" id=\"complementar\" onclick=\"complementar_cadastro()\"";
$buypass=testa_complemento();
if($buypass["NEGADO"]==1){
if($buypass["EMPRESA"]!=""){
    $cabecalho.= "disabled";
}
$cabecalho.=">Pedir Complemento</button>
            </div>";
$preenchimento="<h3>Seu Complemento foi negado!!</h3>
                 Por favor entre em contato com o Administrador por:<br>
                 leonardo.portopenna@gmail.com";    
}else{         
if($buypass["EMPRESA"]!=""){
    $cabecalho.= "disabled";
}            
$cabecalho.=">Pedir Complemento</button>
        </div>";
if($buypass["EMPRESA"]== ""){
    $preenchimento="";
}else{
  $preenchimento= cadastro_ja_expandido($buypass); 
}
}
echo selecionar_corpo($preenchimento, "",$cabecalho);
?>