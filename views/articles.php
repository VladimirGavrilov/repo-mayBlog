<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     
    
    <script type="text/javascript"  src=""></script>
     
  <title>Мой  блог</title>
  </head>
 <body>
   <div class="container">
   	<h1>Мой блог</h1>
   	 <?php  foreach($articles as $a): ?>
   	<div class="article">   		
	   	<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
	   	<em>Опубликовано: <?=$a['date']?></em>
   		<p><?=$a['content']?></p>
   	</div>
   	<?php endforeach ?> 
   	<footer><p>Мой блог <br>Copyright &copy; 2015</p></footer>
   </div>
 </body>
</html>
 