<?php session_start() ?>

<?php include ('views/partials/head.php') ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="card col-md-8 offset-md-2 p-0">
                <div class="card-header">
                    Registrarse
                </div>
                <div class="card-body">
                    <form class="form form-check" action="index.php" method="post">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" autocomplete="off" value="<?= $_POST['nombre'] ?>" required title="El nombre solo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" autocomplete="off" value="<?= $_POST['apellido'] ?>" required title="El apellido solo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="correo" class="form-label">Correo electronico</label>
                                <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo electronico" autocomplete="off" value="<?= $_POST['correo'] ?>" required title="Email incorrecto" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="usuario" class="form-label">Nombre de usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" autocomplete="off" value="<?= $_POST['usuario'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6 password-group">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" autocomplete="off" value="<?= $_POST['password'] ?>" required>
                                <button id="password" type="button">Mostrar</button>
                            </div>

                            <div class="mb-3 col-md-6 password-group">
                                <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                                <input type="password" name="confirm_password" class="form-control" autocomplete="off" value="<?= $_POST['confirm_password'] ?>" required>
                                <button id="confirm_password" type="button">Mostrar</button>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" name="registrarse">Registrarse</button>
                        <a class="btn btn-secondary mt-3" href="controllers/loginController.php">Iniciar Sesion</a>
                        <?php if (isset($_SESSION['alerta'])) { ?>
                            <div class="alert alert-<?= $_SESSION['alerta-tipo'] ?> mt-3" role="alert">
                                <?= $_SESSION['alerta'] ?>
                            </div>
                            <?php unset($_SESSION['alerta']) ?>
                            <?php unset($_SESSION['alerta-tipo']) ?>
                        <?php } ?>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div>
    </div>
<?php include ('views/partials/footer.php') ?>
