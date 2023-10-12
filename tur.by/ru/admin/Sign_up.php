<?php
  $link = mysqli_connect('localhost','root','');
  $conn = mysqli_select_db($link,'db_tur');
  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fam']) && isset($_POST['ima']) && isset($_POST['bat']) && isset($_POST['tel']))
    {
      $username = $_POST['username'];
      $fam = $_POST['fam'];
      $ima = $_POST['ima'];
      $bat = $_POST['bat'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $password = password_hash($data['password'], PASSWORD_DEFAULT);
  
      $quer = "INSERT INTO useri (username, fam, ima, bat, tel, email, password) VALUES ('$username', '$fam', '$ima', '$bat', '$tel', '$email', '$password')";
      $resalt = mysqli_query($link, $quer);

      if($resalt)
      {
        $smsg = "Регистрация прошла успешно";
      }else
      {
        $fsmsg = "Ошибка";
      }
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html">
        <title>Регистрация</title>
        <link rel="SHORTCUT ICON" href="favicon_1132.ico" type="image/vnd.microsoft.icon">
        <link rel="stylesheet" href="Sign_up_files/style.css" id="moto-website-style"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="back"> 
<div id="range1">

<div class="outer">
  <div class="middle">
    <div class="inner">
    <div class="login-wr">
    <h2>Регистрация</h2>
  <form method="POST">
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
  <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>
  <input type="text" name="fam" class="form-control" placeholder="Фамилия" required>
  <input type="text" name="ima" class="form-control" placeholder="Имя" required>
  <input type="text" name="bat" class="form-control" placeholder="Отчество" required>
  <input type="text" name="tel" class="form-control" placeholder="Телефон" required>
  <input type="text" name="username" class="form-control" placeholder="Логин" required>
  <input type="email" name="email" class="form-control" placeholder="Email" required>
  <input type="password" name="password" class="form-control" placeholder="Пароль" required>
  <button class="zareg" type="submit">Зарегистрироваться</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body></html>