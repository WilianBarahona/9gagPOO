<?php
	$archivo = fopen("../data/memes.csv","r");	
	while ($linea=fgets($archivo)) {
		$partes = explode(",", $linea);
		//echo $linea;

		echo ' <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">';
		echo '  <div class="well">';
		echo '    <strong>'.$partes[2].'</strong>';
		echo '    <p>'.$partes[1].'</p>';
		echo '    <img src="'.$partes[4].'" class="img-responsive">';
		echo '    <span class="badge">calificacion:<span class="glyphicon glyphicon-star"      aria-hidden="true"></span>'.$partes[3].'</span>';
		echo '    <span class="badge">Comentarios: 5</span>';
		echo '    <p>';
		echo '      <hr>';
		echo '      <h4>Comentarios:</h4>';
		echo ' 		<div id="div-comentario-'.$partes[0].'"></div>';
		echo '<textarea class="form-control" placeholder="Nuevo comentario"></textarea>';
		echo '<input type = "button" value="Comentar" class="btn btn-default" onclick=comentar("' . $partes[0].'");>';
		echo '    </p>';
		echo '  </div>';
		echo '</div>';
	}
	fclose($archivo);
?>
<!-- '<?php echo $partes[0];?>' -->