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
	
	
	<body onLoad="simple_reloj();" onUnload="stop();">
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
						<li><a href="index.php" class="active">Inicio</a></li>
						<li><a href="informacion.php">Información</a></li>
						<li><a href="#">Disciplinas</a></li>
						<li><a href="#">Administracion</a></li>
						<li><a href="#">Contactos</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div id="column_box">
					<div id="column1">
						<h2 align="center">HISTORIA</h2>
						<h4 align="center">Hace 7 años, el joven Paul Guanochanga hizo realidad su sueño y abrió un gimnasio en Ambato, y lo llamo GYM FITNESS. En 2010 el gimnasio alcanzó gran popularidad. Desde entonces, se convirtió en en uno de los gimnasios más populares de esa ciudad. En la ctualidad cuenta con 2 sucursales en las ciudades de Latacunga y Baños</h4>
					</div>
					<div id="column2">
						<h2 align="center">FILOSOFIA</h2>
						<h4 align="center">La filosofía de trabajo de GYM FITNESS está basada en un profundo respeto por las personas, por su salud y calidad de vida. 
En GYM FITNESS estamos seguros que brindando un servicio de calidad, los socios podràn vivir de verdad, una experiencia fuera de lo cotidiano</h4>
					</div>
					<div id="column3">
						<img src="images/tt.jpg" width="260" height="135">
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