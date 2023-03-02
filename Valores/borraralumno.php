<html>
	<head>
        <title>Borrado Alumno</title>
    </head>
    <body>
	<h1 class="center">Borrado Alumno</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Alumno = $_POST["Cod_Alumno"];
// Crear la consulta SQL para actualizar los datos
$consulta = "DELETE FROM alumnos WHERE Cod_Alumno = $Cod_Alumno";

// Ejecutar la consulta
$result = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($result) {
  echo "El alumno ha sido correctamente eliminado.";
} else {
  echo "Ha ocurrido un error al borrar al alumno.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/borraralumno.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
