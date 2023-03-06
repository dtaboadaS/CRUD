<html>
	<head>
        <title>Cambio Datos Profesor</title>
    </head>
    <body>
	<h1 class="center">Cambio de Datos de Profesor</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Profesor = $_POST['Cod_Profesor'];
$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Localidad = $_POST['Localidad'];
$Imparte = $_POST['Imparte'];
$telefono = $_POST['telefono'];

// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE profesores SET Nombre = '$Nombre', DNI = '$DNI', Apellido1 = '$Apellido1', Apellido2 = '$Apellido2', Localidad = '$Localidad', Imparte = '$Imparte', telefono = '$telefono' WHERE Cod_Profesor = $Cod_Profesor";

// Ejecutar la consulta
$resultado = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "Los datos del profesor se han modificado correctamente.";
} else {
  echo "Ha ocurrido un error al modificar los datos del profesor.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/cambiarprofesores.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
