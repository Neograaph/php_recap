<?php
session_start();
$pseudo = $_SESSION['pseudo'];

$servername = "maximefneograph.mysql.db";
$username = "maximefneograph";
$password = "6WtuCxrP7ygy";
$dbname = "maximefneograph";

try {
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "connexion à la base de données réussie <br/>";
}
catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}


include('./layout/head.php');
?>
<?php
include('./layout/navPrivate.php');
?>
<section id="app">
  <h1 class='text-center m-3'>{{ title }}</h1>
  <table class="table table-striped table-hover" v-show="menuShow">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Salon</th>
        <th scope="col">Création</th>
        <th scope="col">Rejoindre</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $req=$bdd->prepare("SELECT * FROM php_recap_chan");
        $req->execute();



        foreach ($req as $donnees) {
          echo '<tr>';
          echo '<td>' . $donnees['id']. '</td>';
          echo '<td>' . $donnees['title']. '</td>';
          echo '<td>' . $donnees['created_at']. '</td>';
          echo '<td>' . "<a class='btn btn-success' v-on:click='join(".$donnees['title'].$donnees['id'].")'>JOIN</a>". '</td>';
          echo '</tr>';
        }
    ?>
    </tbody>
  </table>
  <div v-show="!menuShow">
    <a v-on:click='backToMenu()' class='btn btn-danger'>Retour</a>
    <?php
    $req=$bdd->prepare("SELECT * FROM php_recap_post");
    $req->execute();
    foreach ($req as $donnees) {
      echo '<div class="card">';
      echo '<div class="card-header">';
      echo $donnees['chan_id'];
      echo '</div>';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$donnees['user_id'].'</h5>';
      echo '<p class="card-text">'.$donnees['message'].'</p><br/>';
      echo '<p class="card-text">'.$donnees['created_at'].'</p>';
      // echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>






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