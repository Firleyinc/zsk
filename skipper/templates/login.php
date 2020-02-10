<!DOCTYPE html>
<?php
session_start();
require_once('./php/settings.php');
$title = "Logowanie";
?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="./css/login.css"/>
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
  </head>

<?php
if(!isset($_POST['email'])||!isset($_POST['password'])) header('Location:index.php');//przekierowanie gdy dane nie zostały podane
$email = $_POST['email'];
$email = trim($email);
$pass = $_POST['password'];
$auth = false;
$errorMessage = "Błędny adres e-mail";

$conn = new mysqli($sqlServer,$sqlUsername,$sqlPassword,$sqlDBName);
if($conn->connect_error)
  die("Błąd połączenia: " . $conn->connect_error);

$conn->set_charset("utf8");
$result = $conn->query('SELECT * FROM `users` WHERE `mail` LIKE "'.$email.'";');

if(!$result->num_rows) {
  goto err;
}

$data = $result->fetch_assoc();
$result->free_result();

if(password_verify($pass,$data['password'])) {
  $auth = true;
}
else {
  $errorMessage = "Błędne hasło";
  goto err;
}

switch ($data['status']) {
  case 1:
  $auth = false;
  $errorMessage = "To konto jest nieaktywne.";
  break;
  case 2:
  $auth = false;
  $errorMessage = "To konto zostało zablokowane.";
  break;
  case 3:
  $auth = false;
  break;
}



err:
$conn->close();

if($auth) {
$_SESSION['uid'] = $data['UID']; //unikalne id użytkownika
$_SESSION['permLevel'] = $data['level']; //poziom uprawnien użytkownika
// $page = 'student.php';
//
// switch ($data['level']) {
//   case 1:
//     $page = 'teacher.php';
//   break;
//   case 2:
//     $page = "admin.php";
//   break;
// }
header('Location:zalogowany.php');
}
else {
  ?>
  <body>
  <img id="backgroundImage" src="../image/station.jpg"/>

  <div class="floatingWindow" style="height:330px;width:600px;top:30%;left:30%;">
    <div id="container">
      <h2 style="font-style:italic"><?php echo $errorMessage;?></h2>
      <p>Za chwilę zostaniesz przeniesiony do strony głównej.</p>
      <button class="buttonClass" onclick="redirect()"><h3>Przenieś teraz</h3></button>
    </div>

    <div id="progressBar"></div>
  </div>

    </body>
    <script type="text/javascript" src="./js/login.js"></script>

<?php
}
?>
</html>
