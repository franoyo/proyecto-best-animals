<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion usuarios</title>
   
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/style21.css?=1.478">
</head>
<body>


<?php
include("connect_db.php");
include("alert_datos_modificados_correctamente.html");

                    include("ventana_registro_empleados.php");
                  
                    
?>
<div class="container-alerta" id="alert-disponible" >
    
    <div class="alerta">
      <div class="contenido-alerta">
    <div class="alert-image">
      <img class="perro-alerta" src="img/dog-animated.gif" alt="perro">
    </div>
    <div class="text-alert">
      <p>Datos Ingresados Correctamente!</p>
    </div>
    
      </div>
    </div>
    
      </div>
 
    <div class="maincontainer">
        <div class="cont1">
            <header class="logo">
              <img class="best" src="img/best animal2-01 (1).png" alt="main">
            
            
            
            </header>
            <div class="dash">
              <a class="ins" href="dashboar_caja_registro.html"><p class="t1">GESTION CLIENTE</p></a>
              <div class="linea"></div>
            
            
            
            </div>
            
            <div class="dash">
            <a class="ins" href="dashoboard_admin_stock.html"><p class="t1">GESTION EMPLEADO</p></a>
            <div class="linea"></div>
            </div>
            
            <div class="dash">
              <a class="ins" href="error400.html"><p class="t1">ESTADISTICAS</p></a>
              <div class="linea"></div>
            </div>
           
            
            <div class="dash">
              <a class="ins" href="error400.html"><p class="t1">HISTORIAS CLINICAS</p></a>
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
                <div class="cont3" >
                <div class="insert-title">
                <div class="container-buscador">
<form class="put-search" method="get" action="">
    
    <input type="search" name="buscar" class="buscador" placeholder="Buscador:">
</form>
                   </div>
                   <div class="titulo">
<h2>GESTION EMPLEADOS</h2>
                   </div>
                    </div>  
                    <div class="container-tabla">
                      <button class="crear" id="create"><i class="bi bi-plus"></i></button>
                      
                    <div class="tabla" id="tabla">
<div class="row-subtitle">
<div class="put-id">ID</div>
<div class="name-dueño">NOMBRE</div>
<div class="apellido-dueño">APELLIDOS</div>

<div class="apellido-dueño">CELULAR</div>
<div class="apellido-dueño">EMAIL</div>

<div class="apellido-dueño">ROL ID</div>

<div class="subtitle">VER</div>
<div class="subtitle">EDITAR</div>
<div class="subtitle-1">BORRAR</div>
</div>
    <?php
    if (isset($_GET["buscar"])){
        $buscar=$_GET["buscar"];
$sql3=$conn->query("SELECT*FROM empleados where nombre like'%$buscar%' or apellidos like '%$buscar%' or id_empleado like '%$buscar%'");
while ($data=$sql3->fetch_object()) {
  ?>
  <div class="row-empleados">
    <div class="put-id" id="id_empleado"><?= $data->id_empleado?></div>
    <div class="name-dueño"><?= $data->nombre   ?></div>
    <div class="apellido-dueño"><?= $data->apellidos   ?></div>
    
    <div class="apellido-dueño"><?= $data->celular   ?></div>
   
    <div id="email_empleado"><?= $data->email   ?></div>
    
    <div class="apellido-dueño"><?php if ($data->rol_id==1 ) {
    echo("1. ADMINISTRADOR");
    }elseif($data->rol_id==2){
echo("2.USUARIO");
    }
    elseif($data->rol_id==3){
      echo("3.AUXILIAR DE BODEGA");
          } 
          elseif($data->rol_id==4){
            echo("4. VETERINARIO");
                } elseif($data->rol_id==5){
                  echo("5.CAJA");
                      }      
    
    
    
    
    ?></div>

<div class="subtitle"><a class="edit-button" href="obtener_id_ver_empleado.php?id=<?=$data->id_empleado?>"><i class="bi bi-eye"></i></a></div>
    <div class="subtitle"><a id="pelo" class="edit-button" href="obtener_id_editar_empleado.php?id=<?=$data->id_empleado?>"  ><i class="bi bi-pencil-square"></i></a></div>
    <div class="subtitle-1">  <a class="edit-button" href="obtener_id.php?id=<?=$data->id_empleado?>">
    <i class="bi bi-person-x"></i>
  </a></div>
 
   
</div>
<?php
}}
?>
                    </div>
                    <div class="container-move-buttons">
                      
                    <div class="content-buttons">
<div class="division">
<button class="arrow-button" id="izquierda"><i class="bi bi-chevron-left"></i></button>
<button class="arrow-button" id="doblIzq"><i class="bi bi-chevron-double-left"></i></button>
</div>
<div class="division">
  <button class="arrow-button" id="dobleDerecha"><i class="bi bi-chevron-double-right"></i></button>
<button class="arrow-button" id="simply-right"><i class="bi bi-chevron-right"></i></button>
</div>

                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                                  

              
               
                    <script src="script_gestion_usuario.js?v=2.37"></script>              
    
</body>
</html>