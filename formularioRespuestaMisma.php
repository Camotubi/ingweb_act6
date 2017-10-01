<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>

		<?php 
			include('formularioActivarSoftware.php');
			if(!empty($_POST))
			{
		?>
				<p>El software con el numero de serie: <?php echo $_POST["nomSerie"] ?> a sido activado para el propietario <?php echo $_POST["nombre"]." ".$_POST["apellido"]?> y la compañia con identificacion <?php echo $_POST["rup"]?>.</p>

					<?php
			}
		?>
	</body>
</html>

