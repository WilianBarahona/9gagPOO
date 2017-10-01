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
	  var errores="";
	  if ($("#txt-codigo").val().length<=0){
	  	erores+="Codigo vacio\n";
	  }
      if($("#txt-descripcion").val().length<=0){
       errores+="Descripcion vacia"+"\n";
      }
      if(!$("input[type='radio'][name='rbt-foto']:checked").is(":checked")){
        errores+="Selecciones un usuario"+"\n";
      }
      if($("#txt-calificacion").val().length<=0){
        errores+="Calificacion vacia"+"\n";
      }
      if(!$.isNumeric($("#txt-calificacion").val())){
      	errores+="Calificacion invalida debe ser numerica"+"\n";
      }
      if($("#txt-calificacion").val()<0 || $("#txt-calificacion").val()>5 ){
        errores+="Rango calificacion invalido rangos validos{0-5}"+"\n";
      }

      if ($("#slc-imagen").val()=="Seleccione una imagen") {
        errores+="Seleccione un meme\n"
      }


      /*Si no hay campos vacios entoces llamar la funcion ajaxs*/
      if(errores.length<=0){
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
    }else{
    	 alert("-----Campos Vacios-------\n"+errores);
    }

	
})


$(document).ready(function(){
	$.ajax({
		url:"ajax/obtener-memes.php",
		data:"",
		method:"POST",
		success:function(respuesta){
			$("#div-memes").html(respuesta);
		}
	});
});