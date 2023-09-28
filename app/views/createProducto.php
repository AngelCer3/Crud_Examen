<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div>
                <h4>Agregar Producto</h4>
                <div>
                    <div class="mb-3">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control" placeholder="Ingresa el precio del producto">
                    </div>
                    <div class="mb-3">
                        <label for="fechaCadu">Fecha de caducidad</label>
                        <input type="text" id="fechaCadu" class="form-control" placeholder="Ingresa su fecha de caducidad">
                    </div>

                    <button class="btn btn-primary" id="crearProducto">Crear Producto</button>
                    <a href="./read" class="btn btn-dark">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "./app/controller/createProducto.controller.php" ?>