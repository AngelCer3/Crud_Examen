<?php
    require "../crud.class.php";
    session_start();
    $crud = new Crud();

    $crud->crearPedido([
        "producto" => $_POST['producto'],
        "pedido"=> $_SESSION['id'],
        "cantidad"=> $_POST['cantidad']
    ])
?>