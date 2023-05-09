<?php
include("connect_db.php");
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
 $sql=$conn->query("delete from historias_clinicas where id_acta=$id");
 if ($sql==1) {
header("location:crude_historia_clinica.php");
    
     ?>
    
     <?php
 } else {
    echo("nop");
 }
}
?>