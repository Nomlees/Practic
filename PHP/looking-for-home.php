<?php
require "../includs/db.php";
?>
<html>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
<link rel="stylesheet" type="text/css" href="../CSS/header.css">
<link rel="stylesheet" type="text/css" href="../CSS/footer.css">
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
			<li><a href="pay.php">Пожертвовать</a></li>
			<li><a href="contact.php">Контакты</a></li>
			<li><a href="report.php">Отчеты</a></li>
		</ul> 
		<ul class = "head">
			<?php
			if( isset($_SESSION['logged_user'])) : ?>
				<li>Авторизован, <?php echo $_SESSION['logged_user']->login;?></li>
			<li><a href="logout.php"> Выйти </a></li>
			<li><a href="parlor.php"> Личный кабинет</a></li>
			<?php else : ?>
			<li><a href="login.php">Вход</a></li>
			<li><a href="signup.php">Регистрация</a></li>
		<?php endif ; ?>
		</ul>
	</section>
</header>
<!--Карточки животных-->
<H3 align = "center" class = "funny-title section-title">Ищут дом</H3>
<div>
<?php 
/*
Вывод животных из БД
*/
$count = 1;
$id = 1;
$twoId = 4;
while ($count<= 2){
?>

<div class = "grid">
<?php
	while ($id <= $twoId){
  	?>
  	<div class = "box">
			<div>
				<br>
				<?php
				$row = R::load('animal', $id);
				echo "<img src='$row[img]'>"."<br>";
				echo $row['name']."<br>".$row['description']."<br>"; 
				$id++;
?>
			<a href="pay.php" class="blubtn">Помочь</a>
			</div>
			<br>
		</div>
<?php
					}
?>
</div>
<?php
$count++;
$twoId = 8;
				}
?>



</div>
<footer class = "footer__menu">
	<div class="grid_1">
		<div class = "custom">
			<p>Справочный телефон : 484848</p>
		</div>

		<div>
		<ul class="head head-up">
			<li><a href="contact.php">Контакты</a></li>
			<li><a href="looking-for-home.php">Ищут дом</a></li>
			<li><a href="main.php">Главная</a></li>
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
