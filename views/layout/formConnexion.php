<div class='d-flex align-items-center flex-column m-3'>
  <div>
    <h2>Se connecter</h2>
  </div>
  <form action="./data.php" class='d-flex gap-2' method='post' id='formConnexion'>
    <input class='form-control' name='pseudo' placeholder='pseudo' type="text" required autofocus autocomplete='off'>
    <input class='form-control' name='mdp' placeholder='password' type="password" required>
    <input class='btn btn-success' type="submit" value='Connexion'>
  </form>
</div>
<div class='d-flex justify-content-center mt-5'>
  <a href="../index.php">
    <button class='btn btn-danger'>Retour</button>
  </a>
</div>