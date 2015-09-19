<?php
	define('MYSQL_SERVER', 'localhost');
	define('MYSQL_USER', 'root');
	define('MYSQL_PASSWORD', '1593392');
	define('MYSQL_DB', 'blog');
	
	function db_connect(){
		/* Соединяемся, выбираем базу данных */
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("error : ".mysqli_error($link));
  		if(!mysqli_set_charset($link, "utf8")) {
			printf("Error: ".mysqli_error($link));
	
	}
	 
	return $link;
}

?>