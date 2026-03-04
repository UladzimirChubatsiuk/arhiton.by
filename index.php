<?php
$pageTitle = 'Архитон &mdash; Ваша идея - наше воплощение!';
$pageDescription = 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = 'https://arhiton.by';
$currentPage = 'index.php';
$extraHead = <<<'HTML'
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "LocalBusiness",
	  "name": "Архитон",
	  "image": "images/logo.png",
	  "address": {
	    "@type": "PostalAddress",
	    "streetAddress": "Дзержинский р-н, Фанипольский с/с, аг. Черкассы ул. Промысловая 5",
	    "addressLocality": "Минская обл.",
	    "postalCode": "220000",
	    "addressCountry": "BY"
	  },
	  "telephone": "+375 (29) 118-20-84",
	  "priceRange": "руб",
	  "url": "https://arhiton.by"
	}
	</script>
HTML;
$extraScripts = <<<'HTML'

HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
							<a>
								<img src="images/sl_1.jpg" alt="МАФ">
								<div class="slider-copy">
									<!-- <h2>Изображение_1</h2> -->
								</div>
							</a>
						</div>
						<div class="item">
							<a>
								<img src="images/sl_2.png" alt="МАФ">
								<div class="slider-copy">
									<!-- <h2>Изображение_2</h2> -->
								</div>
							</a>
						</div>
						<div class="item">
							<a>
								<img src="images/sl_3.jpg" alt="МАФ">
								<div class="slider-copy">
									<!-- <h2>Изображение_3</h2> -->
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>Группы товаров и услуг</h2>
						<p>Мы предлагаем разработку и установку малых архитектурных форм, учитывая ваши потребности и особенности ландшафта. Используем только качественные материалы, чтобы ваши МАФ служили долго и радовали глаз.</p>
					</div>
				</div>
				<div class="row">
		
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-item">
									<a href="services.php?category=bench"><img src="images/bench_1.jpg" alt="Диваны и скамьи" class="img-responsive"></a>
									<h2><a href="services.php?category=bench">Диваны и скамьи</a></h2>
									<p class="role">Комфорт и стиль в каждой детали вашего пространства.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="services.php?category=trash"><img src="images/trash_1.jpg" alt="Урны" class="img-responsive"></a>
									<h2><a href="services.php?category=trash">Урны</a></h2>
									<p class="role">Эстетика и удобство для чистоты вашего города.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="services.php?category=vases"><img src="images/vases_1.png" alt="Вазоны" class="img-responsive"></a>
									<h2><a href="services.php?category=vases">Вазоны</a></h2>
									<p class="role">Украсьте пространство с элегантными решениями.</p>
								</div>
							</div>
		
							<!-- <div class="item">
								<div class="gtco-item">
									<a href="#"><img src="images/img_1.jpg" alt="Садово-парковая мебель" class="img-responsive"></a>
									<h2><a href="#">Садово-парковая мебель</a></h2>
									<p class="role">Создаём уют для отдыха на свежем воздухе.</p>
								</div>
							</div> -->
							<div class="item">
								<div class="gtco-item">
									<a href="services.php?category=bicycle"><img src="images/bicycle_3.jpg" alt="Велопарковки" class="img-responsive"></a>
									<h2><a href="services.php?category=bicycle">Велопарковки</a></h2>
									<p class="role">Прочные и стильные решения для велосипедистов.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="services.php?category=enclosure"><img src="images/kabinka.jpg" alt="" class="img-responsive"></a>
									<h2><a href="services.php?category=enclosure">Уличные и дорожные ограждения</a></h2>
									<p class="role">Надёжность и стиль для зонирования территории.</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END Work -->
	<div class="gtco-section">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
				<h2>Отзывы от организаций</h2>
			</div>
		</div>
		<div class="row">

			<div class="col-md-12">
				<div class="owl-carousel owl-carousel-carousel">
					<div class="item">
						<div class="gtco-item">
							<img src="images/otzyv_1.jpg" alt="Отзывы организаций" class="img-responsive" onclick="openFullscreen(this)">
						</div>
					</div>
					<div class="item">
						<div class="gtco-item">
							<img src="images/otzyv_2.jpg" alt="Отзывы организаций" class="img-responsive" onclick="openFullscreen(this)">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script>
