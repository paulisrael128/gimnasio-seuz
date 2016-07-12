<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="insert into registro( cedula, fecha, hora, id)
                values ('$id', '$fecha', '$reloj', '$ed')";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO DE LOS DATOS")</script> ';
		header("location: index.php");
		
		echo "<script>location.href='index.php'</script>";

	}else {
		echo '<script>alert("REGISTRADO CON EXITO")</script> ';
		
		echo "<script>location.href='index.php'</script>";

		
	}

?>