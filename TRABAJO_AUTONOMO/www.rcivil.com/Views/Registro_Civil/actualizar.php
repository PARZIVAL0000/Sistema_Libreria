<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Consultoria</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="./Views/Estilos/css/crud.css" />
		<link rel="stylesheet" href="./Views/Estilos/css/actualizar.css" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	</head>
	<body>

		<header class="cabecera">
			<h1>Actualizar Cliente</h1>
		</header>

		<div class="contenido">
			<div class="contenido_accion">
				<a href="?control=Sites&accion=listar" class="btn btn-light btn-regresar">Regresar</a>
			<div>

			<div class="contenido_cuerpo fondo">
				<form method="POST" action="?control=Sites&accion=modificar" class="formulario">
					<input type="hidden" name="Identificador" value="<?php echo $informacion['data'][0]['libro_id']; ?>">
					<?php $fecha = $informacion['data'][0]['libro_fecha'];

						  // $format_date = $date[0]."-".$date[1]."-".$data[2];
					 ?>
					<div class="campos">
						<div class="campo mb-3">
							<label for="cedula" class="form-label">Codigo Libro: </label>
							<input type="text" id="cedula" class="form-control" name="Codigo" value="<?php echo $informacion['data'][0]['libro_codigo']; ?>">
						</div>
						<div class="campo mb-3" >
							<label for="nombres" class="form-label">Genero Libro: </label>
							<input type="text" id="nombres" class="form-control" name="Genero" value="<?php echo $informacion['data'][0]['libro_genero']; ?>">
						</div>
						<div class="campo mb-3">
							<label for="apellidos" class="form-label">Nombre Libro: </label>
							<input type="text" id="apellidos" class="form-control" name="Nombres" value="<?php echo $informacion['data'][0]['libro_nombre']; ?>">
						</div>
						<div class="campo mb-3">
							<label for="direccion" class="form-label">Autor Libro: </label>
							<input type="text" id="direccion" class="form-control" name="Autor" value="<?php echo $informacion['data'][0]['libro_autor']; ?>">
						</div>
						<div class="campo mb-3">
							<label for="telefono" class="form-label">Fecha Libro: </label>
							<input type="text" id="telefono" class="form-control" name="Fecha" value="<?php echo $fecha; ?>">
						</div>
					</div>

					<input type="submit" class="btn btn-primary" value="Actualizar"/>
				</form>
				
			</div>
		<div>
	</body>
</html>