<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Hozzáférés megtagadva!</h1>
	Permission check: <?=isset($_SESSION['permission']) ? $_SESSION['permission'] : "You don't have a permission level." ?>
<?php else : ?>
	<h1>Hozzáférés engedélyezve!</h1>
	<p>A jogosultsági szinted <?=$_SESSION['permission'] ?></p>
<?php endif; ?>