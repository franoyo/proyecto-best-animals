<?php
include("../connect_db.php");

if (!empty($_GET["id"])) {
    $ids=$_GET["id"];
    include("../admin_historia_clinica_only_ver.php");
}


?>