<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './lib/constantes.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
         <div id="contenedor">
             <div id="tituloSitio">
                 <div>
                     <img src="img/logo.png" height="200px" width="220px"/>
                 </div>
             </div>
             <div id="tituloPagina">titulo pagina</div>
             <div id="contenido">contenido</div>
            <div id="menu"><?php include './menu.php' ; ?></div>
            
            
        </div>
    </body>
<script>
        $("#solicitudIngresos").on( "click", function( event ) {
            if(($("[id*=subsolicitudIngresos]").css("display")!="none")){
                 $("[id*=subsolicitudIngresos]").css("display","none");
            }
            else{
                $("[id*=subsolicitudIngresos]").show();
                $("[id*=subsolicitudIngresos]").css("display","block");
            }                
        });
        $("#solicitudInformes").on( "click", function( event ) {
            if(($("[id*=subsolicitudInformes]").css("display")!="none")){
                 $("[id*=subsolicitudInformes]").css("display","none");
            }
            else{
                $("[id*=subsolicitudInformes]").show();
                $("[id*=subsolicitudInformes]").css("display","block");
            }    
        });
        $("#solicitudConsultas").on( "click", function( event ) {
            if(($("[id*=subsolicitudConsultas]").css("display")!="none")){
                 $("[id*=subsolicitudConsultas]").css("display","none");
            }
            else{
                $("[id*=subsolicitudConsultas]").show();
                $("[id*=subsolicitudConsultas]").css("display","block");
            }    
        });
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>

</html>  
            