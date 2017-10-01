<?php
	
	
	$archivo = fopen("../data/memes.csv", "a+");
	fwrite($archivo, 
		$_POST["txt-codigo"].",".
		$_POST["txt-descripcion"].",".
		$_POST["rbt-foto"].",".
		$_POST["txt-calificacion"].",".
		$_POST["slc-imagen"]."\n"
	);
	fclose($archivo);

	echo '<div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">';
	echo '  <div class="well">';
	echo '    <strong>'.$_POST["rbt-foto"].'</strong>';
	echo '    <p>'.$_POST["txt-descripcion"].'</p>';
	echo '    <img src="'.$_POST["slc-imagen"].'" class="img-responsive">';
	echo 	'<span class="badge">Calificacion:';
	for ($i=0; $i <$_POST["txt-calificacion"]; $i++) { 
		echo	 '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
	}
	echo	 '</span>';
	echo '    <span class="badge">Comentarios: 0</span>';
	echo '    <p>';
	echo '      <hr>';
	echo '      <h4>Comentarios:</h4>';
	echo ' 		<div id="div-comentario-'.$_POST["txt-codigo"].'"></div>';
	echo '<textarea id="txt-comentario-'.$_POST["txt-codigo"].'" class="form-control" placeholder="Nuevo comentario"></textarea>';
	echo '<input type = "button" value="Comentar" class="btn btn-default" onclick=comentar("'.$_POST["txt-codigo"].'");>';
	echo '    </p>';
	echo '  </div>';
	echo '</div>';
?>