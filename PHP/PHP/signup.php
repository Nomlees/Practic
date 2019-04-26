<?php
    require "../includs/db.php";
    $data = $_POST;
 
function captcha_show(){
    $questions = array(
        1 => 'Столица России',
        2 => 'Столица США',
        3 => '2 + 3',
        4 => '15 + 14',
        5 => '45 - 10',
        6 => '33 - 3'
    );
    $num = mt_rand( 1, count($questions) );
    $_SESSION['captcha'] = $num;
    echo $questions[$num];
}
 
//если кликнули на button
if ( isset($data['do_signup']) )
{
// проверка формы на пустоту полей
    $errors = array();
    if ( trim($data['login']) == '' )
    {
        $errors[] = 'Введите логин';
    }
 
    if ( trim($data['email']) == '' )
    {
        $errors[] = 'Введите Email';
    }
 
    if ( $data['password'] == '' )
    {
        $errors[] = 'Введите пароль';
    }
 
    if ( $data['password_2'] != $data['password'] )
    {
        $errors[] = 'Повторный пароль введен не верно!';
    }
 
    //проверка на существование одинакового логина
    if ( R::count('users', "login = ?", array($data['login'])) > 0)
    {
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
 
//проверка на существование одинакового email
    if ( R::count('users', "email = ?", array($data['email'])) > 0)
    {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }
 
    //проверка капчи
    $answers = array(
        1 => 'москва',
        2 => 'вашингтон',
        3 => '5',
        4 => '29',
        5 => '35',
        6 => '30'
    );
    if ( $_SESSION['captcha'] != array_search( mb_strtolower($_POST['captcha']), $answers ) )
    {
        $errors[] = 'Ответ на вопрос указан не верно!';
    }
 
 
    if ( empty($errors) ){
        //ошибок нет, теперь регистрируем
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT); 
        //пароль нельзя хранить в открытом виде, 
        //мы его шифруем при помощи функции password_hash для php > 5.6
         
        R::store($user);
        $_SESSION['logged_user'] = $user;
        echo '<div style="color:green;">Вы успешно зарегистрированы! Добро пожаловать на <a href = "session-index.php"> главную страницу</a> </div><hr>';
    }else{
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="signup.php" method="POST">
    <p>
    <p><strong>Ваш логин</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br>
    </p>
    <p>
    <p><strong>Ваш Email</strong></p>
    <input type="email" name="email" value="<?php echo @$data['email']; ?>"><br>
    </p>
    <p>
    <p><strong>Ваш пароль</strong></p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>"><br>
    </p>
    <p>
    <p><strong>Повторите пароль</strong></p>
    <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>"><br>
    </p>
    <p>
    <p><strong><?php captcha_show()?></strong>:</p>
    <input type="text" name="captcha"><br>
    </p>
    <button type="submit" name="do_signup">Зарегестироваться</button>
</form>
</body>
</html>