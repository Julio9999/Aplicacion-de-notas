<?php include('../views/partials/head.php') ?>

<br>
<div class="card col-md-4 offset-md-4">
    <div class="card-header">
        Agregar nueva tarea
    </div>
    <div class="card-body">
        <form action="gestionarTareaController.php" method="post">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Escriba el titulo" aria-describedby="helpId" required autocomplete="off">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Escriba la descripcion" aria-describedby="helpId" required autocomplete="off">
            </div>

            <button class="btn btn-primary w-100" name="enviar">Guardar</button>
        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include('../views/partials/footer.php') ?>