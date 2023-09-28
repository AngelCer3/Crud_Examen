<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->crearUsuario([
        "nombres" => $_POST['nombres'],
        "apellidos" => $_POST['apellidos'],
        "usuario" => $_POST['usuario'],
        "pass" => $_POST['pass']
    ])

?>