<html>
	<head>
		<title> Conversión Dec a Bin</title>
	</head>
	<body>
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
</body>
</html>
