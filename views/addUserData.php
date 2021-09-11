<?php
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['mdp'])){
  $pseudo = strip_tags($_POST['pseudo'],"<br/>");
  $email = strip_tags($_POST['email'],"<br/>");
  $mdp = strip_tags($_POST['mdp'],"<br/>");
  
  if ((!empty($pseudo)) && (!empty($email)) && (!empty($mdp))){
    echo $pseudo.'<br/>';
    echo $email.'<br/>';
    echo $mdp.'<br/>';
    $dateNow = date('y-m-d');
    echo $dateNow.'<br/>';
  }
  else{
    echo 'no post var';
  };
  // $response->closeCursor();
}


try {
  $bdd = new PDO('mysql:host=localhost;dbname=php_form;charset=utf8', 'root', '');
  echo "connexion à la base de données réussie <br/>";
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare("INSERT INTO users(id, pseudo, email, mdp, created_at) VALUES(:id, :pseudo, :email, :mdp, :created_at)");
$req->execute(array(
  'id' => '',
  'pseudo' => $pseudo,
  'email' => $email,
  'mdp' => $mdp,
  'created_at' => $dateNow
));
echo 'utilisateur ajouté à la bdd';

?>