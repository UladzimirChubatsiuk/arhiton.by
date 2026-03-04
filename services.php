<?php
$pageTitle = 'Каталог &mdash; Ваша идея - наше воплощение!';
$pageDescription = 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
$pageKeywords = 'малые архитектурные формы, благоустройство территории, уличная мебель, урны, скамейки, вазоны, велопарковки, ограждения, производство МАФ, Беларусь';
$pageCanonical = 'https://arhiton.by';
$currentPage = 'services.php';
$extraHead = <<<'HTML'

HTML;
$extraScripts = <<<'HTML'
		<script src="js/services.js"></script>
		<script src="js/catalog.js"></script>
HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section gtco-services">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Группы товаров и услуг</h2>
						<p>Здесь вы найдёте широкий ассортимент малых архитектурных форм. Используйте фильтры и поиск, чтобы быстро подобрать подходящие решения для вашего проекта.</p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md">
							<button class="btn btn-special btn-block" id="btn-special">Заказать</button>
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
								<div class="form-group">
									<label for="name">Ваше имя:</label>
									<input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
								</div>
								<div class="form-group">
									<label for="phone">Ваш телефон:</label>
									<input type="tel" id="phone" name="phone" placeholder="Введите ваш номер телефона" required>
								</div>
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
								<input type="hidden" id="selectedProductName" name="selected_product_name" value="">
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

				<div class="catalog-controls">
					<div class="catalog-filter-group" id="catalogCategoryFilters">
						<button class="catalog-filter-btn is-active" data-category="all" type="button">Все</button>
						<button class="catalog-filter-btn" data-category="bench" type="button">Диваны и скамьи</button>
						<button class="catalog-filter-btn" data-category="trash" type="button">Урны</button>
						<button class="catalog-filter-btn" data-category="vases" type="button">Вазоны</button>
						<button class="catalog-filter-btn" data-category="furniture" type="button">Садово-парковая мебель</button>
						<button class="catalog-filter-btn" data-category="bicycle" type="button">Велопарковки</button>
						<button class="catalog-filter-btn" data-category="enclosure" type="button">Уличные и дорожные ограждения</button>
					</div>
					<div class="catalog-tools-row">
						<div class="catalog-search-wrap">
							<input id="catalogSearch" type="search" class="form-control" placeholder="Поиск по названию и размерам">
						</div>
						<div class="catalog-sort-wrap">
							<select id="catalogSort" class="form-control">
								<option value="manual">По умолчанию</option>
								<option value="name_asc">Название (А-Я)</option>
								<option value="name_desc">Название (Я-А)</option>
							</select>
						</div>
					</div>
				</div>

				<div id="catalogResultCount" class="catalog-result-count">Загрузка каталога...</div>
				<div id="catalogSoon" class="catalog-state catalog-soon" style="display:none;">Товары скоро появятся.</div>
				<div id="catalogEmpty" class="catalog-state catalog-empty" style="display:none;">По вашему запросу ничего не найдено.</div>
				<div id="catalogGrid" class="row catalog-grid"></div>

				<div id="catalogGalleryModal" class="catalog-gallery-modal" aria-hidden="true">
					<div class="catalog-gallery-dialog" role="dialog" aria-modal="true" aria-label="Галерея товара">
						<button type="button" class="catalog-gallery-close" id="catalogGalleryClose" aria-label="Закрыть">&times;</button>
						<div class="catalog-gallery-main-wrap">
							<button type="button" class="catalog-gallery-nav prev" id="catalogGalleryPrev" aria-label="Предыдущее фото">&#10094;</button>
							<img id="catalogGalleryImage" src="" alt="">
							<button type="button" class="catalog-gallery-nav next" id="catalogGalleryNext" aria-label="Следующее фото">&#10095;</button>
						</div>
						<div id="catalogGalleryThumbs" class="catalog-gallery-thumbs"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Services -->

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
