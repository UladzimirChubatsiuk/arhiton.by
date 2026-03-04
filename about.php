<?php
$pageTitle = 'О нас &mdash; Ваша идея - наше воплощение!';
$pageDescription = 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = 'https://arhiton.by';
$currentPage = 'about.php';
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
						<h2>Наша команда</h2>
						<p>Мы группа опытных профессионалов, объединённых общей целью создания функциональных и эстетичных малых архитектурных форм. Мы сочетает в себе инженеров, дизайнеров, архитекторов и менеджеров, каждый из которых привносит свои знания и навыки в каждый проект.</p>
					</div>
					
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md">
							<button class="btn btn-special btn-block" id="joinTeamBtn">Вступай в команду</button>
						</p>
					</div>
										
					<!-- Всплывающее окно -->
					<div id="popupForm" class="popup-overlay" style="display: none;">
						<div class="popup-content">
							<span class="close-btn" id="closePopup">&times;</span>
							<div id="formContent">
								<h2>Присоединяйтесь к нашей команде</h2>
								<p>Заполните форму, и мы свяжемся с вами.</p>
								<form id="teamForm">
									<!-- Имя -->
									<div class="form-group">
										<label for="name">Имя:</label>
										<input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
									</div>
									<!-- Номер телефона -->
									<div class="form-group">
										<label for="phone">Номер телефона:</label>
										<input type="tel" id="phone" name="phone" placeholder="Введите ваш номер телефона" required>
									</div>
									<!-- Специализация -->
									<div class="form-group">
										<label for="specialization">Специализация:</label>
										<select id="specialization" name="specialization" required>
											<option value="" disabled selected>Выберите вашу специализацию</option>
											<option value="архитектор">Архитектор</option>
											<option value="дизайнер">Дизайнер</option>
											<option value="инженер">Инженер</option>
											<option value="другое">Другое</option>
										</select>
									</div>
									<!-- О себе -->
									<div class="form-group">
										<label for="about">О себе:</label>
										<textarea id="about" name="about" rows="5" placeholder="Расскажите о себе" required></textarea>
									</div>
									<!-- Кнопка отправки -->
									<button type="submit" class="btn btn-special">Отправить</button>
								</form>
							</div>
							<div id="successMessage" style="display: none;">
								<h2>Заявка успешно отправлена!</h2>
								<p>Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.</p>
								<button id="closeMessage" class="btn btn-special">Закрыть</button>
							</div>
						</div>
					</div>
					
				
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2 style="font-size: 40px; margin-bottom: 10px; line-height: 1.5; color: #4d4d4d; font-weight: 300;">
							Наши преимущества</h2>
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_1.png" alt="" class="img-responsive">
									<h2>Индивидуальные решения для проектов</h2>
									<p class="role">МАФ</p>
									<p>Мы предлагаем уникальные малые архитектурные формы, которые соответствуют вашим потребностям и пространственным особенностям.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_2.png" alt="" class="img-responsive">
									<h2>Долговечность и надёжность материалов</h2>
									<p class="role">МАФ</p>
									<p>Все наши изделия изготовлены из высококачественных материалов, устойчивых к внешним воздействиям и времени.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_3.png" alt="" class="img-responsive">
									<h2>Современный и стильный дизайн</h2>
									<p class="role">МАФ</p>
									<p>Мы создаём элегантные элементы, которые идеально вписываются в городской и природный ландшафт, подчеркивая его красоту.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_4.png" alt="" class="img-responsive">
									<h2>Экологическая ответственность</h2>
									<p class="role">МАФ</p>
									<p>Мы применяем только экологически чистые материалы для наших проектов, поддерживая устойчивое развитие и заботясь об окружающей среде.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_5.png" alt="" class="img-responsive">
									<h2>Быстрая установка и обслуживание</h2>
									<p class="role">МАФ</p>
									<p>Наши решения устанавливаются быстро и не требуют сложного ухода, что делает их удобными и привлекательными для эксплуатации.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_6.png" alt="" class="img-responsive">
									<h2>Конкурентоспособные цены</h2>
									<p class="role">МАФ</p>
									<p>У нас множество предложений с доступными и самыми низкиими ценами, обеспечивая высокий стандарт качества при оптимальном бюджете.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="images/staff_7.png" alt="" class="img-responsive">
									<h2>Профессионализм и опыт команды</h2>
									<p class="role">МАФ</p>
									<p>Наша команда состоит из опытных специалистов, которые знают, как создавать качественные и функциональные архитектурные формы.</p>
									<ul class="fh5co-social">
										<li><a><i class="icon-facebook"></i></a></li>
										<li><a><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3"><i class="icon-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

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
