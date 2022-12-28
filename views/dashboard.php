<?php 

session_start();

$tareas = $_SESSION['tareas'];

?>

<?php include('partials/head.php') ?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container text-center p-3">

    <h1>Todas las notas</h1>
    <h3><?= count($tareas) ?> 
        <?php  if(count($tareas) > 1) {?>
            tareas
        <?php }else { ?>
            tarea
        <?php }?>
    </h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <?php foreach ($tareas as $tarea) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tarea[1] ?></h5>
                        <p class="card-text"><?= $tarea[2] ?></p>
                        <a href="" class="btn btn-warning">Editar</a>
                        <a href="borrarTarea.php?id=<?= $tarea[0] ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="add-task">
        <a href="gestionarTareaController.php">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>


<?php include('partials/footer.php') ?>