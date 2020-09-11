<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Восстаноление пароля</title>
	</head>
	<body>
		<div class="form__shell" style="width: 100%; min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center;">
			<h3>Для востановления аккаунта введите ваш email</h3>
			<form action="/php/forgot_check.php" method="POST" name="forgot">
				<input type="email" name="email" placeholder="Email"><br>
				<input type="submit" value="Восстановить!" style="margin: 10px 0;">
			</form>
			<a href="/">На главную</a>
		</div>
	</body>
</html>