function openFullscreen(img) {
    const fullscreenImg = document.createElement('img');
    fullscreenImg.src = img.src;
    fullscreenImg.style.position = 'fixed';
    fullscreenImg.style.top = '0';
    fullscreenImg.style.left = '0';
    fullscreenImg.style.width = '100%';
    fullscreenImg.style.height = '100%';
    fullscreenImg.style.objectFit = 'contain';
    fullscreenImg.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
    fullscreenImg.style.zIndex = '1000';
    fullscreenImg.style.cursor = 'pointer';
    fullscreenImg.onclick = () => document.body.removeChild(fullscreenImg);
    document.body.appendChild(fullscreenImg);
}
</script>


			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 gtco-news">
						<h2>Новости</h2>	
						<ul>
							<li>
								<a>
									<span class="post-date">Сентябрь 15, 2024</span>
									<h3>Установка новых скамей в городском парке</h3>
									<p>Мы завершили проект по установке стильных скамей и вазонов в центральном парке города. Экологичные материалы и современный дизайн стали акцентом нового пространства для отдыха...</p>
								</a>
							</li>

							<li>
								<a>
									<span class="post-date">Август 30, 2024</span>
									<h3>Начало работ по обустройству велопарковок</h3>
									<p>Мы приступили к проекту по оснащению велопарковками торгового центра. Новый проект обеспечит удобство для велосипедистов и гармонично впишется в современный городской стиль...</p>
								</a>
							</li>

							<li>
								<a>
									<span class="post-date">Июль 20, 2024</span>
									<h3>Декоративные вазоны для частных садов</h3>
									<p>Завершён проект по созданию эксклюзивных вазонов для частного дома. Натуральные материалы и уникальный дизайн сделали пространство ещё уютнее...</p>
								</a>
							</li>
						</ul>
						<p><a class="btn btn-sm btn-special">Больше новостей</a></p>
					</div>
<!-- 					<div class="col-md-5 col-md-push-1 gtco-testimonials">
						<h2>Отзывы</h2>
						<blockquote>
							<p>&ldquo;Работа вашей компании — это нечто! Установленные урны и скамейки идеально вписались в городской пейзаж, а жители остались очень довольны!&ldquo;</p>
							<p class="author"><cite>&mdash; Анна Сергеевна, представитель городской администрации</cite></p>
						</blockquote>
						<blockquote>
							<p>&ldquo;Спасибо за качественную садовую мебель! Мы получили именно то, что хотели — красивую и долговечную.&ldquo;</p>
							<p class="author"><cite>&mdash; Михаил и Екатерина, владельцы частного дома</cite></p>
						</blockquote>
						<blockquote>
							<p>&ldquo;Велопарковки от вашей компании стали настоящим спасением для нашего офиса. Функционально и стильно!.&ldquo;</p>
							<p class="author"><cite>&mdash; Иван Петров, владелец бизнеса</cite></p>
						</blockquote>
					</div> -->
				</div>
			</div>
		</div>
				</div>
			</div>

		</div>

		<!-- END  -->

		<div class="gtco-section gto-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-zip icon"></i>
							<div class="copy">
								<h3>Эстетика в мелких <br>деталях</h3>
								<p>Мы разрабатываем малые архитектурные формы, которые подчеркивают стиль пространства.</p>
								<p><a href="services.php" class="gtco-more">Подробнее</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-hummer icon"></i>
							<div class="copy">
								<h3>Индивидуальный подход к каждому проекту</h3>
								<p>Наша команда помогает воплощать идеи клиентов, тщательно планируя расположение МАФ.</p>
								<p><a href="services.php" class="gtco-more">Подробнее</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-plug icon"></i>
							<div class="copy">
								<h3>Функциональность &amp; Комфорт</h3>
								<p>Создаём удобные и долговечные решения для парков, зон отдыха и городских мероприятий.</p>
								<p><a href="services.php" class="gtco-more">Подробнее</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
