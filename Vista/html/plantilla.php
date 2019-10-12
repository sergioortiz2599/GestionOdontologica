<!DOCTYPE html>
<html>
 <head>
 <title>Sistema de Gestión Odontológica</title>
 <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
 </head>
 <body>
 
<?php
 if( isset($_GET["accion"])){
 if($_GET["accion"] == "asignar"){
 $controlador->verPagina('Vista/html/asignar.php');
 }
 if($_GET["accion"] == "consultar"){
 $controlador->verPagina('Vista/html/consultar.php');
 }
 if($_GET["accion"] == "cancelar"){
 $controlador->verPagina('Vista/html/cancelar.php');
 }
 } else {
 $controlador->verPagina('Vista/html/inicio.php');
 }
?>

 </body>
</html>