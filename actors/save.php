<?php 
include('../_partials/header.php');

$name   = $_POST['name'];
$bio   	= $_POST['bio'];


$actor = new Actor($name, $bio);
$actor->insert();


?>