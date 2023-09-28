<?php 
    require "../crud.class.php";
    $crud = new Crud();
    $crud->comprobarUsuario([
        "usuario" => $_POST['usuario'],
        "pass" => $_POST['pass']
    ])
?>