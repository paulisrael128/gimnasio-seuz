<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:acceso.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
<div class="container">
<header class="header">
<div class="row">
	
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">GERENTE DEL SITIO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> GERENCIA</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>SR GERENTE UD SOLO PUEDE REALIZAR CONSULTAS</h4>
		<script type="text/javascript">
function mostrar(){
document.getElementById('oculto').style.display = 'block';}
</script>
<input type="button" value="CUMPLEAÑEROS" onclick="mostrar()" class="btn btn-success btn-primary">
<input type="button" value="CLIENTES SIN PAGO" onclick="mostrar1()" class="btn btn-success btn-primary">
<input type="button" value="CLIENTES ACTIVOS" onclick="mostrar2()" class="btn btn-success btn-primary">
<input type="button" value="DISCIPLINA CON MAS CLIENTES" onclick="mostrar3()" class="btn btn-success btn-primary">
<input type="button" value="ASISTENCIA" onclick="mostrar4()" class="btn btn-success btn-primary">
<div class="row-fluid" id="oculto" style='display:none;'>
<form action="consulta.php" method="post" > 

Sucursal:<br> <select  name="sucursal" class="form-control" value=" ">
      			<option value="Ambato">Ambato</option>
      			<option value="Latacunga">Latacunga</option>
      			<option value="Banos">Baños</option>
    						</select><br> 

Mes:<br> <select  name="mes" class="form-control" value=" ">
      			<option value="01">Enero</option>
      			<option value="02">Febrero</option>
      			<option value="03">Marzo</option>
      			<option value="04">Abril</option>
      			<option value="05">Mayo</option>
      			<option value="06">Junio</option>
      			<option value="07">Julio</option>
      			<option value="08">Agosto</option>
      			<option value="09">Septiembre</option>
      			<option value="10">Octubre</option>
      			<option value="11">Noviembre</option>
      			<option value="12">Diciembre</option>
    						</select><br>

<input type="submit" value="Buscar" name="buscar" class="btn btn-success btn-primary"> 


	
				  
</form> 

			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>
<script>
function mostrar1(){
document.getElementById('oculto1').style.display = 'block';}
</script>
<div class="row-fluid" id="oculto1" style='display:none;'>
<form action="consulta1.php" method="post" > 

Sucursal:<br> <select  name="sucursal" class="form-control" value=" ">
      			<option value="Ambato">Ambato</option>
      			<option value="Latacunga">Latacunga</option>
      			<option value="Banos">Baños</option>
    						</select><br> 

Mes:<br> <select  name="mes" class="form-control" value=" ">
      			<option value="01">Enero</option>
      			<option value="02">Febrero</option>
      			<option value="03">Marzo</option>
      			<option value="04">Abril</option>
      			<option value="05">Mayo</option>
      			<option value="06">Junio</option>
      			<option value="07">Julio</option>
      			<option value="08">Agosto</option>
      			<option value="09">Septiembre</option>
      			<option value="10">Octubre</option>
      			<option value="11">Noviembre</option>
      			<option value="12">Diciembre</option>
    						</select><br>
Sucursal:<br> <select  name="pago" class="form-control" value=" ">
      			<option value=" ">Inpagos</option>
      			<option value="Cancelado">Cancelado</option>
      			
    						</select><br> 
<input type="submit" value="Buscar" name="buscar" class="btn btn-success btn-primary"> 
<input type="hidden" name="id3">

	
				  
</form> 
</div>
<script>
function mostrar2(){
document.getElementById('oculto2').style.display = 'block';}
</script>
<div class="row-fluid" id="oculto2" style='display:none;'>
<form action="consulta2.php" method="post" > 

Sucursal:<br> <select  name="sucursal" class="form-control" value=" ">
      			<option value="Ambato">Ambato</option>
      			<option value="Latacunga">Latacunga</option>
      			<option value="Banos">Baños</option>
    						</select><br> 
Estado:<br> <select  name="estado" class="form-control" value=" ">
      			<option value="Activo">Activos</option>
      			<option value="Pasivo">Pasivos</option>
      			
    						</select><br> 
<input type="submit" value="Buscar" name="buscar" class="btn btn-success btn-primary"> 
<input type="hidden" name="id3">

	
				  
</form> 
</div>
<script>
function mostrar3(){
document.getElementById('oculto3').style.display = 'block';}
</script>
<div class="row-fluid" id="oculto3" style='display:none;'>
<form action="consulta3.php" method="post" > 


    		
<input type="submit" value="Consultar" name="buscar" class="btn btn-success btn-primary"> 
<input type="hidden" name="id3">

	
				  
</form> 
</div>
<script>
function mostrar4(){
document.getElementById('oculto4').style.display = 'block';}
</script>
<div class="row-fluid" id="oculto4" style='display:none;'>
<form action="consulta4.php" method="post" > 	

Sucursal:<br> <select  name="sucursal" class="form-control" value=" ">
      			<option value="Ambato">Ambato</option>
      			<option value="Latacunga">Latacunga</option>
      			<option value="Banos">Baños</option>
    						</select><br> 
<input type="submit" value="Consultar" name="buscar" class="btn btn-success btn-primary"> 


	
				  
</form> 
</div>
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>