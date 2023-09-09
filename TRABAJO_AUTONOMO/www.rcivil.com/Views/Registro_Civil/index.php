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
				<img classs="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAV5JREFUSEvtlkEuREEQhr+RWDiAxFhIHAQJEyewYoMFC+5gQzInsMGGDWsXYIlEWDiHBHvyJ/2S0ul+XY8ZbxJTy37V9XX9XV31OrRknZa4jMF/pvxISj0JHAB94CMjxSywDRw2lSqX8RRwDawAD8ByAj4P3ABzwAmw0wSeA98CiybQPdAD3sPaDPAIdI3PMbDnhefAa8AVMGECKXPB38LaWZDZspT5LvBZOkBdcW0A5xH8CVgKcO09TcC1Z7MEL1X10OAlsBQT/AK+dbk4c32Xn7XazD1gBdOTkazWX3BV+2u4DoHccC+4gqugrL0ACwauglRhWrsE1uM7bwqOs47Bqax/BU5J/WOo5PBknCuu6n4VY+DF1cpzGhq0TupUy7RvV3tTLdPVterA8ZC4A1ZNn9ZweAamoyGxX2qVlf/IjUUdzPsjsAUclaZR/N3znJrGdPmPwS6ZBuH0/6T+AolhYx9wzIDAAAAAAElFTkSuQmCC"/>
				<a href="?control=Sites&accion=listar">Catalogo Libros Registrados</a>
			</div>
			
			<div class="contenido_formulario">
				<form method="POST" action="?control=Sites&accion=verificar" class="formulario">
					

					<div class="campo">
						<label for="Cedula">Verifica Por Código:</label>
						<input type="text" name="Codigo" id="Codigo"  placeholder="Introduce el código verificador"/>
					</div>
					<div class="campo">
						<label for="Id">Libro Identificador:</label>
						<input type="text" name="Identificador" id="Id" placeholder="Identificador del libro" disabled/>
					</div>
					<div class="campo">
						<label for="Nombres">Libro Género:</label>
						<input type="text" name="Genero" id="Nombres" placeholder="Genero del libro" disabled/>
					</div>
					<div class="campo">
						<label for="Apellidos">Libro Nombre:</label>
						<input type="text" name="Nombres" placeholder="Nombre del libro" id="Apellidos" disabled/>
					</div>
					<div class="campo">
						<label for="Direccion">Libro Autor:</label>
						<input type="text" name="Autor" placeholder="Auto del libro" id="Direccion" disabled/>
					</div>
					<div class="campo">
						<label for="Telefono">Libro Fecha:</label>
						<input type="tel" name="Fecha" placeholder="Fecha del libro" id="Telefono" disabled/>
					</div>
					
					<input type="submit" value="Verificar"/>
				</form>
			</div>
		</div>

	</body>
</html>