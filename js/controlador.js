function comentar(codigo){
	//alert(codigo)
	var obtenerDiv="div-comentario-"+codigo;
	var idObtenerDiv="#"+obtenerDiv;
	var obtenerDivTextComentario="txt-comentario-"+codigo;
	var idTextComentario="#"+obtenerDivTextComentario;
	//alert($(idTextComentario).val())
	var parametros =
		"txt-codigo="+codigo+"&"+
		"rbt-foto="+$("input[type='radio'][name='rbt-foto']:checked").val()+"&"+
		"txt-comentario"+"="+$(idTextComentario).val();
	//alert("Parametros: " + parametros);
	$.ajax({
		url:"ajax/procesar-comentarios.php",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			$(idObtenerDiv).html(respuesta  +  $(idObtenerDiv).html());
		},
		error:function(e){
			alert("Error: "+e);
		}
	});
}

$("#btn-registrar").click(function(){
	var parametros =
		"txt-codigo="+$("#txt-codigo").val()+"&"+
		"txt-descripcion="+$("#txt-descripcion").val()+"&"+
		"rbt-foto="+$("input[type='radio'][name='rbt-foto']:checked").val()+"&"+
		"txt-calificacion="+$("#txt-calificacion").val()+"&"+
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