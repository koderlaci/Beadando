<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
	case 'test': require_once PROTECTED_DIR.'normal/permission_test.php'; break;

	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	case 'halak': IsUserLoggedIn() ? require_once PROTECTED_DIR.'hal/hal_lista.php' : header('Location: index.php'); break;

	case 'tap': IsUserLoggedIn() ? require_once PROTECTED_DIR.'tap/tap_lista.php' : header('Location: index.php'); break;

	case 'addhal': IsUserLoggedIn() ? require_once PROTECTED_DIR.'hal/add_hal.php' : header('Location: index.php'); break;

	case 'deletehal': IsUserLoggedIn() ? require_once PROTECTED_DIR.'hal/delete_hal.php' : header('Location: index.php'); break;

	case 'updatehal': IsUserLoggedIn() ? require_once PROTECTED_DIR.'hal/update_hal.php' : header('Location: index.php'); break;

	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}

?>