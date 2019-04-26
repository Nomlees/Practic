<?php
require "../includs/db.php";
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
<head>
<meta charset = "UTF-8">
	<title>Главная страница</title>
</head>

   
<body>

<div class="auth">
</div>

<header>
	
	<section class = "header">
		
		<img src="../img/logo.png" width="250" height="150">
		<ul class = "head head-up">
			<li><a href="main.php">Главная</a></li>		
			<li><a href="looking-for-home.php">Ищут дом</a></li>
			<li>Пожертвовать</li>
			<li>Контакты</li>
		</ul> 
		<ul class = "head">
			<?php
			if( isset($_SESSION['logged_user'])) : ?>
				<li>Авторизован, <?php echo $_SESSION['logged_user']->login;?></li>
			<li><a href="logout.php"> Выйти </a></li>
			<?php else : ?>
			<li><a href="login.php">Вход</a></li>
			<li><a href="signup.php">Регистрация</a></li>
		<?php endif ; ?>
		</ul>
	</section>

</header>

<!--Карточки животных-->
<H3 align = "center">Ждут помощи</H3>
<div>
	<div class = "grid">
		<div class = "box">
			<div>
				<br>
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 1";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
				echo "<img src='$row[img]'>";
			?>
			</div>
			<br>
			<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 1";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['disease']."<br>";
			?>
			<a href="pay.php">Помочь</a>
		</div>

		<div class = "box">
			<div>
				<br>
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 2";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
				echo "<img src='$row[img]'>";
			?>
			</div>
			<br>
			<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 2";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['disease']."<br>";
			?>
			<a href="pay.php">Помочь</a>
		</div>

		<div class = "box">
			<div>
				<br>
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 3";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
				echo "<img src='$row[img]'>";
			?>
			</div>
			<br>
			<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 3";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['disease']."<br>";
			?>
			<a href="pay.php">Помочь</a>
		</div>

		<div class = "box">
			<div>
				<br>
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 4";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
				echo "<img src='$row[img]'>";
			?>
			</div>
			<br>
			<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="Shelter";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM hospital WHERE id = 4";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['disease']."<br>";
			?>
			<a href="pay.php">Помочь</a>
		</div>
	</div>
</div>
<!-- 
<section class = "last"> -->
	<div>
			<img scr = "">
				<div class = "grid">
		<div class = "box">
			<div class = "image">
				<img scr = "">
			</div>
		<h3>Толя</h3>
		<p>Мальчик, обработан от блох и глистов, кушает все. Прививки отсутствуют, кастрирован, окрас бело-серый </p>
		<p>Возраст: 9 месецев</p>
		</div>

		<div class = "box">
			<div class = "image">
				<img scr = "">
			</div>
			<h3>Ляля</h3>
			<p>нежное создание, не выносит одиночества. Откликается на имя, любит ласкатся и засыпать на руках, есть прививки, стерилизована, окрас дымчатый.</p>
			<p>Возраст: 1 год и 9 месецев</p>
		</div>

		<div class = "box">
			<div class = "image">
				<img scr = "">
			</div>
			<h3>Соня</h3>
			<p>Переодические проблемы с ротовой полостью, поскольку превидущие хозяева приучили к сладкому. Стерилизована, прививки отсутствуют, окрвс камышовый</p>
			<p>Возраст: 3 года и 3 месеца</p>
		</div>

		<div class = "box">
			<div class = "image">
				<img scr = "">
			</div>
			<h3>Тишка</h3>
			<p>Подобран зимой на улице, очень пугливый, частично отмороженыподушечки на лапках. Кастрирован, окрас белый. </p>
			<p>Возраст: 3 года и 4 месеца</p>
		</div>
	</div>

<!-- </section> -->


<footer class "footer__menu">
	<div class="grid_1">
		<div class = "custom">
			<p>Справочный телефон : 484848</p>
		</div>

		<div>
		<ul class="head head-up">
			<li>Контакты</li>
			<li>Ищут дом</li>
			<li>Каталог товаров</li>
		</ul>
		</div>

		<div>
			<img src="../img/vkicon.png" class="footer__icon">
			<img src="../img/okicon.png" class="footer__icon">
			<img src="../img/twittericon.png" class="footer__icon">
		</div>

	</div>
</footer>
</body>

</html>