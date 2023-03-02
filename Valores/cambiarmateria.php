<html>
	<head>
        <title>Cambio Datos Materia</title>
    </head>
    <body>
	<h1 class="center">Cambio de Datos de Materia</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Materia = $_POST["Cod_Materia"];
$Horas = $_POST["Horas"];
$Materia = $_POST["Materia"];

// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE materias SET Materia = '$Materia', Horas = '$Horas' WHERE Cod_Materia = $Cod_Materia";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "Los datos de la materia se han modificado correctamente.";
} else {
  echo "Ha ocurrido un error al modificar los datos de la materia.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/cambiarmateria.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
