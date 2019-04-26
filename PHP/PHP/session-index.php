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
	<p style = "color: black; text-align: center;"> Авторизован, <?php var_dump($_SESSION['email']);?></p>
	<section class = "header">	
		<img src="../img/logo.png" width="250" height="150">
		<ul class = "head head-up">
			<li><a href="main.php">Главная</a></li>		
			<li><a href="looking-for-home.php">Ищут дом</a></li>
			<li><a href=" ">Пожертвовать</a></li>
			<li><a href=" ">Каталог товаров</a></li>
		</ul> 
		<ul class = "head">
			<li><a href="main.php">Выход</a></li>
			<li><a href=".php">Анкета</a></li>
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
			<a href=" ">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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
			<a href=" " class="button">Забрать</a>
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