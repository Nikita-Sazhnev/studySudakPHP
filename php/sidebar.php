<div class="menu">
	<h2>
	Меню
	</h2>
	<div class="nav__links">
		<ul>
			<li><a class="navlink <?php if($page == '/pages/aparts.php'){echo 'menu-active';}?>" href="/pages/cards.php/3">Аренда квартир</a></li>
			<li><a class="navlink <?php if($page == '/pages/services.php'){echo 'menu-active';}?>" href="/pages/services.php">Услуги</a></li>
			<li><a class="navlink <?php if($page == '/pages/shouts.php'){echo 'menu-active';}?>" href="/pages/shouts.php">Доска объявлений</a></li>
			<li><a class="navlink <?php if($page == '/pages/phones.php'){echo 'menu-active';}?>" href="/pages/phones.php">Телефонный справочник</a></li>
			<li><a class="navlink <?php if($page == '/pages/about-city.php'){echo 'menu-active';}?>" href="/pages/about-city.php">О Городе</a></li>
		</ul>
	</div>
</div>
<form action="/pages/check.php" name="regform" method="POST">
	<div class="login">
		<h2 class="regestration">Регистрация</h2>
		<div class="reg__form">
			<?php
				if ($_COOKIE['user'] == ''):
			?>
			<div class="login_input">
				<p>Логин</p>
				<input type="text" name="login">
			</div>
			<div class="pass_input">
				<p>Пароль</p>
				<input type="password" name="pass">
			</div>
			<div>
				<input type="submit" name="done" class="enter" value="Войти">
			</div>
			<div class="support__links">
				<a href="/pages/reg.php">Регистрация</a>
				<a class="forgot" href="/pages/forgot.php">Забыли пароль?</a>
			</div>
			<?php else: ?>
			<div class="logout" style="text-align: center; margin: 0.5rem 1rem;">
				<h3>Залогинен под ником - <?php echo $_COOKIE['user'];?>.</h3>
				<a href="/php/logout.php">Выйти</a>
				<h6 style="margin:.5rem 0;">Ваш email -
				<?php
					$mysql = new mysqli('localhost', 'root', '', 'sudak');
					$cookieUser = $_COOKIE['user'];
					$myEmail = $mysql->query("SELECT * FROM `users` WHERE `login` = '$cookieUser'");
					$myEmail = $myEmail->fetch_assoc();
					echo $myEmail['email'];
					$mysql->close();
				?>
				</h6>
			</div>
			<?php endif?>
		</div>
		
	</div>
</form>
<div class="shout">
	<div class="shout__content">
		<?php 
		$shoutsAll = getItem('shouts');
		foreach ($shoutsAll as $key) {
			$counter++;
		} 
		?>
		<h2 class="shout__title">Объявления (<?=$counter?>)</h2>
		<?php
			$shouts = getItem('shouts', 6);
			// echo count($shouts);
			foreach ($shouts as $shout):
		?>
		<div class="box__shout">
			<div class="top__info">
				<p class="data">Дата: <?= $shout['date'];?></p>
				<p class="author">Автор: <?= $shout['name'];?></p>
				<p class="email">e-mail: <?= $shout['email'];?></p>
			</div>
			<div class="about__info">
				<p><?= $shout['preview-text'];?></p>
			</div>
			<a class="photo__here" href="/pages/single_shout.php/<?=$shout['id'];?>">Фото Здесь</a>
		</div>
		<?php endforeach; ?>
		<div class="other__shouts">
			<a href="/pages/shouts.php">Другие объявления</a>
		</div>
	</div>
</div>