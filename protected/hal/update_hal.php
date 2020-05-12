<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatehal'])) {
		$postData = [
			'updatehal' => $_POST['updatehal'],
			'halnev' => $_POST['halnev'],
			'haltap' => $_POST['haltap'],
			'szarmazas' => $_POST['szarmazas'],
			'halfaj' => $_POST['halfaj'],
			'szin' => $_POST['szin']
		];
		$updatehal = $_POST['updatehal'];
		$halnev = $_POST['halnev'];
			$query = "UPDATE halak SET halnev='".$_POST['halnev']."', haltap='".$_POST['haltap']."', szarmazas='".$_POST['szarmazas']."', halfaj='".$_POST['halfaj']."', szin='".$_POST['szin']."UPDATE WHERE id='".$_POST['updatehal']."'";

			require_once DATABASE_CONTROLLER;
			if(!executeDML($query)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
	}
	?>

	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="halid">Szerkesztendő Hal ID-ja</label>
				<input type="text" class="form-control" id="updatehal" name="updatehal">
			</div>
			<div class="form-group col-md-12">
				<label for="halnev">Hal neve</label>
				<input type="text" class="form-control" id="halnev" name="halnev">
			</div>
			<div class="form-group col-md-12">
				<label for="haltap">Táp</label>
				<input type="text" class="form-control" id="haltap" name="haltap">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="halszarmazas">Származása</label>
				<input type="text" class="form-control" id="halszarmazas" name="szarmazas">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
		    	<label for="halfaj">Faja</label>
		    	<input type="text" class="form-control" id="halfaj" name="halfaj">
		  	</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="halszin">Színe</label>
				<input type="text" class="form-control" id="halszin" name="szin">
			</div>
		</div>

		<button type="submit" class="btn btn-primary" name="updatehal">Hal Szerkesztése</button>
	</form>