<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=veterinaria_lte;charset=utf8', 'root', '140469');
}
catch(Exception $e)
{
        die('error : '.$e->getMessage());
}
