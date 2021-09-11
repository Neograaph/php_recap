<div class='d-flex align-items-center flex-column'>
  <div>
    <h2>Ajouter un utilisateur</h2>
  </div>
  <form action="./addUserData.php" class='d-flex gap-2' method='post'>
    <input class='form-control' name='pseudo' placeholder='pseudo' type="text" required autofocus autocomplete='off'>
    <input class='form-control' name='email' placeholder='email' type="email" required>
    <input class='form-control' name='password' placeholder='password' type="password" required>
    <input class='btn btn-success' type="submit">
  </form>
</div>