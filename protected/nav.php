<nav class="navbar navbar-expand-lg navbar-light bg-light">
<?php if(!IsUserLoggedIn()) : ?>
	  <a class="navbar-brand" href="index.php">Főoldal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?P=login">Bejelentkezés <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=register">Regisztráció</a>
      </li>
    </ul>
  </div>
<?php else : ?>
	<a class="navbar-brand" href="index.php">Főoldal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?P=halak">Halak <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=tap">Tápok</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=test">Jogosultság tesztelése</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=logout">Kijelentkezés</a>
      </li>
    </ul>
  </div>
<?php endif; ?>
</nav>