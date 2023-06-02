<?php
include("connect_db.php");
session_start();
if (isset($_SESSION["correo"])) {
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
 $sql=$conn->query("delete from empleados where id_empleado=$id");
 if ($sql==1) {
header("location:gestion_usuario_empleados.php");
    
     ?>
    
     <?php
 } else {
    echo("nop");
 }
}}else{
   echo("Inicia sesion bobo");
 }?>
