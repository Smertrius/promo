<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Promo site</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body lang="ru">
<header>
	<div class="size960">
		<div id="logo">
			<a href="#">
				<img src="images/logo.jpg" title="http://Аренда Спецтехники" />
				<h1>Аренда Спецтехники</h1>
				<p id="logo2">Услуги спецтехники в вашем городе</p>
			</a>
		</div>
		<nav id="top">
			<a href=""><li id="fl"><span>О нас</span></li></a>
			<a href=""><li><span>Услуги</span></li></a>
			<a href=""><li><span>Тарифы</span></li></a>
			<a href=""><li><span>Контакты</span></li></a>
		</nav>
	</div>
</header>
<div id="content">
	<div class="size960" id="s960">
		<section id="firstSec">
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
			<nav id="bottom">
				<a href=""><li><span>О нас</span></li></a>
				<a href=""><li><span>Услуги</span></li></a>
				<a href=""><li><span>Тарифы</span></li></a>
				<a href=""><li><span>Контакты</span></li></a>
			</nav>
		</footer>
	</div>
</div>
</body>
</html>