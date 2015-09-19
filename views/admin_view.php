<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../my_style.css"> 
    
    <!--script type="text/javascript"  src=""></script-->
     
  <title>Панель администратора</title>
  </head>
 <body>
	 
   <div class="container">
   	<h1>Мой  новый пульт управления</h1>
 
   	<a href="index.php?action=add">Новая статья</a>
   	<table class="admin-table">
		<tr>
			<th>
				Дата
			</th>
			<th>
				Заголовок статьи
			</th>
			<th></th>
			<th></th>		
		</tr>
		<?php  foreach($articles as $a): ?>
			<tr>
				<th>
					<?=$a['date']?>
				</th>
				<th>
					<?=$a['title']?>
				</th>
				
					<th><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></th>
					<th><a href="index.php?action=del&id=<?=$a['id']?>">Удалить</a></th>
					
			</tr>
		<?php endforeach ?>	      
   </table>   	 
   	<footer>
			<a href="../index.php">Все статьи</a><br>
			<p>Мой блог <br>Copyright &copy; 2015</p>
		</footer>
   </div>
 </body>
</html>
 
