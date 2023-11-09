<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre_cliente'], $_POST['direccion'], $_POST['telefono'], $_POST['correo_elec'], $_POST['fecha_registro'], $_POST['curp'], $_POST['seguro_social']);
?>
