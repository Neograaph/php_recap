<div class='d-flex align-items-center flex-column m-3'>
  <div>
    <h2>Ajouter un utilisateur</h2>
  </div>
  <form action="./addUserData.php" class='d-flex gap-2' method='post' id='addFormUser'>
    <input class='form-control' name='pseudo' placeholder='pseudo' type="text" required autofocus autocomplete='off'>
    <input class='form-control' name='email' placeholder='email' type="email" required>
    <input class='form-control' name='mdp' placeholder='password' type="password" required>
    <input class='btn btn-success' type="submit" value='Inscription'>
  </form>
</div>
<div class='d-flex justify-content-center mt-5'>
  <a href="../index.php">
    <button class='btn btn-danger'>Retour</button>
  </a>
</div>