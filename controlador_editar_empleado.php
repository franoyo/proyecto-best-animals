<?php
include("connect_db.php");
if (!empty($_POST["id"])) {
    $ids=$_POST["id"];
    $nombres= $_POST['nombre_empleado'];
$apellidos=$_POST["apellido_empleado"];
$documento=$_POST["documento_empleado"];
$celular=$_POST["celular_empleado"];
$direccion=$_POST["direccion_empleado"];
$ciudad=$_POST["ciudad_empleado"];
$email=$_POST["email_empleado"];
$clave=$_POST["clave_empleado"];
$rolId=$_POST["rol_id"];
 $sql8=$conn->query("update empleados set nombre='$nombres', apellidos='$apellidos', documento=$documento, celular=$celular, direccion='$direccion', ciudad='$ciudad', email='$email', clave='$clave', rol_id=$rolId where id_empleado=$ids");
 if ($sql8==1) {
   
    include("gestion_usuario_empleados.php");
    
?>
<script>
const alertaz=document.getElementById("launch-alert")
setTimeout(() => {
    alertaz.classList.add("muestratez")
}, 200);
setTimeout(() => {
    alertaz.classList.remove("muestratez")
}, 900);
setTimeout(() => {
    window.location.href="gestion_usuario_empleados.php"
}, 1400);

   </script>
<?php  
    
 } else {
    echo("nop");
 }
}
?>