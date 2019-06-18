<?php
require "../includs/db.php";
?>

<?php
$id = $_SESSION['logged_user']->id;
$user = R::load('users', $id);
$count = $user->blank;
/*Если больше 0 то Ожидайте ответа на заявку, иначе код ниже*/
if (($count) > 0) {
?>

<?php    
}

     if( mail ("nomlees@bk.ru", "Анкета хозяина", "Имя:".$data['name'].". E-Mail:".$$data['email'].".Были ли у вас раньше животные? Какие?:".$data['test1'].
            ".Жилищные условия:".$data['test2'].
            ".Состав семьи:".$data['test3'].
            ".Почему вы хотите взять животное из приюта?:".$data['test4'].
            ".Все ли члены семьи полностью поддерживают желание взять животное из приюта?:".$data['test5'].
            ".Есть ли у вас сейчас другие животные? Какие?:".$
            $data['test6'].
            ".Была ли у вас когда-либо аллергия на пыль, шерсть, цветение, фрукты?:".$data['test7'].
            ".Что Вы планируете делать, если после появления животного у вас обнаружится аллергия?:".$data['test8'].
            ".С кем Вы планируете оставлять на время отпуска/командировки?:".$data['test9'].
            ".Собака потребует длительных прогулок (минимум два раза в день по одному часу)".$data['test10'].
            ".Животное может заболеть, и Вам придется тратить определенные суммы на ее лечение:".$data['test11'].
            ".Что Вы планируете делать, если в семье родится ребенок?:".$data['test12'].
            ".Как Вы поступите, если животное испортит любимую пару Вашей обуви? Начнет регулярно писать на дорогой ковер?:".$data['test13'].
            ".Готовы ли вы брать уроки у инструктора?:".$data['test14'].
            ".Готовы ли Вы поддерживать контакт с представителем приюта?:".$data['test15'].
            ".Готовы ли Вы подписать договор?:".$data['test16'].
            ".Вы уже выбрали кого-то из наших животное? Если нет, опишите, какое примерно животное Вы ищете? Возраст, вид, пол, размер, характер?:".$data['test17'],"Form: anastasiya.zasta@mail.ru \r\n" ))
            { 
                $user = R::load('users', $id);
                $user->blank = '1';
                echo "сообщение успешно отправлено"; 
            } else { 
                echo "при отправке сообщения возникли ошибки"; 
            }
?>
<html lang="en">
<html>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../CSS/head.css">
<link rel="stylesheet" type="text/css" href="../CSS/header.css">
<link rel="stylesheet" type="text/css" href="../CSS/footer.css">
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
			<li><a href="contact.php">Контакты</a></li>
            <li><a href="report.php">Отчеты</a></li>
		</ul> 
		<ul class = "head">
			<?php isset($_SESSION['logged_user'])?>
			<li>Авторизован, <?php echo $_SESSION['logged_user']->login;?></li>
			<li><a href="logout.php"> Выйти </a></li>
		</ul>
	</section>
</header>
<!--Карточки животных-->
<H3 align = "center" class = "funny-title section-title">Анкета хозяина</H3>


<form class="" action="profile.php" method="POST">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
    <article id="post-633" class="page post-633 type-page status-publish hentry">
            <div class="featured-img">
                                            
            </div>
            <div class="entry-content">
                <p style="text-align: justify;">Если Вы думаете о том, чтобы завести животное - попробуйте заполнить эту анкету. В ней собраны основные вопросы, которые человек должен задать в первую очередь&nbsp;самому себе, прежде чем брать на себя ответственность за другое живое существо.</p>
