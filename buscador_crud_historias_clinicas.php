<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style28.css?v=1.21">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>gestion historias medicas</title>
</head>
<body>
<?php
include("alert_datos_modificados_correctamente.html");
include("alerta_eliminar_crude.php");
 ?>
  <a class="new-acta" href="dashboard historias clinicas admin.php">
  <i class="bi bi-plus-lg"></i>
  </a>
    <div class="maincontainer">
    <div class="cont1">
        <header class="logo">
          <img class="best" src="img/best animal2-01 (1).png" alt="main">
        
        
        
        </header>
        <div class="dash">
          <a class="ins" href="dashboar_caja_registro.html"><p class="t1">CAJA</p></a>
          <div class="linea"></div>
        
        
        
        </div>
        
        <div class="dash">
        <a class="ins" href="dashoboard_admin_stock.php"><p class="t1">STOCK</p></a>
        <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">VENTAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">AGENDA</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="dashaboard_admin_productos.html"><p class="t1">PRODUCTOS</p></a>
          <div class="linea"></div>
        </div>
        
        <div class="dash">
          <a class="ins" href="error400.html"><p class="t1">ESTADISTICAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="dashboard historias clinicas admin.php"><p class="t1">HISTORIAS CLINICAS</p></a>
          <div class="linea"></div>
        </div>
        <div class="dash">
          <a class="ins" href="gestion_usuario_empleados.php"><p class="t1">GESTION DE OPERARIOS</p> </a>
         
          <div class="linea"></div>
        </div>
        
        </div>
        <div class="cont2">
            <header class="subuser">
                <div class="mitad" >     <nav>
                  <a href=""><img class="user" src="img/buttton.png" alt=""></a>
                  
                      </nav> 
                      <p class="admn">ADMINISTRADOR</p>                </div>
                
                
               
            
            <div class="mitad2">
              
              <a class="button" href="cerrar_sesion.php">SALIR</a> 
             
            
            
            </div>
            </header>
            <div class="cont3">
                <div class="put-title">
                   <div class="container-buscador">
<form class="put-search" action="" method="$_GET">
    <input type="search" name="search" class="buscador" placeholder="Buscador:">
</form>
                   </div>
                   <div class="titulo">
<h2>HISTORIAS CLINICAS</h2>
                   </div>
                   
                </div>
                <div class="container-table">
                    <div class="tabla">
<div class="row-title">
    <div class="put-id">ID</div>
    <div class="name-mascota">NOMBRE DE LA MASCOTA</div>
    <div class="name-mascota">PESO DE LA MASCOTA</div>
    <div class="name-dueño">NOMBRE DEL DUEÑO</div>
    <div class="name-dueño">TELEFONO</div>
    <div class="name-dueño">DIRECCION</div>
    <div class="botones">VER</div>
    <div class="botones">EDITAR</div>
    <div class="botones-1">ELIMINAR</div>
</div>
<?php
   include("connect_db.php");

   if(isset($_GET["search"])){
    $search=$_GET["search"];
$sql5=$conn->query("SELECT*FROM historias_clinicas where nombre_dueño like '%$search%' or nombre_mascota like '%$search%' or id_acta like '%$search%'");
while ($data=$sql5->fetch_object()) {
  ?>
  <div class="row-info">
    <div class="put-id"> <?= $data->id_acta?></div>
    <div class="name-mascota"><?= $data->nombre_mascota?></div>
    <div class="name-mascota"><?= $data->peso_mascota?></div>
    <div class="name-dueño"><?= $data->nombre_dueño?></div>
    <div class="name-dueño"><?= $data->telefono_dueño?></div>
    <div class="name-dueño"><?= $data->direccion_dueño?></div>
    <div class="botones"><a class="put-icon" href="phpControladores\obtener_id_ver.php?id=<?= $data->id_acta?>"><i class="bi bi-eye"></i></a></div>
    <div class="botones"><a class="put-icon" href="phpControladores\controlador_id_editar.php?id=<?= $data->id_acta?>"><i class="bi bi-pen-fill"></i></a></div>
    <div class="botones-1">
        <a class="put-icon" href="obtener_id_eliminar_historia_crude.php?id=<?= $data->id_acta?>"><i class="bi bi-journal-x"></i></a>
    </div>

</div>
<?php
}}
?>
                    </div>
                    <div class="container-move-buttons">
                      
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>