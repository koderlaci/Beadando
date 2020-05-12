<hr>

<a href="index.php">Főoldal</a>
<?php if(!IsUserLoggedIn()) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=login">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register">Regisztráció</a>
<?php else : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=halak">Halak</a>
	<a href="index.php?P=tap">Tápok</a>
	<a href="index.php?P=test">Jogosultság tesztelése</a>
	<a href="index.php?P=logout">Kijelentkezés</a>
<?php endif; ?>

<hr>