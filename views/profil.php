<?php
session_start();
$pseudo = $_SESSION['pseudo'];
include('./layout/head.php');
?>
<section>
  <h1 class='text-center'>Mon profil</h1>
  <p class='p-2'>
    <?php
  $servername = "maximefneograph.mysql.db";
  $username = "maximefneograph";
  $password = "6WtuCxrP7ygy";
  $dbname = "maximefneograph";
  
  try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  } 
  $req=$bdd->prepare("SELECT*FROM php_recap WHERE pseudo= ? ");
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