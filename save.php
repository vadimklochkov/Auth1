<?php
session_start();
//-----------------//
$login = 'xackep';          // Логин
$password = 'qwerty';      // Пароль
//-----------------//

if (($_COOKIE['login'] == $login) && ($_COOKIE['password'] == $password) || ($_SESSION['password'] == md5($login.':'.$password)))
 {
  echo '<script>alert(\'Вы уже авторизированны\')</script>';
 }
 else
 {
  echo '<html>
         <head>
          <title>Авторизация</title>
         </head>
          <body>         
           <form name="autorization"  action="" method="POST">
            Логин:&nbsp;<input type="text" name="login"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            Запомнить&nbsp;<input type=checkbox name="save_cookie" value=1>&nbsp;?<p>
            <input type="submit" name="data" value="Вход">
           </form>
          </body>
         </html>';
  if(($_POST['login']) && ($_POST['password']))
   {
  if((trim($_POST['login']) == $login) && (trim($_POST['password']) == $password))
   {
    if(!$_POST['save_cookie'])
     {
      $_SESSION['password'] = md5($login.':'.$password);
      echo '<script>alert(\'Вы авторизированны! (сессия)\')</script>';
     }
     else
     {
      setcookie("login",$login);
      setcookie("login",$password);
      echo '<script>alert(\'Вы авторизированны! (куки)\')</script>';
     }
   }
   else
   {
    echo '<script>alert(\'Логин или пароль не верны!\')</script>';
   }
  } 
  else
  {
   if((!$_POST['login']) && (!$_POST['password'])) 
   {
   }
   else
   {
   echo '<script>alert(\'Введите все значения!\')</script>';
   }
  }
  }
  /* geforse.name */
?>
"Авторизация на скорую руку" :)
Сохраняет cookie, либо session
*Советую ещё добавить проверку на спец.символы
 