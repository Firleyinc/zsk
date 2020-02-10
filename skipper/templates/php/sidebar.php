<div id="sidebar">
  <div id="strap"><img style="height:40px; margin:5px;margin-right: 10px;float:right;" src='../icons/hamburger.png'/></div>
  <div id="sidebarContainer">
    <img class="userAvatar" src="../icons/userIcon.png"/>
    <span class="userName"><?php echo $username ?></span>
    <span class="userName userStatus"><?php echo $userStatus ?></span>
    <div class="bar"></div>
    <a href="account.php" class="sidebarButtons buttonClass">Konto</a>
    <?php
    $ref = 'progress.php';
    $text = 'Postępy';
    switch($user['level']) {
      case 1:
      $text='Zarządzanie';
      $ref='lessonMgmt.php';
      break;
      case 2:
      $text='Użytkownicy';
      $ref='userMgmt.php';
      break;
    }
    echo '<a href="'.$ref.'" class="sidebarButtons buttonClass">'.$text.'</a>';
     ?>

     <form method="post" action="index.php">
       <input type="submit" class="sidebarButtons buttonClass" name="logout" value="Wyloguj"/>
     </form>
</div>
</div>
