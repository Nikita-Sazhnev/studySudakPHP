<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Регистрация</title>
	</head>
	<body>
		<div class="form__shell" style="width: 100%; min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center;">
			<h3>Регистрация</h3>
			<form action="/php/reg_check.php" method="POST" name="registration">
				<input type="text" name="login" placeholder="Логин"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<input type="password" name="pass" placeholder="Пароль"><br>
				<input type="password" name="pass2" placeholder="Ещё раз пароль"><br>
				<input type="submit" name="done" value="Готово"><br>
			</form>
			<a href="/">На главную</a>
		</div>
	</body>
</html>