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
				$thiCard = $db->query("SELECT * FROM `cards` WHERE `id` = $id LIMIT 1");
				foreach ($thiCard as $card);
				?>
				<div class="right__block__inner single__page">
					<h1>Подробнее об этом предложении</h1>
					<p>Дата: <?=$card['date']; ?></p><br>
					<p>Комнаты: <?=$card['rooms']; ?></p><br>
					<p>Общая площадь: <?=$card['all-space']; ?></p><br>
					<p>Жилая площадь: <?=$card['livin-space']; ?></p><br>
					<p>Кухня: <?=$card['kitchen']; ?></p><br>
					<p>Этаж: <?=$card['floor']; ?></p><br>
					<p>Всего этажей: <?=$card['all-floors']; ?></p><br>
					<div>
						<img src="<?=$card['image-url']; ?>" style="width: 100%;" alt="">
					</div>


				</div>
			</div>
		</main>
		<?php include '../php/footer.php'; ?>
		<?php include '../php/body_bottom_scripts.php'; ?>
	</body>
</html>