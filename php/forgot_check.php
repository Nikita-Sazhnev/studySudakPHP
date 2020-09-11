<?php 
require_once __DIR__. '/head_links.php';
$email = $_POST['email'];

$user = $db->query("SELECT * FROM `users` WHERE `email` = '$email'");

if ($user->rowcount() == 0) {
	echo "Не существует пользователя с таким email <br />";
	echo "<a href=\"/pages/forgot.php\">Попробовать снова</a>";
	exit();
} 

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$newPass = substr(str_shuffle($permitted_chars), 0, 10);
mail($email, 'Новый пароль', $newPass);

$newPass = md5($newPass."qevntukqer4321");

$updatePass = $db->query("UPDATE `users` SET `pass` = '$newPass' WHERE `users`.`email` = '$email'");

?>
<br>
<p>Новый пароль был выслан вам на почту</p><br>
<a href="/">На главную</a>