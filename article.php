<?php
	require_once("database.php");
	require_once("models/articles.php");
	$link = db_connect();
	
	$article = articles_get($link, $_GET['id']);
	//получаем иллюстрации к статье

	/*$images = image_get($link, $_GET['id']);*/

	//$images = image_get($link, $_GET['id']);

	
	//подключаем вид	
	require_once("views/article_view.php");
	
?>