<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion usuarios</title>
    <link rel="stylesheet" href="CSS/style21.css?=1.2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
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
                    <div class="menumin">
                      <nav class="modify-buttons">
                        <input class="create" type="button" id="cerrar" value="EDITAR">
                        <input class="search" id="crear" type="submit" value="CREAR">
                      
                        </nav>  
                    
                    </div>
                    <div class="container-tabla">
                      <button class="crear"><i class="bi bi-plus"></i></button>
                    <div class="insert-title">
<p>GESTION DE EMPLEADOS</p>

                    </div>    
                    <div class="tabla">
<div class="row-subtitle">
<div class="subtitle">ID EMPLEADO</div>
<div class="subtitle">NOMBRE</div>
<div class="subtitle">APELLIDOS</div>
<div class="subtitle">CEDULA</div>
<div class="subtitle">CELULAR</div>
<div class="subtitle">DIRECCION</div>
<div class="subtitle">CIUDAD</div>
<div class="subtitle">EMAIL</div>
<div class="subtitle">CLAVE</div>
<div class="subtitle">ROL ID</div>
<div class="subtitle">EDITAR</div>
<div class="subtitle">BORRAR</div>


</div>

    
    <?php
   
include("connect_db.php");
$sql3=$conn->query("SELECT*FROM empleados");
while ($data=$sql3->fetch_object()) {
  ?>
  <div class="row-empleados">
    <div class="info"><?= $data->id_empleado?></div>
    <div class="info"><?= $data->nombre   ?></div>
    <div class="info"><?= $data->apellidos   ?></div>
    <div class="info"><?= $data->documento   ?></div>
    <div class="info"><?= $data->celular   ?></div>
    <div class="info"><?= $data->direccion   ?></div>
    <div class="info"><?= $data->ciudad   ?></div>
    <div class="info"><?= $data->email   ?></div>
    <div class="info"><?= $data->clave   ?></div>
    <div class="info"><?= $data->rol_id   ?></div>
    <div class="info"><button  class="edit-button" id="btz"><i class="bi bi-pencil-square"></i></button></div>
    <div class="info"><button class="edit-button"><i class="bi bi-person-x"></i></button></div>
</div>
<?php
}


?>





                    </div>
                    
                    </div>
    
</body>
</html>