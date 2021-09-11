<?php
session_start();
$pseudo = $_SESSION['pseudo'];
include('./layout/head.php');
?>
<section>
  <h1 class='text-center'>Mon profil</h1>
  <p class='p-2'>
    <?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=php_form;charset=utf8', 'root', '');
    // echo "connexion à la base de données réussie <br/>";
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  } 
  $req=$bdd->prepare("SELECT*FROM users WHERE pseudo= ? ");
  $req->execute(array ($pseudo)); 
  foreach ($req as $data){
    echo 'Id du compte : '.$data['id'].'<br/>';
    echo 'Pseudo : '.$data['pseudo'].'<br/>';
    echo 'Email : '.$data['email'].'<br/>';  
    echo 'mdp : '.$data['mdp'].'<br/>';  
    echo 'Membre depuis le : '.$data['created_at'].'<br/>';   
  }
  ?>
  </p>
  <a href="./logout.php" class='p-2'>
    <button class='btn btn-danger'>Se déconnecter</button>
  </a>
</section>
<?php
include('./layout/footer.php');
?>