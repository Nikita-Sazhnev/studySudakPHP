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
				<div class="right__block__inner">
					<h1>Доска объявлений (<?=$counter?>)</h1>
					<div class="shouts-style">
						<div class="shout" style="display: flex; justify-content: flex-start; flex-wrap: wrap;">
							<?php
								$shouts = getItem('shouts');
								foreach ($shouts as $shout):
							?>
							<div class="box__shout" style="flex-basis: 30%; margin-top: 1.5rem; margin-left: 1rem;">
								<div class="top__info">
									<p class="data">Дата: <?= $shout['date'];?></p>
									<p class="author">Автор: <?= $shout['name'];?></p>
									<p class="email">e-mail: <?= $shout['email'];?></p>
								</div>
								<div class="about__info">
									<p><?= $shout['preview-text'];?></p>
								</div>
								<a class="photo__here" href="/pages/single_shout.php/<?= $shout['id'];?>">Фото Здесь</a>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include '../php/footer.php'; ?>
	<?php include '../php/body_bottom_scripts.php'; ?>
</body>
</html>