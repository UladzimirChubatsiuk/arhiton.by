<?php

declare(strict_types=1);

const ARHITON_SITE_NAME = 'Архитон';
const ARHITON_SITE_URL = 'https://arhiton.by';
const ARHITON_DEFAULT_IMAGE = '/images/banner/hero_5.webp';
const ARHITON_SITE_LANGUAGE = 'ru-BY';

/**
 * @return array{
 *   name:string,
 *   legalName:string,
 *   url:string,
 *   logo:string,
 *   image:string,
 *   phone:string,
 *   phoneDisplay:string,
 *   email:string,
 *   address:array<string,string>,
 *   sameAs:array<int,string>
 * }
 */
function arhiton_site_identity(): array
{
    return [
        'name' => ARHITON_SITE_NAME,
        'legalName' => 'ИП Чубатюк Елена Владимировна',
        'url' => ARHITON_SITE_URL,
        'logo' => arhiton_absolute_url('/favicon.svg'),
        'image' => arhiton_absolute_url(ARHITON_DEFAULT_IMAGE),
        'phone' => '+375291182084',
        'phoneDisplay' => '+375 (29) 118-20-84',
        'email' => 'info.arhiton@mail.ru',
        'address' => [
            'streetAddress' => 'ул. Промысловая, 5',
            'addressLocality' => 'аг. Черкассы',
            'addressRegion' => 'Минская область',
            'addressCountry' => 'BY',
        ],
        'sameAs' => [
            'https://www.instagram.com/arhiton.by?igsh=aG1ybXl4anB0ZDA3',
            'https://t.me/Elena_Chubatsiuk',
        ],
    ];
}

function arhiton_current_host(): string
{
    $host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));

    return (string) preg_replace('/:\d+$/', '', $host);
}

function arhiton_is_production_host(): bool
{
    return in_array(arhiton_current_host(), ['arhiton.by', 'www.arhiton.by'], true);
}

function arhiton_normalize_path(string $path): string
{
    $normalized = trim($path);

    if ($normalized === '' || $normalized === '/') {
        return '/';
    }

    $normalized = '/' . ltrim($normalized, '/');
    $normalized = (string) preg_replace('#/+#', '/', $normalized);

    return rtrim($normalized, '/');
}

function arhiton_absolute_url(string $path = '/'): string
{
    $normalizedPath = arhiton_normalize_path($path);

    if ($normalizedPath === '/') {
        return rtrim(ARHITON_SITE_URL, '/') . '/';
    }

    return rtrim(ARHITON_SITE_URL, '/') . $normalizedPath;
}

function arhiton_absolute_asset_url(string $assetPath = ARHITON_DEFAULT_IMAGE): string
{
    if (preg_match('#^https?://#i', $assetPath) === 1) {
        return $assetPath;
    }

    return arhiton_absolute_url('/' . ltrim($assetPath, '/'));
}

function arhiton_asset_path(string $assetPath): string
{
    if ($assetPath === '' || preg_match('#^https?://#i', $assetPath) === 1) {
        return $assetPath;
    }

    $normalizedPath = '/' . ltrim($assetPath, '/');
    $localPath = dirname(__DIR__) . str_replace('/', DIRECTORY_SEPARATOR, $normalizedPath);

    if (!is_file($localPath)) {
        return $normalizedPath;
    }

    return $normalizedPath . '?v=' . rawurlencode((string) filemtime($localPath));
}

/**
 * @return array<int, array{name:string, answer:string}>
 */
function arhiton_home_faq_items(): array
{
    return [
        [
            'name' => 'Какие сроки изготовления малых архитектурных форм?',
            'answer' => 'Стандартные позиции из каталога мы изготавливаем в среднем от 7 до 20 рабочих дней в зависимости от объема заказа и загрузки производства.',
        ],
        [
            'name' => 'Можно ли заказать изделия по индивидуальным размерам и эскизам?',
            'answer' => 'Да, мы изготавливаем скамейки, урны, вазоны, велопарковки и ограждения по индивидуальным размерам, материалам и цветовым решениям под конкретный объект.',
        ],
        [
            'name' => 'Из каких материалов вы производите изделия?',
            'answer' => 'В производстве используем металл, бетон, древесину и комбинированные материалы, подбирая состав с учетом уличной эксплуатации и климатических нагрузок.',
        ],
        [
            'name' => 'Осуществляете ли доставку и монтаж по Беларуси?',
            'answer' => 'Да, организуем доставку по Минску и всей Беларуси, а также можем согласовать монтаж и установку на объекте.',
        ],
        [
            'name' => 'Предоставляете ли гарантию на продукцию?',
            'answer' => 'Да, на продукцию предоставляется гарантия; срок зависит от типа изделия и фиксируется в договоре и сопроводительных документах.',
        ],
    ];
}

