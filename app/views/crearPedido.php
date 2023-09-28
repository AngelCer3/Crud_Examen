<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div>
                <h4>Realizar Pedido</h4>
                <div>
                    <div class="mb-3">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $Productos['nombre']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="product" name="product" class="form-control" value="<?php echo $Productos['id'] ?>"hidden>
                        <input type="text" id="pedido" name="pedido" class="form-control" value="<?php echo $_SESSION['id']?>" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" class="form-control" placeholder="Ingresa la cantidad a comprar">
                    </div>

                    <button class="btn btn-primary" id="crearPedido">Crear Pedido</button>
                    <a href="./read" class="btn btn-dark">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "./app/controller/crearPedido.controller.php"?>