function mainapresenta(main){
     $.post("ajax/main.php", {mostrar : ""+main+""} )
    .done(function( data ) {
                        $("#mainapresenta").empty();
                        $("#mainapresenta").append(data);
                      });
}

function registrar(){
    usuario=$("#usua").val();
    senha=$("#pass").val();
    $.post("ajax/registro.php",{user: ""+usuario+"", pas: ""+senha+"" })
    .done(function(data){
    $("#mainapresenta").append(data);
    });
}

function atribuir(){
    tipo=tipos_cortes;
    campoSelect=document.createElement("select");
    campoSelect.setAttribute("name","corte");
    campoSelect.setAttribute("id","corte");    
    $("#mainapresenta").append("<div class=\"mb-3\">"
                       +"<label for=\"corte\" class=\"form-label\">Tipo de Corte:</label>");
    $("#mainapresenta").append(campoSelect);
    $("#mainapresenta").append("</div>");
    $("#corte").append(new Option("Selecionar o Tipo de Corte", ""));
    var quantidade=Object.keys(tipo).length;
    var campoOption;
    for(let i=0;i<quantidade;i++){
     campoOption=new Option(""+tipo[i]["TIPODECORTES"], ""+tipo[i]["ID"]);
     console.log(campoOption);
     $("#corte").append(campoOption);
    };
    $("#corte").css("width", "95%");
    $("#corte").css("margin-left", "2.5%");   
}
function corte_change(){
    tipo=$("#cortes").val();
    $.post("ajax/tipo_corte.php", {corte : ""+tipo+""} )
    .done(function( data ) {
                        $("#mainapresenta").empty();
                        $("#mainapresenta").append(data);
                      });  
}
function peca_change(){
    peca=$("#peca").val();
    $.post("ajax/preco_peca.php", {peca : ""+peca+"", fornecedor: ""+forne+""} )
    .done(function( data ) {
        $("#custo").val(data);
    });  
}
function complementar_cadastro(){
    
    var branco= new Option("Selecione o Dominio","");
    var com= new Option(".com",".com");
    var br= new Option(".br",".br");
    var combr = new  Option(".com.br",".com.br");
    var edu = new  Option(".edu",".edu")
    var net = new  Option(".net",".net");
    var gov = new  Option(".gov",".gov");
    var mil = new  Option(".mil",".mil"); 
    var campoSelect=document.createElement("select");
    campoSelect.setAttribute("name","domainmail");
    campoSelect.setAttribute("id","domainmail");
    corpo="<div class=\"mb-3\">"
            +"<label for=\"emper\" class=\"form-label\">Empresa:</label>"
            +"<input type=\"text\" class=\"form-control\" name=\"emper\" id=\"emper\" placeholder=\"Nome da Empresa\"\" required>"
        +"</div>"
        +"<div class=\"mb-3\">"
            +"<label for=\"cnp\" class=\"form-label\">CNPJ:</label>"
            +"<input type=\"text\" class=\"form-control\" name=\"cnp\" id=\"cnp\" maxlength=\"18\" onkeypress=\"$(this).mask('##.###.###/####-##', {reverse: false});\" placeholder=\"CNPJ da Empresa\"\" required>"
        +"</div>"
        +"<div class=\"mb-3\">"
            +"<label for=\"ender\" class=\"form-label\">Endereço:</label>"
            +"<input type=\"text\" class=\"form-control\" name=\"ender\" id=\"ender\" placeholder=\"Endereço da Empresa\"\" required>"
        +"</div>"
         +"<div class=\"mb-3\">"
            +"<label for=\"cida\" class=\"form-label\">Cidade:</label>"
            +"<input type=\"text\" class=\"form-control\" name=\"cida\" id=\"cida\" placeholder=\"Cidade da Sede da Empresa\"\" required>"
        +"</div>"
         +"<div class=\"mb-3\">"
            +"<label for=\"esta\" class=\"form-label\">Estado:</label>"
            +estado
            //+"<input type=\"text\" class=\"form-control\" name=\"esta\" id=\"esta\" placeholder=\"Estado da Sede da Empresa\"\" required>"
        +"</div>"
        +"<div class=\"mb-3\" id=\"tomail\">"
            +"<label for=\"frontmail\" class=\"form-label\">E-mail:</label><br>"
            +"<input type=\"text\" class=\"form-control\" name=\"frontmail\" id=\"frontmail\" placeholder=\"Usuario do E-mail da Empresa\"\" required>@"
            +"<input type=\"text\" class=\"form-control\" name=\"provmail\" id=\"provmail\" placeholder=\"Provedor do E-mail da Empresa\"\" required>";
    $("#mainapresenta").empty();
    $("#mainapresenta").append(corpo);
    $("#mainapresenta").append("</div><div id=\"dome\">");
    $("#dome").append(campoSelect);
    $("#mainapresenta").append("<div class=\"mb-3\">"
                                    +"<button class=\"btn indi\" onclick=\"atualizar_dados_cadastrais()\">Atualizar</button>"
                                +"</div>");
    $("#domainmail").append(branco);
    $("#domainmail").append(com);
    $("#domainmail").append(br);
    $("#domainmail").append(combr);
    $("#domainmail").append(edu);
    $("#domainmail").append(net);
    $("#domainmail").append(gov);
    $("#domainmail").append(mil);
}
function atualizar_dados_cadastrais(){
    var empresa=$("#emper").val();
    var cnpj=$("#cnp").val();
    var endereco=$("#ender").val();
    var cidade=$("#cida").val();
    var estado=$("#esta").val();
    var usuariomail=$("#frontmail").val();
    var provedor=$("#provmail").val();
    var dominio=$("#domainmail").val();
    if(empresa!="" && cnpj!="" && endereco!="" && cidade!="" && empresa!="" && estado!="" && usuariomail!="" && provedor!="" && dominio!=""){
    $.post("ajax/expandir.php",{empresa: ""+empresa+"", 
                                cnpj: ""+cnpj+"", 
                                endereco: ""+endereco+"", 
                                cidade: ""+cidade+"", 
                                estado: ""+estado+"", 
                                usuariomail: ""+usuariomail+"", 
                                provedor: ""+provedor+"" , 
                                dominio: ""+dominio+"" })
    .done(function(data){
    document.getElementById("complementar").setAttribute("disabled","disabled");    
    $("#mainapresenta").empty();    
    $("#mainapresenta").append(data);
    });
    }else{
        alert("Favor notar que todos os campos são obrigatorios de registro");
    }
}
function retornar(informativo, identificacao){
    var why=identificacao;
    if(informativo==1){
        colapso="<b>Aprovado</b>";
        coloracao="green";
        letra="red";
    }
    if(informativo==0){
        colapso="<b>Reprovado</b>";
        coloracao="red";
        letra="yellow";
    }
    $.post("ajax/aprovacao.php", {whytoo : ""+why+"", informar: ""+informativo+""} )
    .done(function( data ) {
                $("#respostavalida"+identificacao).empty();
                $("#respostavalida"+identificacao).append(colapso);
                $("#respostavalida"+identificacao).css("background",coloracao);
                $("#respostavalida"+identificacao).css("color",letra);
                $("#respostavalida"+identificacao).css("text-align","center");
                $("#respostavalida"+identificacao).css("vertical-align","middle");
    }); 

}
function registrar_preco(){
    var cortes=$("#cortes").val();
    var peca=$("#peca").val();
    var custo=$("#custo").val();
        $.post("ajax/resgistrar_preco.php",{fornecedor: ""+forne+"", 
                                          corte: ""+cortes+"", 
                                          peca: ""+peca+"", 
                                          custo: ""+custo+""})
    .done(function(data){
    if(data!=""){
        alert(data);
    }    
    
    });
}
function chamar_feedback(fornecedor, corte, parte){
    $.post("ajax/feedback_visualizar.php",{fornecedor: ""+fornecedor+"", 
                                          corte: ""+corte+"", 
                                          peca: ""+parte+""})
    .done(function(data){
        $("#mainapresenta").empty();
        $("#mainapresenta").append(data);
    }); 
}
function listar_again(){
    $.post("ajax/listar_again.php",{listar: "1"})
    .done(function(data){
        $("#mainapresenta").empty();
        $("#mainapresenta").append(data);
    }); 
}
function adicionar_feed(fornecedor, corte, parte){
    $.post("ajax/feedback_adicionar.php",{fornecedor: ""+fornecedor+"", 
                                          corte: ""+corte+"", 
                                          peca: ""+parte+""})
    .done(function(data){
        $("#mainapresenta").empty();
        $("#mainapresenta").append(data);
    });
}
function feed_submeter(fornecedor, corte, parte){
    descricao=$("#descricao_feedback").val();
    estrelas=document.querySelector('input[name="star"]:checked').value;

    
    $.post("ajax/feedback_submeter.php",{fornecedor: ""+fornecedor+"", 
                                          corte: ""+corte+"", 
                                          peca: ""+parte+"",
                                          stars: ""+estrelas+"",
                                          feed: ""+descricao+""})
    .done(function(data){
        $("#mainapresenta").empty();
        $("#mainapresenta").append(data);
    });
}
$(document).ready(function() {
    $('#product_table').DataTable();
} );