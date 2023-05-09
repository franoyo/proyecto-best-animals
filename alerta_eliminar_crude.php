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
        <img class="foto" src="img/weary-cat-people.gif" alt="alerta">
    </div>
    <div class="put-text">
        <p>ESTA SEGURO DE ELIMINAR LA HISTORIA CLINICA?<br>DE ID:<?=$id?></p>
    </div>
</div>

<div class="mitad-botones">

<a class="boton-confirm" href="eliminar_historia_crude.php?id=<?=$id?>">SI</a>
<button class="boton-confirm" onclick="redirigir()" id="nio">NO</button>  
</div>

</div>
<script>
function redirigir() {
    const alertota=document.getElementById("alertita")
    alertota.classList.remove("ver")
    setTimeout(() => {
        window.location.href="crude_historia_clinica.php"
}, 250)
    
}
</script>
    </div>

</body>
</html>