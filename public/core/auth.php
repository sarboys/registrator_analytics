<?php include __DIR__.'/db.php';

function generateCode($length) {

	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

	$code = "";

	$clen = strlen($chars) - 1;
	while (strlen($code) < $length) {

		$code .= $chars[mt_rand(0,$clen)];
	}
	return $code;
}

$login = $_POST['login'];
$result = mysqli_query($mysqli_connection, "SELECT user_id,user_password FROM `users` WHERE user_login ='".$login."' LIMIT 1");
$data = mysqli_fetch_array($result);


if($data['user_password'] === $_POST['password']) {
	# Записываем в БД новый хеш авторизации и IP
	$hash = md5(generateCode(10));
	mysqli_query($mysqli_connection, "UPDATE users SET user_hash='".$hash."' WHERE user_id='".$data['user_id']."'");

	# Ставим куки
	setcookie("id", $data['user_id'], time()+9999999,"/");
	setcookie("hash", $hash, time()+9999999,"/");


	# Переадресовываем браузер на страницу проверки нашего скрипта
	print_r('/');

} else {
	print "Вы ввели неправильный логин/пароль";
}
?>