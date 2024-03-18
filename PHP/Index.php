<?php
session_start();
include("../PHP/Header.php");


// Limpia las variables de sesión después de guardarlas en variables locales
unset($_SESSION['successMensaje'], $_SESSION['errorMensaje']);



?>
