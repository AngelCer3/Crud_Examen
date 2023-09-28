<div class="container mt-3">
    <div class="row">
        <div class="col">
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        <th>Realizar Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($productos as $producto) :
                    ?>
                        <tr>
                            <td><?php echo $producto["nombre"]?></td>
                            <td><?php echo $producto["precio"]?></td>
                            <td><?php echo $producto["fecha_caducidad"]?></td>
                            <td><a href="./updateProducto&id=<?php echo $producto["id"] ?>" class="btn btn-warning">Actualizar</a></td>
                            <td><button data-id="<?php echo $producto["id"] ?>" class="btn btn-danger eliminar">Eliminar</button></td>
                            <td><a href="./crearPedido&id=<?php echo $producto['id']?>" class="btn btn-secondary">Realizar pedido</a></td>
                        </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
            <div class="d-grid gap-2 justify-content-md-end">
                <a href="./createProducto" class="btn btn-success">Agregar</a>
                <a href="./readPedido" class="btn btn-primary">Pedidos</a>
                <a class="btn btn-dark" href="./logout">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/delete.controller.php";
?>