<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addHal'])) {
		$postData = [
			'halnev' => $_POST['halnev'],
			'haltap' => $_POST['haltap'],
			'szarmazas' => $_POST['szarmazas'],
			'halfaj' => $_POST['halfaj'],
			'szin' => $_POST['szin']
		];

		if(empty($postData['halnev']) || empty($postData['haltap']) || empty($postData['szarmazas']) || empty($postData['halfaj']) || empty($postData['szin'])) {
			echo "Hiányzó adat(ok)!";
		} else {
			$query = "INSERT INTO halak (halnev, haltap, szarmazas, halfaj, szin) VALUES (:halnev, :haltap, :szarmazas, :halfaj, :szin)";
			$params = [
				':halnev' => $postData['halnev'],
				':haltap' => $postData['haltap'],
				':szarmazas' => $postData['szarmazas'],
				':halfaj' => $postData['halfaj'],
				':szin' => $postData['szin']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
	}
	?>

	<form method="post">
		<div class="form-row">
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

		<button type="submit" class="btn btn-primary" name="addHal">Hal hozzáadása</button>
	</form>