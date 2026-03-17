<?php

declare(strict_types=1);

$baseConfig = [
    'from_email' => getenv('ORDER_MAIL_FROM') ?: 'info.arhiton@mail.ru',
    'from_name' => getenv('ORDER_MAIL_FROM_NAME') ?: 'Архитон',
    'to_email' => getenv('ORDER_MAIL_TO') ?: 'info.arhiton@mail.ru',
    'smtp' => [
        'host' => getenv('ORDER_SMTP_HOST') ?: 'smtp.mail.ru',
        'port' => (int) (getenv('ORDER_SMTP_PORT') ?: 465),
        'username' => getenv('ORDER_SMTP_USERNAME') ?: 'info.arhiton@mail.ru',
        'password' => getenv('ORDER_SMTP_PASSWORD') ?: '',
        'encryption' => getenv('ORDER_SMTP_ENCRYPTION') ?: 'ssl',
        'auth' => filter_var(getenv('ORDER_SMTP_AUTH') ?: 'true', FILTER_VALIDATE_BOOLEAN),
        'debug' => filter_var(getenv('ORDER_SMTP_DEBUG') ?: 'false', FILTER_VALIDATE_BOOLEAN),
    ],
];

$localConfigPath = __DIR__ . '/process-order-config.local.php';

if (is_file($localConfigPath)) {
    $localConfig = require $localConfigPath;

    if (is_array($localConfig)) {
        $baseConfig = array_replace_recursive($baseConfig, $localConfig);
    }
}

return $baseConfig;
