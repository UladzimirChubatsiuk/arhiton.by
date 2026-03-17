<?php
http_response_code(404);

$pageTitle = 'Страница не найдена | Архитон';
$pageCanonicalPath = '/404';
$pageRobots = 'noindex, nofollow';
$extraHead = '';
$extraScripts = '';

include __DIR__ . '/includes/header.php';
?>
<section class="gtco-section error-page">
    <div class="gtco-container">
        <div class="error-page__card">
            <span class="error-page__code">404</span>
            <h1>Страница не найдена</h1>
            <p>Запрошенный URL не существует или был изменен. Перейдите в каталог, посмотрите реализованные проекты или свяжитесь с нами для подбора нужного решения.</p>
            <div class="error-page__actions">
                <a class="btn btn-special" href="/catalog">Открыть каталог</a>
                <a class="btn btn-special btn-outline" href="/contacts">Перейти в контакты</a>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
