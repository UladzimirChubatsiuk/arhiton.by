<?php
require_once __DIR__ . '/seo.php';

$pageMeta = arhiton_prepare_page_meta([
    'title' => $pageTitle ?? null,
    'description' => $pageDescription ?? null,
    'canonicalPath' => $pageCanonicalPath ?? null,
    'image' => $pageImage ?? null,
    'imageAlt' => $pageImageAlt ?? null,
    'robots' => $pageRobots ?? null,
    'schemaType' => $pageSchemaType ?? null,
    'breadcrumbs' => $pageBreadcrumbs ?? null,
    'schemas' => $pageSchemas ?? null,
    'noindexIfQuery' => $pageNoindexIfQuery ?? null,
    'preloadImage' => $pagePreloadImage ?? null,
    'headline' => $pageHeadline ?? null,
    'ogType' => $pageOgType ?? null,
]);
$extraHead = $extraHead ?? '';
$siteIdentity = arhiton_site_identity();
$navItems = [
    ['label' => 'Каталог', 'href' => '/catalog', 'path' => '/catalog'],
    ['label' => 'Проекты', 'href' => '/projects', 'path' => '/projects'],
    ['label' => 'О нас', 'href' => '/about-us', 'path' => '/about-us'],
    ['label' => 'Контакты', 'href' => '/contacts', 'path' => '/contacts'],
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($pageMeta['htmlLang'], ENT_QUOTES, 'UTF-8') ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="robots" content="<?= htmlspecialchars($pageMeta['robots'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="author" content="<?= htmlspecialchars($siteIdentity['name'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="theme-color" content="#1f2a24">
        <meta property="og:locale" content="ru_BY">
        <meta property="og:type" content="<?= htmlspecialchars($pageMeta['ogType'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:site_name" content="<?= htmlspecialchars($siteIdentity['name'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:title" content="<?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:url" content="<?= htmlspecialchars($pageMeta['canonical'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:image" content="<?= htmlspecialchars($pageMeta['image'], ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:image:alt" content="<?= htmlspecialchars($pageMeta['imageAlt'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="twitter:description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>">
        <meta name="twitter:image" content="<?= htmlspecialchars($pageMeta['image'], ENT_QUOTES, 'UTF-8') ?>">
        <link rel="canonical" href="<?= htmlspecialchars($pageMeta['canonical'], ENT_QUOTES, 'UTF-8') ?>">
        <link rel="alternate" hreflang="ru-BY" href="<?= htmlspecialchars($pageMeta['canonical'], ENT_QUOTES, 'UTF-8') ?>">
        <link rel="icon" href="<?= htmlspecialchars(arhiton_asset_path('/favicon.svg'), ENT_QUOTES, 'UTF-8') ?>" type="image/svg+xml">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php if ($pageMeta['preloadImage'] !== ''): ?>
            <link rel="preload" as="image" href="<?= htmlspecialchars(arhiton_asset_path($pageMeta['preloadImage']), ENT_QUOTES, 'UTF-8') ?>">
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/bootstrap.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/themify-icons.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/style.css'), ENT_QUOTES, 'UTF-8') ?>">

        <script>
        window.ARHITON_GA_ID = 'G-3G285XD5LH';
        </script>
        <?= arhiton_render_schema_markup($pageMeta['schemas']) ?>
        <?= $extraHead ?>
    </head>
    <body>
        <a class="skip-link" href="#main-content">Перейти к основному содержанию</a>
        <div id="page">
            <nav class="gtco-nav urban-header" role="navigation" aria-label="Основная навигация">
                <div class="gtco-container">
                    <div class="urban-header-top">
                        <div class="urban-top-col urban-top-left">
                            <div class="urban-contact-label">Звоните нам:</div>
                            <a class="urban-contact-value" href="tel:<?= htmlspecialchars($siteIdentity['phone'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($siteIdentity['phoneDisplay'], ENT_QUOTES, 'UTF-8') ?></a>
                        </div>

                        <div class="urban-top-col urban-top-social">
                            <a class="urban-social-link" href="<?= htmlspecialchars($siteIdentity['sameAs'][0], ENT_QUOTES, 'UTF-8') ?>" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                                <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M4.75 1h6.5A3.75 3.75 0 0 1 15 4.75v6.5A3.75 3.75 0 0 1 11.25 15h-6.5A3.75 3.75 0 0 1 1 11.25v-6.5A3.75 3.75 0 0 1 4.75 1Zm0 1.5A2.25 2.25 0 0 0 2.5 4.75v6.5A2.25 2.25 0 0 0 4.75 13.5h6.5a2.25 2.25 0 0 0 2.25-2.25v-6.5A2.25 2.25 0 0 0 11.25 2.5h-6.5ZM8 4.25A3.75 3.75 0 1 1 4.25 8 3.75 3.75 0 0 1 8 4.25Zm0 1.5A2.25 2.25 0 1 0 10.25 8 2.25 2.25 0 0 0 8 5.75Zm3.9-1.87a.85.85 0 1 1 0 1.7.85.85 0 0 1 0-1.7Z"/></svg>
                            </a>
                            <a class="urban-social-link" href="<?= htmlspecialchars($siteIdentity['sameAs'][1], ENT_QUOTES, 'UTF-8') ?>" aria-label="Telegram" target="_blank" rel="noopener noreferrer">
                                <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M15.11 2.02 13.1 13.74c-.15.83-.56 1.03-1.15.65l-3.18-2.35-1.53 1.47c-.17.17-.31.31-.64.31l.23-3.27 5.95-5.37c.26-.23-.06-.36-.4-.13L5.03 9.67 1.86 8.68c-.69-.22-.7-.69.14-1.02L14.4 2.88c.58-.21 1.08.13.9 1.14Z"/></svg>
                            </a>
                            <a class="urban-social-link" href="viber://chat?number=%2B375291182084" aria-label="Viber" target="_blank" rel="noopener noreferrer">
                                <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M8.93 1.02c2.96.2 5.3 2.47 5.54 5.43.17 2.07-.62 3.96-2.05 5.2-.3.26-.48.65-.45 1.05l.08 1.08c.04.57-.54.98-1.07.76l-1.62-.68c-.3-.12-.62-.15-.93-.08a6.53 6.53 0 0 1-1.52.13C3.4 13.8.6 11 .5 7.5.4 3.87 3.3.78 6.94 1c.66.04 1.33-.03 1.99.02Zm-.4 1.52c-.54-.03-1.1 0-1.65-.03A4.95 4.95 0 0 0 2 7.46a4.96 4.96 0 0 0 6.1 4.82c.56-.14 1.16-.1 1.7.13l.78.33-.04-.53a2.22 2.22 0 0 1 .75-1.88 4.96 4.96 0 0 0 1.66-3.75c-.18-2.2-1.95-3.91-4.42-4.04Zm2.43 5.95c-.22.16-.53.39-.9.65-.28.2-.62.22-.93.06-1.38-.72-2.46-1.84-3.24-3.17-.18-.3-.18-.67.03-.95l.55-.76c.19-.26.56-.3.8-.1l.88.74c.23.2.28.53.12.79l-.3.47c-.07.11-.08.26 0 .37.26.41.61.76 1.02 1.03.11.07.25.07.37 0l.45-.29c.26-.16.6-.12.8.1l.72.79c.22.23.2.6-.04.77Z"/></svg>
                            </a>
                        </div>

                        <div class="urban-top-col urban-top-center">
                            <a href="/" class="urban-logo-badge" aria-label="Архитон">
                                <span class="urban-logo-main">АРХИТОН</span>
                                <span class="urban-logo-sub">МАФ</span>
                            </a>
                        </div>

                        <div class="urban-top-col urban-top-right">
                            <div class="urban-contact-label">Напишите нам:</div>
                            <a class="urban-contact-value" href="mailto:<?= htmlspecialchars($siteIdentity['email'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($siteIdentity['email'], ENT_QUOTES, 'UTF-8') ?></a>
                        </div>
                    </div>

                    <div class="urban-header-bottom">
                        <div class="menu-1 urban-main-nav">
                            <ul>
                                <?php foreach ($navItems as $item): ?>
                                    <?php $isActive = $item['path'] === $pageMeta['canonicalPath']; ?>
                                    <li class="<?= $isActive ? 'active' : '' ?>">
                                        <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"<?= $isActive ? ' aria-current="page"' : '' ?>><?= htmlspecialchars(mb_strtoupper($item['label']), ENT_QUOTES, 'UTF-8') ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <?= arhiton_render_breadcrumbs($pageMeta['breadcrumbs']) ?>
            <main id="main-content" class="site-main">
