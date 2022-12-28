<?php

if($_POST){

    include ('../db.php');
    session_start();

    $usuario = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select password, id from usuarios where usuario = '$usuario';";

    $row = mysqli_query($conexion, $sql);

    $rowNum = mysqli_num_rows($row);

    if($rowNum == 1){
        $result = mysqli_fetch_row($row);
        $passDb = $result[0];
        $id = $result[1];
        if($passDb != $password){
            $_SESSION['alerta'] = 'Contraseña incorrecta';
        }else{
            $_SESSION['user-id'] = $id;
            header("Location: dashboardController.php");
        }
    }else{
        $_SESSION['alerta'] = 'Usuario o contraseña incorrecta';
    }
}


?>





<link rel="stylesheet" href="../styles/register.module.css">
<script src="./form.js"></script>
<?php include('../views/login.php') ?>
