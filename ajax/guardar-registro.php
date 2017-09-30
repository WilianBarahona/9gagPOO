<?php
	
	
	$archivo = fopen("../data/memes.csv", "a+");
	fwrite($archivo, 
		$_POST["txt-descripcion"].",".
		$_POST["rbt-foto"].",".
		$_POST["txt-puntuacion"].",".
		$_POST["slc-imagen"]."\n"
	);
	fclose($archivo);

	echo '<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">';
	echo '  <div class="well">';
	echo '    <strong>'.$_POST["rbt-foto"].'</strong>';
	echo '    <p>'.$_POST["txt-descripcion"].'</p>';
	echo '    <img src="'.$_POST["slc-imagen"].'" class="img-responsive">';
	echo '    <span class="badge">Puntos: '.$_POST["txt-puntuacion"].'</span>';
	echo '    <span class="badge">Comentarios: 6666</span>';
	echo '    <p>';
	echo '      <hr>';
	echo '      <h4>Comentarios:</h4>';
	echo '		<textarea class="form-control" placeholder="Nuevo comentario"></textarea>';
	echo '	 <input type = "button" value="Comentar" class="btn btn-default" onclick="comentar(\'      Puede enviar por aquí el codigo del meme\');">';
	echo '    </p>';
	echo '  </div>';
	echo '</div>';
?>