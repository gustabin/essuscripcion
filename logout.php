<?php
session_start(); 
include "tools/corelib.php";
// Borramos toda la sesion
session_destroy();
header("Location: ".SERVER."index.php");
?>