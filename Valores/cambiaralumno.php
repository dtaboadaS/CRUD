<html>
	<head>
        <title>Cambio Datos Alumno</title>
    </head>
    <body>
	<h1 class="center">Cambio de Datos de Alumno</h1>
<?php
// Establecer la conexión con la base de datos
include '../bbdd/conector.php';

// Obtener los datos del formulario
$Cod_Alumno = $_POST["Cod_Alumno"];
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"]; 
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Localidad = $_POST["Localidad"];
$Cursa = $_POST["Cursa"];
$Telefono = $_POST["Telefono"];
// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE alumnos SET Nombre = '$Nombre', DNI = '$DNI', Apellido1 = '$Apellido1', Apellido2 = '$Apellido2', Localidad = '$Localidad', Cursa = '$Cursa', Telefono = '$Telefono' WHERE Cod_Alumno = $Cod_Alumno";

// Ejecutar la consulta
$result = mysqli_query($conector, $consulta);

// Verificar si la consulta fue exitosa
if ($result) {
  echo "Los datos del alumnos se han modificado correctamente.";
} else {
  echo "Ha ocurrido un error al modificar los datos del alumno.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conector);
?>
	<br><br>
	<a href="../valores/cambiaralumno.html">Volver al Formulario</a>
	<br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
