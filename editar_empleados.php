<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style24.css?=1.114">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<div class="container-general" id="modifys">
<form class="container-modal" action="controlador_editar_empleado.php" method="post">
<div class="container-logo">
    <div class="put-logo">
<img class="logo" src="img/best animal2-01 (1).png" alt="logo">
<?php
   $sql6=$conn->query("SELECT*FROM empleados where id_empleado=$ids");
   $dataz=$sql6->fetch_object()
     ?>
    </div>
    <p>EDITAR EMPLEADOS</p>
<input class="put-close" type="button" id="desbanecer" value="X">
 

</div>
<div class="container-form" id="CR">
    <div class="row1">
        <div class="mitad-1">
            <div class="subtitle" >ID EMPLEADO:</div>
            <div class="container-input">
            <input class="input-1" type="number" name="id" value="<?=$ids?>" readonly>
            
            

            </div> 
        </div>
        <div class="mitad-2"><div class="subtitle-2">NOMBRE:</div>
        <div class="container-input-2">
            <input class="input-2" type="text" name="nombre_empleado" value="<?= $dataz->nombre?>" required>

        </div> 
    </div>
    </div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">APELLIDOS:</div> 
        <div class="container-input">
<input class="input-1" type="text" name="apellido_empleado" value="<?= $dataz->apellidos   ?>" required>

        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">DOCUMENTO:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="documento_empleado" value="<?= $dataz->documento?>" required>

    </div> </div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CELULAR:</div>
        <div class="container-input">
            <input class="input-1" type="number" name="celular_empleado" value="<?= $dataz->celular?>"  maxlength="10" required>

        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">DIRECCION:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="direccion_empleado" value="<?= $dataz->direccion?>" required>

    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CIUDAD:</div> 
        <div class="container-input">
            <input class="input-1" type="text" name="ciudad_empleado" value="<?= $dataz->ciudad?>" required>
        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">EMAIL:</div>
    <div class="container-input-2">
        <input class="input-2" type="email" name="email_empleado" value="<?= $dataz->email?>" required>
    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CLAVE:</div>
        <div class="container-input">
            <input class="input-1" type="text" name="clave_empleado" value="<?= $dataz->clave?>" required>
        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">ROL ID:</div>
    <div class="container-input-2">
        <select class="input-2" name="rol_id" required>

            <option value="1" >1.ADMINISTRADOR</option>
            
            <option value="2">2.USUARIO</option>
            
            <option value="3">3.AUXILIAR DE BODEGA</option>

            <option value="4">4.VETERINARIO</option>

            <option value="5">5.CAJA</option>
            
            <option value="<?=$dataz->rol_id?>" selected><?php if ($dataz->rol_id==1 ) {
    echo("SU ROL ACTUAL ES: ADMINISTRADOR");
    }elseif($dataz->rol_id==2){
echo("SU ROL ACTUAL ES:USUARIO");
    }
    elseif($dataz->rol_id==3){
      echo("SU ROL ACTUAL ES:AUXILIAR DE BODEGA");
          } 
          elseif($dataz->rol_id==4){
            echo("SU ROL ACTUAL ES: VETERINARIO");
                } elseif($dataz->rol_id==5){
                  echo("SU ROL ACTUAL ES:CAJA");
                      }      
    
    
    
    
    ?></option>
            </select>

    </div> 
</div></div>
</div>
<div class="container-boton">
<input class="register-button" type="submit" value="EDITAR EMPLEADO">

</div>

</form>


</div>


    
</body>
</html>