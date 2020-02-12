<?php
session_start();
require_once('./php/userControl.php');
require_once('./php/settings.php');
require_once('./php/getUserData.php');
if(isset($_POST['userName'])) {
  //zaktualizuj dane w bazie
}
$username = $user['name'].' '.$user['surname'];
$userStatus = $level['text'];
 ?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo $title;?></title>
     <link rel="stylesheet" type="text/css" href="./css/base.css"/>
     <link rel="stylesheet" type="text/css" href="./css/user.css"/>
     <link rel="stylesheet" type="text/css" href="./css/account.css"/>
   </head>

   <body>
    <?php require_once('./php/sidebar.php')?>

    <div id="goBack" class="buttonClass"><h3 style='font-style:italic;'>Powrót</h3></div>

    <form method="post" action="">
      <h1 style='font-style:italic;margin-top:-20px;margin-bottom:50px;'>Ustawienia konta</h1>

      <div id="formContentWrapper">
        <div id="formElements">
        <p>Imię:
         <input required type="text" class="textField" name="userName" value="<?php echo $user['name']?>"/></p>
        <p>Nazwisko:
         <input required type="text" class="textField" name="userSurname" value="<?php echo $user['surname']?>"/></p>
        <p>Adres e-mail:
         <input required type="text" class="textField" name="userEmail" value="<?php echo $user['mail']?>"/></p>
        <p>Nowe hasło:
          <input required type="password" class="textField" name="newPass" value=""/></p>
        <p>Powtórz hasło:
          <input required type="password" class="textField" name="repeatPass" value=""/></p>
        <p style="padding-left: 25%;"><input type="submit" class = "buttonClass" id="submitButton" value="Zapisz"/> </p>
      </div>
      <div id="validation">
        <p><img src="../icons/false_glyph.png"/>Poprawny adres e-mail</p>
        <div class="bar"></div>
        <h3 style="font-style: italic">Hasło:</h3>
        <p><img src="../icons/false_glyph.png"/>przynajmniej sześć znaków długości</p>
        <p><img src="../icons/false_glyph.png"/>przynajmniej jedna cyfra</p>
        <p><img src="../icons/false_glyph.png"/>przynajmniej jedna znak specjalny</p>
        <p><img src="../icons/false_glyph.png"/>przynajmniej jedna wielka litera</p>
        <p><img src="../icons/false_glyph.png"/>przynajmniej jedna mała litera</p>
      </div>
    </div>
    </form>
 </body>
  <script type="text/javascript" src="./js/user.js"></script>
  <script type="text/javascript" src="./js/account.js"></script>
 </html>
