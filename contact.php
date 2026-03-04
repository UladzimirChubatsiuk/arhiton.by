<?php
$pageTitle = 'Контакты &mdash; Ваша идея - наше воплощение!';
$pageDescription = 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = 'https://arhiton.by';
$currentPage = 'contact.php';
$extraHead = <<<'HTML'

HTML;
$extraScripts = <<<'HTML'
		<script src="js/google_map.js"></script>
		<script src="js/reviews.js"></script>
HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Контакты</h2>
						<p>Мы всегда готовы ответить на ваши вопросы, помочь с выбором продукции и обсудить детали вашего проекта. Свяжитесь с нами любым удобным способом!</p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md"><a href="#review-form" class="btn btn-special btn-block">Написать отзыв</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form id="review-form" action="#" method="post">
							<div class="form-group">
								<label for="name">Имя</label>
								<input type="text" class="form-control" id="name" name="name" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="message">Отзыв</label>
								<textarea id="message" name="message" cols="30" rows="10" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-special" value="Оставить отзыв">
							</div>
						</form>
		
					</div>
				
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Наш адрес</h3>
							<p>Мы находимся в удобном месте, с доступными парковочными местами. Посетите наш офис или свяжитесь с нами онлайн.</p>
							<ul >
								<li class="address">Юридический адрес: Минская обл., Дзержинский р-н, Фанипольский с/с, аг. Черкассы ул. Промысловая 5</li>
								<!-- <li class="address">Адрес: </li> -->
								<li class="phone"><a href="tel://+375291182084">+375291182084</a></li>
								<li class="email"><a href="https://e.mail.ru/compose/">arhit0n@mail.ru</a></li>
								<li class="icon-instagram"><a href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3">arhiton.by</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Contact -->
		 
	

		
		


		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d400.5787934779075!2d27.342302663295712!3d53.76937346645618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2sby!4v1734190724462!5m2!1sru!2sby" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		

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
