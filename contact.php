<?php
$pageCanonicalPath = '/contacts';
$extraScripts = <<<'HTML'
		<script>
		(function () {
			document.addEventListener('DOMContentLoaded', function () {
				var triggers = Array.prototype.slice.call(document.querySelectorAll('.js-contact-doc-open'));
				var modal = document.getElementById('contactDocModal');
				var modalImage = document.getElementById('contactDocImage');
				var modalTitle = document.getElementById('contactDocTitle');
				var thumbs = document.getElementById('contactDocThumbs');
				var closeButton = document.getElementById('contactDocClose');
				var prevButton = document.getElementById('contactDocPrev');
				var nextButton = document.getElementById('contactDocNext');

				if (!triggers.length || !modal || !modalImage || !modalTitle || !thumbs || !closeButton || !prevButton || !nextButton) {
					return;
				}

				var currentGallery = [];
				var currentIndex = 0;

				function parseGallery(raw) {
					try {
						var parsed = JSON.parse(raw || '[]');
						return Array.isArray(parsed) ? parsed : [];
					} catch (error) {
						return [];
					}
				}

				function renderThumbs() {
					thumbs.innerHTML = '';

					currentGallery.forEach(function (item, index) {
						var button = document.createElement('button');
						button.type = 'button';
						button.className = 'catalog-gallery-thumb' + (index === currentIndex ? ' is-active' : '');
						button.setAttribute('aria-label', item.alt || ('Документ ' + (index + 1)));

						var image = document.createElement('img');
						image.src = item.src;
						image.alt = item.alt || '';
						button.appendChild(image);

						button.addEventListener('click', function () {
							showSlide(index);
						});

						thumbs.appendChild(button);
					});
				}

				function showSlide(index) {
					if (!currentGallery.length) {
						return;
					}

					currentIndex = (index + currentGallery.length) % currentGallery.length;
					var item = currentGallery[currentIndex];
					modalImage.src = item.src;
					modalImage.alt = item.alt || '';
					renderThumbs();
				}

				function openModal(gallery, title) {
					currentGallery = gallery;
					currentIndex = 0;
					modalTitle.textContent = title || 'Документ';
					showSlide(0);
					modal.classList.add('is-open');
					modal.setAttribute('aria-hidden', 'false');
					document.body.classList.add('cookie-consent-open');
				}

				function closeModal() {
					modal.classList.remove('is-open');
					modal.setAttribute('aria-hidden', 'true');
					modalImage.src = '';
					modalImage.alt = '';
					thumbs.innerHTML = '';
					document.body.classList.remove('cookie-consent-open');
				}

				triggers.forEach(function (trigger) {
					var triggerGallery = parseGallery(trigger.getAttribute('data-doc-gallery'));
					if (!triggerGallery.length) {
						return;
					}

					trigger.addEventListener('click', function (event) {
						event.preventDefault();
						openModal(triggerGallery, trigger.getAttribute('data-doc-title'));
					});
				});

				prevButton.addEventListener('click', function () {
					showSlide(currentIndex - 1);
				});

				nextButton.addEventListener('click', function () {
					showSlide(currentIndex + 1);
				});

				closeButton.addEventListener('click', closeModal);

				modal.addEventListener('click', function (event) {
					if (event.target === modal) {
						closeModal();
					}
				});

				document.addEventListener('keydown', function (event) {
					if (!modal.classList.contains('is-open')) {
						return;
					}

					if (event.key === 'Escape') {
						closeModal();
					}

					if (event.key === 'ArrowLeft') {
						showSlide(currentIndex - 1);
					}

					if (event.key === 'ArrowRight') {
						showSlide(currentIndex + 1);
					}
				});
			});
		})();
		</script>
