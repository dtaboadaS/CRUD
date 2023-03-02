<html>
	<head>
        <title>Eliminar Materia</title>
    </head>
    <body>
	<h1 class="center">Eliminar Materia</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Materia = $_POST["Cod_Materia"];

// Crear la consulta SQL para actualizar los datos
$consulta = "DELETE FROM materias WHERE Cod_Materia = $Cod_Materia";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "La materia ha sido eliminada correctamente";
} else {
  echo "Ha ocurrido un error al borrar la materia.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/borrarmateria.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