/**
 * @return array<int, array{name:string, answer:string}>
 */
function arhiton_catalog_faq_items(): array
{
    return [
        [
            'name' => 'Можно ли адаптировать изделие под конкретный объект?',
            'answer' => 'Да, мы можем изменить размеры, материалы, цветовые решения и конструктив под архитектуру пространства, интенсивность эксплуатации и требования проекта.',
        ],
        [
            'name' => 'Как узнать стоимость изделий из каталога?',
            'answer' => 'Стоимость зависит от модели, объема заказа, комплектации и особенностей изготовления. Для расчета отправьте заявку через каталог или свяжитесь с нами напрямую.',
        ],
        [
            'name' => 'Работаете ли вы только по Минску?',
            'answer' => 'Нет, мы поставляем изделия по Минску и всей Беларуси, а при необходимости согласовываем доставку и установку на объекте.',
        ],
    ];
}

/**
 * @return array<int, array{name:string, url:string, image:string}>
 */
function arhiton_catalog_category_items(): array
{
    return [
        ['name' => 'Скамьи', 'url' => arhiton_absolute_url('/catalog') . '?category=bench', 'image' => '/images/categories/categories_1.webp'],
        ['name' => 'Урны', 'url' => arhiton_absolute_url('/catalog') . '?category=trash', 'image' => '/images/categories/categories_2.webp'],
        ['name' => 'Кашпо и вазоны', 'url' => arhiton_absolute_url('/catalog') . '?category=vases', 'image' => '/images/categories/categories_3.webp'],
        ['name' => 'Уличные светильники', 'url' => arhiton_absolute_url('/catalog') . '?category=lights', 'image' => '/images/categories/categories_4.webp'],
        ['name' => 'Зоны кострища', 'url' => arhiton_absolute_url('/catalog') . '?category=campfire_areas', 'image' => '/images/categories/categories_5.webp'],
        ['name' => 'Кабинки для переодевания', 'url' => arhiton_absolute_url('/catalog') . '?category=cabins', 'image' => '/images/categories/categories_6.webp'],
        ['name' => 'Шезлонги', 'url' => arhiton_absolute_url('/catalog') . '?category=chairs', 'image' => '/images/categories/categories_7.webp'],
    ];
}

/**
 * @return array<int, array{name:string, image:string}>
 */
function arhiton_project_items(): array
{
    return [
        ['name' => 'Скамья-тонель', 'image' => '/images/portfolio/portfolio_0.webp'],
        ['name' => 'Скамейки для благоустройства сквера', 'image' => '/images/portfolio/portfolio_1.webp'],
        ['name' => 'Скамейки для благоустройства города', 'image' => '/images/portfolio/portfolio_6.webp'],
        ['name' => 'Благоустройство Музея Славы', 'image' => '/images/portfolio/portfolio_2.webp'],
        ['name' => 'Поставка урн для станций Минского метрополитена', 'image' => '/images/portfolio/portfolio_3.webp'],
        ['name' => 'Благоустройство пляжей', 'image' => '/images/portfolio/portfolio_4.webp'],
        ['name' => 'Благоустройство поселка Стрешин', 'image' => '/images/portfolio/portfolio_5.webp'],
    ];
}

function arhiton_requested_path(): string
{
    $path = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH);
    $normalized = arhiton_normalize_path($path);

    if ($normalized === '/index.php') {
        return '/';
    }

    $mapping = [
        '/services.php' => '/catalog',
        '/portfolio.php' => '/projects',
        '/about.php' => '/about-us',
        '/contact.php' => '/contacts',
        '/privacy.php' => '/privacy-policy',
        '/terms.php' => '/terms-of-use',
    ];

    return $mapping[$normalized] ?? $normalized;
}

