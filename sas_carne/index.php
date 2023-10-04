<?php
require_once("funcoes.php");
session_start();
if(!empty($_POST)){
session_sas($_POST);
header("loacation: http://localhost/sas_carne/logar/");
}

$aux = substr( $_SERVER['REQUEST_URI'], strlen('/')); 
	if( substr( $aux, -1) == '/'){ 
        $aux=substr( $aux, 0, -1); 
	}
	$url =explode( '/', $aux);

if(!array_key_exists(1,$url)){
$url[1]="";    
}

if($url[0]=='sas_carne'){
    $act='active';
}else{
    $act="";
}
if($url[1]=='logar'){
    $act1='active';
}else{
    $act1="";
}
if($url[1]=='quantificar'){
    $act2='active';
}else{
    $act2="";
}
if($url[1]=='valores'){
    $act3='active';
}else{
    $act3="";
}
if($url[1]=='valores'){
    $act4='active';
}else{
    $act4="";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css"  rel="stylesheet"  href="bootstrap/css/bootstrap.css"/>
        <link type="text/css"  rel="stylesheet"  href="bootstrap/css/bootstrap-grid.css"/>
        <link type="text/css"  rel="stylesheet"  href="bootstrap/css/bootstrap-reboot.css"/>
        <link type="text/css"  rel="stylesheet"  href="bootstrap/css/bootstrap-utilities.css"/>
        <link type="text/css"  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
        <link type="text/css"  rel="stylesheet"  href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"/>
        <link type="text/css"  rel="stylesheet"  href="css/estilos.css"/>
        <link rel="shortcut icon" href="bootstrap/icons/minecart-loaded.svg" type="image/x-icon"/>
        <title>SAS Carne</title>
    </head>
    <body>
        <nav class="navbar-expand-lg navbar-light" style="background: indigo;">
        <div class="tonavfront">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a href="main" class="nav-link <?php echo $act; ?> " title="Main" style="color:lightblue;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
        </a>
        </li>
        <li class="nav-item">
        <a href="logar" class="nav-link" <?php echo $act1; ?> title="Logar" style="color:lightblue;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
          <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
          <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
        </a>
        </li>
        <?php
        if(key_exists("permition",$_SESSION) && $_SESSION["permition"]==2){
        echo"<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"atualizar\" title=\"Atualizar Preços\" style=\"color:lightblue;\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-currency-exchange\" viewBox=\"0 0 16 16\">
          <path d=\"M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z\"/>
        </svg>
        </a>
        </li>";
        }
        ?>
        <li class="nav-item">
        <a class="nav-link" href="listar" title="Listar" style="color:lightblue;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
          <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg>
        </a>
        </li>
        </ul>
        </div>
        <ul class="navbar-nav tonavback">
        <?php

        if(key_exists("usuario",$_SESSION) && $_SESSION["usuario"]!=""){
        echo"<li class=\"nav-item\">
            <a class=\"nav-link fixa\" href=\"sair\" title=\"Sair\" style=\"color:lightblue;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-caret-left-fill\" viewBox=\"0 0 16 16\">
              <path d=\"m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z\"/>
            </svg>
            </a>
            </li>";
        }
        if(key_exists("permition",$_SESSION) && $_SESSION["permition"]==3){

        echo"<li class=\"nav-item\">
            <a class=\"nav-link fixa\" href=\"validacao\" title=\"Validação\" style=\"color:lightblue;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-circle\" viewBox=\"0 0 16 16\">
              <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
              <path d=\"M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z\"/>
            </svg>
            </a>
            </li>";

        }
        if(key_exists("permition",$_SESSION) && $_SESSION["permition"]==1){

        echo"<li class=\"nav-item\">
            <a class=\"nav-link fixa\" href=\"configuracao\" title=\"Configuração\" style=\"color:lightblue;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-gear-fill\" viewBox=\"0 0 16 16\">
                <path d=\"M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z\"/>
            </svg>
            </a>
            </li>";

        }
        ?>
        
        </ul>
        </nav>
       
    </body>
    <?php
                 if($url[0]=="sas_carne"){
                    require_once("index.php");
                 }
                 if($url[1] == 'main'){
                      require_once("main.php");
                  }elseif($url[1] == 'listar'){
                      require_once("listar.php");
                  }elseif($url[1] == 'atualizar'){
                      require_once("atualizar.php");
                  }elseif($url[1] == 'logar'){
                      require_once("logar.php");
                  }elseif($url[1] == 'validacao'){
                      require_once("validacao.php");
                  }elseif($url[1] == 'configuracao'){
                      require_once("configuracao.php");
                  }elseif($url[1] == 'sair'){
                      require_once("sair.php");
                  }elseif($url[1] == 'acessar'){
                      require_once("ajax/acessar.php");
                  }
    ?>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.esm.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/jquery3-6.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="js/cadastro.js"></script>
<script src="js/main.js"></script>
<script>
var forne=<?php echo json_encode($_SESSION["id"]);?>;
var estado=<?php echo json_encode(select_estado(""));?>;
</script>