<?php
$conn = new mysqli($sqlServer,$sqlUsername,$sqlPassword,$sqlDBName);
if($conn->connect_error)
  die("Błąd połączenia: " . $conn->connect_error);

$conn->set_charset("utf8");
$result = $conn->query('SELECT * FROM `users` WHERE `UID` LIKE "'.$_SESSION['uid'].'";'); //import wszystkich danych o użytkowniku
$user = $result->fetch_assoc();
$result->free_result();

$result = $conn->query('SELECT * FROM `level` WHERE `value`='.$_SESSION['permLevel']);//translacja numeru na nazwę poziomu uprawnień usera
$level = $result->fetch_assoc();
$result->free_result();
 ?>
