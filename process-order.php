<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

header('Content-Type: application/json; charset=UTF-8');
header('X-Robots-Tag: noindex, nofollow, noarchive');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Метод не поддерживается.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$configPath = __DIR__ . '/process-order-config.php';
$autoloadPath = __DIR__ . '/vendor/autoload.php';

if (!is_file($configPath) || !is_file($autoloadPath)) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Отправка заявок пока не настроена.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$config = require $configPath;
require $autoloadPath;

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$product = trim((string) ($_POST['product'] ?? ''));
$selectedProductName = trim((string) ($_POST['selected_product_name'] ?? ''));
$privacyConsent = trim((string) ($_POST['privacy_consent'] ?? ''));
$websiteTrap = trim((string) ($_POST['website'] ?? ''));

if ($websiteTrap !== '') {
    echo json_encode([
        'status' => 'success',
        'message' => 'Заявка отправлена.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$productLabels = [
    'bench' => 'Скамьи',
    'trash' => 'Урны',
    'vases' => 'Кашпо | Вазоны',
    'lights' => 'Уличные светильники',
    'campfire_areas' => 'Зоны кострища',
    'cabins' => 'Кабинки для переодевания',
    'chairs' => 'Шезлонги',
];

if ($name === '' || $phone === '' || $product === '') {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Заполните имя, телефон и категорию продукции.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($privacyConsent !== '1') {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Подтвердите согласие на обработку персональных данных.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Проверьте корректность имени.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if (mb_strlen($phone) < 7 || mb_strlen($phone) > 30) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Проверьте корректность телефона.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$productLabel = $productLabels[$product] ?? $product;
$subject = 'Новая заявка с сайта arhiton.by';
$bodyLines = [
    'Новая заявка с сайта arhiton.by',
    '',
    'Имя: ' . $name,
    'Телефон: ' . $phone,
    'Категория: ' . $productLabel,
];

if ($selectedProductName !== '') {
    $bodyLines[] = 'Изделие: ' . $selectedProductName;
}

$escape = static function (string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};

$detailsRows = [
    ['label' => 'Имя', 'value' => $name],
    ['label' => 'Телефон', 'value' => $phone],
    ['label' => 'Категория', 'value' => $productLabel],
];

if ($selectedProductName !== '') {
    $detailsRows[] = ['label' => 'Изделие', 'value' => $selectedProductName];
}

$detailsHtml = '';
foreach ($detailsRows as $row) {
    $detailsHtml .= sprintf(
        '<tr>
            <td style="padding:12px 16px;border-bottom:1px solid #eef2ee;width:34%%;font-size:13px;line-height:1.5;color:#6a756f;font-weight:600;">%s</td>
            <td style="padding:12px 16px;border-bottom:1px solid #eef2ee;font-size:14px;line-height:1.6;color:#1f2a24;">%s</td>
        </tr>',
        $escape($row['label']),
        $escape($row['value'])
    );
}

$htmlBody = sprintf(
    '<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>%s</title>
    </head>
    <body style="margin:0;padding:24px;background:#f4f7f3;font-family:Arial,sans-serif;color:#1f2a24;">
        <table role="presentation" width="100%%" cellspacing="0" cellpadding="0" style="max-width:720px;margin:0 auto;border-collapse:collapse;">
            <tr>
                <td style="padding-bottom:20px;">
                    <table role="presentation" width="100%%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;background:linear-gradient(135deg,#1f2a24 0%%,#31443a 100%%);border-radius:20px;overflow:hidden;">
                        <tr>
                            <td style="padding:28px 32px;">
                                <div style="display:inline-block;margin-bottom:14px;padding:7px 12px;border-radius:999px;background:rgba(82,214,129,.18);color:#d8ffe6;font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;">Новая заявка</div>
                                <h1 style="margin:0 0 10px;font-size:28px;line-height:1.25;color:#ffffff;">Заявка с сайта arhiton.by</h1>
                                <p style="margin:0;font-size:15px;line-height:1.7;color:rgba(255,255,255,.78);">Пользователь оставил новую заявку на подбор или изготовление изделия. Основные данные приведены ниже.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table role="presentation" width="100%%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;background:#ffffff;border:1px solid #e5ece6;border-radius:20px;overflow:hidden;box-shadow:0 16px 44px rgba(31,42,36,.08);">
                        <tr>
                            <td style="padding:24px 24px 10px;">
                                <h2 style="margin:0;font-size:20px;line-height:1.35;color:#1f2a24;">Данные по заявке</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:8px 24px 24px;">
                                <table role="presentation" width="100%%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #eef2ee;border-radius:16px;overflow:hidden;">
                                    %s
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding-top:16px;text-align:center;font-size:12px;line-height:1.6;color:#7d8782;">
                    Это письмо сформировано автоматически с сайта arhiton.by
                </td>
            </tr>
        </table>
    </body>
    </html>',
    $escape($subject),
    $detailsHtml
);

$smtpConfig = $config['smtp'] ?? [];
$smtpHost = trim((string) ($smtpConfig['host'] ?? ''));
$smtpUsername = trim((string) ($smtpConfig['username'] ?? ''));
$smtpPassword = trim((string) ($smtpConfig['password'] ?? ''));
$toEmail = trim((string) ($config['to_email'] ?? ''));
$fromEmail = trim((string) ($config['from_email'] ?? ''));
$fromName = trim((string) ($config['from_name'] ?? 'Архитон'));

if ($smtpHost === '' || $smtpUsername === '' || $smtpPassword === '' || $toEmail === '' || $fromEmail === '') {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'SMTP еще не настроен. Укажите параметры отправки на сервере.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', __DIR__ . '/vendor/phpmailer/phpmailer/language/');
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = (bool) ($smtpConfig['auth'] ?? true);
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->Port = (int) ($smtpConfig['port'] ?? 465);

    $encryption = strtolower((string) ($smtpConfig['encryption'] ?? 'ssl'));
    if ($encryption === 'tls') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    } elseif ($encryption === 'ssl') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    }

    if (!empty($smtpConfig['debug'])) {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    }

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail);
    $mail->addReplyTo($fromEmail, $fromName);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $htmlBody;
    $mail->AltBody = implode(PHP_EOL, $bodyLines);
    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Заявка отправлена.',
    ], JSON_UNESCAPED_UNICODE);
} catch (Exception $exception) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Не удалось отправить заявку. Проверьте SMTP-настройки.',
    ], JSON_UNESCAPED_UNICODE);
}
