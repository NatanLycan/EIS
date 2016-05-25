<?php
// Recibimos por POST los datos procedentes del formulario  
$miemail = $_POST["miemail"]; 
$mipass = $_POST["mipass"]; 

// Abrimos la conexion a la base de datos  
include("./Modelo/abre_conexion.php");

$usuario = mysqli_query($link, "select correo from usuario where correo = '$miemail'");
$nuevo_usuario = mysqli_query($link, "select correo, contrasena from usuario where correo = '$miemail' and contrasena = aes_encrypt('$mipass','C1r4l3t1890')");

if (mysqli_num_rows($usuario) > 0) { 
	if (mysqli_num_rows($nuevo_usuario) > 0) {
		$query = "select * from usuario where correo='$miemail'";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		//setcookie("cargo", $row["cargo"], time() + 60 * 60 * 24 * 30, "/SGCE");
		setcookie("id", $row["idusuario"], time() + 60 * 60 * 24 * 30, "/EIS");
		setcookie("first", 1, time() + 60 * 60 * 24 * 30, "/EIS");
		setcookie("name", $row["nombre"], time() + 60 * 60 * 24 * 30, "/EIS");
		

		echo $row["idusuario"] . " " . $row["idusuario"];
	}
	else {
		include("./Modelo/cierra_conexion.php");
		echo "1";
        
	}
} else {
	// Cerramos la conexion a la base de datos  
	include("./Modelo/cierra_conexion.php");
	echo "2";
}
?>  