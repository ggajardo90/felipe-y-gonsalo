<?php

use models\Conexion;

session_start();
if (isset($_SESSION['usuario'])) {
    unset($_SESSION['usuario']);
    session_destroy();
}
header("Location: ../index.php");

