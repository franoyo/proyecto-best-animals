<?php
include("dashoboard_admin_stock.php");


// Obtiene los valores enviados desde el formulario HTML
$descripcion = $_POST['descripcion_producto'];
$marca = $_POST['marca_producto'];
$peso= $_POST['peso_producto'];
$stock = $_POST['stock_producto'];
$precio = $_POST['precio_producto'];
$ubicacion = $_POST['ubicacion_producto'];
$vencimiento = $_POST['fecha_vencimiento_producto'];
$imagen=$_FILES["imagen-producto"]["tmp_name"];
$nombreImagen=$_FILES["imagen-producto"]["name"];
$tipoImagen=strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
$sizeImagen=$_FILES["imagen-producto"]["size"];
$directorio="shop_server/";


// Prepara la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO productos(descripcion, marca, peso, stock, precio, ubicacion, vencimiento, imagen) VALUES ('$descripcion','$marca','$peso','$stock','$precio','$ubicacion','$vencimiento','')";

// Ejecuta la consulta SQL y verifica si se insertaron los datos correctamente
if ($conn->query($sql) === TRUE) {
    $registroId=$conn->insert_id;

$ruta=$directorio.$registroId.".".$tipoImagen;
$actualizarImagen=$conn->query("update productos set imagen='$ruta' where id=$registroId");

//almacenar img
if (move_uploaded_file($imagen,$ruta)) {
   
}
    ?>
    <script>
       const alerta=document.getElementById("alert-disp")
     
       setTimeout(() => {
alerta.classList.add("ocultar")
}, 200);
setTimeout(() => {
alerta.classList.remove("ocultar")

}, 3000);


setTimeout(() => {
window.location.href="dashoboard_admin_stock.php"
}, 3950);
      
   

    </script>
   
    
    
    <?php
    
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>