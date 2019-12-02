<!DOCTYPE html>
<?php //placeholdery do testów
$title = "skipper";
?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
  </head>
  <body>
<img id="backgroundImage" src="../image/station.jpg"/>

<div id="header">
  <img id="pageIcon" src="../icons/skipper.png"/>
  <input type="button" class="headerButtons buttonClass" name="login" value="zaloguj"/>
</div>

<div class="floatingWindow" style="height:100px;width:auto;top:300px;left:300px;">
  <h3 style="font-style:italic">Tutaj będą jakieś informacje o stronie</h3>
</div>

<div id="loginWindow">
  <div>Zaloguj</div>
  <form method="post" action="main.php"><!--action tylko do testów-->
    <input type="text" name="login" placeholder="adres email"/><br>
    <input type="password" name="password" placeholder="hasło"/><br>
    <input type="submit" class="buttonClass" value="Zatwierdź"/>
  </form>

</div>

  </body>

<script type="text/javascript" src="./js/index.js"></script>
</html>
