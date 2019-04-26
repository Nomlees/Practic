<?php
require "../includs/db.php";
?>
<html>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
<head>
<meta charset = "UTF-8">
	<title>Ищут дом</title>
</head>
<body>
<header>
	<section class = "header">	
		<img src="../img/logo.png" width="250" height="150">
		<ul class = "head head-up">
			<li><a href="main.php">Главная</a></li>		
			<li><a href="looking-for-home.php">Ищут дом</a></li>
			<li><a href=" ">Пожертвовать</a></li>
			<li><a href=" ">Контакты</a></li>
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
				$sql ="SELECT * FROM animal WHERE id = 1";
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
				$sql ="SELECT * FROM animal WHERE id = 1";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 2";
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
				$sql ="SELECT * FROM animal WHERE id = 2";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 3";
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
				$sql ="SELECT * FROM animal WHERE id = 3";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 4";
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
				$sql ="SELECT * FROM animal WHERE id = 4";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
		</div>
		</div>
	</div>
<!-- 
<section class = "last"> -->
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
				$sql ="SELECT * FROM animal WHERE id = 5";
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
				$sql ="SELECT * FROM animal WHERE id = 5";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 6";
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
				$sql ="SELECT * FROM animal WHERE id = 6";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 7";
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
				$sql ="SELECT * FROM animal WHERE id = 7";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
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
				$sql ="SELECT * FROM animal WHERE id = 8";
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
				$sql ="SELECT * FROM animal WHERE id = 8";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['name']."<br>".$row['description']."<br>";	
			?>
			<?php
			//проверка анкеты
			if( isset($_SESSION['logged_user'])) : ?>
			<a href="blank.php" class="button">Забрать</a>
			<?php else : ?>
			<a href="login.php" class="button">Забрать</a>
			<?php endif ; ?>
			
		</div>
		</div>
	</div>

<!-- </section> -->


<footer class = "footer__menu">
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