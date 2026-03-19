<?php
require_once __DIR__ . '/seo.php';

$extraScripts = $extraScripts ?? '';
$siteIdentity = arhiton_site_identity();
$footerNav = [
    ['label' => 'Каталог', 'href' => '/catalog'],
    ['label' => 'Проекты', 'href' => '/projects'],
    ['label' => 'О нас', 'href' => '/about-us'],
    ['label' => 'Контакты', 'href' => '/contacts'],
];
$footerLegal = [
    ['label' => 'Политика конфиденциальности', 'href' => '/privacy-policy'],
    ['label' => 'Пользовательское соглашение', 'href' => '/terms-of-use'],
];
?>
            </main>
            <footer class="urban-footer" role="contentinfo">
                <div class="gtco-container">
                    <div class="urban-footer-shell">
                        <div class="urban-footer-main">
                            <div class="urban-footer-brand">
                                <a href="/" class="urban-logo-badge urban-footer-logo" aria-label="Архитон">
                                    <span class="urban-logo-main">АРХИТОН</span>
                                    <span class="urban-logo-sub">МАФ</span>
                                </a>
                                <p class="urban-footer-note">Производство малых архитектурных форм для благоустройства городской среды, жилых комплексов и общественных пространств в Беларуси.</p>
                            </div>

                            <nav class="urban-footer-nav" aria-label="Навигация по сайту">
                                <?php foreach ($footerNav as $item): ?>
                                    <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
                                <?php endforeach; ?>
                            </nav>

                            <div class="urban-footer-contacts">
                                <a class="urban-footer-contact" href="tel:<?= htmlspecialchars($siteIdentity['phone'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($siteIdentity['phoneDisplay'], ENT_QUOTES, 'UTF-8') ?></a>
                                <a class="urban-footer-contact" href="mailto:<?= htmlspecialchars($siteIdentity['email'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($siteIdentity['email'], ENT_QUOTES, 'UTF-8') ?></a>
                                <div class="urban-footer-socials">
                                    <a class="urban-footer-contact urban-footer-social" href="<?= htmlspecialchars($siteIdentity['sameAs'][0], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M4.75 1h6.5A3.75 3.75 0 0 1 15 4.75v6.5A3.75 3.75 0 0 1 11.25 15h-6.5A3.75 3.75 0 0 1 1 11.25v-6.5A3.75 3.75 0 0 1 4.75 1Zm0 1.5A2.25 2.25 0 0 0 2.5 4.75v6.5A2.25 2.25 0 0 0 4.75 13.5h6.5a2.25 2.25 0 0 0 2.25-2.25v-6.5A2.25 2.25 0 0 0 11.25 2.5h-6.5ZM8 4.25A3.75 3.75 0 1 1 4.25 8 3.75 3.75 0 0 1 8 4.25Zm0 1.5A2.25 2.25 0 1 0 10.25 8 2.25 2.25 0 0 0 8 5.75Zm3.9-1.87a.85.85 0 1 1 0 1.7.85.85 0 0 1 0-1.7Z"/></svg>
                                    </a>
                                    <a class="urban-footer-contact urban-footer-social" href="<?= htmlspecialchars($siteIdentity['sameAs'][1], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
                                        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M15.11 2.02 13.1 13.74c-.15.83-.56 1.03-1.15.65l-3.18-2.35-1.53 1.47c-.17.17-.31.31-.64.31l.23-3.27 5.95-5.37c.26-.23-.06-.36-.4-.13L5.03 9.67 1.86 8.68c-.69-.22-.7-.69.14-1.02L14.4 2.88c.58-.21 1.08.13.9 1.14Z"/></svg>
                                    </a>
                                    <a class="urban-footer-contact urban-footer-social" href="viber://chat?number=%2B375291182084" target="_blank" rel="noopener noreferrer" aria-label="Viber">
                                        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M8.93 1.02c2.96.2 5.3 2.47 5.54 5.43.17 2.07-.62 3.96-2.05 5.2-.3.26-.48.65-.45 1.05l.08 1.08c.04.57-.54.98-1.07.76l-1.62-.68c-.3-.12-.62-.15-.93-.08a6.53 6.53 0 0 1-1.52.13C3.4 13.8.6 11 .5 7.5.4 3.87 3.3.78 6.94 1c.66.04 1.33-.03 1.99.02Zm-.4 1.52c-.54-.03-1.1 0-1.65-.03A4.95 4.95 0 0 0 2 7.46a4.96 4.96 0 0 0 6.1 4.82c.56-.14 1.16-.1 1.7.13l.78.33-.04-.53a2.22 2.22 0 0 1 .75-1.88 4.96 4.96 0 0 0 1.66-3.75c-.18-2.2-1.95-3.91-4.42-4.04Zm2.43 5.95c-.22.16-.53.39-.9.65-.28.2-.62.22-.93.06-1.38-.72-2.46-1.84-3.24-3.17-.18-.3-.18-.67.03-.95l.55-.76c.19-.26.56-.3.8-.1l.88.74c.23.2.28.53.12.79l-.3.47c-.07.11-.08.26 0 .37.26.41.61.76 1.02 1.03.11.07.25.07.37 0l.45-.29c.26-.16.6-.12.8.1l.72.79c.22.23.2.6-.04.77Z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="urban-footer-meta">
                            <p class="urban-footer-copy">&copy; <?= date('Y') ?> arhiton.by. Все права защищены.</p>
                            <div class="urban-footer-legal-links">
                                <?php foreach ($footerLegal as $item): ?>
                                    <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div id="cookieConsent" class="cookie-consent" hidden>
                <div class="cookie-consent__bar" role="dialog" aria-modal="false" aria-labelledby="cookieConsentTitle">
                    <div class="cookie-consent__content">
                        <div class="cookie-consent__eyebrow">Cookie</div>
                        <p id="cookieConsentTitle" class="cookie-consent__text">Сайт использует cookie, чтобы обеспечить корректную работу, улучшить удобство использования и анализировать посещаемость. Продолжая пользоваться сайтом, вы можете принять использование аналитических cookie или оставить только технически необходимые.</p>
                        <p class="cookie-consent__meta">
                            <a href="/privacy-policy">Политика конфиденциальности</a>
                        </p>
                    </div>
                    <div class="cookie-consent__actions">
                        <button type="button" class="btn btn-special cookie-consent__button" data-cookie-action="accept">Принять</button>
                        <button type="button" class="btn btn-special btn-outline cookie-consent__button" data-cookie-action="essential">Только нужные</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        (function () {
            var storageKey = 'arhiton_cookie_consent_v1';
            var gaId = window.ARHITON_GA_ID;
            var analyticsLoaded = false;

            function loadAnalytics() {
                if (analyticsLoaded || !gaId) {
                    return;
                }

                analyticsLoaded = true;
                window.dataLayer = window.dataLayer || [];
                window.gtag = window.gtag || function () {
                    window.dataLayer.push(arguments);
                };

                var script = document.createElement('script');
                script.async = true;
                script.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(gaId);
                document.head.appendChild(script);

                window.gtag('js', new Date());
                window.gtag('config', gaId, { anonymize_ip: true });
            }

            function setConsent(value) {
                try {
                    localStorage.setItem(storageKey, value);
                } catch (error) {
                    return;
                }
            }

            function getConsent() {
                try {
                    return localStorage.getItem(storageKey);
                } catch (error) {
                    return null;
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                var consent = getConsent();
                var banner = document.getElementById('cookieConsent');

                if (!banner) {
                    if (consent === 'accepted') {
                        loadAnalytics();
                    }
                    return;
                }

                if (consent === 'accepted') {
                    loadAnalytics();
                    return;
                }

                if (consent !== 'essential') {
                    banner.hidden = false;
                }

                banner.addEventListener('click', function (event) {
                    var actionButton = event.target.closest('[data-cookie-action]');

                    if (!actionButton) {
                        return;
                    }

                    if (actionButton.getAttribute('data-cookie-action') === 'accept') {
                        setConsent('accepted');
                        loadAnalytics();
                    } else {
                        setConsent('essential');
                    }

                    banner.hidden = true;
                });
            });
        })();
        </script>

        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/jquery.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/bootstrap.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/main.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <?= $extraScripts ?>
    </body>
</html>
