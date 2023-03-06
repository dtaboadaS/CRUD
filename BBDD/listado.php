<html>
    <head>
	<title>Resultados</title>
	<link href="../cssmenu/tablas.css" rel="stylesheet"/>
	 </head>
	
	
    <?php include 'conector.php'; ?>
	
    <body bgcolor="#959595">
	<a href="../centro.html">Volver al inicio</a>
	<?php
	if ($estado_de_la_conexion == 0){ 	
		echo '<h1 class="center">Datos por categoría</h1></br>';
		include_once('mostrar_alumno.php'); 
		include_once('mostrar_curso.php'); 
		include_once('mostrar_profesor.php'); 
		include_once('mostrar_materia.php'); 
	}
	else{
		echo "No se pudo conectar a la base de datos para consultar datos";
	}
	

	 ?>
	<br>
	<a href="../centro.html">Volver al inicio</a>
    </body>
</html>
