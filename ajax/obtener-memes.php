<?php

	$archivo = fopen("../data/memes.csv","r");	
	while ($linea=fgets($archivo)) {
		$partes = explode(",", $linea);
		$ruta="../data/comentarios/comentarios-memes-".$partes[0].".csv";
		// $archivoComentarios=fopen($rutaArchivoComentario,"r");
		
		if(is_file($ruta)){
			$comentarios=array();
			$archivoComentarios=fopen($ruta, "r");
			while (!feof($archivoComentarios)) {
				 $comentarios[]=fgets($archivoComentarios);
		    }
		    fclose($archivoComentarios);
			echo ' <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">';
			echo '  <div class="well">';
			echo '    <strong>'.$partes[2].'</strong>';
			echo '    <p>'.$partes[1].'</p>';
			echo '    <img src="'.$partes[4].'" class="img-responsive">';
			echo '    <span class="badge">calificacion:<span class="glyphicon glyphicon-star"      aria-hidden="true"></span>'.$partes[3].'</span>';
			echo '    <span class="badge">Comentarios: 5</span>';
			echo '    <p>';
			echo '      <hr>';
			echo '      <h4>Comentarios:</h4>';
			#----------------Obtener los comentarios--------------------
			echo 		'<div id="div-comentario-'.$partes[0].'">';
			for ($i=0; $i <sizeof($comentarios)-1; $i++) { 
				$partesComentarios=explode(",",$comentarios[$i]);
				echo '<strong>'.$partesComentarios[0].'</strong>';
				echo '<p class="commentario">'.$partesComentarios[1].'</p>';
			}
			
			echo		'</div>';


			echo '<textarea id="txt-comentario-'.$partes[0].'" class="form-control" placeholder="Nuevo comentario"></textarea>';
			echo '<input type = "button" value="Comentar" class="btn btn-default" onclick=comentar("' . $partes[0].'");>';
			echo '    </p>';
			echo '  </div>';
			echo '</div>';
		}else{
			echo ' <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">';
			echo '  <div class="well">';
			echo '    <strong>'.$partes[2].'</strong>';
			echo '    <p>'.$partes[1].'</p>';
			echo '    <img src="'.$partes[4].'" class="img-responsive">';
			echo '    <span class="badge">calificacion:<span class="glyphicon glyphicon-star"      aria-hidden="true"></span>'.$partes[3].'</span>';
			echo '    <span class="badge">Comentarios: 5</span>';
			echo '    <p>';
			echo '      <hr>';
			echo '      <h4>Comentarios:</h4>';
			#----------------Obtener los comentarios--------------------
			echo 		'<div id="div-comentario-'.$partes[0].'">';
			echo		'</div>';
			echo '<textarea id="txt-comentario-'.$partes[0].'" class="form-control" placeholder="Nuevo comentario"></textarea>';
			echo '<input type = "button" value="Comentar" class="btn btn-default" onclick=comentar("' . $partes[0].'");>';
			echo '    </p>';
			echo '  </div>';
			echo '</div>';
		}

		
	}
	fclose($archivo);
?>
<!-- '<?php echo $partes[0];?>' -->