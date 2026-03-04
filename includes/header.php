<?php
$pageTitle = $pageTitle ?? 'Архитон &mdash; Ваша идея - наше воплощение!';
$pageDescription = $pageDescription ?? 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = $pageKeywords ?? 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = $pageCanonical ?? 'https://arhiton.by';
$currentPage = $currentPage ?? basename($_SERVER['PHP_SELF'] ?? '');
$extraHead = $extraHead ?? '';

function navActive(string $file, string $currentPage): string {
    return $file === $currentPage ? ' class="active"' : '';
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $pageTitle ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
	<meta name="keywords" content="<?= htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8') ?>">
	<meta name="author" content="ООО 'Архитон'">
	<link rel="canonical" href="<?= htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8') ?>">
	<link rel="shortcut icon" href="images/logo.png" type="image/png">

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3G285XD5LH"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-3G285XD5LH');
	</script>
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="9795a092-832f-492c-8d5b-10b0e1483968" type="text/javascript" async></script>
	<?= $extraHead ?>
	</head>
	<body>
		<div class="gtco-loader"></div>
		<div id="page">
			<nav class="gtco-nav urban-header" role="navigation">
				<div class="gtco-container">
					<div class="urban-header-top">
						<div class="urban-top-col urban-top-left">
							<div class="urban-contact-label">Звоните нам:</div>
							<a class="urban-contact-value" href="tel:+375291182084">(29) 118-20-84</a>
						</div>

						<div class="urban-top-col urban-top-social">
							<a class="urban-social-link" href="#" aria-label="Telegram"><i class="bi bi-telegram"></i></a>
							<a class="urban-social-link" href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
							<a class="urban-social-link" href="#" aria-label="Viber"><i class="bi bi-chat-dots"></i></a>
						</div>

						<div class="urban-top-col urban-top-center">
							<a href="index.php" class="urban-logo-badge" aria-label="Архитон">
								<span class="urban-logo-main">АРХИТОН</span>
								<span class="urban-logo-sub">МАФ</span>
							</a>
						</div>

						<div class="urban-top-col urban-top-right">
							<div class="urban-contact-label">Напишите нам:</div>
							<a class="urban-contact-value" href="mailto:arhit0n@mail.ru">arhit0n@mail.ru</a>
						</div>
					</div>

					<div class="urban-header-bottom">
						<div class="menu-1 urban-main-nav">
							<ul>
								<li><a href="services.php">КАТАЛОГ</a></li>
								<li><a href="portfolio.php">ПРОЕКТЫ</a></li>
								<li><a href="about.php">О НАС</a></li>
								<li><a href="contact.php">КОНТАКТЫ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
