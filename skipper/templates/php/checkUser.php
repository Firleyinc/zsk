<?php
if(!isset($_SESSION['uid'])) header('Location:index.php');

function checkUser($pageLevel) {
  $userLevel = $_SESSION['permLevel'];

  if($pageLevel > $userLevel) {
    $redir = 'student.php';
    if($userLevel == 1)
      $redir = 'teacher.php';
    header('Location:'.$redir);
  }
}

 ?>
