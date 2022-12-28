<?php

include ('../db.php');
$id = $_GET['id'];

$sql = "delete from tarea where id = $id";

$result = mysqli_query($conexion, $sql);

header("Location: dashboardController.php");


?>