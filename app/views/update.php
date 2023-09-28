<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <h4>Actualizar Producto</h4>
                <div>
                    <div class="mb-3">
                        <input type="text" id="id" name="id" value="<?php echo $Productos['id']?>" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $Productos['nombre']?>" placeholder="Ingresa el nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control" value="<?php echo $Productos['precio'] ?>" placeholder="Ingresa el precio del producto">
                    </div>
                    <div class="mb-3">
                        <label for="">Fecha de caducidad</label>
                        <input type="text" id="fechaCadu" name="fechaCadu" class="form-control" value="<?php echo $Productos['fecha_caducidad']?>" placeholder="Ingresa su fecha de caducidad">
                    </div>

                    <button class="btn btn-primary" id="actualizarProducto">Actualizar Producto</button>
                    <a href="./read" class="btn btn-dark">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/updateProducto.controller.php"
?>