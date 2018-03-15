<?php

function addArticle($author, $title, $content)
{
	$affectedLines = postArticle($author, $title, $content);

	if ($affectedLines === false)
	{
		die('Erreur d\'ajout de l\'article');
	}
	else 
	{
		header('location: index.php?action=listPosts');
	}	

	
function form()
{
	require ('view/frontend/edition.php');

}
}