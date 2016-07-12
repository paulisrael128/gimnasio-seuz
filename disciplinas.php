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
    
  <script>
    function copiar()
    {
        document.getElementById("input2").value=document.getElementById("input1").value;
    }
    </script>
<form method="POST" > 
Cedula:<input type="text" name="id" value="" id="input1" onKeyUp="copiar()"><br><br> 

<input type="submit" value="Buscar" name="buscar" class="btn btn-success btn-primary"> 
</form> 
<?php 
extract($_POST);  //extraer todos los valores del metodo post del formulario de actualizar
      require("connect_db.php");
$result = mysql_query("SELECT * FROM cliente WHERE cedula='$id'"); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["cedula"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["fechaNacimiento"]."</td> \n"; 
            echo "<td>".$row["sucursal"]."</td> \n";
            echo "<td>".$row["alergias"]."</td> \n";
            echo "<td>".$row["enfermedades"]."</td> \n";
            echo "<td>".$row["genero"]."</td> \n";  
            echo "<td>".$row["estado"]."</td> \n";   
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
    


    <!--EMPIEZA DESLIZABLE-->
    
     <!--TERMINA DESLIZABLE-->



    
    
    </div>



    <form action="guardar1.php" method="post">
      <br><br><br>
        <font color="white" size="14">REGISTRAR DISCIPLINAS</font><br><select id="nombre" name="nombre" class="form-control" >
            <option value="SISTEMA ABE">SISTEMA ABE</option>
            <option value="SPINNING">SPINNIG</option>
            <option value="G.A.P">G.A.P</option>
            <option value="GYMZUMB">GYMZUMB</option>
            <option value="STEP">STEP</option>
            <option value="PILATES">PILATES</option>
            <option value="FULL CONTACT">FULL CONTACT</option>
            <option value="BALLET">BALLET</option>
                </select><br>
        <br>
        <font color="white" >COSTO</font><br><select id="costo" name="costo" class="form-control" >
            
            <option value="20">20</option>
            
                </select><br>
        <br>
        <input type="submit" value="Guardar" class="btn btn-success btn-primary">
      <input type="hidden" name="id">
       <input type="hidden" value="" id="input2" name="cedula">
      </form>



    

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


