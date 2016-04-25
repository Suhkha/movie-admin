<?php 
require('../class/Connect.php'); 
$link = Connect();
mysql_query("SET NAMES 'utf8'"); 

require('../class/Movie.php');
require('../class/Actor.php');
?>
