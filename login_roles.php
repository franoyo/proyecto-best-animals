<?php

$user=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION["correo"]=$user;


include("connect_db.php");

$consulta="SELECT*FROM usuario where email='$user' and clave='$contraseña'";
$consulta1="SELECT*FROM empleados where email='$user' and clave='$contraseña'";
$resultado=mysqli_query($conn,$consulta);
$resultado2=mysqli_query($conn,$consulta1);
$filas=mysqli_fetch_array($resultado);
$filas2=mysqli_fetch_array($resultado2);
if ($filas) {
  header("location:index.html");
}else {
    ?>
    
    <?php

    header("login.html");
   
    ?>
    
   
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conn);
if ($filas2) {
    header("location:dashaboard_admin_productos.html");
  }else {
      ?>
      <?php
    
      ?>
      
     
      <?php
  }
  mysqli_free_result($resultado2);
  mysqli_close($conn);