function arhiton_is_generic_title(?string $title): bool
{
    if ($title === null) {
        return true;
    }

    $value = trim($title);

    return $value === ''
        || mb_stripos($value, 'Ваша идея - наше воплощение') !== false
        || mb_stripos($value, 'Ваша идея &mdash; наше воплощение') !== false;
}

function arhiton_is_generic_description(?string $description): bool
{
    if ($description === null) {
        return true;
    }

    $value = trim($description);

    return $value === ''
        || $value === 'Архитон - производство малых архитектурных форм в Беларуси. Скамейки, урны, вазоны, велопарковки и ограждения. Индивидуальный подход, сертифицированные материалы.';
}

/**
 * @return array<string, mixed>
 */
function arhiton_page_defaults(string $path): array
{
    switch ($path) {
        case '/catalog':
            return [
                'title' => 'Каталог МАФ: скамьи, урны, вазоны и светильники | Архитон',
                'description' => 'Каталог малых архитектурных форм от производителя: скамьи, урны, вазоны, светильники, кабинки для переодевания и зоны отдыха для благоустройства в Беларуси.',
                'canonicalPath' => '/catalog',
                'image' => '/images/categories/categories_1.webp',
                'headline' => 'Каталог малых архитектурных форм для благоустройства и городской среды',
                'schemaType' => 'CollectionPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'Каталог'],
                ],
                'noindexIfQuery' => true,
                'schemas' => [
                    arhiton_service_schema([
                        'name' => 'Производство малых архитектурных форм',
                        'serviceType' => 'Производство и поставка МАФ',
                        'url' => arhiton_absolute_url('/catalog'),
                        'description' => 'Производим и поставляем малые архитектурные формы для дворов, парков, общественных пространств и жилых комплексов в Беларуси.',
                    ]),
                    arhiton_item_list_schema('Категории каталога Архитон', arhiton_catalog_category_items()),
                    arhiton_faq_schema(arhiton_catalog_faq_items()),
                ],
            ];
        case '/projects':
            return [
                'title' => 'Проекты благоустройства и реализованные МАФ | Архитон',
                'description' => 'Реализованные проекты Архитон: скамьи, урны и другие малые архитектурные формы для общественных пространств, городской среды и инфраструктурных объектов.',
                'canonicalPath' => '/projects',
                'image' => '/images/portfolio/portfolio_0.webp',
                'headline' => 'Реализованные проекты Архитон',
                'schemaType' => 'CollectionPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'Проекты'],
                ],
                'schemas' => [
                    arhiton_item_list_schema('Реализованные проекты Архитон', arhiton_project_items()),
                ],
            ];
        case '/about-us':
            return [
                'title' => 'О компании Архитон | Производство малых архитектурных форм',
                'description' => 'Архитон производит малые архитектурные формы для благоустройства общественных пространств, жилых комплексов и городской среды в Беларуси.',
                'canonicalPath' => '/about-us',
                'image' => '/images/proizvodit/img_4.webp',
                'headline' => 'О компании Архитон',
                'schemaType' => 'AboutPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'О нас'],
                ],
            ];
        case '/contacts':
            return [
                'title' => 'Контакты Архитон | Заказать малые архитектурные формы',
                'description' => 'Контакты Архитон для консультации, подбора и заказа малых архитектурных форм в Беларуси. Телефон, email, документы и сведения об изготовителе.',
                'canonicalPath' => '/contacts',
                'image' => '/images/documents/img_2.jpg',
                'headline' => 'Контакты для консультации, подбора изделий и обсуждения проекта',
                'schemaType' => 'ContactPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'Контакты'],
                ],
                'schemas' => [
                    arhiton_local_business_schema(),
                ],
            ];
        case '/privacy-policy':
            return [
                'title' => 'Политика конфиденциальности | Архитон',
                'description' => 'Политика конфиденциальности сайта arhiton.by: порядок обработки персональных данных, cookie и способы связи по вопросам персональных данных.',
                'canonicalPath' => '/privacy-policy',
                'image' => '/images/logo.png',
                'headline' => 'Политика конфиденциальности',
                'schemaType' => 'WebPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'Политика конфиденциальности'],
                ],
                'robots' => 'noindex, follow',
            ];
        case '/terms-of-use':
            return [
                'title' => 'Пользовательское соглашение | Архитон',
                'description' => 'Пользовательское соглашение сайта arhiton.by: условия использования материалов сайта, ответственность сторон и порядок связи.',
                'canonicalPath' => '/terms-of-use',
                'image' => '/images/logo.png',
                'headline' => 'Пользовательское соглашение',
                'schemaType' => 'WebPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => 'Пользовательское соглашение'],
                ],
                'robots' => 'noindex, follow',
            ];
        case '/404':
            return [
                'title' => 'Страница не найдена | Архитон',
                'description' => 'Запрошенная страница не найдена. Перейдите в каталог, проекты или контакты Архитон.',
                'canonicalPath' => '/404',
                'image' => '/images/logo.png',
                'headline' => 'Страница не найдена',
                'schemaType' => 'WebPage',
                'breadcrumbs' => [
                    ['label' => 'Главная', 'path' => '/'],
                    ['label' => '404'],
                ],
                'robots' => 'noindex, nofollow',
            ];
        default:
            return [
                'title' => 'Малые архитектурные формы в Беларуси | Архитон',
                'description' => 'Архитон производит малые архитектурные формы для дворов, парков, жилых комплексов и общественных пространств в Беларуси: скамьи, урны, вазоны, светильники, кабинки и зоны отдыха.',
                'canonicalPath' => '/',
                'image' => ARHITON_DEFAULT_IMAGE,
                'headline' => 'Малые архитектурные формы для благоустройства в Беларуси',
                'schemaType' => 'WebPage',
                'schemas' => [
                    arhiton_local_business_schema(),
                    arhiton_service_schema([
                        'name' => 'Производство малых архитектурных форм в Беларуси',
                        'serviceType' => 'Производство малых архитектурных форм',
                        'url' => arhiton_absolute_url('/catalog'),
                        'areaServed' => [
                            '@type' => 'Country',
                            'name' => 'Беларусь',
                        ],
                        'description' => 'Производим скамьи, урны, кашпо, вазоны, светильники, кабинки для переодевания и другие решения для благоустройства городской среды.',
                    ]),
                    arhiton_faq_schema(arhiton_home_faq_items()),
                ],
                'preloadImage' => ARHITON_DEFAULT_IMAGE,
            ];
    }
}

