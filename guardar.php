<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="insert into cliente( cedula, nombre, fechaNacimiento, sucursal, alergias, enfermedades, genero, estado)
                values ('$id', '$nombre', '$fechaNacimiento', '$sucursal', '$alergias', '$enfermedades', '$genero', '$estado')";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO DE LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRADO CON EXITO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>