<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestanimals";

// Crea la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Obtiene los valores enviados desde el formulario HTML
$nombre = $_POST['nombre_registro'];
$apellido = $_POST['apellidos_registro'];
$documento = $_POST['documento_registro'];
$celular= $_POST['celular_registro'];
$direccion = $_POST['direccion_registro'];
$ciudad = $_POST['ciudad_registro'];
$email = $_POST['email_registro'];

// Prepara la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO registros(nombre, apellidos, documento, celular, direccion, ciudad, email) VALUES ('$nombre','$apellido','$documento','$celular','$direccion','$ciudad','$email')";

// Ejecuta la consulta SQL y verifica si se insertaron los datos correctamente
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos";
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>