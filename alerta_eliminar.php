<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style23.css?=1.15">
    <title>alerta</title>
</head>
<body>
    <div class="contenedor-alerta" id="alertita">
<div class="alerta">
<div class="mitad1">
    <div class="put-foto">
        <img class="foto" src="img/alerta-removebg-preview.png" alt="alerta">
    </div>
    <div class="put-text">
        <p>ESTA SEGURO DE ELIMINAR AL EMPLEADO?<br>DE ID:<?=$id?></p>
    </div>
</div>

<div class="mitad-botones">

<a class="boton-confirm" href="eliminar_empleado.php?id=<?=$id?>">SI</a>
<button class="boton-confirm" id="close">NO</button>  
</div>

</div>

    </div>

</body>
</html>