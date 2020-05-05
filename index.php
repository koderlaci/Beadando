<?php
	$hal = "hal";
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="public/style.css">
		<meta charset="utf-8">
		<title>HAL</title>
	</head>
	<body>
		<input type="button" value="<?php echo $hal; ?>" />
			<div class="page">
				<header> <?php include_once "protected/header.php"; ?></header>
				<nav><?php require_once "protected/nav.php"; ?></nav>
				<content><?php require_once "protected/content.php"; ?></content>
				<footer><?php include_once "protected/footer.php"; ?></footer>
			</div>
	</body>
</html>