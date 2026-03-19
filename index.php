<?php
$pageCanonicalPath = '/';
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-container home-page-block home-slider-section">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
							<div class="home-hero-slide">
								<img src="<?= htmlspecialchars(arhiton_asset_path('/images/banner/hero_5.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Скамья-тонель для благоустройства общественных пространств" fetchpriority="high" decoding="async">
								<div class="slider-copy home-hero-slide__content">
									<span class="home-hero-slide__eyebrow">Производство МАФ в Беларуси</span>
									<h1>Малые архитектурные формы для парков и общественных пространств</h1>
									<p>Изготавливаем скамьи, урны, вазоны, светильники и другие изделия для благоустройства территорий. Работаем с жилыми комплексами, муниципальными объектами и коммерческими пространствами по всей Беларуси.</p>
									<div class="home-hero-slide__actions">
										<a class="btn btn-special" href="/catalog?category=bench">Смотреть каталог</a>
										<a class="btn btn-special btn-outline" href="/about-us">О компании</a>
									</div>
									<div class="home-hero-slide__facts" aria-label="Преимущества">
										<span>Собственное производство</span>
										<span>Изготовление под проект</span>
										<span>Поставка по Беларуси</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section id="home-intro" class="gtco-container home-page-block home-intro-section">
			<div class="home-intro-card">
				<div class="home-intro-copy">
					<span class="home-intro-eyebrow">Производство МАФ в Беларуси</span>
					<h2 class="home-block-title">Малые архитектурные формы для дворов, парков, жилых комплексов и общественных пространств</h2>
					<p class="home-intro-lead">Изготавливаем скамьи, урны, вазоны, светильники, кабинки для переодевания и зоны отдыха под проекты благоустройства в Минске и по всей Беларуси. Работаем с муниципальными объектами, жилыми комплексами, коммерческими и общественными территориями.</p>
					<div class="home-intro-actions">
						<a class="btn btn-special" href="/catalog">Перейти в каталог</a>
						<a class="btn btn-special btn-outline" href="/projects">Смотреть проекты</a>
					</div>
				</div>
			</div>
		</section>

		<div class="gtco-container home-page-block home-categories-section ">
			<h2 class="home-block-title">Малые архитектурные формы от производителя</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="home-categories-shell">
						<div class="home-categories-grid" aria-label="Группы товаров и услуг">
							<a class="home-category-card" href="/catalog?category=bench"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_1.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Скамьи" loading="lazy" decoding="async">
								<div class="home-category-overlay">	
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<rect x="8" y="34" width="22" height="18"></rect>
											<rect x="24" y="24" width="22" height="28"></rect>
											<rect x="40" y="14" width="16" height="38"></rect>
										</svg>
									</div>
									<span class="home-category-title">Скамьи</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=trash"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_2.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Урны" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<path d="M18 16h28"></path>
											<path d="M24 16v-4h16v4"></path>
											<path d="M20 20l3 34h18l3-34"></path>
										</svg>
									</div>
									<span class="home-category-title">Урны</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=vases"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_3.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Кашпо и вазоны" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<path d="M18 16h28"></path>
											<path d="M22 16c0 12 3 18 10 34h0c7-16 10-22 10-34"></path>
											<path d="M24 50h16"></path>
										</svg>
									</div>
									<span class="home-category-title">Кашпо | Вазоны</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=lights"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_4.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Уличные светильники" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<circle cx="20" cy="44" r="10"></circle>
											<circle cx="44" cy="44" r="10"></circle>
											<path d="M20 44l10-16h10l4 16M30 28l-6-8"></path>
										</svg>
									</div>
									<span class="home-category-title">Уличные светильники</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=campfire_areas"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_5.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Зоны кострища" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<path d="M10 48h44"></path>
											<path d="M12 48V20"></path>
											<path d="M22 48V20"></path>
											<path d="M32 48V20"></path>
											<path d="M42 48V20"></path>
											<path d="M52 48V20"></path>
											<path d="M10 28h44"></path>
										</svg>
									</div>
									<span class="home-category-title">Зоны кострища</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=cabins"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_6.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Кабинки для переодевания" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<rect x="14" y="12" width="36" height="40"></rect>
											<path d="M32 12v40"></path>
											<path d="M22 22h20"></path>
											<circle cx="38" cy="33" r="1.8"></circle>
											<path d="M26 8l6 6 6-6"></path>
										</svg>
									</div>
									<span class="home-category-title">Кабинки для переодевания</span>
								</div>
							</a>
							<a class="home-category-card" href="/catalog?category=chairs"><img class="home-category-media" src="<?= htmlspecialchars(arhiton_asset_path('/images/categories/categories_7.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="Шезлонги" loading="lazy" decoding="async">
								<div class="home-category-overlay">
									<div class="home-category-icon" aria-hidden="true">
										<svg viewBox="0 0 64 64" role="img" focusable="false">
											<path d="M10 46h44"></path>
											<path d="M16 46V38"></path>
											<path d="M48 46V38"></path>
											<path d="M16 38h24"></path>
											<path d="M22 38l10-14h12"></path>
											<path d="M44 24l6 6"></path>
										</svg>
									</div>
									<span class="home-category-title">Шезлонги</span>
								</div>
							</a>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		<div class="gtco-section seo-about home-page-block">
			<div class="gtco-container">
				<div class="seo-about-layout">
					<div class="seo-about-intro">
						<h2 class="home-block-title">О производстве</h2>
						<p>Компания Архитон специализируется на производстве малых архитектурных форм для благоустройства дворов, парков, скверов, жилых комплексов и коммерческих объектов. Мы выпускаем решения, рассчитанные на активную уличную эксплуатацию, и подбираем материалы с учетом климата Беларуси.</p>
					</div>
					<div class="seo-about-top-images">
						<img src="<?= htmlspecialchars(arhiton_asset_path('/images/proizvodit/img_2.webp'), ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async" alt="О производстве">
						<img src="<?= htmlspecialchars(arhiton_asset_path('/images/proizvodit/img_3.webp'), ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async" alt="О производстве">
					</div>
					<div class="seo-about-main-image">
						<img src="<?= htmlspecialchars(arhiton_asset_path('/images/proizvodit/img_4.webp'), ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async" alt="О производстве">
					</div>
					<div class="seo-about-text">
						<p>В работе используем металл, бетон, древесину и комбинированные конструкции, что позволяет создавать как типовые, так и индивидуальные изделия под конкретный проект. Сроки изготовления зависят от объема и сложности, при этом каждый заказ сопровождаем на всех этапах: от согласования модели до отгрузки.</p>
						<p>Посмотрите <a href="/projects">наши реализованные проекты</a>, узнайте больше <a href="/about-us">о компании</a> или <a href="/contacts">свяжитесь с нами</a> для расчета стоимости и сроков.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="gtco-section faq-section home-page-block">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2 class="home-block-title">Часто задаваемые вопросы</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel-group faq-accordion" id="homeFaq" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faqHeadingOne">
									<h3 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#homeFaq" href="#faqOne" aria-expanded="true" aria-controls="faqOne">Какие сроки изготовления малых архитектурных форм?</a>
									</h3>
								</div>
								<div id="faqOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faqHeadingOne">
									<div class="panel-body">Стандартные позиции из каталога мы изготавливаем в среднем от 7 до 20 рабочих дней в зависимости от объема заказа и загрузки производства.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faqHeadingTwo">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#homeFaq" href="#faqTwo" aria-expanded="false" aria-controls="faqTwo">Можно ли заказать изделия по индивидуальным размерам и эскизам?</a>
									</h3>
								</div>
								<div id="faqTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqHeadingTwo">
									<div class="panel-body">Да, мы изготавливаем скамейки, урны, вазоны, велопарковки и ограждения по индивидуальным размерам, материалам и цветовым решениям под конкретный объект.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faqHeadingThree">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#homeFaq" href="#faqThree" aria-expanded="false" aria-controls="faqThree">Из каких материалов вы производите изделия?</a>
									</h3>
								</div>
								<div id="faqThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqHeadingThree">
									<div class="panel-body">В производстве используем металл, бетон, древесину и комбинированные материалы, подбирая состав с учетом уличной эксплуатации и климатических нагрузок.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faqHeadingFour">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#homeFaq" href="#faqFour" aria-expanded="false" aria-controls="faqFour">Осуществляете ли доставку и монтаж по Беларуси?</a>
									</h3>
								</div>
								<div id="faqFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqHeadingFour">
									<div class="panel-body">Да, организуем доставку по Минску и всей Беларуси, а также можем согласовать монтаж и установку на объекте.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faqHeadingFive">
									<h3 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#homeFaq" href="#faqFive" aria-expanded="false" aria-controls="faqFive">Предоставляете ли гарантию на продукцию?</a>
									</h3>
								</div>
								<div id="faqFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqHeadingFive">
									<div class="panel-body">Да, на продукцию предоставляется гарантия; срок зависит от типа изделия и фиксируется в договоре и сопроводительных документах.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $featuresSectionClass = ' home-page-block'; include __DIR__ . '/includes/features-strip.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
