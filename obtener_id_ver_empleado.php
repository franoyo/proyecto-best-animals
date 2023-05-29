<?php
include("connect_db.php");
include("gestion_usuario_empleados.php");

if (!empty($_GET["id"])) {
    $ids=$_GET["id"];
    include("modal_ver_empleado.php");
    
    ?>
    
    <script>
           const editButton=document.getElementById("pelo")
     const Modal2=document.getElementById("modifys")
     const cerra=document.getElementById("desbanecer")
    setTimeout(() => {   
        Modal2.classList.add("aparecer");
  
    }, 500);

  
       cerra.addEventListener('click', ()=>{
            Modal2.classList.remove("aparecer")
            setTimeout(() => {   
    window.location.href="gestion_usuario_empleados.php"
  
    }, 500);

            
            })
           
    
    </script>
    <?php
    $conn->close();
}


?>