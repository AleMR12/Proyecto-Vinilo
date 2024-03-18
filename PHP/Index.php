<?php
session_start();
require_once("../HTML/Index.html");

// Limpia las variables de sesión después de guardarlas en variables locales
unset($_SESSION['successMensaje'], $_SESSION['errorMensaje']);
?>
