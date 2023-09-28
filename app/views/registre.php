<div class="container">
    <div class="row">
        <div class="col">
            <h1>Registrar Usuario</h1>
            <div>
                <div class="mb-3">
                    <label for="nombres">Nombre</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3">
                    <label for="apellidos">Apellido</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingresa tu apellido">
                </div>
                <div class="mb-3">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingresa tu nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="pass">Contraseña</label>
                    <input type="text" name="pass" id="pass" class="form-control" placeholder="Ingresa una contraseña">
                </div>

                <button class="btn btn-primary" id="crearUsuario">Crear Usuario</button>
                <a href="./home" class="btn btn-dark">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php  require './app/controller/registre.controller.php'?>