<?php session_start() ?>
<?php include('partials/head.php') ?>

<br>
<div class="card col-md-4 offset-md-4">
    <div class="card-header">
        Iniciar Sesion
    </div>
    <div class="card-body">
        <form action="loginController.php" method="post" class="form">
            <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" name="user" class="form-control" placeholder="Escribe tu nombre de usuario" aria-describedby="helpId" required autocomplete="off" value="<?= $_POST['user'] ?>">
            </div>

            <div class="mb-3 password-group">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" name="pass" class="form-control login" placeholder="Escribe tu contraseña"
                aria-describedby="helpId" required autocomplete="off" value="<?= $_POST['pass'] ?>">
                <button id="pass" type="button">Mostrar</button>
            </div>

            <button class="btn btn-primary w-100">Iniciar sesion</button>
            <button class="btn btn-secondary mt-3">Registrarse</button>
            <?php if(isset($_SESSION['alerta'])) { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= $_SESSION['alerta'] ?>
                    <?php unset($_SESSION['alerta']) ?>
                </div>
            <?php } ?>
        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include('partials/footer.php') ?>