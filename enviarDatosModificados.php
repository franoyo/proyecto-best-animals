<?php
include("connect_db.php");
$id=$_POST['id'];
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

$eseQuele= $conn->query("update historias_clinicas set nombre_mascota='$nombreMascota',sexo_mascota='$sexoMascota', 
peso_mascota='$pesoMascota', especie_mascota='$especieMascota',
edad_mascota='$edadMascota',esterilizar_mascota='$esterilizarMascota', 
raza_mascota='$razaMascota', color_mascota='$colorMascota', medicina_preventiva='$medicinaPreventiva', 
nombre_dueño='$nombreDueño', telefono_dueño='$telefonoDueño', 
direccion_dueño='$direccionDueño', fc='$fc', fr='$fr', temperatura='$temperatura', llenado_capilar='$llenadoCapilar',
 pulso='$pulso',
diagnostico_diferencial='$diagnosticoDiferencial', diagnostico_final='$diagnosticoFinal', test_laboratorio='$testLaboratorio', tratamiento='$tratamiento' where id_acta=$id");
if ($eseQuele==1) {
 include("crude_historia_clinica.php");
 
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
    window.location.href="crude_historia_clinica.php"
}, 1400);
  </script>

  <?php
}else{
    echo("no mi bro::::");
}
?>