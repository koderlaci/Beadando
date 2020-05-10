<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HAL</title>
		<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css?'.date('YmdHis', filemtime(PUBLIC_DIR.'style.css'))?>">
	</head>
	<body>
		<div class="container-fluid">
			<header><?php include_once PROTECTED_DIR.'header.php'; ?></header>
			<nav><?php require_once PROTECTED_DIR.'nav.php'; ?></nav>
			<footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
		</div>
	</body>
</html>