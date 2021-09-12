<?php
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['mdp'])){
  $pseudo = strip_tags($_POST['pseudo'],"<br/>");
  $email = strip_tags($_POST['email'],"<br/>");
  $mdp = strip_tags($_POST['mdp'],"<br/>");
  
  if ((!empty($pseudo)) && (!empty($email)) && (!empty($mdp))){
    // echo $pseudo.'<br/>';
    // echo $email.'<br/>';
    // echo $mdp.'<br/>';
    $dateNow = date('y-m-d');
    // echo $dateNow.'<br/>';
  }
  else{
    echo 'no post var';
  };
  // $response->closeCursor();
}

$servername = "maximefneograph.mysql.db";
$username = "maximefneograph";
$password = "6WtuCxrP7ygy";
$dbname = "php_recap";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (pseudo, email, mdp, created_at)
  VALUES ('$pseudo', '$email', '$mdp', '$dateNow')";
  // use exec() because no results are returned
  $conn->exec($sql);
  // echo "New record created successfully";
  header('location:connexion.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
  // echo $e->getMessage();
  // header('location:errorAddData.php');
}

$conn = null;
?>