<div role="form" class="wpcf7" id="wpcf7-f1265-p633-o1" lang="ru-RU" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/anketa-hozyaina/#wpcf7-f1265-p633-o1" method="post" class="wpcf7-form" novalidate="novalidate">

    <p>
        <label for="username">Имя</label><br>
        <input type="text" name="name" value="<?php echo @$data['name']; ?>"><br>
    </p>
    <p>
        <label for="email">E-mail</label><br>
        <input type="text" name="email" value="<?php echo @$data['email']; ?>"><br>
    </p>
    <p>
        <label for="test1">Были ли у вас раньше животные? Какие?</label><br>
        <input type="text" name="test1" value="<?php echo @$data['test1']; ?>"><br>
    </p>
    <p>
        <label for="test2">Жилищные условия</label><br>
        <select name="test2">
            <option value="свой дом">свой дом</option>
            <option value="своя квартира">своя квартира</option>
            <option value="съемный дом">съемный дом</option>
            <option value="съемная квартира">съемная квартира</option>
            <option value="сам живу в приюте">сам живу в приюте</option>
            <input type="submit" name="test2" value="<?php echo @$data['test2']; ?>">
        </select>

    </p>
    <p><label for="test3">Состав семьи<br>
        Живете один? С женой/мужем? Есть ли дети? Сколько им лет?</label><br>
        <input type="text" name="test3" value="<?php echo @$data['test3']; ?>"><br>
    </p>
    <p>
        <label for="test4">Почему вы хотите взять животное из приюта?</label><br>
        <input type="textarea" name="test4" value="<?php echo @$data['test4']; ?>"><br>
    </p>
    <p><label for="test5">Все ли члены семьи полностью поддерживают желание взять животное из приюта?</label><br>
        <select name="test5">
        <option value="да, все">да, все</option>
        <option value="нет, пока не все">нет, пока не все</option>
        <option value="я живу один (одна)">я живу один (одна)</option>
        <input type="submit" name="test5" value="<?php echo @$data['test5']; ?>"><br>
    </select>
    </p>
    <p>
        <label for="test6">Есть ли у вас сейчас другие животные? Какие?</label><br>
        <input type="text" name="test6" value="<?php echo @$data['test6']; ?>"><br>
    </p>
    <p>
        <label for="test7">Была ли у вас когда-либо аллергия на пыль, шерсть, цветение, фрукты?<br>
        <select name="test7">
        <option value="да">да</option>
        <option value="нет">нет</option>
        <option value="не знаю">не знаю</option>
        <input type="submit" name="test7" value="<?php echo @$data['test7']; ?>"><br>
        </select>
    </p>
    <p>
        <label for="test8">Что Вы планируете делать, если после появления животного у вас обнаружится аллергия?</label><br>
        <input type="text" name="test8" value="<?php echo @$data['test8']; ?>"><br>
    </p>
    <p>
        <label for="test9">С кем Вы планируете оставлять на время отпуска/командировки?</label><br>
        <input type="text" name="test9" value="<?php echo @$data['test9']; ?>"><br>
    </p>
    <p>
        <label for="test10">Собака потребует длительных прогулок (минимум два раза в день по одному часу)<br>
        <select name="test10">
        <option value="да, я понимаю и готов к этому">да, я понимаю и готов к этому</option>
        <option value="нет, для меня это много, смогу гулять только по полчаса">нет, для меня это много, смогу гулять только по полчаса</option>
        <option value="могу гулять и дольше, не проблема">могу гулять и дольше, не проблема</option>
        <input type="submit" name="test10" value="<?php echo @$data['test10']; ?>"><br>
        </select>
    </p>
    <p>
        <label for="test11">Животное может заболеть, и Вам придется тратить определенные суммы на ее лечение</label><br>
        <select name="test11">
        <option value="да, я понимаю и готов к этому">да, я понимаю и готов к этому</option>
        <option value="испытываю финансовые трудности">испытываю финансовые трудности</option>
        <option value="не проблема, потратим сколько нужно">не проблема, потратим сколько нужно</option>
         <input type="submit" name="test11" value="<?php echo @$data['test11']; ?>"><br>
     </select>
    </p>
    <p><label for="test12">Что Вы планируете делать, если в семье родится ребенок?</label><br>
        <select name="test12">
        <option value="собака опасна для ребенка, придется искать ей новый дом">собака опасна для ребенка, придется искать ей новый дом</option>
        <option value="дети должны расти вместе с животными, собака всегда будет рядом">дети должны расти вместе с животными, собака всегда будет рядом</option>
        <option value="посмотрим, как собака отнесется к ребенку, и тогда будем думать">посмотрим, как собака отнесется к ребенку, и тогда будем думать</option>
         <input type="submit" name="test12" value="<?php echo @$data['test12']; ?>"><br>
     </select>
    </p>
    <p>
        <label for="test13">Как Вы поступите, если животное испортит любимую пару Вашей обуви? Начнет регулярно писать на дорогой ковер?</label><br>
         <input type="textarea" name="test13" value="<?php echo @$data['test13']; ?>"><br>
   </p>
    <p>
        <label for="test14">Готовы ли вы брать уроки у инструктора?</label><br>
        <select name="test14">
        <option value="да, обязательно">да, обязательно</option>
        <option value="да, если потребуется">да, если потребуется</option>
        <option value="нет, я сам инструктор">нет, я сам инструктор</option>
        <option value="нет, моей собаке инструктор не потребуется">нет, моему животное инструктор не потребуется</option>
         <input type="submit" name="test14" value="<?php echo @$data['test14']; ?>"><br>
     </select>
    </p>
    <p>
        <label for="test15">Готовы ли Вы поддерживать контакт с представителем приюта?</label><br>
        <select name="test15">
        <option value="да, с удовольствием">да, с удовольствием</option>
        <option value="да, если потребуется">да, если потребуется</option>
        <option value="нет, не хотелось бы">нет, не хотелось бы</option>
         <input type="submit" name="test15" value="<?php echo @$data['test15']; ?>"><br>
     </select>
    </p>
    <p>
        <label for="test16">Готовы ли Вы подписать договор?</label><br>
        <select name="test16">
        <option value="да">да</option>
        <option value="нет">нет</option></p>
        </select>
    <p>
        <label for="test17">Вы уже выбрали кого-то из наших животное? Если нет, опишите, какое примерно животное Вы ищете? Возраст, вид, пол, размер, характер?</label><br>
        <input type="textarea" name="test17" value="<?php echo @$data['test17']; ?>"><br>
    </p>
    
    <p><button type="submit" name="do_profile">Отправить</button>
</div>
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
			<li>Контакты</li>
			<li>Ищут дом</li>
			<li>Пожертвовать</li>
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