<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="my_style.css"> 
    
    <script type="text/javascript"  src=""></script>
     
  <title>Мой  блог</title>
  </head>
 <body>
	 
   <div class="container">
   	<h1>Мой блог</h1>
   	<img class="illustrazia" src="image/sCRObm5AEgA.jpg" alt="сортификат JS"/>
   	<a href="admin">Панель админа</a>
   	 <?php  foreach($articles as $a): ?>
   	<div class="article">   		
	   	<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>	   	
	   	<em>Опубликовано: <?=$a['date']?></em>	  
   		<p>   		
	   		<?=$a['content']?>

	   		<!--?php  foreach($a['src'] as $img): ?--->					
					 <!--img class="illustrazia" src="<!--?=$img['src_image']?>" alt="<!--?=$img['alt_image']?>"/-->				 
			  <!--?php endforeach ?-->
	   		<!--?php  foreach($a['src'] as $img): ?-->					
					 <!--img class="illustrazia" src="<?=$img['src_image']?>" alt="<?=$img['alt_image']?>"/-->				 
			  <!--?php endforeach ?-->
   		</p>
   	</div>
   	<?php endforeach ?> 
   	 
   	<footer><p>Мой блог <br><a href="index.php">Все статьи</a><br>Copyright &copy; 2015</p></footer>
   </div>
 </body>
</html>
 
