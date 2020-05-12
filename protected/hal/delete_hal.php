<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteHAL'])) {
		$postData = [
			'deletehal' => $_POST['deletehal']
		];

		if(empty($postData['deletehal'])) {
			echo "Hiányzó ID!";
		} else {
			$query = "DELETE FROM halak WHERE id='".$_POST['deletehal']."'";

			require_once DATABASE_CONTROLLER;
			if(!executeDML($query)) {
				echo "Hiba a törlés során!";
			} header('Location: index.php');
		}
	}
?>

<h1> Adja meg a törlendő hal ID-ját! </h1>
<form method="post">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="halszarmazas">Hal ID</label>
		<input type="text" class="form-control" id="deletehal" name="deletehal">
</div>
<button type="submit" class="btn btn-primary" name="deleteHAL">Hal törlése</button>
</div>
</form>