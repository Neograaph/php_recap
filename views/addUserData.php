<?php
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){
    $pseudo = strip_tags($_POST['pseudo'],"<br/>");
    $email = strip_tags($_POST['email'],"<br/>");
    $password = strip_tags($_POST['password'],"<br/>");

    if ((!empty($pseudo)) && (!empty($email)) && (!empty($password))){
      echo $pseudo.'<br/>';
      echo $email.'<br/>';
      echo $password.'<br/>';

    }
else{
  echo 'no post var';
};
}
?>

<?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=viabet;charset=utf8', 'root', '');
    echo "connexion à la base de données réussie";
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  $response=$bdd->query('SELECT*FROM jeux_video ORDER BY nom');
  
  $response->closeCursor();
?>