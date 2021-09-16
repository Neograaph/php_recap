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
        <th scope="col" class='text-end'>Rejoindre</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $req=$bdd->prepare("SELECT * FROM php_recap_chan");
        $req->execute();

        foreach ($req as $donnees) {
          // ajouter ces données dans un tableau pour les récup en JS
          echo '<tr>';
          echo '<td>' . $donnees['id']. '</td>';
          echo '<td>' . $donnees['title']. '</td>';
          echo '<td>' . $donnees['created_at']. '</td>';
          echo '<td class="text-end">' . "<a class='btn btn-success' v-on:click='join(".$donnees['title'].' ,'.$donnees['id'].")'>JOIN</a>". '</td>';
          echo '</tr>';
        }

    ?>
    </tbody>
  </table>
  <div v-show="!menuShow">
    <?php
    $req=$bdd->prepare("SELECT * FROM php_recap_post");
    $req->execute();
    foreach ($req as $donnees) {
      echo '<div class="card">';
      echo '<div class="card-header">';
      echo '{{ "Salon #"+salonJoinId }}';
      echo '</div>';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">Id utilisateur : '.$donnees['user_id'].'</h5>';
      echo '<p class="card-text">'.$donnees['message'].'</p><br/>';
      echo '<p class="card-text">Date du message: '.$donnees['created_at'].'</p>';
      echo '</div>';
      echo '</div><br/><br/><br/>';
    }
    ?>
    <a v-on:click='backToMenu()' class='btn btn-danger'>Retour</a>
    <a @click='reply()' class='btn btn-primary'>Répondre</a>
  </div>
  <!-- formulaire pour répondre-->
  <div v-show="formReplyShow">
    <div class='d-flex align-items-center flex-column m-3'>
      <div>
        <h2 id='replyAnch'>Envoyer un message</h2>
      </div>
      <textarea rows="4" cols="50" form="usrform" name='message' placeholder='Votre message...'></textarea>
      <form class='d-flex gap-2' id='usrform' action='./forum.php' method='post'>
        <input class='btn btn-success' type="submit" value='Envoyer'>
        <input @click='cancelReply' class='btn btn-danger' type="button" value='Annuler'>
      </form>
    </div>
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