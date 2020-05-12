<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="public/style.css" />
		<title>HAL</title>
	</head>
	<body>
		<div class="container-fluid">
			<header><?php include_once PROTECTED_DIR.'header.php'; ?></header>
			<nav><?php require_once PROTECTED_DIR.'nav.php'; ?></nav>
			<content><?php require_once PROTECTED_DIR.'content.php'; ?></content>
			<footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
	</div>
		<img src="public/Kepek/halak3.jpg">
	</body>
</html>