<html>
	<head>
        <title>Borrado Curso</title>
    </head>
    <body>
	<h1 class="center">Borrado Curso</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Curso = $_POST['Cod_Curso'];

// Crear la consulta SQL para actualizar los datos
$consulta = "DELETE FROM cursos WHERE Cod_Curso = $Cod_Curso";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "El curso ha sido correctamente eliminado.";
} else {
  echo "Ha ocurrido un error al borrar el curso.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/borrarcurso.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
