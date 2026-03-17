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
        <link rel="alternate icon" href="<?= htmlspecialchars(arhiton_asset_path('/images/logo.png'), ENT_QUOTES, 'UTF-8') ?>" type="image/png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
        <?php if ($pageMeta['preloadImage'] !== ''): ?>
            <link rel="preload" as="image" href="<?= htmlspecialchars(arhiton_asset_path($pageMeta['preloadImage']), ENT_QUOTES, 'UTF-8') ?>">
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/animate.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/icomoon.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/themify-icons.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/bootstrap.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/owl.carousel.min.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/owl.theme.default.min.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?= htmlspecialchars(arhiton_asset_path('/css/style.css'), ENT_QUOTES, 'UTF-8') ?>">

        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/modernizr-2.6.2.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <!--[if lt IE 9]>
        <script src="<?= htmlspecialchars(arhiton_asset_path('/js/respond.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <![endif]-->

        <script>
        window.ARHITON_GA_ID = 'G-3G285XD5LH';
        </script>
        <?= arhiton_render_schema_markup($pageMeta['schemas']) ?>
        <?= $extraHead ?>
    </head>
    <body>
        <a class="skip-link" href="#main-content">Перейти к основному содержанию</a>
        <div class="gtco-loader"></div>
        <div id="page">
            <nav class="gtco-nav urban-header" role="navigation" aria-label="Основная навигация">
                <div class="gtco-container">
                    <div class="urban-header-top">
                        <div class="urban-top-col urban-top-left">
                            <div class="urban-contact-label">Звоните нам:</div>
                            <a class="urban-contact-value" href="tel:<?= htmlspecialchars($siteIdentity['phone'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($siteIdentity['phoneDisplay'], ENT_QUOTES, 'UTF-8') ?></a>
                        </div>

                        <div class="urban-top-col urban-top-social">
                            <a class="urban-social-link" href="<?= htmlspecialchars($siteIdentity['sameAs'][0], ENT_QUOTES, 'UTF-8') ?>" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                            <a class="urban-social-link" href="<?= htmlspecialchars($siteIdentity['sameAs'][1], ENT_QUOTES, 'UTF-8') ?>" aria-label="Telegram" target="_blank" rel="noopener noreferrer"><i class="bi bi-telegram" aria-hidden="true"></i></a>
                            <a class="urban-social-link" href="viber://chat?number=%2B375291182084" aria-label="Viber" target="_blank" rel="noopener noreferrer"><i class="bi bi-chat-dots-fill" aria-hidden="true"></i></a>
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
