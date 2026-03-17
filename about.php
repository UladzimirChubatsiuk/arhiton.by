<?php
require_once __DIR__ . '/includes/seo.php';

$pageCanonicalPath = '/about-us';
$extraScripts = '<script src="' . arhiton_asset_path('/js/services.js') . '"></script>' . "\n"
    . '<script src="' . arhiton_asset_path('/js/catalog.js') . '"></script>';
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section">
			<div class="gtco-container">
				<div class="row about-hero-row">
					<div class="col-md-8">
						<div class="about-hero-copy about-hero-card">
							<span class="about-eyebrow">О компании</span>
							<h1>Команда, которая создаёт продуманные малые архитектурные формы</h1>
							<p class="about-hero-lead">Мы объединяем специалистов по проектированию, производству, дизайну и комплектации, чтобы создавать МАФ для городской среды, жилых комплексов, парков и общественных территорий. Для нас важны не только эстетика изделий, но и их практичность, срок службы и точность исполнения.</p>
							<div class="about-hero-points">
								<div class="about-hero-point">Инженерный подход к каждому изделию</div>
								<div class="about-hero-point">Командная работа от идеи до готового результата</div>
								<div class="about-hero-point">Внимание к архитектуре пространства и реальной эксплуатации</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<aside class="about-hero-panel">
							<div class="about-hero-panel__label">Наш подход</div>
							<h2 class="about-hero-panel__title">Работаем не шаблонно, а под задачу объекта</h2>
							<p class="about-hero-panel__text">Подбираем конструктив, материалы и внешний вид изделия с учётом среды, нагрузки и ожиданий заказчика, чтобы решение было не только красивым, но и жизнеспособным.</p>
							<div class="about-hero-panel__stats">
								<div class="about-hero-panel__stat">
									<span class="about-hero-panel__stat-value">Команда</span>
									<span class="about-hero-panel__stat-text">инженеров, дизайнеров, архитекторов и менеджеров</span>
								</div>
								<div class="about-hero-panel__stat">
									<span class="about-hero-panel__stat-value">Проектно</span>
									<span class="about-hero-panel__stat-text">подходим к каждой территории и каждому изделию</span>
								</div>
							</div>
							<p class="about-hero-actions">
								<button class="btn btn-special btn-block" id="btn-special">Заказать</button>
							</p>
						</aside>
					</div>
				</div>
				
				<?php include __DIR__ . '/includes/order-popup.php'; ?>
				<div class="row">
					<div class="col-md-12">
						<section class="about-advantages" aria-labelledby="about-advantages-title">
							<div class="about-advantages__header">
								<span class="about-advantages__eyebrow">Почему выбирают Архитон</span>
								<h2 id="about-advantages-title" class="about-advantages__title">Наши преимущества</h2>
								<p class="about-advantages__lead">Мы проектируем и производим малые архитектурные формы для городских пространств, жилых комплексов, парков и общественных территорий, сохраняя баланс между эстетикой, сроками и эксплуатационной надёжностью.</p>
							</div>

							<div class="about-advantages__facts" aria-label="Ключевые преимущества">
								<div class="about-advantages__fact">
									<span class="about-advantages__fact-value">Под проект</span>
									<p>Подбираем решения под архитектуру объекта, трафик, бюджет и условия эксплуатации.</p>
								</div>
								<div class="about-advantages__fact">
									<span class="about-advantages__fact-value">Сертифицированно</span>
									<p>Используем качественные материалы и проверенные производственные процессы.</p>
								</div>
								<div class="about-advantages__fact">
									<span class="about-advantages__fact-value">Под ключ</span>
									<p>Берём на себя изготовление, поставку и сопровождение на всех этапах проекта.</p>
								</div>
							</div>

							<div class="about-advantages__grid">
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">01</div>
									<h3>Индивидуальные решения</h3>
									<p>Разрабатываем МАФ с учётом конкретной территории, архитектурной среды и функциональных задач заказчика.</p>
								</article>
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">02</div>
									<h3>Надёжные материалы</h3>
									<p>Используем материалы, рассчитанные на интенсивную эксплуатацию, сезонные нагрузки и длительный срок службы.</p>
								</article>
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">03</div>
									<h3>Современный дизайн</h3>
									<p>Создаём решения, которые усиливают визуальный облик пространства и органично вписываются в городской ландшафт.</p>
								</article>
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">04</div>
									<h3>Экологичный подход</h3>
									<p>Отдаём приоритет безопасным и практичным материалам, поддерживая устойчивый подход к благоустройству.</p>
								</article>
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">05</div>
									<h3>Точные сроки и монтаж</h3>
									<p>Организуем изготовление и поставку без лишних задержек, чтобы объект вводился в эксплуатацию по плану.</p>
								</article>
								<article class="about-advantages__card">
									<div class="about-advantages__card-number">06</div>
									<h3>Сильная экспертная команда</h3>
									<p>В проекте участвуют специалисты по производству, дизайну и комплектации, поэтому решения получаются продуманными и реалистичными.</p>
								</article>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

