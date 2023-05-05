<?php
include("connect_db.php");
include("gestion_usuario_empleados.php");

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    include("alerta_eliminar.php");
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
    $conn->close();
}


?>