/**
 * @param array<int, array{label:string, path?:string}> $breadcrumbs
 * @return array<int, array{label:string, path?:string|null}>
 */
function arhiton_normalize_breadcrumbs(array $breadcrumbs): array
{
    $normalized = [];

    foreach ($breadcrumbs as $item) {
        if (empty($item['label'])) {
            continue;
        }

        $normalized[] = [
            'label' => trim((string) $item['label']),
            'path' => isset($item['path']) && $item['path'] !== '' ? arhiton_normalize_path((string) $item['path']) : null,
        ];
    }

    return $normalized;
}

/**
 * @param array<string, mixed> $overrides
 * @return array<string, mixed>
 */
function arhiton_prepare_page_meta(array $overrides = []): array
{
    $identity = arhiton_site_identity();
    $requestedPath = arhiton_requested_path();
    $defaults = arhiton_page_defaults($requestedPath);
    $canonicalPath = arhiton_normalize_path((string) ($overrides['canonicalPath'] ?? $defaults['canonicalPath'] ?? $requestedPath));
    $canonical = arhiton_absolute_url($canonicalPath);
    $hasQuery = !empty($_GET);
    $requestedRobots = trim((string) ($overrides['robots'] ?? $defaults['robots'] ?? ''));
    $noindexIfQuery = (bool) ($overrides['noindexIfQuery'] ?? $defaults['noindexIfQuery'] ?? false);
    $defaultRobots = 'index, follow, max-image-preview:large';

    if (!arhiton_is_production_host()) {
        $robots = 'noindex, nofollow, noarchive';
    } elseif ($noindexIfQuery && $hasQuery) {
        $robots = 'noindex, follow, max-image-preview:large';
    } elseif ($requestedRobots !== '') {
        $robots = $requestedRobots;
    } else {
        $robots = $defaultRobots;
    }

    $titleOverride = isset($overrides['title']) ? trim((string) $overrides['title']) : '';
    $descriptionOverride = isset($overrides['description']) ? trim((string) $overrides['description']) : '';
    $title = !arhiton_is_generic_title($titleOverride) ? $titleOverride : (string) ($defaults['title'] ?? ARHITON_SITE_NAME);
    $description = !arhiton_is_generic_description($descriptionOverride)
        ? $descriptionOverride
        : (string) ($defaults['description'] ?? 'Производство малых архитектурных форм для благоустройства дворов, парков, жилых комплексов и общественных пространств в Беларуси.');
    $image = arhiton_absolute_asset_url((string) ($overrides['image'] ?? $defaults['image'] ?? ARHITON_DEFAULT_IMAGE));
    $imageAlt = trim((string) ($overrides['imageAlt'] ?? ($title !== '' ? $title : $identity['name'])));
    $breadcrumbs = arhiton_normalize_breadcrumbs((array) ($overrides['breadcrumbs'] ?? $defaults['breadcrumbs'] ?? []));
    $schemaType = trim((string) ($overrides['schemaType'] ?? $defaults['schemaType'] ?? 'WebPage'));
    $ogType = trim((string) ($overrides['ogType'] ?? ($canonicalPath === '/' ? 'website' : 'article')));
    $headline = trim((string) ($overrides['headline'] ?? $defaults['headline'] ?? $title));

    $schemas = [
        arhiton_organization_schema(),
        arhiton_website_schema(),
        arhiton_webpage_schema([
            '@type' => $schemaType,
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $title,
            'headline' => $headline,
            'description' => $description,
            'inLanguage' => ARHITON_SITE_LANGUAGE,
            'isPartOf' => ['@id' => arhiton_absolute_url('/') . '#website'],
            'about' => ['@id' => arhiton_absolute_url('/') . '#organization'],
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => $image,
            ],
        ]),
    ];

    if ($breadcrumbs !== []) {
        $schemas[] = arhiton_breadcrumb_schema($breadcrumbs, $canonical);
    }

    foreach ((array) ($defaults['schemas'] ?? []) as $schema) {
        if (is_array($schema) && $schema !== []) {
            $schemas[] = $schema;
        }
    }

    foreach ((array) ($overrides['schemas'] ?? []) as $schema) {
        if (is_array($schema) && $schema !== []) {
            $schemas[] = $schema;
        }
    }

    return [
        'title' => $title,
        'description' => $description,
        'canonicalPath' => $canonicalPath,
        'canonical' => $canonical,
        'robots' => $robots,
        'image' => $image,
        'imageAlt' => $imageAlt,
        'htmlLang' => ARHITON_SITE_LANGUAGE,
        'ogType' => $ogType,
        'headline' => $headline,
        'preloadImage' => isset($overrides['preloadImage']) && $overrides['preloadImage'] !== ''
            ? '/' . ltrim((string) $overrides['preloadImage'], '/')
            : (string) ($defaults['preloadImage'] ?? ''),
        'breadcrumbs' => $breadcrumbs,
        'schemas' => $schemas,
    ];
}

