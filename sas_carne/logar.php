<?php
$mamain="<h3> Conectado com:</h3>
         <label for=\"produto\" class=\"form-label\">Usuário:</label>
            ".$_SESSION["usuario"]."
        </div>
        ";
if($_SESSION["usuario"]!=""){
    
}else{
$mamain="<form id=\"to_access\" method=\"post\" action=\"ajax/acessar.php\"><div class=\"mb-3\">
            <label for=\"produto\" class=\"form-label\">Usuário:</label>
            <input type=\"text\" class=\"form-control\" name=\"usua\" id=\"usua\" placeholder=\"Digite o Usuário\">
        </div>
        <div class=\"mb-3\">
            <label for=\"pass\" class=\"form-label\">Password:</label>
            <input type=\"password\" class=\"form-control\" name=\"pass\" id=\"pass\" placeholder=\"Digite a Senha\"\">
        </div>

        </form><button class=\"btn indi\" id=\"regir\" onclick=\"registrar()\">Registrar</button>&nbsp<button form=\"to_access\" class=\"btn indi\" id=\"acessar\">Acessar</button>";
    
}
echo selecionar_corpo($mamain, "", "");
?>