<div class="gtco-section org-reviews">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
				<h2>Отзывы от организаций</h2>
				<p>Нам доверяют муниципальные и городские организации. Ниже несколько недавних отзывов о качестве поставки и соблюдении сроков.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 js-review-card">
				<article class="org-review-card">
					<div class="org-review-meta">Мостовский районный исполнительный комитет · 27 января 2025</div>
					<h3 class="org-review-title">Поставка скамьи и тоннеля для благоустройства территории</h3>
					<p class="org-review-text">Заказчик подтвердил, что поставка малых архитектурных форм была выполнена вовремя, а монтаж и изготовление конструкции прошли качественно и добросовестно.</p>
					<div class="org-review-result">Результат: работы выполнены в срок, без замечаний по качеству.</div>
					<button
						type="button"
						class="btn btn-special btn-outline org-review-link js-review-original"
						data-gallery-title="Оригинал отзыва: Мостовский райисполком"
						data-image-src="images/documents/otzyv_1.jpg"
						data-image-alt="Оригинал отзыва Мостовского районного исполнительного комитета"
					>
						Смотреть оригинал
					</button>
				</article>
			</div>
			<div class="col-md-6 js-review-card">
				<article class="org-review-card">
					<div class="org-review-meta">Строительство Минского метрополитена · 20 февраля 2025</div>
					<h3 class="org-review-title">Изготовление и поставка бетонных урн для участка метро</h3>
					<p class="org-review-text">Предприятие выразило благодарность за изготовление и поставку бетонных урн для объекта Минского метрополитена. В отзыве отдельно отмечены качество исполнения, полнота работ и соблюдение согласованных сроков.</p>
					<div class="org-review-result">Результат: рекомендовано как надёжный и ответственный партнёр-поставщик.</div>
					<button
						type="button"
						class="btn btn-special btn-outline org-review-link js-review-original"
						data-gallery-title="Оригинал отзыва: Строительство Минского метрополитена"
						data-image-src="images/documents/otzyv_2.jpg"
						data-image-alt="Оригинал отзыва предприятия по строительству Минского метрополитена"
					>
						Смотреть оригинал
					</button>
				</article>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button type="button" id="reviewShowMore" class="btn btn-special org-reviews-more" hidden>Показать еще</button>
			</div>
		</div>
	</div>
</div>

<div id="catalogGalleryModal" class="catalog-gallery-modal" aria-hidden="true">
	<div class="catalog-gallery-dialog" role="dialog" aria-modal="true" aria-label="Галерея">
		<button type="button" class="catalog-gallery-close" id="catalogGalleryClose" aria-label="Закрыть">&times;</button>
		<div class="catalog-gallery-main-wrap">
			<button type="button" class="catalog-gallery-nav prev" id="catalogGalleryPrev" aria-label="Предыдущее фото">&#10094;</button>
			<img id="catalogGalleryImage" src="" alt="">
			<button type="button" class="catalog-gallery-nav next" id="catalogGalleryNext" aria-label="Следующее фото">&#10095;</button>
		</div>
		<div id="catalogGalleryThumbs" class="catalog-gallery-thumbs"></div>
	</div>
</div>
<?php $featuresSectionClass = ' home-page-block'; include __DIR__ . '/includes/features-strip.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
