
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<?php


extract($_POST);//extraer todos los valores del metodo post del formulario de actualizar
?>	

	<?php

				require("connect_db.php");
				$sql=("select cliente.nombre from cliente,pago where month(fecha)='$mes' and cliente.sucursal='$sucursal' and pago.pagoMenSual=' '");
				$query=mysql_query($sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						//echo "<td>Cedula</td>";
						echo "<td>Nombres</td>";
						//echo "<td>Fecha Nacimiento</td>";
						
						//echo "<td>Sucursal</td>";
						
					echo "</tr>";


			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	//echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[0]</td>";
				    	//echo "<td>$arreglo[2]</td>";
				    	
				    	//echo "<td>$arreglo[3]</td>";
				    	

				    	
						

						
					echo "</tr>";
				}

				echo "</table>";
		
	
?>