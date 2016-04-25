<?php 
include('../_partials/header.php');

$title       	= $_POST['title'];
$description   	= $_POST['description'];
$group_actors	= $_POST['group_actors'];


$movie = new Movie($title, $description, $group_actors);
$movie->insert();


?>