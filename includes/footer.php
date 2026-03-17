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
                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a class="urban-footer-contact urban-footer-social" href="<?= htmlspecialchars($siteIdentity['sameAs'][1], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
                                        <i class="bi bi-telegram" aria-hidden="true"></i>
                                    </a>
                                    <a class="urban-footer-contact urban-footer-social" href="viber://chat?number=%2B375291182084" target="_blank" rel="noopener noreferrer" aria-label="Viber">
                                        <i class="bi bi-chat-dots-fill" aria-hidden="true"></i>
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
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/jquery.easing.1.3.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/bootstrap.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/jquery.waypoints.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/owl.carousel.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/main.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <?= $extraScripts ?>
    </body>
</html>
