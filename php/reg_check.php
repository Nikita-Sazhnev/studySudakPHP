<?php 
 $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
 $pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);
 $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

 if (mb_strlen($login) < 5 || mb_strlen($login) > 50 ) {
 	echo "Недопустимая длиня логина";
 	exit();
 } elseif (mb_strlen($pass) < 6 || mb_strlen($pass) > 32) {
 	echo "Пароль должен быть более 6 символов";
 	exit();
 } elseif ( $pass != $pass2 ) {
 	echo "Пароли не совпадают";
 	exit();
 }

 $pass = md5($pass."qevntukqer4321");

 $mysql = new mysqli('localhost', 'root', '', 'sudak');
 $mysql->query("INSERT INTO `users` (`email`, `login`, `pass`) VALUES('$email', '$login', '$pass')");


 $mysql->close();

 header('Location: /');
?>