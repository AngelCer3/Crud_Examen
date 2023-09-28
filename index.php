<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    require "./app/views/includes/metatags.php"
    ?>
</head>

<body>

    <?php
    require "./app/model/crud.class.php";
    $crud = new Crud();
    if (isset($_GET['vista'])) {
        switch ($_GET['vista']) {
            case 'home':
                include "./app/views/home.php";
                break;
            case 'registre':
                include "./app/views/registre.php";
                break;
            case 'read':
                if (isset($_SESSION['id'])) {
                    $productos = $crud->read();
                    include "./app/views/read.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'readPedido':
                if (isset($_SESSION['id'])) {
                    $pedido = $crud->readPedido($_SESSION['id']);
                    include "./app/views/readPedido.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'createProducto':
                if (isset($_SESSION['id'])) {
                    include "./app/views/createProducto.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'crearPedido':
                if(isset($_SESSION['id'])){
                    $Productos = $crud->show($_GET['id']);
                    include "./app/views/crearPedido.php";
                }else{
                    header("location: ./home");
                }
                break;
            case 'updateProducto':
                if (isset($_SESSION['id'])) {
                    $Productos = $crud->show($_GET['id']);
                    include "./app/views/update.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'logout':
                if (isset($_SESSION['id'])) {
                    include "./app/model/process/close.proccess.php";
                }
                break;
            default:
                header("location: ./read");
                break;
        }
    }else{
        header("location: ./home");
    }
    ?>


    <?php require "./app/views/includes/scripts.php" ?>
</body>

</html>