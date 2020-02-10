<!DOCTYPE html>
<?php
session_start();
require_once('./php/settings.php');
if(isset($_POST['logout'])) session_unset(); //wylogowanie użytkownika po kliknięciu 'wyloguj'
if(isset($_POST['act'])) { //redir po kliknięciu przycisku ucz się lub zarzązaj przez usera
  // $redir = 'student.php';
  // switch($_SESSION['permLevel']) {
  //   case 1:
  //     $redir = 'teacher.php';
  //   break;
  //   case 2:
  //     $redir = 'admin.php';
  //   break;
  // }
  header('Location:zalogowany.php');
}

$logged = isset($_SESSION['uid']); //sprawdza, czy user jest zalogowany
?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link rel="icon" href="../icons/icon.png"/>
  </head>
  <body>
<img id="backgroundImage" src="../image/station.jpg"/>

<div id="header">
  <img id="pageIcon" src="../icons/skipper.png"/>
  <div id="headerButtonsContainer">
      <?php
      if($logged) {
        $buttonText = "ucz się";
        if($_SESSION['permLevel']) $buttonText = "zarządzaj"; //zmiana tekstu na przycisku akcji, zależnie od uprawnień usera

        echo '<form method="post"><input type="submit" class="headerButtons buttonClass" name="act" value="'.$buttonText.'"/></form>';
        echo '<form method="post"><input type="submit" class="headerButtons buttonClass" name="logout" value="wyloguj"/></form>';
      }
      else
        echo '<input type="button" class="headerButtons buttonClass" name="login" value="zaloguj"/>';
       ?>
  </div>
</div>

<div class="floatingWindow" style="height:100px;width:auto;top:300px;left:300px;">
  <h3 style="font-style:italic">Tutaj będą jakieś informacje o stronie</h3>
</div>

<div id="loginWindow">
  <div>Zaloguj</div>
  <form method="post" action="login.php">
    <input type="text" name="email" placeholder="adres email" required/><br>
    <input type="password" name="password" placeholder="hasło" required/><br>
    <input type="submit" class="buttonClass" value="Zatwierdź"/>
  </form>

</div>

  </body>

<script type="text/javascript" src="./js/index.js"></script>
</html>
