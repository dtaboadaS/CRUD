<html>
	<head>
        <title>Borrado Profesor</title>
    </head>
    <body>
	<h1 class="center">Borrado Profesor</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Profesor = $_POST['Cod_Profesor'];

// Crear la consulta SQL para actualizar los datos
$consulta = "DELETE FROM profesores WHERE Cod_Profesor = $Cod_Profesor";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "El profesor ha sido correctamente eliminado";
} else {
  echo "Ha ocurrido un error al borrar al profesor.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/borrarprofesor.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
