<?php #Ju Long 19013345 ?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <img id="logo" class="navbar-brand" src="./img/skh_logo.png" onclick="directToHome()"/>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['username'])) {?>
      <li class="nav-item">
        <a class="nav-link" href="./index.php">Home<i class="fas fa-home"></i></a>
      </li>

      <li class="nav-item" id="mealEntry">
        <a class="nav-link" href="./mealEntry.php">Meal Entry<i class="fas fa-edit"></i></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="./doSignout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
      </li>

    <?php } else {?>
      <li class="nav-item">
        <a class="nav-link" href="./login+signup.php">Login / Sign up<i class="fas fa-sign-in-alt"></i></a>
      </li>
    <?php }?>
    </ul>

  </div>
</nav>
<link rel='stylesheet' href="css/all.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/additional-methods.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.raty.min.js" type="text/javascript"></script>
<script src="js/Chart.bundle.min.js" type="text/javascript"></script>
<script src="js/moment.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-pie.min.js"></script>

<style media="screen">
  .nav-item {
    font-size: 20;
    margin-right: 10px;
  }
  #navbarSupportedContent {
    padding-right: 50px;
  }
  i {
    margin-left: 7px;
  }
  #logo {
    width: 11%;
    cursor: pointer;
    margin-left: 20px;
    margin-right: 20px;
  }
</style>

<script type="text/javascript">
  function directToHome() {
    location.replace("index.php");
  }
  $("a").mouseover(function() {
    $(this).addClass("text-info")
  }).mouseout(function() {
    $(this).removeClass("text-info");
  });
</script>

<?php #Ju Long 19013345 ?>
