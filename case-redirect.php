<?php
// Handles URLs that contain capital letters (see .htaccess).
// /About-Us or /About-Us.php -> 301 to /about-us when that page exists, otherwise 404.

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$slug = strtolower(trim(rawurldecode($path), '/'));
$slug = preg_replace('/\.php$/', '', $slug);

// Files that are not standalone pages
$not_pages = ['header', 'header-links', 'footer', 'footer-links', 'doctors-data', '_doctor-profile-template', 'case-redirect'];

if ($slug === '' || $slug === 'index') {
    $target = '/';
} elseif (preg_match('/^[a-z0-9_-]+$/', $slug) && !in_array($slug, $not_pages, true) && is_file(__DIR__ . '/' . $slug . '.php')) {
    $target = '/' . $slug;
} else {
    $target = null;
}

if ($target !== null) {
    $query = $_SERVER['QUERY_STRING'] ?? '';
    header('Location: https://www.prayaghospital.in' . $target . ($query !== '' ? '?' . $query : ''), true, 301);
    exit;
}

http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Page Not Found | Prayag Hospital</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 80px 20px; color: #333;">
    <h1 style="color: #3D7A62;">Page Not Found</h1>
    <p>The page you are looking for does not exist.</p>
    <p><a href="https://www.prayaghospital.in/" style="color: #3D7A62;">Go to the Prayag Hospital homepage</a></p>
</body>
</html>
