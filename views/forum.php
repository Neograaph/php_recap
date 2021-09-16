<?php
session_start();
$pseudo = $_SESSION['pseudo'];
include('./layout/head.php');
?>
<?php
include('./layout/navPrivate.php');
?>
<section id="app">
  <h1 class='text-center m-3'>{{ title }}</h1>
  





  <!-- <a href="./modifier.php" class='p-2 btn btn-primary'>
    Modifier mes infos
  </a> -->
  <!-- <a href="./logout.php" class='p-2 btn btn-danger'>
    Se déconnecter
  </a> -->
</section>
<?php
include('./layout/footer.php');
?>