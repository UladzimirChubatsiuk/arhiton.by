<?php
require_once __DIR__ . '/includes/seo.php';

$pageCanonicalPath = '/catalog';
$extraScripts = '        <script src="' . arhiton_asset_path('/js/services.js') . '"></script>' . "\n"
    . '        <script src="' . arhiton_asset_path('/js/catalog.js') . '"></script>';
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section gtco-services">
			<div class="gtco-container">
				<div class="row catalog-hero">
					<div class="col-md-8">
						<div class="catalog-hero__content">
							<span class="catalog-hero__eyebrow">Каталог</span>
							<h1 class="catalog-hero__title">Малые архитектурные формы для благоустройства и городской среды</h1>
							<p class="catalog-hero__lead">В каталоге собраны решения для дворов, парков, общественных пространств и инфраструктурных объектов. Используйте фильтры и поиск, чтобы быстро подобрать изделия под ваш проект, стиль территории и условия эксплуатации.</p>
							<div class="catalog-hero__points">
								<div class="catalog-hero__point">Быстрый подбор по категориям и названию</div>
								<div class="catalog-hero__point">Решения для жилых, общественных и городских пространств</div>
								<div class="catalog-hero__point">Возможность адаптации изделия под задачу объекта</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<aside class="catalog-hero__panel">
							<div class="catalog-hero__panel-label">Подбор ассортимента</div>
							<h2 class="catalog-hero__panel-title">Каталог для быстрого выбора и проектной комплектации</h2>
							<p class="catalog-hero__panel-text">Подбирайте скамьи, урны, вазоны, светильники, кабинки и другие МАФ под архитектуру пространства, нагрузку и бюджет проекта.</p>
							<div class="catalog-hero__stats">
								<div class="catalog-hero__stat">
									<span class="catalog-hero__stat-value">Категории</span>
									<span class="catalog-hero__stat-text">от базовых изделий до нестандартных решений</span>
								</div>
								<div class="catalog-hero__stat">
									<span class="catalog-hero__stat-value">Поиск</span>
									<span class="catalog-hero__stat-text">для быстрого подбора по названию и параметрам</span>
								</div>
							</div>
							<button class="btn btn-special btn-block catalog-hero__button" id="btn-special">Заказать</button>
						</aside>
					</div>
				</div>

				<?php include __DIR__ . '/includes/order-popup.php'; ?>

				<div class="catalog-controls">
					<div class="catalog-filter-group" id="catalogCategoryFilters">
						<button class="catalog-filter-btn is-active" data-category="all" type="button">Все</button>
						<button class="catalog-filter-btn" data-category="bench" type="button">Скамьи</button>
						<button class="catalog-filter-btn" data-category="trash" type="button">Урны</button>
						<button class="catalog-filter-btn" data-category="vases" type="button">Кашпо | Вазоны</button>
						<button class="catalog-filter-btn" data-category="lights" type="button">Уличные светильники</button>
						<button class="catalog-filter-btn" data-category="campfire_areas" type="button">Зоны кострища</button>
						<button class="catalog-filter-btn" data-category="cabins" type="button">Кабинки для переодевания</button>
						<button class="catalog-filter-btn" data-category="chairs" type="button">Шезлонги</button>
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

		<section class="gtco-section catalog-content-block">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="catalog-content-intro text-center">
							<span class="catalog-content-eyebrow">Подбор под задачу объекта</span>
							<h2 id="catalog-content-title">Какие решения можно подобрать в каталоге Архитон</h2>
							<p>Каталог помогает быстро подобрать МАФ под жилой комплекс, двор, парк, сквер, общественную территорию или инфраструктурный объект. Если типового решения недостаточно, мы адаптируем изделие под размеры, материалы и архитектуру пространства.</p>
						</div>
					</div>
				</div>
				<div class="catalog-copy-grid">
					<article class="catalog-copy-card">
						<h3>Скамьи и зоны отдыха</h3>
						<p>Подбираем скамьи для дворов, парков, набережных, жилых комплексов и общественных пространств, где важны устойчивость к нагрузке, удобство посадки и аккуратная интеграция в архитектурную среду.</p>
					</article>
					<article class="catalog-copy-card">
						<h3>Урны, вазоны и малые элементы благоустройства</h3>
						<p>Предлагаем бетонные урны, вазоны и кашпо для поддержания порядка и формирования визуально цельного пространства на общественных и коммерческих объектах.</p>
					</article>
					<article class="catalog-copy-card">
						<h3>Светильники, кабинки и специализированные решения</h3>
						<p>В каталоге собраны уличные светильники, кабинки для переодевания, шезлонги и зоны кострища для объектов отдыха, пляжей, общественных зон и сезонных пространств.</p>
					</article>
				</div>
				<div class="catalog-content-note">
					<p>Если вам нужен подбор под конкретный объект, откройте карточки в каталоге, отправьте заявку или <a href="/contacts">свяжитесь с нами</a> для расчета сроков и стоимости. Посмотреть реализованные решения можно в разделе <a href="/projects">проекты</a>.</p>
				</div>
			</div>
		</section>

		<section class="gtco-section catalog-faq-block">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2 id="catalog-faq-title">Вопросы по каталогу и заказу</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel-group faq-accordion" id="catalogFaq" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="catalogFaqOneHeading">
									<h3 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#catalogFaq" href="#catalogFaqOne" aria-expanded="true" aria-controls="catalogFaqOne">Можно ли адаптировать изделие под конкретный объект?</a>
									</h3>
								</div>
								<div id="catalogFaqOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="catalogFaqOneHeading">
									<div class="panel-body">Да, мы можем изменить размеры, материалы, цветовые решения и конструктив под архитектуру пространства, интенсивность эксплуатации и требования проекта.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="catalogFaqTwoHeading">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#catalogFaq" href="#catalogFaqTwo" aria-expanded="false" aria-controls="catalogFaqTwo">Как узнать стоимость изделий из каталога?</a>
									</h3>
								</div>
								<div id="catalogFaqTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="catalogFaqTwoHeading">
									<div class="panel-body">Стоимость зависит от модели, объема заказа, комплектации и особенностей изготовления. Для расчета отправьте заявку через каталог или свяжитесь с нами напрямую.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="catalogFaqThreeHeading">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#catalogFaq" href="#catalogFaqThree" aria-expanded="false" aria-controls="catalogFaqThree">Работаете ли вы только по Минску?</a>
									</h3>
								</div>
								<div id="catalogFaqThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="catalogFaqThreeHeading">
									<div class="panel-body">Нет, мы поставляем изделия по Минску и всей Беларуси, а при необходимости согласовываем доставку и установку на объекте.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php include __DIR__ . '/includes/features-strip.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
