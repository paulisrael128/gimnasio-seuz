  <?php
    session_start();
    include('connect_db.php');
?> 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Document</title>
</head>
<body>
   <br><br>
    <h1 align="center"> GYM FITNESS</h1><br><br>
    <div align="center">

        <img src="images/logo.jpg">
    </div >
    <div align="center">
        <br><br><br>
     <?php
        if(isset($_SESSION['usuario_nombre'])) {
    ?>
            Bienvenido: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a>
 
            <a href="logout.php">Cerrar Sesión</a>
    <?php
        }else {
    ?>
            <a href="acceso.php"><font size="12">Ingresar</font></a>
    <?php
        }
    ?>
    </div>
</body>
</html>