<!DOCTYPE html>
<?php //placeholdery do testów
$title = "skipper";
$username = "Nazwa Użytkownka";
$userStatus = "użytkownik";
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" type="text/css" href="./css/sidebar.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="./js/sidebar.js"></script>
  </head>

  <body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-container">
        <li><img class="userAvatar" src="../icons/userIcon.png"/></li>
        <li><span class="userName"><?php echo $username ?></span>
          <span class="userName userStatus"><?php echo $userStatus ?></span></li>
        <li style="height: 2px; margin: 10%; background-color:#337ab7;"></li>
        <li>
          <ul class="sidebar-nav">
            <!-- to będzie generować php, zależnie od statusu użytkownika-->
            <li><a href="#">Zarządzaj</a></li>
            <li><a href="#">Postępy</a></li>
            <li><a href="#">Wyloguj</a></li>
          </ul>
        </li>
    </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span id="arrow" class="glyphicon glyphicon-chevron-right"></span></a>
            <h1 class="text-center" style="font-style:italic;">„Co my wiemy, to tylko kropelka. Czego nie wiemy, to cały ocean.”</h1>
            <p class="small text-center">~Izaak Newton</p>
            <h2 class="text-center">Czego się dziś nauczysz?</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>
</html>
