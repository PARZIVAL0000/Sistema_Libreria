<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Consultoria</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="./Views/Estilos/css/crud.css" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	</head>
	<body>

		<header class="cabecera">
			<h1 >LISTADO DE CLIENTES</h1>
		</header>

		<div class="fondo">
			<div class="contenido">
				
				<div class="contenido_accion">
					<a href="?control=Sites&accion=index" class="btn btn-light btn-regresar">Regresar</a>
				</div>
				<div class="contenido_cuerpo">
					<table class="table table-dark table-striped">
						<thead>
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Autor Libro</th>
								<th scope="col">Codigo Libro</th>
								<th scope="col">Fecha Libro</th>
								<th scope="col">Genero Libro</th>
								<th scope="col">Nombre Libro</th>
								<th scope="col">Accion 1</th>
								<th scope="col">Accion 2</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($informacion["data"] as $info){ ?>
								<tr>
									<td><?php echo $info["libro_id"]; ?></td>
									<td><?php echo $info["libro_autor"]; ?></td>
									<td><?php echo $info["libro_codigo"]; ?></td>
									<td><?php echo $info["libro_fecha"]; ?></td>
									<td><?php echo $info["libro_genero"]; ?></td>
									<td><?php echo $info["libro_nombre"]; ?></td>
									<td><a href="?control=Sites&accion=eliminar&id=<?php echo $info['libro_id']; ?>" class="btn btn-danger btn-eliminar">Eliminar</a></td>
									<td><a href="?control=Sites&accion=actualizar&id=<?php echo $info['libro_id']; ?>" class="btn btn-warning btn-actualizar">Actualizar</a></td>
								</tr>
							<?php } ?> 
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>