<?php  
// Recibimos por POST los datos procedentes del formulario  
$nombre = $_POST["name"]; 
$appaterno = $_POST["appat"]; 
$correo = $_POST["mail"]; 
$contrasena = $_POST["p1"]; 
include("../Modelo/abre_conexion.php");
//Creando una sentencia
$query = "INSERT INTO usuario(nombre, appellido, correo, contrasena)";
$query .= "VALUES('$nombre', '$appaterno', '$correo', aes_encrypt('$contrasena','C1r4l3t1890'))"; 
mysqli_query($link, $query);
include("../Modelo/cierra_conexion.php");
echo "Insertado";
?>  
