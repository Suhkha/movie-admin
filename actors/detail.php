<?php 
$id = $_GET['id'];
include('../_partials/header.php'); 

$list_actor = new Actor();
$data_actor = mysql_fetch_object($list_actor->find_bio($id));

$list_movies = new Movie();
$data_movie = $list_movies->find_movie_for_actor($id);
?>
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
        <a class="btn btn-primary" href="new.php">Agregar actores</a>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4><?php echo $data_actor->name; ?></h4>
      </div>
        <div class="panel-body">
            <div class="row">
            
                <div class="col-md-12">
                    <p><?php echo $data_actor->bio; ?></p>
                    
                    <strong>Películas:</strong>
                    <?php for ($i=0; $i < sizeof($data_movie); $i++) { ?>
                    <p><a href="../movies/detail.php?id=<?php echo $data_movie[$i]['id_fk_movie']; ?>"><em><?php echo $data_movie[$i]['title']; ?></em></a></p>
                    <?php } ?>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>