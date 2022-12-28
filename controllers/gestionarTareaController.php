<?php

session_start();

if(isset($_SESSION['usuario'])){
    if(isset($_POST['enviar'])){
        include ('../db.php');
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $usuario = $_SESSION['user-id'];
        $sql = "insert into tarea (titulo, descripcion, usuario) values('$titulo', '$descripcion', $usuario);";
        $result = mysqli_query($conexion, $sql);
        header("Location: dashboardController.php");
    }
}

?>

<?php include('../views/gestionarTarea.php') ?>