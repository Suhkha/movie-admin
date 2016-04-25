<?php include('../_partials/header.php'); 
$movie = new Movie();
$data_movie = $movie->index();
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
        <a class="btn btn-primary" href="new.php">Agregar película</a>
        <a class="btn btn-primary" href="../actors/all.php">Ver actores</a>
        <a class="btn btn-primary" href="../actors/new.php">Agregar actores</a>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4>Listado de películas</h4>
      </div>
        <div class="panel-body">
            <div class="row">
            
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th><h4>Título</h4></th>
                            <th><h4>Detalle</h4></th>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < sizeof($data_movie); $i++) { ?>
                            <tr>
                                <td>
                                    <a href="detail.php?id=<?php echo $data_movie[$i]['id']; ?>">
                                        <?php echo $data_movie[$i]['title']; ?>
                                    </a>
                                </td> 
                                <td>
                                    <a href="detail.php?id=<?php echo $data_movie[$i]['id']; ?>">
                                        Detalle
                                    </a>
                                </td>                             
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>