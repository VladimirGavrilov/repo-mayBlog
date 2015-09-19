<?php

	function articles_all($link){
		 
		//Запрос к базе
		$query = "SELECT * FROM articles ORDER BY id DESC";	
			 
		$result = mysqli_query($link, $query);
		
 		 
		if(!$result) die(mysqli_error($link));
		//извление из бд
		$n = mysqli_num_rows($result);
		
		$articles = array();
		
		for($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
 
			/*$src = image_get($link, $row['id']);
			$row['src'] = $src;*/
 
			//$src = image_get($link, $row['id']);
			//$row['src'] = $src;
 
			$articles[] = $row;
		
		}
		return $articles;
  
	}

	function articles_get($link, $id_article)
	{
		//Запрос к базе
		$query = sprintf("SELECT * FROM articles WHERE  id = %d",(int)$id_article);
				 
		$result = mysqli_query($link, $query);
 		 
		if(!$result) die(mysqli_error($link));
		//извлечние из бд
		 $article = mysqli_fetch_assoc($result);
		return $article;		
	}
	function articles_new( $link, $title,$date,  $content)
	{	
		//подготовка
		$title = trim($title);
		$content = trim($content);
		//проверка
		if($title == '')
			return false;
			
		$t = "INSERT INTO articles (title, date, content)
		VALUES ('%s', '%s', '%s')";
		$query = sprintf($t, mysqli_real_escape_string($link, $title),
		mysqli_real_escape_string($link, $date),
		mysqli_real_escape_string($link, $content));
			
			$result = mysqli_query($link, $query);
			if(!$result) die(mysqli_error($link));
			
				return true;
	}
	function articles_edit($link, $id, $title, $date, $content)
	{
		$title = trim($title);
		$content = trim($content);		
		$date = trim($date);
		$id = (int)$id;
		//Проверка
		if($title == '')
			return false;
		//Запрос
		$sql = "UPDATE articles SET title='%s',content='%s', date='%s' WHERE id='%d'" ;
		
		$query = sprintf($sql, mysqli_real_escape_string($link, $title),
									mysqli_real_escape_string($link, $date),
									mysqli_real_escape_string($link, $content),
									$id);
					
			$result = mysqli_query($link, $query);
			
			if(!$result)
				die(mysqli_error($link));
				return mysqli_affected_rows($link);
	}
	function articles_del($id)
	{
		
	}
 
	/*function image_get($link, $id_article)
	{
 
	function image_get($link, $id_article){

	//Запрос к базе
		$query = "SELECT src_image, alt_image FROM images WHERE  id = $id_article ";	
			 
		$result = mysqli_query($link, $query);
		
 		 
		if(!$result) die(mysqli_error($link));
		//извление из бд
		$n = mysqli_num_rows($result);
		
		$images = array();
		
		for($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
			
			$images[] = $row;
		
		}
		 return $images;

	}*/
?>