HTML;
include __DIR__ . '/includes/header.php';
?>
<div class="gtco-section">
			<div class="gtco-container">
				<div class="row contact-hero">
					<div class="col-md-8">
						<div class="contact-hero__content">
							<span class="contact-hero__eyebrow">Контакты</span>
							<h1 class="contact-hero__title">Контакты для консультации, подбора изделий и обсуждения проекта</h1>
							<p class="contact-hero__lead">Если вам нужен расчёт, подбор малых архитектурных форм или консультация по благоустройству территории, свяжитесь с нами любым удобным способом. Мы поможем быстро сориентироваться по ассортименту, условиям поставки и подходящим решениям под ваш объект.</p>
							<div class="contact-hero__points">
								<div class="contact-hero__point">Консультация по ассортименту и применению МАФ</div>
								<div class="contact-hero__point">Подбор решений под территорию, задачу и бюджет</div>
								<div class="contact-hero__point">Связь по телефону, email и через Instagram</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<aside class="contact-hero__panel">
							<div class="contact-hero__panel-label">Быстрая связь</div>
							<h2 class="contact-hero__panel-title">Ответим на вопросы по проекту и продукции</h2>
							<p class="contact-hero__panel-text">Подскажем по ассортименту, срокам, комплектации и возможностям адаптации изделий под архитектуру вашего пространства.</p>
							<div class="contact-hero__actions">
								<a href="tel:+375291182084" class="btn btn-special btn-block contact-hero__button">Позвонить</a>
								<a href="mailto:info.arhiton@mail.ru" class="btn btn-special btn-outline btn-block contact-hero__button-alt">Написать на email</a>
							</div>
						</aside>
					</div>
				</div>
				<div class="row contact-overview">
					<div class="col-md-12">
						<div class="contact-card">
							<div class="contact-card__label">Основные контакты</div>
							<h3 class="contact-card__title">Свяжитесь с нами удобным способом</h3>
							<p class="contact-card__lead">Для консультации по ассортименту, срокам и заказу выберите удобный канал связи. На быстрые вопросы проще отвечаем в мессенджерах.</p>
							<div class="contact-card__summary">
								<a class="contact-card__summary-link" href="tel:+375291182084">
									<i class="bi bi-telephone-fill" aria-hidden="true"></i>
									<span>Позвонить</span>
								</a>
								<a class="contact-card__summary-link" href="mailto:info.arhiton@mail.ru">
									<i class="bi bi-envelope-fill" aria-hidden="true"></i>
									<span>Написать на email</span>
								</a>
							</div>
							<div class="contact-card__messengers">
								<a class="contact-card__messenger" href="viber://chat?number=%2B375291182084" aria-label="Viber">
									<i class="bi bi-chat-dots-fill" aria-hidden="true"></i>
									<span>Viber</span>
								</a>
								<a class="contact-card__messenger" href="https://wa.me/375291182084" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
									<i class="bi bi-whatsapp" aria-hidden="true"></i>
									<span>WhatsApp</span>
								</a>
								<a class="contact-card__messenger" href="https://t.me/Elena_Chubatsiuk" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
									<i class="bi bi-telegram" aria-hidden="true"></i>
									<span>Telegram</span>
								</a>
								<a class="contact-card__messenger" href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
									<i class="bi bi-instagram" aria-hidden="true"></i>
									<span>Instagram</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row contact-legal">
					<div class="col-md-12">
						<section class="contact-legal-card" aria-labelledby="contact-legal-title">
							<div class="contact-legal-card__header">
								<div>
									<span class="contact-legal-card__eyebrow">Сведения об ИП</span>
									<h2 id="contact-legal-title" class="contact-legal-card__title">Информация для покупателей</h2>
								</div>
							</div>

							<div class="contact-legal-grid">
								<article class="contact-legal-item">
									<h3>Данные об ИП</h3>
									<ul class="contact-legal-list">
										<li><strong>ФИО:</strong> ИП Чубатюк Елена Владимировна</li>
										<li><strong>УНП:</strong> 692036380</li>
										<li><strong>Свидетельство о регистрации:</strong> выдано Узденским районным исполнительным комитетом 1 августа 2022 г.</li>
									</ul>
								</article>

								<article class="contact-legal-item">
									<h3>Контактные данные</h3>
									<ul class="contact-legal-list">
										<li><strong>Телефон:</strong> <a href="tel:+375291182084">+375 (29) 118-20-84</a></li>
										<li><strong>Email:</strong> <a href="mailto:info.arhiton@mail.ru">info.arhiton@mail.ru</a></li>
										<li><strong>Юридический адрес:</strong> Минская обл., Дзержинский р-н, аг. Черкассы, ул. Промысловая, 5</li>
									</ul>
								</article>

								<article class="contact-legal-item">
									<h3>Режим работы</h3>
									<ul class="contact-legal-list">
										<li><strong>Прием заказов:</strong> ежедневно с 09:00 до 19:00</li>
									</ul>
								</article>

								<article class="contact-legal-item">
									<h3>Информация для покупателей</h3>
									<ul class="contact-legal-list">
										<li><strong>Оплата:</strong> безналичный расчет</li>
										<li><strong>Доставка:</strong> самовывоз/доставка/помощь в установке по Беларуси</li>
									</ul>
								</article>

								<article class="contact-legal-item">
									<h3>Информация о товарах</h3>
									<ul class="contact-legal-list">
										<li><strong>Цена:</strong> в белорусских рублях.</li>
										<li><strong>Изготовитель:</strong> ИП Чубатюк Елена Владимировна, Республика Беларусь.</li>
										<li><strong>Гарантийный срок:</strong> 24 месяца.</li>
									</ul>
								</article>

								<article class="contact-legal-item contact-legal-item--accent">
									<h3>Документы</h3>
									<div class="contact-legal-docs">
										<article class="contact-legal-doc">
											<h4>Сертификат собственного производства</h4>
											<ul class="contact-legal-doc__meta">
												<li><strong>Номер:</strong> BYPR5103384801</li>
												<li><strong>Дата выдачи:</strong> 6 июня 2025 г.</li>
												<li><strong>Кем выдан:</strong> УП «Минское отделение Белорусской торгово-промышленной палаты»</li>
											</ul>
											<a
												class="contact-legal-doc__link js-contact-doc-open"
												href="images/documents/img_2.jpg"
												target="_blank"
												rel="noopener noreferrer"
												data-doc-title="Сертификат собственного производства"
												data-doc-gallery='[{"src":"images/documents/img_2.jpg","alt":"Сертификат собственного производства, страница 1"},{"src":"images/documents/img_3.jpg","alt":"Сертификат собственного производства, страница 2"}]'
											>Смотреть документ</a>
										</article>
										<article class="contact-legal-doc">
											<h4>Свидетельство о государственной регистрации</h4>
											<ul class="contact-legal-doc__meta">
												<li><strong>Номер:</strong> 0866131</li>
												<li><strong>Дата выдачи:</strong> 1 августа 2022 г.</li>
												<li><strong>Кем выдан:</strong> Узденский районный исполнительный <br> комитет</li>
											</ul>
											<a
												class="contact-legal-doc__link js-contact-doc-open"
												href="images/documents/img_1.jpg"
												target="_blank"
												rel="noopener noreferrer"
												data-doc-title="Свидетельство о госрегистрации"
												data-doc-gallery='[{"src":"images/documents/img_1.jpg","alt":"Свидетельство о государственной регистрации"}]'
											>Смотреть документ</a>
										</article>
									</div>
								</article>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
		<div id="contactDocModal" class="catalog-gallery-modal" aria-hidden="true">
			<div class="catalog-gallery-dialog" role="dialog" aria-modal="true" aria-labelledby="contactDocTitle">
				<button type="button" class="catalog-gallery-close" id="contactDocClose" aria-label="Закрыть">&times;</button>
				<div class="catalog-gallery-main-wrap">
					<button type="button" class="catalog-gallery-nav prev" id="contactDocPrev" aria-label="Предыдущая страница">&#10094;</button>
					<img id="contactDocImage" src="" alt="">
					<button type="button" class="catalog-gallery-nav next" id="contactDocNext" aria-label="Следующая страница">&#10095;</button>
				</div>
				<div class="contact-doc-modal__title" id="contactDocTitle"></div>
				<div id="contactDocThumbs" class="catalog-gallery-thumbs"></div>
			</div>
		</div>
<?php $featuresSectionClass = ' home-page-block'; include __DIR__ . '/includes/features-strip.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
