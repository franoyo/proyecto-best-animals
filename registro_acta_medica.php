<?php

include("dashboard historias clinicas admin.php");

$nombreMascota = $_POST['nombre_mascota'];
$sexoMascota = $_POST['sexo_mascota'];
$pesoMascota = $_POST['peso_mascota'];
$especieMascota = $_POST['especie'];
$edadMascota = $_POST['edad_mascota'];
$esterilizarMascota = $_POST['esterilizado'];
$razaMascota = $_POST['raza'];
$colorMascota = $_POST['color_mascota'];
$medicinaPreventiva = $_POST['medicina_preventiva'];
$nombreDueño = $_POST['nombre_owner'];
$telefonoDueño = $_POST['telefono'];
$direccionDueño = $_POST['direccion'];
$fc = $_POST['fc'];
$fr = $_POST['fr'];
$temperatura = $_POST['temperatura'];
$llenadoCapilar = $_POST['llenado_capilar'];
$pulso = $_POST['pulso'];
$diagnosticoDiferencial = $_POST['diagnostico_diferencial'];
$diagnosticoFinal = $_POST['diagnostico_final'];
$testLaboratorio = $_POST['pruebas_de_laboratorio'];
$tratamiento = $_POST['tratamiento'];

$sql = "INSERT INTO historias_clinicas(nombre_mascota, sexo_mascota, peso_mascota, especie_mascota,
edad_mascota,esterilizar_mascota, 
raza_mascota, color_mascota, medicina_preventiva, nombre_dueño, telefono_dueño, 
direccion_dueño, fc, fr, temperatura, llenado_capilar, pulso,
diagnostico_diferencial, diagnostico_final, test_laboratorio, tratamiento)
VALUES('$nombreMascota','$sexoMascota','$pesoMascota','$especieMascota','$edadMascota','$esterilizarMascota','$razaMascota','$colorMascota','$medicinaPreventiva',
'$nombreDueño','$telefonoDueño','$direccionDueño','$fc','$fr','$temperatura','$llenadoCapilar','$pulso','$diagnosticoDiferencial','$diagnosticoFinal',
'$testLaboratorio','$tratamiento')";
if ($conn->query($sql) === TRUE) {
    ?>
  <script>
  const alerta=document.getElementById("alert-disponible")
     
     setTimeout(() => {
alerta.classList.add("ocultar")
}, 200);
setTimeout(() => {
alerta.classList.remove("ocultar")

}, 3000);


setTimeout(() => {
window.location.href="dashboard historias clinicas admin.php"
}, 3950);
    
  </script>
    <?php
} else {
    echo "Ha habido un error al guardar los datos en la base de datos: " . $conn->error;
}
$conn->close();
