<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Promo site</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<script type="text/javascript" src="./js/scroll.js"></script>
</head>
<body lang="ru">
<header>
	<div class="size960">
		<div id="logo">
			<a href="#">
				<img src="images/logo.png" title="http://Аренда Спецтехники" />
			</a>
		</div>
		<nav id="top">
			<a href="#about"><li id="fl"><span>О нас</span></li></a>
			<a href="#services"><li><span>Услуги</span></li></a>
			<a href="#tariffs"><li><span>Тарифы</span></li></a>
			<a href="#contacts"><li><span>Контакты</span></li></a>
		</nav>
	</div>
</header>
<div id="content">
	<div class="size960" id="s960">
		<section class="s890">
			<article>
				<h1>Краткое описание нашей компании</h1>
			</article>
			<section id="about">
				<?php include "about.html";?>
			</section>
			<section id="services">
				<?php include "services.html";?>
			</section>
			<section id="tariffs">
				<?php include "tariffs.html";?>
			</section>
			<section id="contacts">
				<?php include "contacts.html";?>
			</section>
		</section>
		<footer>
			<div class="s890">
				<div id="copy"><span>&copy; Все права защищены, </span> <?php echo date(Y);?></div>
				<nav id="bottom">
					<a href="#about"><li><span>О нас</span></li></a>
					<a href="#services"><li><span>Услуги</span></li></a>
					<a href="#tariffs"><li><span>Тарифы</span></li></a>
					<a href="#contacts"><li><span>Контакты</span></li></a>
				</nav>
			</div>
		</footer>
	</div>
</div>

</body>
</html>