function comentar(temp){
	alert(temp);
}

$("#btn-registrar").click(function(){
	var parametros = 
		"txt-descripcion="+$("#txt-descripcion").val()+"&"+
		"rbt-foto="+$("input[type='radio'][name='rbt-foto']:checked").val()+"&"+
		"txt-puntuacion="+$("#txt-puntuacion").val()+"&"+
		"slc-imagen="+$("#slc-imagen").val();
	//alert("Parametros: " + parametros);
	$.ajax({
		url:"ajax/guardar-registro.php",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			$("#div-memes").html(respuesta  +  $("#div-memes").html());
		},
		error:function(e){
			alert("Error: "+e);
		}
	});
})


$(document).ready(function(){
	//alert("El DOM ha sido cargado, la pagina esta lista");
	$.ajax({
		url:"ajax/obtener-memes.php",
		data:"",
		method:"POST",
		success:function(respuesta){
			$("#div-memes").html(respuesta);
		}
	});
});