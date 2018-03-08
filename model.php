<?php
function dbConnect()
{
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
	catch(Exception $e)
	{
		die('Erreur : '$e->getMessage());
	}
}
function getPosts()
{
	$db = dbConnect();
	$req =$db->query('SELECT id , title , author , content , DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM billets ORDER BY creation_date DESC LIMIT 0, 5');

	return $req; 
}