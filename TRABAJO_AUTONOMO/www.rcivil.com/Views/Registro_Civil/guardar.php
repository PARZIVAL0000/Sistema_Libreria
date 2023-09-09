<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Biblioteca/Libreria</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="./Views/Estilos/css/index.css" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	</head>
	<body>

		<header class="cabecera">
			<h1>LIBRERIA LOS QUIJOTES MANCHADOS</h1>
		</header>

		<div class="contenido">
			<div class="contenido_accion">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAWhJREFUSEvtlrtKBTEURdftRfE7bC6KvfgHVtpo46OwFist9Cd8gdxGK3srFfFDBAsV/QLBFxsycAx5jGHmjsJNmTnJOnsnOWd6dDR6HXEZgYfm/L+zegc4Bl4iFo0B28A+8B6KKVEs4DpwD8wBD97Ggl4Ds8AlsAC8+fDfgBV7CGyYTR6BPvDq5iYcdNrE3LoEf7DrghU3AFa8zA+ATTc3DgiiRKrxASwBFyWKY9BTYDUB/QQWQ1CtySlOQdeAL2DS2WuVCip3zmLvMwXWt3NnlV0vpRZ6B0yZgCw0pTgGlYJlo9SHygF9jyqtEgwpTkFlnxTJ3hBUTsiR7PhT4OoIQufbqtX2GIZ+uSw8VDj8m60S2dhzqgNvrYDk4K2WTAs/cp2pmnsC1BCeTZO4AmbMe7oB5ktqtV1jS2isLdpm0UhbtMp3gRNAikND7XEL2GvyRyBbleoE5LpTnT2KYkbgIttKFnVm9Tc7n2IfxwKg5wAAAABJRU5ErkJggg=="/>
				<a href="?control=Sites&accion=index">Regresar</a>
			</div>

			<div class="contenido_formulario">
				<form method="POST" action="?control=Sites&accion=guardar" class="formulario">
					<?php foreach($registro as $data){ ?>
					
						<div class="campo">
							<label for="Codigo">Libro Código:</label>
							<input type="text" name="Codigo" id="Codigo" value="<?php echo $data->libro_codigo; ?>" placeholder="Introduce el numero de cedula"/>
						</div>
						<div class="campo">
							<label for="Id">Libro Identificador:</label>
							<input type="text" name="Identificador" id="Id" placeholder="Identificador del libro" value="<?php echo $data->libro_id; ?>" />
						</div>
						<div class="campo">
							<label for="Genero">Libro Género:</label>
							<input type="text" name="Genero" id="Genero" value="<?php echo $data->libro_genero; ?>" />
						</div>
						<div class="campo">
							<label for="Nombres">Libro Nombre:</label>
							<input type="text" name="Nombres" id="Nombres" value="<?php echo $data->libro_nombre; ?>" />
						</div>
						<div class="campo">
							<label for="Autor">Libro Autor:</label>
							<input type="text" name="Autor" id="Autor" value="<?php echo $data->libro_autor; ?>" />
						</div>
						<div class="campo">
							<label for="Fecha">Libro Fecha:</label>
							<input type="text" name="Fecha" id="Fecha" value="<?php echo $data->libro_fecha; ?>" />
						</div>
					<?php } ?>
			

					<input type="submit" class="save" value="Guardar"/>
				</form>
			</div>
		</div>
	</body>
</html>