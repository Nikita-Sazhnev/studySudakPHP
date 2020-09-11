<?php require_once '../php/db.php';?>
<?php
$url = $_SERVER['REQUEST_URI'];
$section_id = explode('/', $url);
$section_id = $section_id[3];
$nameming = $db->query("SELECT * FROM `sections` WHERE `id` = '$section_id'");
foreach ($nameming as $value) {
	$name = $value['section-name'];
}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?=$name ?></title>
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
					<h1><?=$name ?></h1>
					<div class="type_string">
						<div class="preview">
							<?php $cards = $db->query("SELECT * FROM `cards` WHERE `seciton-id` = '$section_id' ORDER BY `id` DESC"); ?>
							<?php foreach ($cards as $card):?>
							<div class="preview__box">
								<div class="image__place">
									<img class="preview_image" src="<?=$card['image-url'] ?>" alt="">
								</div>
								<div class="preview__text">
									<p class="preview__date"><?=$card['date'];?> г.</p>
									<p>Количество комнат <?=$card['rooms'];?></p>
									<p>Общая площадь <?=$card['all-space'];?> м2</p>
									<p>Жилая площадь <?=$card['livin-space'];?> м2</p>
									<p>Площадь кухни <?=$card['kitchen'];?> м2</p>
									<p>Этаж <?=$unit['floor'];?></p>
									<p>Этажность дома <?=$card['all-floors'];?></p>
								</div>
								<div class="preview__link">
									<a href="../single_card.php/<?=$card['id'];?>">Детальнее..</a>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include '../php/footer.php'; ?>
		<?php include '../php/body_bottom_scripts.php'; ?>
	</body>
</html>