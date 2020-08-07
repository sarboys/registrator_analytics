<?php include __DIR__.'/db.php';
if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
	$result = mysqli_query($mysqli_connection, "SELECT * FROM `users` WHERE user_id ='".$_COOKIE['id']."' LIMIT 1");
	$data = mysqli_fetch_array($result);
	if(($data['user_hash'] !== $_COOKIE['hash']) &&  ($data['user_id'] !== $_COOKIE['id'])){
		setcookie("id", "", time() - 3600*24*30*12, "/");
		setcookie("hash", "", time() - 3600*24*30*12, "/");
		header('Location: /');
		exit();
	}
} else {
	header('Location: /lk/');
	exit();
}