<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edicion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
<div class="container">
<header class="header">
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
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
		<h2> Administración de clientes registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de clientes</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM cliente WHERE cedula=$id";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
		    	$fechaNacimiento=$row[2];
		    	$sucursal=$row[3];
		    	$alergias=$row[4];
		    	$enfermedades=$row[5];
		    	$genero=$row[6];
		    	$estado=$row[7];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Cedula<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Nombres<br> <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
				Fecha Nacimiento<br> <input type="date" name="fechaNacimiento" value="<?php echo $fechaNacimiento?>"><br>
				Sucursal<br> <select id="sucursal" name="sucursal" class="form-control" value="<?php echo $sucursal?>">
      			<option value="Ambato">Ambato</option>
      			<option value="Latacunga">Latacunga</option>
      			<option value="Banos">Baños</option>
    						</select><br>
				Alergias<br> <input type="text" name="alergias" value="<?php echo $alergias?>"><br>
				Enfermedades<br><input type="text" name="enfermedades" value="<?php echo $enfermedades?>"><br>
				Genero<br><select id="genero" name="genero" class="form-control" value="<?php echo $genero?>">
      			<option value="Femenino">Femenino</option>
      			<option value="Masculino">Masculino</option>
    						</select><br>
				Estado<br><select id="estado" name="estado" class="form-control" value="<?php echo $estado?>">
      			<option value="Activo">Activo</option>
      			<option value="Pasivo">Pasivo</option>
				</select><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
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
<p>&copy; Copyright  <br/><br/></p>
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


