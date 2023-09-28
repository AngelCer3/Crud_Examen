<?php 
    require "../crud.class.php";
    session_start();
    $crud = new Crud();

    $crud->crearProducto([
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'fecha' => $_POST['fecha']
    ]);
?>