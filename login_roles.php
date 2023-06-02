<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2024 05:15:00 GMT"); // Fecha en el pasado
error_reporting(E_ALL ^ E_WARNING);
$user=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION["correo"]=$user;


include("connect_db.php");

$consulta="SELECT*FROM usuario where email='$user' and clave='$contraseña'";

$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas) {
 header("location:servicios.html");
  
}else {
    ?>
    
    <?php

    

include("modal.php");


  
    ?>
    
 
    <?php
    
}
mysqli_free_result($resultado);
$consulta1="SELECT*FROM empleados where email='$user' and clave='$contraseña'";
$resultado2=mysqli_query($conn,$consulta1);
$filas2=mysqli_fetch_array($resultado2);
$consultar_rol=$filas2["rol_id"];
if ($consultar_rol==1) {
  header("location:dashboard_inicio_admin.php");
   
  }
  elseif ($consultar_rol==3) {
    header("location:dashboard_auxiliar_bodega.html");
  
  }
  elseif ($consultar_rol==4) {
    header("location:consulta.html");
  
  }
  elseif ($consultar_rol==5) {
 header("location:viaje.html");
  }

    

 

  mysqli_free_result($resultado2);
  mysqli_close($conn);


