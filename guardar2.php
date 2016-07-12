<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="insert into pago( id, fecha, pagoMensual, cedula)
                values ('$id2', '$fecha', '$pago', '$cedula')";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO DE LOS DATOS")</script> ';
		header("location: pago.php");
		
		echo "<script>location.href='pago.php'</script>";
	}else {
		echo '<script>alert("REGISTRADO CON EXITO")</script> ';
		
		echo "<script>location.href='pago.php'</script>";

		
	}
?>