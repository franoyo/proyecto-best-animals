<?php
/* Destruir la sesion */
session_start();
session_destroy();
header("location:login.html");