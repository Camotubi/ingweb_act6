<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
  		</header>
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
		<h3> Conversión de un decimal a binario</h3>
		<form action="" method="post">
			Introducir numero a convertir
			<input type="text" name="num" maxlength="5" size="5">
<input type="submit" name="enviar" value="envio">
		</form> 
		<?php
			if(!empty($_POST['num']))
			{
				$NumDecimal = $_POST['num'];
				echo "El numero decimal es:<b>$NumDecimal</b><br>";
				$NumBinario=' ';
				do
				{
					$NumBinario =$NumDecimal % 2 .$NumBinario;
					echo "Resultado intermedio: <b>$NumBinario</b><br>\n";
					$NumDecimal = (int)($NumDecimal/2);

				}while($NumDecimal > 0);
				echo "Numero en binario resultante: <br>$NumBinario</br><br>";
			}

		?>
		</center>
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
