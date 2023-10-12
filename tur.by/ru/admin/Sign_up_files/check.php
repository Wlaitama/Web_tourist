<?php 
    require "../Home_files/include/db_connect.php";

    $familia = filter_var(trim($_POST['fam']),FILTER_SANITIZE_STRING);
    $ima = filter_var(trim($_POST['ima']),FILTER_SANITIZE_STRING);
    $bat = filter_var(trim($_POST['bat']),FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['log']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pas']),FILTER_SANITIZE_STRING);

    if(mb_strlen($familia) < 2 || mb_strlen($familia) > 30)
    {
        echo "Недопустимая длинна фамилии";
        exit();
    }
    if(mb_strlen($ima) < 2 || mb_strlen($ima) > 30)
    {
        echo "Недопустимая длинна имени";
        exit();
    }
    if(mb_strlen($bat) < 3 || mb_strlen($bat) > 30)
    {
        echo "Недопустимая длинна отчества";
        exit();
    }
    if(mb_strlen($mail) < 6 || mb_strlen($mail) > 40)
    {
        echo "Неправильный E-mail";
        exit();
    }
    if(mb_strlen($tel) < 7 || mb_strlen($tel) > 16)
    {
        echo "Недопустимая длинна телефона";
        exit();
    }
    if(mb_strlen($login) < 5 || mb_strlen($login) > 30)
    {
        echo "Недопустимая длинна логина";
        exit();
    }
    if(mb_strlen($password) < 5 || mb_strlen($password) > 30)
    {
        echo "Недопустимая длинна пароль";
        exit();
    }
    $link->query("INSERT INTO `users`(`id_user`, `fam`, `ima`, `bat`, `mail`, `tel`, `login`, `password`) VALUES ('$familia','$ima','$bat','$mail','$tel','$login','$password')");
?>