/**
 * @param array<string, mixed> $data
 * @return array<string, mixed>
 */
function arhiton_webpage_schema(array $data): array
{
    return ['@context' => 'https://schema.org'] + $data;
}

/**
 * @return array<string, mixed>
 */
function arhiton_organization_schema(): array
{
    $identity = arhiton_site_identity();

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => arhiton_absolute_url('/') . '#organization',
        'name' => $identity['name'],
        'legalName' => $identity['legalName'],
        'url' => $identity['url'],
        'logo' => $identity['logo'],
        'image' => $identity['image'],
        'telephone' => $identity['phone'],
        'email' => $identity['email'],
        'sameAs' => $identity['sameAs'],
    ];
}

/**
 * @return array<string, mixed>
 */
function arhiton_website_schema(): array
{
    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => arhiton_absolute_url('/') . '#website',
        'url' => arhiton_absolute_url('/'),
        'name' => ARHITON_SITE_NAME,
        'inLanguage' => ARHITON_SITE_LANGUAGE,
        'publisher' => ['@id' => arhiton_absolute_url('/') . '#organization'],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => arhiton_absolute_url('/catalog') . '?q={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ],
    ];
}

/**
 * @param array<int, array{label:string, path?:string|null}> $breadcrumbs
 * @return array<string, mixed>
 */
