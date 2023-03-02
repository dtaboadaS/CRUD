<html>
	<head>
        <title>Cambio Datos Curso</title>
    </head>
    <body>
	<h1 class="center">Cambio de Datos de Curso</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Curso = $_POST['Cod_Curso'];
$Nombre = $_POST['Nombre'];
$Inicio_Curso = $_POST['Inicio_Curso'];

// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE cursos SET Nombre = '$Nombre', Inicio_Curso = '$Inicio_Curso' WHERE Cod_Curso = $Cod_Curso";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "Los datos del curso se han modificado correctamente.";
} else {
  echo "Ha ocurrido un error al modificar los datos del curso.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/cambiarcurso.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
