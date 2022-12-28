<?php
session_start();

if(isset($_SESSION['usuario'])){
    include ('../db.php');
    $usuario = $_SESSION['user-id'];

    $sql = "select * from tarea where usuario = $usuario";
    
    $rows = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_all($rows);
    $_SESSION['tareas'] = $result;
}else{
    header("Location: loginController.php");
}

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="../styles/dashboard.module.css">
<?php include('../views/dashboard.php') ?>
