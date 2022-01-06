<?php 
try
{
$bdd= new PDO('mysql:host=localhost; port=3306;dbname=endocrinolog_db; charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
	die('Erreur: '. $e->getMessage());
}
?>