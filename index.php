<!DOCTYPE html>
<html lang="es">
<head>
	<title>Kilometrajes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

	<div class="container-fluid encabezado">
		<div class="row">	
			<div class="col m-2 img-fluid ">
				<img src="http://eco-solutions.com.mx/wp-content/uploads/2016/03/logo3.png" class="" alt="">
			</div>
		</div>

		<div class="row titulo">	
			<div class="col-12">	
				<h3 class="titulo">Kilometrajes</h3>
			</div>
		</div>
	</div>

	<div class="container m-4">	
		<div class="row">	
			<div class="col-8 col-md-5">	
				<form action="">
					<label>Técnico</label>
					<select name="" id="" class="form-control">
						<option value="">Omar Morales</option>
						<option value="">Rogelio Calderon</option>
						<option value="">Fernando Cano</option>
						<option value="">Ezequiel Flores</option>
						<option value="">Cesar Justo</option>
						<option value="">Job Nogueron</option>
						<option value="">Josimar Flores</option>
						<option value="">Sergio Cedillo</option>
						<option value="">Victor Diego</option>
						<option value="">Pedro Soriano</option>
						<option value="">Martin Flores</option>
						<option value="">Alfredo Flores</option>
						<option value="">Christian Gutierrez</option>
					</select>
					<br>	
					<label>Selecciona la fecha</label>
					<input type="date" class="form-control">
					<br>					
					<label>Kilometraje inicial</label>
					<input type="number" min="0" max="100000" class="form-control">
					<br>					
					<label>Kilometraje final</label>
					<input type="number" min="0" max="100000" class="form-control">
					<br>
					<input type="submit" value="Cargar kilometraje" class="form-control btn btn-warning">					
				</form>
			</div>
		</div>

	</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>	
<script src="js/popper.min.js"></script>	
<script src="js/bootstrap.min.js"></script>	
</body>
</html>