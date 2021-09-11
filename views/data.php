<?php
session_start();
if (isset($_POST['pseudo']) && isset($_POST['mdp'])){
  $pseudo = strip_tags($_POST['pseudo'],"<br/>");
  $mdp = strip_tags($_POST['mdp'],"<br/>");
  
  if ((!empty($pseudo)) && (!empty($mdp))){
    echo $pseudo.'<br/>';
    echo $mdp.'<br/>';
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=php_form;charset=utf8', 'root', '');
      echo "connexion à la base de données réussie <br/>";
    }
    catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
    
    $req=$bdd->prepare("SELECT pseudo,mdp FROM users WHERE pseudo= ?");
    $req->execute(array($pseudo));

    foreach ($req as $data){
      echo $data['pseudo'].' '.$data['mdp'].'<br/>';  
    }

    $goodPassword=$data['mdp'];
    if ($goodPassword==$mdp){
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