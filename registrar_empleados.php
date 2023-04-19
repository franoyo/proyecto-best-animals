<?php
include("connect_db.php");
$nombres= $_POST['nombre_empleado'];
$apellidos=$_POST["apellido_empleado"];
$documento=$_POST["documento_empleado"];
$celular=$_POST["celular_empleado"];
$direccion=$_POST["direccion_empleado"];
$ciudad=$_POST["ciudad_empleado"];
$email=$_POST["email_empleado"];
$clave=$_POST["clave_empleado"];
$rolId=$_POST["rol_id"];
$sql4 = "INSERT INTO empleados(nombre, apellidos, documento, celular, direccion, ciudad, email, clave, rol_id) VALUES('$nombres','$apellidos','$documento','$celular','$direccion','$ciudad','$email','$clave','$rolId')";
if ($conn->query($sql4) === TRUE) {
    
    include("gestion_usuario_empleados.php");
    
    die();
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();


?>