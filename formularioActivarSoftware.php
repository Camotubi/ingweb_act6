<form method="post" action="<?php if(isset($respuesta)){echo $respuesta;} ?>">
		<div class="form-group">
			<label> Numero de Serie:</label>
			<input type="text" name="nomSerie">
		</div>
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre">
		</div>
		<div class="form-group">
			<label>Apellido:</label>
			<input type="text" name="apellido">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email">
		</div>
		<div class="form-group">
			<label>Teléfono:</label>
			<input type="text" name="telefono">
		</div>
		<div class="form-group">
			<label>Dirección:</label>
			<input type="text" name="Direccion">
		</div>
		<div class="form-group">
			<label>Ciudad:</label>
			<input type="text" name="ciudad">
		</div>
		<div class="form-group">
			<label>Provincia/Estado:</label>
			<input type="text" name="provincia">
		</div>
		<div class="form-group">
			<label>Pais:</label>
			<select>
				<option value="PA">Panama</option>
				<option value="otro">Otro</option>
				</select>
		</div>
		<div class="form-group">
			<label>RUT/RUC/NIC/NIT/RFC/CI:</label>
			<input type="text" name ="rup">
		</div>
			<input type="submit" value="Enviar">

		</form>

	
