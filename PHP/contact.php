<?php
require "../includs/db.php";
    $data = $_POST;

//если кликнули на button
if ( isset($data['do_contact']) )
{
// проверка формы на пустоту полей
    $errors = array();
    if ( trim($data['login']) == '' )
    {
        $errors[] = 'Введите имя';
    }
 
    if ( trim($data['email']) == '' )
    {
        $errors[] = 'Введите Email';
    }
 
    if ( $data['phone'] == '' )
    {
        $errors[] = 'Телефон';
    }

        if ( $data['tema'] == '' )
    {
        $errors[] = 'Тема';
    }

        if ( $data['text'] == '' )
    {
        $errors[] = 'Текст';
    }
 

    if ( empty($errors) ){
        //ошибок нет, теперь регистрируем
        $message = R::dispense('message');
        $message->login = $data['login'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->tema = $data['tema'];
        $message->text = $data['text'];

        R::store($message);
        $_SESSION['logged_messege'] = $message;
        echo 'Сообщение отправлено';
    }else{
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
 
}
?>
<html lang="en">
<html>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/header.css">
<link rel="stylesheet" type="text/css" href="../CSS/footer.css">
<link rel="stylesheet" type="text/css" href="../CSS/feedback.css">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
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
			<li><a href="pay.php">Пожертвовать</a></li>
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
<H3 align = "center" class = "funny-title section-title">Контакты</H3>
<form class="transparent" action="contact.php" method="POST">
    <div class="form-inner">
        <h3>Обратная связь</h3>
    <p>
    <label for="login">Имя</label>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br>
    </p>
    <p>
    <label for="email">E-mail</label>
    <input type="text" name="email" value="<?php echo @$data['email']; ?>"><br>
    </p>
    <p>
    <label for="phone">Телефон</label>
    <input type="text" name="phone" value="<?php echo @$data['phone']; ?>"><br>
    </p>
    <p>
    <label for="tema">Тема</label>
    <input type="text" name="tema" value="<?php echo @$data['tema']; ?>"><br>
    </p>
    <p>
    <label for="text">Текст</label>
    <input type="text" name="text" value="<?php echo @$data['text']; ?>"><br>
    </p>
    <button type="submit" name="do_contact">Отправить</button>
</form>
  </div>
</body>	
<footer class = "footer__menu">
	<div class="grid_1">
		<div class = "custom">
			<p>Справочный телефон : 484848</p>
		</div>

		<div>
		<ul class="head head-up">
			<li><a href = "contact.php">Контакты</a></li>
			<li><a href = "looking-for-home.php">Ищут дом</a></li>
			<li><a href = "main.php">Главная</a></li>
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