<?php
session_start();
if (isset($_POST['pseudo']) && isset($_POST['mdp'])){
  $pseudo = strip_tags($_POST['pseudo'],"<br/>");
  $mdp = strip_tags($_POST['mdp'],"<br/>");
  
  if ((!empty($pseudo)) && (!empty($mdp))){
    echo $pseudo.'<br/>';
    echo $mdp.'<br/>';

    $servername = "maximefneograph.mysql.db";
    $username = "maximefneograph";
    $password = "6WtuCxrP7ygy";
    $dbname = "maximefneograph";
    
    try {
      $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "connexion à la base de données réussie <br/>";
    }
    catch (PDOException $e) {
      die('Erreur : ' . $e->getMessage());
    }
    
    $req=$bdd->prepare("SELECT * FROM php_recap_user WHERE pseudo= ?");
    $req->execute(array($pseudo));

    foreach ($req as $data){
      echo $data['pseudo'].' '.$data['mdp'].'<br/>';  
    }

    $goodPassword=$data['mdp'];
    if ($goodPassword==$mdp){
      $_SESSION['id'] = $data['id'];
      $_SESSION['pseudo'] = $pseudo;
      header('location:profil.php');
    }
    else{
      header('location:errorData.php');
    }

    // $req->closeCursor();
  }
  else{
    echo 'no post var';
  };
}



// header('location:profil.php');
?>