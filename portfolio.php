<?php
$pageTitle = 'Наши работы &mdash; Ваша идея - наше воплощение!';
$pageDescription = 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = 'https://arhiton.by';
$currentPage = 'portfolio.php';
$extraHead = <<<'HTML'

HTML;
$extraScripts = <<<'HTML'

HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Наши работы</h2>
						<p>Мы гордимся нашими проектами и предлагаем вам ознакомиться с примерами успешной реализации малых архитектурных форм. Каждая работа отражает наш профессионализм, внимание к деталям и индивидуальный подход к клиентам.</p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md">
						<button class="btn btn-special btn-block" id="btn-special">Заказать</a></button>
					</p>
					</div>
				</div>
				
				<div id="popupForm" class="popup-overlay" style="display: none;">
					<div class="popup-content">
						<span class="close-btn" id="closePopup">&times;</span>
						<div id="formContent">
							<h2>Оформление заявки</h2>
							<p>Заполните форму, и мы свяжемся с вами для уточнения деталей.</p>
							<form id="orderForm">
								<!-- Имя -->
								<div class="form-group">
									<label for="name">Ваше имя:</label>
									<input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
								</div>
								<!-- Номер телефона -->
								<div class="form-group">
									<label for="phone">Ваш телефон:</label>
									<input type="tel" id="phone" name="phone" placeholder="Введите ваш номер телефона" required>
								</div>
								<!-- Выбор ассортимента -->
								<div class="form-group">
									<label for="product">Выберите ассортимент:</label>
									<select id="product" name="product" required>
										<option value="" disabled selected>Выберите из списка</option>
										<option value="product1">Диваны и скамьи</option>
										<option value="product2">Урны</option>
										<option value="product3">Вазоны</option>
										<option value="product4">Садово-парковая мебель</option>
										<option value="product5">Велопарковки</option>
										<option value="product6">Уличные и дорожные ограждения</option>
									</select>
								</div>
								<!-- Кнопка отправки -->
								<button type="submit" class="btn btn-special">Отправить заявку</button>
							</form>
						</div>
						<div id="successMessage" style="display: none;">
							<h2>Заявка успешно отправлена!</h2>
							<p>Спасибо за ваш запрос. Мы свяжемся с вами в ближайшее время.</p>
							<button id="closeMessage" class="btn btn-special">Закрыть</button>
						</div>
					</div>
				</div>
				
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-item">
									<a><img src="images/trash_2.png" alt="Урна" class="img-responsive"></a>
									<h2><a>Урна</h2></a>
									<!-- <p class="role">New York</p> -->
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a><img src="images/trash_1.jpg" alt="Урна деревянная с ж/б основанием" class="img-responsive"></a>
									<h2><a>Урна деревянная с ж/б основанием</h2></a>
									<!-- <p class="role">London</p> -->
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a><img src="images/bench_2.jpg" alt="Скамья" class="img-responsive"></a>
									<h2><a>Скамья</h2></a>
									<!-- <p class="role">Paris, France</p> -->
								</div>
							</div>

							<div class="item">
								<div class="gtco-item">
									<a><img src="images/bench_1.jpg" alt="Скамья" class="img-responsive"></a>
									<h2><a>Скамья</h2></a>
									<!-- <p class="role">New York</p> -->
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a><img src="images/bench_tonel.png" alt="Скамья-тонель" class="img-responsive"></a>
									<h2><a>Скамья-тонель</h2></a>
									<!-- <p class="role">New York</p> -->
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END Work -->

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
