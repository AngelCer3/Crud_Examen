<div class="cotainer">
    <div class="row">
        <div class="col sm-4"></div>
        <div class="col sm-4">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h4 class="card-title text-center">Login</h4>
                    <img src="https://mktg-assets.tcgplayer.com/filters:watermark(tcgplayer-cdn-prd,infinite-watermark.png,-30,-80,40)//content/opengraph/YGO-Mathmech-Theme.jpg" class="card-img-top" alt="...">
                    <div>
                        <div class="mb-3">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="contrasena">Contraseña</label>
                            <input type="text" name="pass" id="pass" class="form-control">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button id="session" class="btn btn-primary">Login</button>
                            <a href="./registre" class="btn btn-danger">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col sm-4"></div>
    </div>
</div>
<?php require "./app/controller/session.controller.php" ?>