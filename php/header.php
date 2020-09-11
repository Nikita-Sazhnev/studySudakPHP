<header class="header">
	<div class="header__menu">
		<div class="header__links">
			<div class="nav__links-inner">
				<?php $page = $_SERVER['REQUEST_URI']; $page = explode('?', $page); $page = $page[0];?>
				<li class="nav-list-item <?php if($page=='/'){echo 'nav-active';}?>">
					<a href="/">Главная</a>
				</li>
				<li class="nav-list-item <?php if($page == '/pages/ads.php'){echo 'nav-active';}?>">
					<a href="/pages/ads.php">Реклама</a>
				</li>
				<li class="nav-list-item <?php if($page=='/pages/contacs.php'){echo 'nav-active';}?>">
					<a href="/pages/contacs.php">Контакты</a>
				</li>
				<li class="nav-list-item <?php if($page=='/pages/attractons.php'){echo 'nav-active';}?>">
					<a href="/pages/attractons.php">Достопримечательности</a>
				</li>
			</div>
			<div class="search-box">
				<?php $search = $_POST['search']; ?>
				<form action="/pages/search.php" name="search_q" method="POST">
					<div class="header__searhc">
						<input name="search" type="text" class="str__search" placeholder="Введите фразу для поиска" value="<?=$search;?>">
						<input name="btn-searhc" type="submit" value="ПОИСК" class="btn__submit colortext"></input>
					</div>
				</form>
			</div>
			
		</div>
		<div class="header__logo">
			<img src="/img/header_logo.png" alt="">
		</div>
	</div>
</header>