<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/bootstrap.min.js"></script>
		<title> Conversión Dec a Bin</title>
	</head>
	<body>
		<nav>
			<ul class ="navbar list-unstyled">
				<li>
					<a href="index.php"><img src="img/home3.png"> Inicio</a>
				</li>
				<li>
					<a href = metodoGet.php>Metodo Get</a>
				</li>
				<li>
					<a href = metodoPost.php>Metodo Post</a>
				</li>
				<li>
					<a href = enviar.php>Enviar/Recibir Datos</a>
				</li>
				<li>
					<a href = formularioRespuestaMisma.php>Form respuesta misma pagina</a>
				</li>
				<li>
					<a href = formularioRespuestaOtraPagina.php>Form Respuesta otra Pagina</a>
				</li>
			</ul>
		</nav>
		<div class ="container">
			<div class = "row">
					<div class ="col-sm-10">
						<section>
<?php
	echo "<center><h3>Datos Ingresados</h3></center>";
	echo '<table border="1" align="center" bgcolor="#AACC66">';
	echo '<tr bgcolor="#669966">';
	echo '<th>';
	echo "Nombre de variable <br>";
	echo "de formulario";
	echo "</th>";
	echo "<th>";
	echo "Valor introducido";
	echo "</th>";
	foreach($_POST as $nomb_camp => $val)
	{
		echo "<tr><td>".$nomb_camp."</td>";
		echo "<td>";
		if(gettype($val)=="array")
		{
			foreach($val as $ele)
			{
				echo $ele. "<br>";
			}
		}
		else
		{
			echo $val;
			echo "</td>";
			echo "</tr>";
		}
	}
	echo "</table><br>";


?>
						</section>
					</div>
					<div class ="col-sm-2">
							<aside>
								<div class ="form-box">
									<form>
										<div class="form-group">
											<label>Buscar:</label>
											<input class="form-control" type="text">
										</div>
										<input class ="btn" type ="submit" value="Buscar">
									</form>
								</div>
								<br>
								<div>
										<h5>Patrocinadores</h5>
										<h6>Google</h6>
										<img class="img-responsive" src="img/google.png">
										<h6>Wikipedia</h6>
										<img class ="img-responsive" src="img/wiki.png">
								</div>
								<br>
							</aside>
					</div>
			</div>
</div>
			<footer class="footer">
				<div class="container">
					<p >	Creado por: Carlos Moisés Tuñón Biddy, 8-916-809, Grupo: 1SF-131</p>
				</div>
			</footer>
</body>
</html>
