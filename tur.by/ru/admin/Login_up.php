<?php
session_start();
$link = mysqli_connect('localhost','root','');
  $conn = mysqli_select_db($link,'db_tur');
  if(isset($_POST['username']) and isset($_POST['password']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      $quer = "SELECT * FROM useri WHERE username='$username' and password='$password'";
      $resalt = mysqli_query($link, $quer) or die (mysqli_error($link));
      $count = mysqli_num_rows($resalt);

      if ($count==1)
      {
        $_SESSION['username']=$username;
      }else
      {
        $fsmsg="Вы не правильно ввели логин или пароль!";
      }
  }
  if(isset($_SESSION['username']))
  {
    header('');
  }
  ?>
<!DOCTYPE html>
<html lang="ru"><head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html">
        <title>Авторизация</title>
        <link rel="SHORTCUT ICON" href="favicon_1132.ico" type="image/vnd.microsoft.icon">
</style>
        <link rel="stylesheet" href="Login_up_files/style.css" id="moto-website-style">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5bc6752132.js" crossorigin="anonymous"></script>
</head>
<body class="back"> 
<div id="range1">

<div class="outer">
  <div class="middle">
    <div class="inner">

        <div class="login-wr">
          <h2>Вход</h2>
          <form method="POST">
          <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>
            <input type="text" name="username" placeholder="Логин" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit"> Войти </button>
            <a href="Sign_up.php"> <p> У вас нет аккаунта? Регистрация </p></a>
          </form>
        </div>

    </div>
  </div>
</div>

</div>
</body></html>