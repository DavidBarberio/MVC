<?php

use Model\M_Usuario;
require('Model/M_Usuario.php');

$con = new M_Usuario();

$con->deleteUsuario($username);

$con->close();
exit();
?>

