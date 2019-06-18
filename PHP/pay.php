<?php
require "../includs/db.php";
?>
<html>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/header.css">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
<link rel="stylesheet" type="text/css" href="../CSS/footer.css">
<link rel="stylesheet" type="text/css" href="../CSS/pay.css">
<head>
<meta charset = "UTF-8">
	<title>Пожертвовать</title>
</head>
<body>
<header>
	<section class = "header">	
		<img src="../img/logo.png" width="250" height="150">
		<ul class = "head head-up">
			<li><a href="main.php">Главная</a></li>		
			<li><a href="looking-for-home.php">Ищут дом</a></li>
			<li><a href="pay.php ">Пожертвовать</a></li>
			<li><a href="contact.php ">Контакты</a></li>
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
<H3 align = "center" class = "funny-title section-title">Реквизиты для пожертвований</H3>
<div class = "count"> 
<p>Короткий номер для пожертвования SMS 
	<strong>7715</strong>
</p>
<p>Отправьте СМС со словом «Васька» пробел «сумма пожертвования» на номер 7715. Пример: Васька 100</p>
<p>Или карта Сбербанка 4276480011991067</p>
</div>

<div>
<p><strong>НАШИ РЕКВИЗИТЫ:</strong><br>
Пензенская региональная общественная организация защитных "ВМЕСТЕ"<br>

440028, Россия, г. Пенза, ул. Ударная, д.2, кв.3<br>

ИНН / КПП 5835120787 / 583501001<br>
ОГРН 1165800051317<br>

D-U-N-S number: <span class="wmi-callto">522261950</span><br>

р/с 40703810848000000557 в Пензенское отделение №8624 ПАО СБЕРБАНК,<br>
БИК 045655635, К/С 30101810000000000635<br>

Назначение платежа: добровольное пожертвование<br>

Карта Сбербанка 4276480011991067</p>
</div>
</body>			
<footer class = "footer__menu">
	<div class="grid_1">
		<div class = "custom">
			Справочный телефон : 484848
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