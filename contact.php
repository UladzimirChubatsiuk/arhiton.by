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
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M3.65 1.33a.68.68 0 0 1 .74-.17l2.2.9a.68.68 0 0 1 .4.76l-.37 1.8a.68.68 0 0 1-.57.53l-1.02.15a10.7 10.7 0 0 0 5.67 5.67l.15-1.02a.68.68 0 0 1 .53-.57l1.8-.37a.68.68 0 0 1 .76.4l.9 2.2a.68.68 0 0 1-.17.74l-1.2 1.2c-.33.33-.82.47-1.27.36C6.98 13.45 2.55 9.02 1.1 3.8a1.18 1.18 0 0 1 .36-1.27l1.2-1.2Z"/></svg>
									<span>Позвонить</span>
								</a>
								<a class="contact-card__summary-link" href="mailto:info.arhiton@mail.ru">
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M1.5 3A1.5 1.5 0 0 1 3 1.5h10A1.5 1.5 0 0 1 14.5 3v10A1.5 1.5 0 0 1 13 14.5H3A1.5 1.5 0 0 1 1.5 13V3Zm1.1.3L8 7.1l5.4-3.8a.5.5 0 0 0-.4-.3H3a.5.5 0 0 0-.4.3Zm10.9 1.43-5.21 3.66a.5.5 0 0 1-.57 0L2.5 4.73V13c0 .28.22.5.5.5h10c.28 0 .5-.22.5-.5V4.73Z"/></svg>
									<span>Написать на email</span>
								</a>
							</div>
							<div class="contact-card__messengers">
								<a class="contact-card__messenger" href="viber://chat?number=%2B375291182084" aria-label="Viber">
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M8.93 1.02c2.96.2 5.3 2.47 5.54 5.43.17 2.07-.62 3.96-2.05 5.2-.3.26-.48.65-.45 1.05l.08 1.08c.04.57-.54.98-1.07.76l-1.62-.68c-.3-.12-.62-.15-.93-.08a6.53 6.53 0 0 1-1.52.13C3.4 13.8.6 11 .5 7.5.4 3.87 3.3.78 6.94 1c.66.04 1.33-.03 1.99.02Zm-.4 1.52c-.54-.03-1.1 0-1.65-.03A4.95 4.95 0 0 0 2 7.46a4.96 4.96 0 0 0 6.1 4.82c.56-.14 1.16-.1 1.7.13l.78.33-.04-.53a2.22 2.22 0 0 1 .75-1.88 4.96 4.96 0 0 0 1.66-3.75c-.18-2.2-1.95-3.91-4.42-4.04Zm2.43 5.95c-.22.16-.53.39-.9.65-.28.2-.62.22-.93.06-1.38-.72-2.46-1.84-3.24-3.17-.18-.3-.18-.67.03-.95l.55-.76c.19-.26.56-.3.8-.1l.88.74c.23.2.28.53.12.79l-.3.47c-.07.11-.08.26 0 .37.26.41.61.76 1.02 1.03.11.07.25.07.37 0l.45-.29c.26-.16.6-.12.8.1l.72.79c.22.23.2.6-.04.77Z"/></svg>
									<span>Viber</span>
								</a>
								<a class="contact-card__messenger" href="https://wa.me/375291182084" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M13.6 2.4A7.45 7.45 0 0 0 2.15 11.5L1 15l3.6-.94A7.45 7.45 0 1 0 13.6 2.4ZM8 14a6 6 0 0 1-3.06-.84l-.22-.13-2.14.56.58-2.08-.14-.22A6 6 0 1 1 8 14Zm3.3-4.41c-.18-.09-1.08-.53-1.25-.59-.17-.06-.29-.09-.42.09-.12.18-.47.59-.57.71-.1.12-.2.13-.38.04-.18-.09-.75-.27-1.43-.86-.53-.47-.9-1.04-1-1.22-.11-.18-.01-.28.08-.36.08-.08.18-.2.27-.3.09-.1.12-.17.18-.29.06-.12.03-.22-.01-.31-.05-.09-.42-1.01-.58-1.39-.15-.36-.31-.31-.42-.31h-.36c-.12 0-.31.04-.48.22-.16.18-.63.61-.63 1.5 0 .88.65 1.73.74 1.85.09.12 1.27 1.95 3.07 2.73 1.81.78 1.81.52 2.14.49.33-.03 1.08-.44 1.23-.87.15-.43.15-.8.1-.87-.04-.08-.16-.12-.34-.21Z"/></svg>
									<span>WhatsApp</span>
								</a>
								<a class="contact-card__messenger" href="https://t.me/Elena_Chubatsiuk" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M15.11 2.02 13.1 13.74c-.15.83-.56 1.03-1.15.65l-3.18-2.35-1.53 1.47c-.17.17-.31.31-.64.31l.23-3.27 5.95-5.37c.26-.23-.06-.36-.4-.13L5.03 9.67 1.86 8.68c-.69-.22-.7-.69.14-1.02L14.4 2.88c.58-.21 1.08.13.9 1.14Z"/></svg>
									<span>Telegram</span>
								</a>
								<a class="contact-card__messenger" href="https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
									<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M4.75 1h6.5A3.75 3.75 0 0 1 15 4.75v6.5A3.75 3.75 0 0 1 11.25 15h-6.5A3.75 3.75 0 0 1 1 11.25v-6.5A3.75 3.75 0 0 1 4.75 1Zm0 1.5A2.25 2.25 0 0 0 2.5 4.75v6.5A2.25 2.25 0 0 0 4.75 13.5h6.5a2.25 2.25 0 0 0 2.25-2.25v-6.5A2.25 2.25 0 0 0 11.25 2.5h-6.5ZM8 4.25A3.75 3.75 0 1 1 4.25 8 3.75 3.75 0 0 1 8 4.25Zm0 1.5A2.25 2.25 0 1 0 10.25 8 2.25 2.25 0 0 0 8 5.75Zm3.9-1.87a.85.85 0 1 1 0 1.7.85.85 0 0 1 0-1.7Z"/></svg>
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
