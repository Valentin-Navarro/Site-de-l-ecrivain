<?php 

function listPosts()
{
	$posts = getPosts();
	require ('view/frontend/listPostView.php');
}