<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="my_style.css">
    <script type="text/javascript"  src=""></script>
     
  <title>Моя статья</title>
  </head>
 <body>
	<div class="container">
	<h1>Моя форма</h1>
		<div>
			<form name="my_form" method="POST" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
				<label>
					Название
					<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required />
				</label>
				<label>
					Дата
					<input type="date" name="date" value="<?=$article['date']?>" class="form-item" required />
				</label>
				<label>
				Содержимое
				<textarea name="content" class="form-item" required ><?=$article['content']?></textarea>
				</label>
				<input type="submit" value="Сохранить" class="btn">
			</form>
		</div>
		<footer>
			<a href="../index.php">Все  мои статьи</a><br>
			<a href="index.php">Панель админа</a>
			<p>Мой блог<br>Copyright &copy; 2015</p>
		</footer>
   </div>
 </body>
</html>
