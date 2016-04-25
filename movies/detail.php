<?php 
$id = $_GET['id'];
include('../_partials/header.php'); 

$movie = new Movie();
$data_movie = mysql_fetch_object($movie->find($id));

$list_actor = new Actor();
$data_actor = $list_actor->find_actor($id);
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
        <a class="btn btn-primary" href="new.php">Agregar película</a>
        <a class="btn btn-primary" href="../actors/all.php">Ver actores</a>
        <a class="btn btn-primary" href="../actors/new.php">Agregar actores</a>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4><?php echo $data_movie->title; ?></h4>
      </div>
        <div class="panel-body">
            <div class="row">
            
                <div class="col-md-12">
                    <p><?php echo $data_movie->description; ?></p>
                    
                    <strong>Actores:</strong>
                    <?php for ($i=0; $i < sizeof($data_actor); $i++) { ?>
                    <p><a href="../actors/detail.php?id=<?php echo $data_actor[$i]['id_fk_actor']; ?>"><em><?php echo $data_actor[$i]['name']; ?></em></a></p>
                    <?php } ?>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>