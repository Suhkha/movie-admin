<?php include('../_partials/header.php'); 
$actor = new Actor();
$data_actor = $actor->index_actor();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de películas</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php include('../_partials/__block--alerts.php'); ?>
		<div class="jumbotron">
			<a class="btn btn-primary" href="../index.php">Inicio</a>
			<a class="btn btn-primary" href="all.php">Ver películas</a>
			<a class="btn btn-primary" href="../actors/all.php">Ver actores</a>
			<a class="btn btn-primary" href="../actors/new.php">Agregar actores</a>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4>Agregar película</h4>
			</div>
			<div class="panel-body">
				<div class="col-sm-12">
					<form class="form-horizontal" method="post" action="save.php">
						<div class="form-group">
							<label class="control-label" for="">Título</label>
							<input type="text" class="form-control" name="title">
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label" for="">Actores</label>
									<select multiple="" name="group_actors[]" class="form-control">
									<?php for ($i=0; $i < sizeof($data_actor); $i++) { ?>
							          <option value="<?php echo $data_actor[$i]['id']; ?>"><?php echo $data_actor[$i]['name']; ?></option>
							          <?php } ?>
							        </select>
								</div>
							</div>	
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label class="control-label" for="">Descripción</label>
									<textarea type="text" class="form-control" name="description"></textarea>
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