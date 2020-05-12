<?php 
function IsUserLoggedIn() {
	return $_SESSION  != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($email, $password) {
	$query = "SELECT id, keresztnev, vezeteknev, email, jogosultsag FROM felhasznalok WHERE email = :email AND jelszo = :jelszo";
	$params = [
		':email' => $email,
		':jelszo' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['knev'] = $record['keresztnev'];
		$_SESSION['vnev'] = $record['vezeteknev'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['jogosultsag'] = $record['jogosultsag'];
		header('Location: index.php');
	}
	return false;
}

function UserRegister($email, $password, $fname, $lname) {
	$query = "SELECT id FROM felhasznalok email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO felhasznalok (keresztnev, vezeteknev, email, jelszo) VALUES (:keresztnev, :vezeteknev, :email, :jelszo)";
		$params = [
			':keresztnev' => $fname,
			':vezeteknev' => $lname,
			':email' => $email,
			':jelszo' => sha1($password)
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?P=login');
	} 
	return false;
}

?>