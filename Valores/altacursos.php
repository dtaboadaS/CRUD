<hmtl>
	<head>
        <title>Nuevo Curso</title>
    </head>
    <body>
	<h1 class="center">Estado del registro de un nuevo curso</h1>
	<?php
		include '../bbdd/conector.php';

		  $Cod_Curso = $_POST["Cod_Curso"];
		  $Inicio_Curso = $_POST["Inicio_Curso"];
		  $Nombre = $_POST["Nombre"];
		  
	    	$insert_curso = "INSERT INTO cursos (Cod_Curso, Inicio_Curso, Nombre) VALUES ('$Cod_Curso', '$Inicio_Curso', '$Nombre')";


	if ($result = mysqli_query($conector, $insert_curso)) {
	    echo "<h3 class='center'>Curso " . $Nombre ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("Non se puido rexistrar o curso -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	<a href="altacursos.html">Volver al Formulario</a><br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
