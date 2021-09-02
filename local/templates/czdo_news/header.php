<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>

<head>
	<title><?php $APPLICATION->ShowTitle() ?></title>
	<?$APPLICATION->ShowHead()?>
	<?php
	    use Bitrix\Main\Page\Asset;

		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/reset.css');
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH .'/assets/css/style.css');
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/jquery.fancybox.css');

		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery-2.1.4.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.placeholder.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.fancybox.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/smoothscroll.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.inputmask.bundle.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.validate.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.dotdotdot.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/swipe.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.prettyembed.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.fitvids.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/action.js');

		Asset::getInstance()->addString('<meta content="width=device-width, initial-scale=1" name="viewport">');
		Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">');
		Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>");
		Asset::getInstance()->addString('<script src="/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>');
	?>





	

	
	
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?>	</div> 
	<div class="main">
	<div class="sidebar">
			<a class="s-back">Назад</a>
			<ul>
				<li>
					<a href="">О компании</a>
					<ul>
						<li><a href="">История</a></li>
						<li><a href="">История</a></li>
						<li><a href="">История</a></li>						
						<li><a href="">Пресса о нас</a></li>
					</ul>
				</li>
				<li><a href="">Новости</a></li>
				<li><a href="">Новости</a></li>
				<li><a href="">Новости</a></li>
				<li>
					<a href="/about/">О компании</a>
					<ul>
						<li><a href="">История</a></li>
						<li><a href="">История</a></li>
						<li><a href="">История</a></li>
						<li><a href="">Пресса о нас</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<header>
			<div class="header-top">
				<div class="wrapper">
					<div class="header-top-left">
						<div class="table">
							<div class="table-cell">
								<div class="top-address">
									<i class="icon icon-map-marker"></i> адрес в России <span>Челябинск, Ферросплавная, 126а, оф. 4303</span>
								</div>
							</div>
						</div>
					</div>
					<div class="header-top-middle">
						<div class="table">
							<div class="table-cell">
								<div class="top-email">
									<i class="icon icon-envelope"></i> e-mail <span><a href="mailto:mail@mail.ru">mail@ut-import.ru</a></span>
								</div>
							</div>
						</div>
					</div>
					<div class="header-top-right">
						<div class="language pointer">
							<div class="enable">
								EN<i class="icon icon-sort-down"></i>
							</div>
							<div class="hidden">
								<a href="google.ru">EN</a>
								<a href="">RU</a>
							</div>
						</div>
						<div class="table">
							<div class="table-cell">
								<div class="top-phone">
									<i class="icon icon-phone"></i> телефон <span>+7 (351) 255-17-04</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="wrapper">
					<div class="header-bottom-left">
						<div class="table">
							<div class="table-cell">
								<a href="" class="logo"><img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/images/logo.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="header-bottom-right">
						<div class="marker"></div>
						<ul class="nav">
							<li><a href="">О компании</a></li>
							<li><a href="">Новости</a></li>
							<li><a href="">Продукция</a>
								<ul>
									<li><a href="">Дробометная установка для очистки листового проката и профильных заготовок</a></li>
									<li><a href="">Обитаемая камера со шнековым конвейером</a></li>
									<li><a href="">Дробометная установка для очистки сварных металлоконструкций</a></li>
									<li><a href="">Дробометная установка для очистки листового проката</a></li>
									<li><a href="">Обитаемая камера дробеструйной очистки со скребковыми транспортерами</a></li>
									<li><a href="">Дробеструйная установка подвесного типа</a></li>
									<li><a href="">Дробеструйная установка для трубных заготовок</a></li>
									<li><a href="">Обитаемая камера дробеструйной очистки с вакуумно фасеточного сбора дроби</a></li>
								</ul>
							</li>
							<li><a href="">Наши объекты</a></li>
							<li><a href="">Контакты</a>
								<ul>
									<li><a href="">Дробометная установка для очистки листового проката и профильных заготовок</a></li>
									<li><a href="">Обитаемая камера со шнековым конвейером</a></li>
									<li><a href="">Дробометная установка для очистки сварных металлоконструкций</a></li>
									<li><a href="">Дробометная установка для очистки листового проката</a></li>
									<li><a href="">Обитаемая камера дробеструйной очистки со скребковыми транспортерами</a></li>
									<li><a href="">Дробеструйная установка подвесного типа</a></li>
									<li><a href="">Дробеструйная установка для трубных заготовок</a></li>
									<li><a href="">Обитаемая камера дробеструйной очистки с вакуумно фасеточного сбора дроби</a></li>
								</ul>
							</li>
						</ul>
						<a class="hamburger side-link"><i class="icon icon-bars"></i></a>
					</div>
				</div>
			</div>
		</header>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul>
					<li>
						<a href="" class="home"></a>
					</li>
					<li><a href="">Новости</a></li>
					<li>О нас</li>s
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="wrapper">
				<div class="left-column">
					<div class="title tlink">
						<div class="title-icon sprite"></div>каталог
					</div>
					<ul class="lside">
						<li><a href="">Дробометная установка для очистки сварных металлоконструкций</a></li>
						<li><a href="">Дробометная установка для очистки листового проката</a></li>
						<li><a href="">Дробометная установка для очистки листового проката и профильных заготовок</a></li>
						<li><a href="">Обитаемая камера со шнековым конвейером</a></li>
						<li><a href="">Обитаемая камера дробеструйной очистки с вакуумно фасеточного сбора дроби</a></li>
						<li><a href="">Дробеструйная установка подвесного типа</a></li>
						<li><a href="">Дробеструйная установка для трубных заготовок</a></li>
						<li><a href="">Обитаемая камера дробеструйной очистки со скребковыми транспортерами</a></li>
					</ul>
					<div class="question">
						<div class="question-icon sprite"></div>
					</div>
					<div class="text">По вопросам стоимости услуг и условий их предоставления обращайтесь к нашим менеджерам по телефону <b>+7 (351) 225-17-04.</b></div>
					<div class="online">
						<div class="online-icon sprite"></div>
					</div>
					<div class="text">Так же вы можете отправить <a href=""><span> онлайн заявку</span></a> с сайта.</div>
				</div>
				<div class="right-column">
					
