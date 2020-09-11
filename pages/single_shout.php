<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Sudak</title>
		<?php include '../php/head_links.php'; ?>
	</head>
	<body>
		<?php include '../php/header.php'; ?>
		<main>
			<div class="left__block">
				<?php include '../php/sidebar.php' ?>
			</div>
			<div class="right__block">
				<?php
				$url = $_SERVER['REQUEST_URI'];
				$url = explode('/', $url);
				$id = $url[3];
				$thiShout = $db->query("SELECT * FROM `shouts` WHERE `id` = $id LIMIT 1");
				foreach ($thiShout as $shout);
				?>
				<div class="right__block__inner single__page">
					<h1>Подробнее об этом объявлении</h1>
					<p>Email: <?=$shout['email']?></p><br>
					<p>Имя: <?=$shout['name']?></p><br>
					<p>Дата: <?=$shout['date']?></p><br>
					<p>Описание: <?=$shout['preview-text']?></p><br>
				</div>
			</div>
		</main>
		<?php include '../php/footer.php'; ?>
		<?php include '../php/body_bottom_scripts.php'; ?>
	</body>
</html>