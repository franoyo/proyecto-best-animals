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
$descripcion = $_POST['descripcion_producto'];
$codigo = $_POST['idcodigo'];
$marca = $_POST['marca_producto'];
$peso= $_POST['peso_producto'];
$stock = $_POST['stock_producto'];
$precio = $_POST['precio_producto'];
$ubicacion = $_POST['ubicacion_producto'];
$vencimiento = $_POST['fecha_vencimiento_producto'];
// Prepara la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO productos(descripcion, idcodigo, marca, peso, stock, precio, ubicacion, vencimiento) VALUES ('$descripcion','$codigo','$marca','$peso','$stock','$precio','$ubicacion','$vencimiento')";

// Ejecuta la consulta SQL y verifica si se insertaron los datos correctamente
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos";
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>