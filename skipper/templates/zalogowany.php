<?php
session_start();
//require_once('checkUser.php');
//checkUser(0); //sprawdza, czy poziom uprawnień usera jest wystarczający
require_once('./php/userControl.php');
require_once('./php/settings.php');
require_once('./php/getUserData.php');
$username = $user['name'].' '.$user['surname'];
$userStatus = $level['text'];
 ?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo $title;?></title>
     <link rel="stylesheet" type="text/css" href="./css/base.css"/>
     <link rel="stylesheet" type="text/css" href="./css/user.css"/>
   </head>

   <body>
    <?php require_once('./php/sidebar.php')?>

 </body>
 <script type="text/javascript" src="./js/user.js"></script>
 </html>
