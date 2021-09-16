<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="./public/img/logo.svg"
        height="45"
        alt=""
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <img
        src="./public/img/menu.svg"
        height="45"
        alt=""
        loading="lazy"
        style="margin-top: -1px;"
      />
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Accueil</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <a type="button" class="btn btn-link px-3 me-2" href='./views/connexion.php'>
          Se connecter
        </a>
        <a type="button" class="btn btn-primary me-3" href='./views/inscription.php'>
          Inscription
          </a>
        <a
          class="btn btn-primary px-3"
          href="https://github.com/Neograaph/php_recap"
          role="button"
          target='_blank'
          ><img 
          src="./public/img/github.svg" 
          height="17"
          alt=""
          loading="lazy"
          style="margin-top: -1px;"></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->