<?php

include_once"conexion.php";
if (isset($_POST['register'])) {
    if (strlen($_POST['cedula']) >= 1 && strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen($_POST['comentario']) >= 1) {
	    $cedula = trim($_POST['cedula']);
	    $nombre = trim($_POST['Nombre']);
        $apellido = trim($_POST['Apellido']);
        $telefono = trim($_POST['Telefono']);
        $comentario = trim($_POST['comentario']);
	    $consulta = "INSERT INTO persona( Nombre, Apellido, Cedula, Telefono, Direccion) VALUES ('$nombre','$apellido','$cedula','$telefono','$comentario')";
	    $resultado = mysqli_query($connect,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Te has inscripto correctamente!</h3>
			<a href="./mostrar1.php">Mostrar datos</a>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }
}




?>