<hr>

<a href="index.php">Főoldal</a>
<?php if(!IsUserLoggedIn()) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="protected/user/login.php">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="protected/user/register.php">Regisztráció</a>
<?php else : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=test">Jogosultság tesztelése</a>
	<a href="index.php?P=logout">Kijelentkezés</a>
<?php endif; ?>

<hr>