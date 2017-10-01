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
	<form method="post" action ="recibir.php">
<table border="0" align="center">
	<tr>
		<td colspan="2" align="center" bgcolor="#669966">
			<h3>Datos Personales</h3>
		</td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">Nombre:</td>
		<td bgcolor="#AACC66"><input type="text" name="fNombre" size=25 maxlength="25"></td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">Apellido:</td>
		<td bgcolor="#AACC66"><input type="text" name="fApellido" size=25 maxlength="25"></td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">Sexo:</td>
		<td bgcolor="#AACC66">
			<input type="radio" name="fSexo" value"masculino">Masculino<br>
			<input type="radio" name="fSexo" value="femenino">Femenino
		</td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">Edad:</td>
		<td bgcolor="#AACC66">
			<input type="text" name="fEdad" size="3" maxlenght="3">
		</td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">País:</td>
		<td bgcolor="#AACC66">
			<select name="fPais" size="1">
				<option value="PA">Panama
				<option value="ES">El Salvador
				<option value="GU">Guatemala
				<option value="CR">Costa Rica
				<option value="HO">Honduras
				<option value="NI">Nicaragua
				<option value="BE">Belice
			</select>
		</td>
	</tr>
	<tr>
		<td bgcolor="#AACC66">Cursos a tomar:</td>
		<td bgcolor="#AACC66">
			<select name="fCursos[]" size="6" multiple>
				<option value="literatura">Literatura
				<option value="programacion">Programacion
				<option value="matematicas">Matematicas
				<option value="ciencias">Ciencias
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" bgcolor="#669966">
			<input type="submit" value="Enviar">&nbsp;
			<input type="reset" value="Borrar">

	</tr>
	</table>
</form>
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
