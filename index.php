<?php

if($_POST){

    include ('db.php');
    session_start();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];


    $sqlCorreo = "select 1 from usuarios where correo = '$correo'";

    $rowCorreo = mysqli_query($conexion, $sqlCorreo);

    $rowNumCorreo = mysqli_num_rows($rowCorreo);

    $sqlUsuario = "select 1 from usuarios where usuario = '$usuario'";

    $rowUsuario = mysqli_query($conexion, $sqlUsuario);

    $rowNumUsuario = mysqli_num_rows($rowUsuario);

    if($rowNumCorreo == 1){
        $_SESSION['alerta'] = 'El correo electronico ya esta registrado';
        $_SESSION['alerta-tipo'] = 'danger';
    }else if($rowNumUsuario == 1){
        $_SESSION['alerta'] = 'El nombre de usuario ya esta registrado';
        $_SESSION['alerta-tipo'] = 'danger';
    }else if($password != $confirm_password){
        $_SESSION['alerta'] = 'Las contraseñas deben coincidir';
        $_SESSION['alerta-tipo'] = 'danger';
    }else{
        $sql = "insert into usuarios (nombre, apellido, correo, usuario, password) values('$nombre', '$apellido', '$correo', '$usuario', '$password')";
        mysqli_query($conexion, $sql);
        $_SESSION['alerta'] = 'Usuario registrado correctamente';
        $_SESSION['alerta-tipo'] = 'success';
        $_POST['nombre'] = '';
        $_POST['apellido'] = '';
        $_POST['correo'] = '';
        $_POST['usuario'] = '';
        $_POST['password'] = '';
        $_POST['confirm_password'] = '';
    }
}

?>

<link rel="stylesheet" href="./styles/register.module.css">
<script src="./controllers/form.js"></script>
<?php include ('views/register.php') ?>




