<?php 
	$rutaArchivo="../data/comentarios/comentarios-memes-".$_POST["txt-codigo"].".csv";
	$archivoComentarios=fopen($rutaArchivo,"a+");
	fwrite($archivoComentarios,
		   $_POST["rbt-foto"].",".
		   $_POST["txt-comentario"]."\n"
		  );
	fclose($archivoComentarios);
 	echo '<strong>'.$_POST["rbt-foto"].'</strong>'.
         '<p class="commentario">'.$_POST["txt-comentario"].'</p>';

 ?>