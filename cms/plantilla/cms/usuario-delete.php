<?php include "modulos/conexion.php"; ?>
<?php include "modulos/verificar.php"; ?>
<?php 
$cod_usuario = $_REQUEST['cod_usuario'];
$eliminar = "DELETE FROM usuarios WHERE cod_usuario='$cod_usuario'";
$resultado = mysqli_query($enlaces,$eliminar) or die ('Consulta fallida: ' . mysqli_error($enlaces));
header("Location:usuarios.php");
?>