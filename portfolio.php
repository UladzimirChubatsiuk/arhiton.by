<?php
require_once __DIR__ . '/includes/seo.php';

$pageCanonicalPath = '/projects';
$extraScripts = '<script src="' . arhiton_asset_path('/js/services.js') . '"></script>' . "\n"
    . '<script src="' . arhiton_asset_path('/js/catalog.js') . '"></script>' . "\n"
    . <<<'HTML'
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof window.openCatalogGalleryImages !== 'function') {
    return;
  }

  document.querySelectorAll('.js-portfolio-gallery').forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      var src = trigger.getAttribute('data-image-src');
      if (!src) {
        return;
      }

      window.openCatalogGalleryImages([
        {
          src: src,
          alt: trigger.getAttribute('data-image-alt') || trigger.getAttribute('data-gallery-title') || 'Проект'
        }
      ], trigger.getAttribute('data-gallery-title') || 'Проект', 0);
    });
  });
});
</script>
HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section">
			<div class="gtco-container">
				<div class="row portfolio-hero">
					<div class="col-md-8">
						<div class="portfolio-hero__content">
							<span class="portfolio-hero__eyebrow">Наши проекты</span>
							<h1 class="portfolio-hero__title">Наши работы в городской и общественной среде</h1>
							<p class="portfolio-hero__lead">Мы создаём малые архитектурные формы для парков, дворов, общественных территорий и инфраструктурных объектов. Каждый проект показывает, как практичность, надёжность и аккуратный дизайн работают вместе.</p>
							<div class="portfolio-hero__points">
								<div class="portfolio-hero__point">Индивидуальная адаптация под объект</div>
								<div class="portfolio-hero__point">Качественные материалы и долговечные конструкции</div>
								<div class="portfolio-hero__point">Изготовление решений для реальной городской эксплуатации</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<aside class="portfolio-hero__panel">
							<div class="portfolio-hero__panel-label">В работе</div>
							<h2 class="portfolio-hero__panel-title">Проекты под задачи заказчика</h2>
							<p class="portfolio-hero__panel-text">Подбираем конструкцию, материалы и визуальный характер изделия под архитектуру пространства, нагрузку и бюджет проекта.</p>
							<div class="portfolio-hero__stats">
								<div class="portfolio-hero__stat">
									<span class="portfolio-hero__stat-value">МАФ</span>
									<span class="portfolio-hero__stat-text">для благоустройства и общественных зон</span>
								</div>
								<div class="portfolio-hero__stat">
									<span class="portfolio-hero__stat-value">Под ключ</span>
									<span class="portfolio-hero__stat-text">от идеи до готового изделия</span>
								</div>
							</div>
							<button class="btn btn-special btn-block portfolio-hero__button" id="btn-special">Заказать</button>
						</aside>
					</div>
				</div>
				
				<?php include __DIR__ . '/includes/order-popup.php'; ?>
				
				<div class="row">

					<div class="col-md-12">
						<section class="portfolio-showcase" aria-labelledby="portfolio-showcase-title">
							<div class="portfolio-showcase__intro">
								<div class="portfolio-showcase__copy">
									<span class="portfolio-showcase__eyebrow">Реализованные решения</span>
									<h2 id="portfolio-showcase-title" class="portfolio-showcase__title">Подборка проектов для городских и общественных пространств</h2>
									<p class="portfolio-showcase__lead">В этой секции собраны изделия, которые показывают наш подход к благоустройству: надёжные материалы, чистая геометрия, практичная эксплуатация и аккуратная интеграция в архитектурную среду.</p>
								</div>
								<div class="portfolio-showcase__facts">
									<div class="portfolio-showcase__fact">
										<span class="portfolio-showcase__fact-value">МАФ</span>
										<p>Производим изделия для парков, дворов, общественных зон и транспортной инфраструктуры.</p>
									</div>
									<div class="portfolio-showcase__fact">
										<span class="portfolio-showcase__fact-value">Под заказ</span>
										<p>Адаптируем материалы, размеры и конструктив под задачи конкретного объекта.</p>
									</div>
								</div>
							</div>

							<div class="portfolio-showcase__grid">
								<article class="portfolio-showcase__card portfolio-showcase__card--wide">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_0.jpg" data-image-alt="Скамья-тонель для благоустройства общественного пространства" data-gallery-title="Скамья-тонель">
										<img src="images/portfolio/portfolio_0.jpg" alt="Скамья-тонель для благоустройства общественного пространства" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">г. Мосты</div>
										<h3>Скамья-тонель</h3>
										<p>Один из самых выразительных реализованных проектов компании. Скамья-тонель была изготовлена и поставлена для благоустройства территории, где требовалось совместить удобную зону отдыха, визуальный акцент и устойчивость к интенсивной эксплуатации. По этому объекту заказчик подтвердил качество изготовления, соблюдение сроков поставки и добросовестное выполнение работ.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_1.png" data-image-alt="Скамейки для благоустройства сквера по улице Гейсика в Несвиже" data-gallery-title="Скамейки для благоустройства сквера">
										<img src="images/portfolio/portfolio_1.png" alt="Скамейки для благоустройства сквера по улице Гейсика в Несвиже" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">г. Несвиж</div>
										<h3>Скамейки для благоустройства сквера</h3>
										<p>Изготовление скамеек для благоустройства сквера по улице Гейсика в городе Несвиже. Проект был ориентирован на создание удобной и визуально аккуратной зоны отдыха, где изделия должны были сочетать надежную конструкцию, комфорт для посетителей и гармоничное встраивание в общественное пространство.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_6.png" data-image-alt="Скамейки для благоустройства города Орша" data-gallery-title="Скамейки для благоустройства города Орша">
										<img src="images/portfolio/portfolio_6.png" alt="Скамейки для благоустройства города Орша" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">г. Орша</div>
										<h3>Скамейки для благоустройства города</h3>
										<p>Изготовление скамеек для благоустройства города Орша в рамках обновления общественных территорий. Для проекта были подобраны решения, сочетающие удобство для ежедневного использования, устойчивость к уличной нагрузке и лаконичный внешний вид, чтобы изделия органично вписывались в городскую среду и сохраняли аккуратный вид в эксплуатации.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_2.jpg" data-image-alt="Скамейки и урны для благоустройства Музея Славы Могилевской области" data-gallery-title="Благоустройство Музея Славы Могилевской области">
										<img src="images/portfolio/portfolio_2.jpg" alt="Скамейки и урны для благоустройства Музея Славы Могилевской области" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">Могилевская область</div>
										<h3>Благоустройство Музея Славы</h3>
										<p>Изготовление урн и скамеек для благоустройства Музея Славы Могилевской области. Для объекта был выполнен комплект изделий, который объединил удобные места отдыха, аккуратную организацию пространства и устойчивые к ежедневной эксплуатации элементы благоустройства, соответствующие статусу общественно значимой локации.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_3.png" data-image-alt="Урна для общественных пространств на станциях Минского метрополитена" data-gallery-title="Поставка урн для Минского метрополитена">
										<img src="images/portfolio/portfolio_3.png" alt="Урна для общественных пространств на станциях Минского метрополитена" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">г. Минск</div>
										<h3>Поставка урн для станций Минского метрополитена</h3>
										<p>Поставка бетонных урн для объектов Минского метрополитена. Эти изделия установлены на станциях «Аэродромная», «Неморшанский сад» и «Слуцкий гостинец» в Минске, где важны устойчивость к высокой нагрузке, аккуратный внешний вид и надежность в ежедневной эксплуатации.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_4.png" data-image-alt="Изделия для благоустройства пляжей Воложинского района" data-gallery-title="Благоустройство пляжей Воложинского района">
										<img src="images/portfolio/portfolio_4.png" alt="Изделия для благоустройства пляжей Воложинского района" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">Воложинский район</div>
										<h3>Благоустройство пляжей</h3>
										<p>Изготовление изделий для благоустройства пляжей Воложинского района с учётом сезонной нагрузки, открытой среды и требований к долговечности. В проекте был сделан акцент на практичные материалы, устойчивые конструкции и аккуратный внешний вид, чтобы элементы благоустройства сохраняли эксплуатационные качества в течение длительного срока.</p>
									</div>
								</article>

								<article class="portfolio-showcase__card">
									<button type="button" class="portfolio-showcase__media js-portfolio-gallery" data-image-src="images/portfolio/portfolio_5.png" data-image-alt="Изделия для благоустройства поселка Стрешин" data-gallery-title="Благоустройство поселка Стрешин">
										<img src="images/portfolio/portfolio_5.png" alt="Изделия для благоустройства поселка Стрешин" class="img-responsive">
										<span class="portfolio-showcase__media-badge">Увеличить фото</span>
									</button>
									<div class="portfolio-showcase__body">
										<div class="portfolio-showcase__meta">п. Стрешин</div>
										<h3>Благоустройство поселка Стрешин</h3>
										<p>Реализованное решение по благоустройству поселка Стрешин с поставкой изделий для общественного пространства. В проекте был сделан акцент на долговечные материалы, удобство для жителей и аккуратную интеграцию элементов в существующую среду, чтобы территория выглядела целостно и оставалась удобной в ежедневной эксплуатации.</p>
									</div>
								</article>
							</div>
						</section>
					</div>
					
				</div>
			</div>
		</div>

		<div id="catalogGalleryModal" class="catalog-gallery-modal" aria-hidden="true">
			<div class="catalog-gallery-dialog" role="dialog" aria-modal="true" aria-label="Галерея проекта">
				<button type="button" class="catalog-gallery-close" id="catalogGalleryClose" aria-label="Закрыть">&times;</button>
				<div class="catalog-gallery-main-wrap">
					<button type="button" class="catalog-gallery-nav prev" id="catalogGalleryPrev" aria-label="Предыдущее фото">&#10094;</button>
					<img id="catalogGalleryImage" src="" alt="">
					<button type="button" class="catalog-gallery-nav next" id="catalogGalleryNext" aria-label="Следующее фото">&#10095;</button>
				</div>
				<div id="catalogGalleryThumbs" class="catalog-gallery-thumbs"></div>
			</div>
		</div>
		<!-- END Work -->


<?php $featuresSectionClass = ' home-page-block'; include __DIR__ . '/includes/features-strip.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
