<?php
    require "../includs/db.php";
    $data = $_POST;
    if ( isset($data['do_login']) ){
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if ( $user ){
        //логин существует
            if ( password_verify($data['password'], $user->password) ){
            //если пароль совпадает, то нужно авторизовать пользователя
                $_SESSION['logged_user'] = $user;
                echo '<div style="color:dreen;">Вы авторизованы!<br> 
                Можете перейти на <a href="main.php">главную</a> страницу.</div><hr>';
        }else{
            $errors[] = 'Неверно введен пароль!';
        }
        }
 
    }else{
        $errors[] = 'Пользователь с таким логином не найден!';
    }
     
    if ( ! empty($errors) ){
        //выводим ошибки авторизации
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/signup.css">
    <link rel="stylesheet" type="text/css" href="../CSS/head.css">
    <link rel="stylesheet" type="text/css" href="../CSS/header.css">


</head>
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
    </section>
</header>
<body>

<form class="transparent" action="login.php" method="POST">  
    <div class="form-inner">
        <h3>Вход</h3>
    <label for="login">Логин</label>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br>
 <p>
    <label for="password">Пароль</label>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>"><br>
 
    <button type="submit" name="do_login">Войти</button>
</form>
</body>