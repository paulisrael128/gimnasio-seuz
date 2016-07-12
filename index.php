<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>GIMNASIO</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
	</head>
<script>
function mueveReloj(){ 
   	momentoActual = new Date() 
   	hora = momentoActual.getHours() 
   	minuto = momentoActual.getMinutes() 
   	segundo = momentoActual.getSeconds() 

   	str_segundo = new String (segundo) 
   	if (str_segundo.length == 1) 
      	segundo = "0" + segundo 

   	str_minuto = new String (minuto) 
   	if (str_minuto.length == 1) 
      	minuto = "0" + minuto 

   	str_hora = new String (hora) 
   	if (str_hora.length == 1) 
      	hora = "0" + hora 

   	horaImprimible = hora + " : " + minuto + " : " + segundo 

   	document.form_reloj.reloj.value = horaImprimible 

   	setTimeout("mueveReloj()",1000) 
} 
</script> 
	<body onload="mueveReloj()" >
		<div id="bg_black">
			<div id="logo">	
				<h1>&nbsp;</h1>
				<a href="#"><small><img src="images/logo.jpg" alt="" width="112" height="89" /></small></a>
			</div>
			<div id="wrap">
				<div id="header">
					<div id="wrapper">
						<div id="slider-wrapper">
							<div id="slider" class="nivoSlider">
								<img src="images/11.jpg" alt=""/>
								<img src="images/2.jpg" alt=""/>
								<img src="images/3.jpg" alt="" />
								<img src="images/4.jpg" alt="" />
							</div>
						</div>
					</div>
					<div class="ic"></div>
					<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
					<script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
					<script type="text/javascript">
					$(window).load(function() {
						$('#slider').nivoSlider();
					});
					</script>
				</div>
				<div id="menu">
					<ul>
						<li><a href="#" class="active">Inicio</a></li>
						<li><a href="informacion.php">Información</a></li>
						<li><a href="#">Disciplinas</a></li>
						<li><a href="inicio.php">Administracion</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div id="column_box">
					<div id="column1">
						<h2 align="center">REGISTRO DE ASISTENCIA</h2>
						<form method="post" action="asistencia.php" align="center" name="form_reloj" >
							Cedula: <input type="text" name="id"  maxlength="10" onKeypress="ValidaNumeros();"placeholder="Ingrese su numero de cedula" autofocus required/><br><br>
							Fecha: <input name="fecha" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()" value="<?php echo " ".date("Y/m/d")?>"><br><br>
							Hora: <input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()"> <br><br>
							<input type="hidden" name="ed" size="1">
							<input type="submit" value="Registar" class="btn btn-success btn-primary">
						</form>
					</div>
					<div id="column2">
						<h2 align="center">HORARIOS</h2>
						<h4 align="center">LUNES A VIERNES 07:00 a 21:00</h4><br><br>
						<h4 align="center">SABADO DE 08:00 A 16:00</h4>
					</div>
					<div id="column3">
						<h2 align="center">CONTACTOS</h2>
						<h4 align="center"><br>
							TELF: 032567890<br>
							CELULAR: 0987654324</h4>
					</div>
					<div class="clear"></div>
				</div>
				<div id="last_box">
					<table cellspacing="50px">
						<tr>
							<td height="100px" width="50%">
<p>MISION<br><br>
Mejorar la calidad de vida de las comunidades a través de su filosofía del ejercicio, programas y productos y de inculcar en la vida de las personas de todo el puerto el valor de la salud y el ejercicio. </p>
							</td>
							<td width="50%">
VISION<br><br>
<p>
Ser el gimnasio líder brindando bienestar a nuestros miembros y en general a la población, generando valor a nuestra empresa, a nuestros colaboradores y a nuestra comunidad. </p></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div id="footer_bot">
			<p>GYM FITNESS.<p><br><br>
			<p><img src="images/logo2.png" alt="" width="84" height="50" /></p><br><br>
			<p>Design by <!-- Do not remove -->MC-EC-PG</p>
		</div>
	</body>
</html>
