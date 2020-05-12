<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'knev' => $_POST['keresztnev'],
		'vnev' => $_POST['vezeteknev'],
		'email' => $_POST['email'],
		'email1' => $_POST['email1'],
		'jelszo' => $_POST['jelszo'],
		'jelszo1' => $_POST['jelszo1']
	];

	if(empty($postData['knev']) || empty($postData['vnev']) || empty($postData['email']) || empty($postData['email1']) || empty($postData['jelszo']) || empty($postData['jelszo1'])) {
		echo "Hiányzó adat(ok)!";
	} else if($postData['email'] != $postData['email1']) {
		echo "Az email címek nem egyeznek!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if ($postData['jelszo'] != $postData['jelszo1']) {
		echo "A jelszavak nem egyeznek!";
	} else if(strlen($postData['jelszo']) < 6) {
		echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
	} else if(!UserRegister($postData['email'], $postData['jelszo'], $postData['knev'], $postData['vnev'])) {
		echo "Sikertelen regisztráció!";
	}

	$postData['jelszo'] = $postData['jelszo1'] = "";
}
?>

<form method="post">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerFirstName">Keresztnév</label>
			<input type="text" class="form-control" id="registerFirstName" name="keresztnev" value="<?=isset($postData) ? $postData['knev'] : "";?>">
		</div>
		<div class="form-group col-md-6">
			<label for="registerLastName">Vezetéknév</label>
			<input type="text" class="form-control" id="registerLastName" name="vezeteknev" value="<?=isset($postData) ? $postData['vnev'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerEmail">Email</label>
			<input type="email" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
		</div>
		<div class="form-group col-md-6">
			<label for="registerEmail1">Email megerősítése</label>
			<input type="email" class="form-control" id="registerEmail1" name="email1" value="<?=isset($postData) ? $postData['email1'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerPassword">Jelszó</label>
			<input type="password" class="form-control" id="registerPassword" name="jelszo" value="">
		</div>
		<div class="form-group col-md-6">
			<label for="registerPassword1">Jelszó megerősítése</label>
			<input type="password" class="form-control" id="registerPassword1" name="jelszo1" value="">
		</div>
	</div>

	<button type="submit" class="btn btn-primary" name="register">Regisztráció</button>
</form>