<html>
  <head>
        <title>Nuevo Profesor</title>
    </head>
    <body>
	<h1 class="center">Estado del registro de un nuevo profesor</h1>
	<?php
		include '../bbdd/conector.php';
		
$Cod_Profesor = $_POST['Cod_Profesor'];
$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Localidad = $_POST['Localidad'];
$Imparte = $_POST['Imparte'];
$telefono = $_POST['telefono'];

	    	$insert_profesor = "INSERT INTO profesores (Cod_Profesor, DNI, Nombre, Apellido1, Apellido2, Localidad, Imparte, telefono) VALUES ('$Cod_Profesor', '$DNI', '$Nombre', '$Apellido1', '$Apellido2', '$Localidad', '$Imparte', '$telefono')";

if ($result = mysqli_query($conector, $insert_profesor)) {
	    echo "<h3 class='center'>Profesor/a " . $Nombre ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("No se pudo registrar al profesor/a -> ". mysqli_error($conector))."<br><br>";
	}
?>
	<a href="altaprofesores.html">Volver al Formulario</a><br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