function arhiton_breadcrumb_schema(array $breadcrumbs, string $canonical): array
{
    $items = [];

    foreach ($breadcrumbs as $index => $item) {
        $path = isset($item['path']) && $item['path'] !== null
            ? arhiton_absolute_url((string) $item['path'])
            : $canonical;

        $items[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['label'],
            'item' => $path,
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        '@id' => $canonical . '#breadcrumb',
        'itemListElement' => $items,
    ];
}

/**
 * @param array<int, array{name:string, answer:string}> $faqItems
 * @return array<string, mixed>
 */
function arhiton_faq_schema(array $faqItems): array
{
    $entities = [];

    foreach ($faqItems as $item) {
        if (empty($item['name']) || empty($item['answer'])) {
            continue;
        }

        $entities[] = [
            '@type' => 'Question',
            'name' => trim((string) $item['name']),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => trim((string) $item['answer']),
            ],
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $entities,
    ];
}

/**
 * @param array<int, array{name:string, url?:string, image?:string}> $items
 * @return array<string, mixed>
 */
function arhiton_item_list_schema(string $name, array $items): array
{
    $listItems = [];

    foreach ($items as $index => $item) {
        if (empty($item['name'])) {
            continue;
        }

        $entry = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => trim((string) $item['name']),
        ];

        if (!empty($item['url'])) {
            $entry['item'] = $item['url'];
        }

        if (!empty($item['image'])) {
            $entry['image'] = arhiton_absolute_asset_url((string) $item['image']);
        }

        $listItems[] = $entry;
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => $name,
        'itemListElement' => $listItems,
    ];
}

/**
 * @param array<string, mixed> $data
 * @return array<string, mixed>
 */
function arhiton_service_schema(array $data): array
{
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'provider' => ['@id' => arhiton_absolute_url('/') . '#organization'],
    ] + $data;
}

/**
 * @return array<string, mixed>
 */
function arhiton_local_business_schema(): array
{
    $identity = arhiton_site_identity();

    return [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => arhiton_absolute_url('/') . '#localbusiness',
        'name' => $identity['name'],
        'legalName' => $identity['legalName'],
        'url' => $identity['url'],
        'logo' => $identity['logo'],
        'image' => [$identity['image']],
        'telephone' => $identity['phone'],
        'email' => $identity['email'],
        'priceRange' => 'BYN',
        'currenciesAccepted' => 'BYN',
        'paymentAccepted' => 'Безналичный расчет',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Беларусь',
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $identity['address']['streetAddress'],
            'addressLocality' => $identity['address']['addressLocality'],
            'addressRegion' => $identity['address']['addressRegion'],
            'addressCountry' => $identity['address']['addressCountry'],
        ],
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens' => '09:00',
            'closes' => '19:00',
        ]],
        'contactPoint' => [[
            '@type' => 'ContactPoint',
            'telephone' => $identity['phone'],
            'contactType' => 'customer support',
            'areaServed' => 'BY',
            'availableLanguage' => ['Russian'],
        ]],
        'sameAs' => $identity['sameAs'],
    ];
}

/**
 * @param array<int, array{label:string, path?:string|null}> $breadcrumbs
 */
function arhiton_render_breadcrumbs(array $breadcrumbs): string
{
    if ($breadcrumbs === []) {
        return '';
    }

    ob_start();
    ?>
    <div class="breadcrumbs-shell">
        <div class="gtco-container">
            <nav class="site-breadcrumbs" aria-label="Хлебные крошки">
                <ol class="site-breadcrumbs__list">
                    <?php foreach ($breadcrumbs as $item): ?>
                        <li class="site-breadcrumbs__item">
                            <?php if (!empty($item['path'])): ?>
                                <a href="<?= htmlspecialchars((string) $item['path'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
                            <?php else: ?>
                                <span aria-current="page"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </div>
    <?php

    return (string) ob_get_clean();
}

/**
 * @param array<int, array<string, mixed>> $schemas
 */
function arhiton_render_schema_markup(array $schemas): string
{
    $markup = '';

    foreach ($schemas as $schema) {
        if ($schema === []) {
            continue;
        }

        $markup .= '<script type="application/ld+json">' . PHP_EOL;
        $markup .= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        $markup .= PHP_EOL . '</script>' . PHP_EOL;
    }

    return $markup;
}

