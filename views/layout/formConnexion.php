<div class='d-flex align-items-center flex-column m-3'>
  <div>
    <h2>Se connecter</h2>
  </div>
  <form action="./data.php" class='d-flex gap-2 flex-column' method='post' id='formConnexion'>
    <div class='d-flex gap-2'>
      <input class='form-control' name='pseudo' placeholder='pseudo' type="text" required autofocus autocomplete='off'>
      <input class='form-control' name='mdp' placeholder='password' type="password" required>
    </div>
    <div class='d-flex justify-content-center'>
      <input class='btn btn-success' type="submit" value='Connexion'>
    </div>
  </form>
</div>
<div class='d-flex justify-content-center mt-5'>
  <a href="../index.php" class='btn btn-danger'>
    Retour
  </a>
</div>