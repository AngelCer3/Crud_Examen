<div class="container mt-3">
    <div class="row">
        <div class="col">
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($pedido as $pedidos): 
                    ?>
                    <tr>
                        <td><?php echo $pedidos['nombre'] ?></td>
                        <td><?php echo $pedidos['cantidad'] ?></td>
                        <td><?php echo $pedidos['cantidad'] *$pedidos['precio'] ?></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
            <a href="./read" class="btn btn-dark">Regresar</a>
        </div>
    </div>
</div>