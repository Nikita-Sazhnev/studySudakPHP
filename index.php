<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Sudak</title>
		<?php include 'php/head_links.php'; ?>
	</head>
	<body>
		<?php include 'php/header.php'; ?>
		<main>
			<div class="left__block">
				<?php include 'php/sidebar.php'; ?>
			</div>
			<div class="right__block">
				<div class="right__block__inner">
					<div class="main__welcome ">
						<div class="top__line">
							<h1>Добро пожаловать в Судак!</h1>
							<div class="social__links">
								<ul>
									<li><a href="http://ya.ru" target="_blank"><img src="img/ya.png" alt=""></a></li>
									<li><a href="http://vk.com" target="_blank"><img src="img/vk.png" alt=""></a></li>
									<li><a href="https://ok.ru" target="_blank"><img src="img/ok.png" alt=""></a></li>
									<li><a href="https://twitter.com/home" target="_blank"><img src="img/tw.png" alt=""></a></li>
									<li><a href="https://www.facebook.com" target="_blank"><img src="img/fb.png" alt=""></a></li>
									<li><a href="https://my.mail.ru" target="_blank"><img src="img/warudo.png" alt=""></a></li>
									<li><a href="https://www.linkedin.com" target="_blank"><img src="img/pencil.png" alt=""></a></li>
								</ul>
							</div>
						</div>
						<div class="welcome__text">
							<p class="welcome__about">
								Вы находитесь на портале, посвященном городу-курорту Судак. На этом портале Вы сможете забронировать номер по<br>ценегостиницы, пансионата или снять квартиру не переплатив ни копейки посредникам или таксистам. Наши услуги бесплатны для клиентов и оплачены хозяевами гостиниц. Все приведенные на сайте цены - это реальные цены гостиниц без каких либо "накруток".<br>Желаем Вам приятного отдыха!
								<p></p>
							</div>
						</div>
						<?php 
						require_once 'php/card_setup.php'
						?>
						<?php
						for ($i=0; $i < $allCategoryCount; $i++): ?>
						<div class="appartment__preview">
							<div class="nameming">
								<a href="pages/cards.php/<?=$temp_arr['section_id'][$i]?>"><h2><?=$temp_arr['nameming'][$i];?></h2></a>
								<p>
									(<?php
									$sections_id = $temp_arr['section_id'][$i];
									$counter = $db->query("SELECT * FROM `cards` WHERE `seciton-id` = '$sections_id'");
									echo $counter->rowCount(); 
									//Вывод сколько всего доступно предлложений жилья
									?>)
								</p>
							</div>
							<div class="type_string">
								<div class="preview">
									<?php $cards = $db->query("SELECT * FROM `cards` WHERE `seciton-id` = '$sections_id' ORDER BY `id` DESC LIMIT 3"); ?>
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
											<a href="pages/single_card.php/<?=$card['id'];?>">Детальнее..</a>
										</div>
									</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</main>
		<?php include 'php/footer.php'; ?>
		<?php include 'php/body_bottom_scripts.php'; ?>
	</body>
</html>