<hmtl>
	<head>
        <title>Nueva Materia</title>
    </head>
	
    <body>
	<h1 class="center">Estado del registro de una nueva materia</h1>
	<?php
		include '../bbdd/conector.php';

		  $Cod_Materia = $_POST["Cod_Materia"];
		  $Horas = $_POST["Horas"];
		  $Materia = $_POST["Materia"];

	    	$insert_materia = "INSERT INTO materias (Cod_Materia, Materia, Horas) VALUES ('$Cod_Materia', '$Materia', '$Horas')";


	if ($result = mysqli_query($conector, $insert_materia)) {
	    echo "<h3 class='center'>Materia " . $Materia ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("No se pudo registrar la materia -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	<a href="altamaterias.html">Volver al Formulario</a><br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
