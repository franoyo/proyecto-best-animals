<?php
session_start();
if (isset($_SESSION["correo"])) {
 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style5.css?=v1.11">
    <title>dashboard hist clinicas</title>
</head>
<body>
<?php
include("connect_db.php");
include("alerta_datos_ingresados_correctamente.html");
  



?>
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
  <a class="ins" href="error400.html"><p class="t1">GESTION DE OPERARIOS</p> </a>
 
  <div class="linea"></div>
</div>
</div>






<div class="cont2">
<header class="subuser">
    <div class="mitad" >     <nav>
      <a href=""><img class="user" src="img/buttton.png" alt="boton"></a>
      
          </nav> 
          <p class="admn">ADMINISTRADOR</p>                </div>
    
    
   

<div class="mitad2">
  <input class="button" type="button" value="SALIR" >


</div>
</header>
<div class="cont3">
  <form class="cont3" action="registro_acta_medica.php" method="post">
  <div class="menumin">
    <nav class="modify-buttons">
    <input class="create" type="submit" value="CREAR">
    <script>
      function redireccionar(){
window.location.href="crude_historia_clinica.php";
      }
    </script>
    <input class="search" onclick="redireccionar()" type="button" value="BUSCAR">
    <input class="resetear" type="reset" value="RESETEAR">
    </nav>
  </div>
 
  <div class="subconter">
    <div class="contpertable">
      <header class="contform">
        <img class="photob" src="img/best animal2-01 (1).png"  alt="">
        <p class="title">CLINICA VETERINARIA <br>
          BEST ANIMALS <br>  historia clinica <br> DATOS DEL PACIENTE</p>
          

      </header>
<div class="conttable">
<div class="fom1">
<div class="zte">
  <input class="form-control output" name="nombre_mascota"  type="text" placeholder="NOMBRE:" required >
</div>
<div class="zte"><input class="form-control output" name="sexo_mascota" type="text" placeholder="SEXO:" required></div>
<div class="zte"><input class="form-control output" name="peso_mascota" type="text" placeholder="PESO:" required ></div>

</div>
<div class="fom1">
  <div class="zte">
    <input class="form-control output" name="especie" type="text" placeholder="ESPECIE:" required >
  </div>
  <div class="zte"><input class="form-control output" name="edad_mascota"  type="text" placeholder="EDAD:" required ></div>
  <div class="zte"><input class="form-control output" name="esterilizado"  type="text" placeholder="ESTERILIZADO:" required></div>


</div>
<div class="fom1">
  <div class="zte"><input class="form-control output" name="raza" type="text" placeholder="RAZA:"required > </div>
  <div class="zte"><input class="form-control output" name="color_mascota"  type="text" placeholder="COLOR:"required ></div>
  <div class="zte"><input class="form-control output" name="medicina_preventiva"  type="text" placeholder="MEDICINA PREVENTIVA:"required ></div>

</div>

</div>
<header class="subti">
  <p class="dates ">Datos Del Dueño:</p>
</header>
<div class="tableaftersubti">
  <div class="fami"> <div class="zti"><input class="form-control put" name="nombre_owner" type="text" placeholder="NOMBRE:" required> </div>
  <div class="zti"><input class="form-control put" name="telefono" type="number" placeholder="TELEFONO:" required> </div>
  <div class="zti"><input class="form-control put" name="direccion" type="text" placeholder="DIRECCCION:" required></div>
</div>
 

</div>
<header class="subti2">
<p>Constantes Fisiologicas:</p>
</header>
<div class="contdobletable">
  <header class="conthead">
<div class="opa">
<p>Diagnostico <br> Presuntivo</p>
</div>
<div class="dir">

</div>
<div class="row1">
  <p>Diagnostico <br> Diferencial</p>
</div>
<div class="row2">
  <p>Diagnostico <br> Final</p>
</div>
  </header>
<div class="registros">
  <div class="mn1">
    <div class="fc">
<div class="fi"><div class="mg">FC:</div></div>
<div class="fu"><input class="tex" name="fc" type="text" ></div>
    </div>
    <div class="fc">
      <div class="fi"><div class="mg">FR:</div></div>
      <div class="fu"><input class="tex" name="fr" type="text" ></div>

    </div>
    <div class="fc">
      <div class="fi"><div class="mg">TEMPERATURA:</div></div>
      <div class="fu"><input class="tex" name="temperatura" type="text" ></div>


    </div>
    <div class="fc">
      <div class="fi"><div class="mg">LLENADO CAPILAR:</div></div>
      <div class="fu"><input class="tex" name="llenado_capilar" type="text" ></div>

    </div>
    <div class="fc">
      <div class="fi"><div class="mg">PULSO:</div></div>
      <div class="fu"><input class="tex" name="pulso" type="text" ></div>


    </div>
  
  </div>
  <div class="mn2"><p class="ana">ANAMNESIS</p></div>
  <div class="mn3"> <textarea class="form-control ugu" name="diagnostico_diferencial" id="" cols="5" rows="5" placeholder="INGRESE AQUI SU TEXTO:"></textarea></div>
  <div class="mn4"><textarea class="form-control ugu" name="diagnostico_final" id="" cols="5" rows="5" placeholder="INGRESE AQUI SU TEXTO:"></textarea> </div>
</div>
</div>

<div class="contlast">
  <div class="first">
    <div class="pruebascontainer"><header class="laboratorio"><p>Test De Laboratorio:</p></header>
      <textarea class="form-control caja" name="pruebas_de_laboratorio" id="" cols="5" rows="5"></textarea></div>
    
  </div>
  <div class="second"> <div class="tratamiento"><header class="tara"><p>TRATAMIENTO:</p></header>
  <textarea class="form-control loop" name="tratamiento" id="" cols="5" rows="5"></textarea></div></div>
  <div class="fecha"><div class="historia"> <div class="nm"><div class="hist"><p>No.Historia:</p></div> <div class="ponernum">
  <?php
  $consulta="SELECT * FROM historias_clinicas WHERE id_acta = (SELECT MAX(id_acta) FROM historias_clinicas)";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_fetch_column($resultado);
$my_id=$filas+1;
echo($my_id);?>
</div></div></div> </div>                                     </div>


</div>
    </div>
  


</div>
</form>



  </div>


</body>
</html>
<?php
}
else{
  echo("Inicia sesion bobo");
}?>