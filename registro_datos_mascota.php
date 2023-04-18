<?php

include ("connect_db.php");
include("vet_datos_paciente.html");
$owner= $_POST['propietario'];
$nombre_paciente = $_POST['paciente'];
$especie = $_POST['especie'];
$raza= $_POST['raza'];
$sexo = $_POST['genero'];
$historia = $_POST['historia_breve'];
$veterinario = $_POST['veterinario'];
$clinica= $_POST['clinica'];
$fecha= $_POST['Fecha'];
$preparacion= $_POST['preparacion_paciente'];

$sql = "INSERT INTO info_mascota(propietario, nombre_paciente, especie, raza, sexo, historia_breve, veterinario_solicitante, clinica, fecha, preparacion_del_paciente ) VALUES ('$owner','$nombre_paciente','$especie','$raza','$sexo','$historia','$veterinario','$clinica','$fecha','$preparacion')";
if ($conn->query($sql) === TRUE) {
   

    
    ?>
    <script>
       const alerta=document.getElementById("alert-disp");


       setTimeout(() => {
alerta.classList.add("ocultar")
}, 200);
setTimeout(() => {
alerta.classList.remove("ocultar")

}, 3000);


setTimeout(() => {
window.location.href="vet_datos_paciente.html"
}, 3950);

    </script>
  
    
    
    <?php
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}
$conn->close();
?>

