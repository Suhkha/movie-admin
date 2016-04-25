<!DOCTYPE html>
<html>
<head>
	<title>Listado de actores</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php include('../_partials/__block--alerts.php'); ?>
		<div class="jumbotron">
			<a class="btn btn-primary" href="../index.php">Inicio</a>
	        <a class="btn btn-primary" href="../movies/all.php">Ver películas</a>
	        <a class="btn btn-primary" href="../movies/new.php">Agregar película</a>
	        <a class="btn btn-primary" href="all.php">Ver actores</a>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4>Agregar película</h4>
			</div>
			<div class="panel-body">
				<div class="col-sm-12">
					<form class="form-horizontal" method="post" action="save.php">						
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label class="control-label" for="">Nombre</label>
									<input type="text" class="form-control" name="name">
								</div>
							</div>	
							<div class="col-sm-8 col-sm-offset-1">
								<div class="form-group">
									<label class="control-label" for="">Biografía</label>
									<textarea type="text" class="form-control" name="bio"></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label"></label>
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>