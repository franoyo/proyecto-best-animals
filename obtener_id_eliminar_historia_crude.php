<?php
include("connect_db.php");
if (!empty($_GET["id"])) {
    $id=$_GET["id"]; 
include("crude_historia_clinica.php");
?>
<script>
       
        const alertota=document.getElementById("alertita")
        const closer=document.getElementById("close");
       
    setTimeout(() => {   
    alertota.classList.add("ver")
  
    }, 200);

  
        closer.addEventListener('click', ()=>{
            alertota.classList.remove("ver")
            setTimeout(() => {   
    window.location.href="gestion_usuario_empleados.php"
  
    }, 200);

            
            })
           
    
    </script>
    <?php
}
    else{

echo("nop");

    }
 ?>