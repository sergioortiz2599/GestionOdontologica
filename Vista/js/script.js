function consultarPaciente(){
	alert ("funciona");
 var url = "index.php?accion=ConsultarPaciente&documento=" +
$("#asignarDocumento").val();
 $("#paciente").load(url,function(){
 });
}