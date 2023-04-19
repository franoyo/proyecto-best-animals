<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style22.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<div class="container-general" id="modal">
<form class="container-modal" action="registrar_empleados.php" method="post">
<div class="container-logo">
    <div class="put-logo">
<img class="logo" src="img/best animal2-01 (1).png" alt="logo">

    </div>
    <p>REGISTRO DE EMPLEADOS</p>
<input class="put-close" type="button" id="boton-cerrar" value="X">
 

</div>
<div class="container-form">
    <div class="row1">
        <div class="mitad-1">
            <div class="subtitle" >ID EMPLEADO:</div>
            <div class="container-input" id="cont-op">

                
            </div> 
        </div>
        <div class="mitad-2"><div class="subtitle-2">NOMBRE:</div>
        <div class="container-input-2">
            <input class="input-2" type="text" name="nombre_empleado" required>

        </div> 
    </div>
    </div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">APELLIDOS:</div> 
        <div class="container-input">
<input class="input-1" type="text" name="apellido_empleado" required>

        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">DOCUMENTO:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="documento_empleado" required>

    </div> </div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CELULAR:</div>
        <div class="container-input">
            <input class="input-1" type="number" name="celular_empleado" maxlength="10" required>

        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">DIRECCION:</div>
    <div class="container-input-2">
        <input class="input-2" type="text" name="direccion_empleado" required>

    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CIUDAD:</div> 
        <div class="container-input">
            <input class="input-1" type="text" name="ciudad_empleado" required>
        </div> 
    </div>
    <div class="mitad-2"><div class="subtitle-2">EMAIL:</div>
    <div class="container-input-2">
        <input class="input-2" type="email" name="email_empleado" required>
    </div> 
</div></div>
    <div class="row1">  <div class="mitad-1">
        <div class="subtitle">CLAVE:</div>
        <div class="container-input">
            <input class="input-1" type="text" name="clave_empleado" required>
        </div>  
    </div>
    <div class="mitad-2"><div class="subtitle-2">ROL ID:</div>
    <div class="container-input-2">
        <select class="input-2" name="rol_id" required>

            <option value="1">1.ADMINISTRADOR</option>
            
            <option value="2">2.USUARIO</option>
            
            <option value="3">3.AUXILIAR DE BODEGA</option>

            <option value="4">4.VETERINARIO</option>

            <option value="5">5.CAJA</option>
            
            </select>

    </div> 
</div></div>
</div>
<div class="container-boton">
<input class="register-button" type="submit" value="REGISTRAR EMPLEADO">

</div>

</form>


</div>


    
</body>
</html>