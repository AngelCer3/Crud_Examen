<?php 
    require "../crud.class.php";
    session_start();
    $crud = new Crud();

    $crud->updateeProducto([
        'id' => $_POST['id'],
        "nombre" => $_POST['nombre'],
        "precio" => $_POST['precio'],
        "fecha" => $_POST['fecha'],
    ])
?>