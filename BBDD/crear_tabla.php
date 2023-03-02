<?php

// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

// Obtener el nombre de la nueva tabla
$nombre_tabla = $_POST['nombre_tabla'];
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
$valor5 = $_POST['valor5'];
$valor6 = $_POST['valor6'];
$valor7 = $_POST['valor7'];

// Crear la nueva tabla
$sql = "CREATE TABLE $nombre_tabla (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "La tabla $nombre_tabla ha sido creada exitosamente.";
} else {
    echo "Ha ocurrido un error al crear la tabla: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);

?>