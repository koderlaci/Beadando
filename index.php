<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>HAL</title>
	</head>
	<body>
		<div class="container-fluid">
			<header><?php include_once PROTECTED_DIR.'header.php'; ?></header>
			<nav><?php require_once PROTECTED_DIR.'nav.php'; ?></nav>
			<content><?php require_once PROTECTED_DIR.'content.php'; ?></content>
			<footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
	</div>
	</body>
</html>