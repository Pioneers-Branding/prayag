<?php
// HSTS: OpenLiteSpeed ignores "Header" lines in .htaccess, so send it from PHP (HTTPS only).
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') == 443)
    || (strtolower($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
if ($isHttps && !headers_sent()) {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}
?>
<!-- Connect early to third-party hosts -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts - Proxima Nova Alternative (Using Inter as fallback) -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
<noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/styles.css?v=<?php echo filemtime(__DIR__ . '/assets/css/styles.css'); ?>">
<link rel="stylesheet" href="assets/css/cookie-consent.css?v=<?php echo filemtime(__DIR__ . '/assets/css/cookie-consent.css'); ?>">

<link rel="icon" href="assets/images/favicon.png">

<?php
// Canonical URL: www, no .php, no query string. A page can override it by setting $canonical_url before including this file.
if (!isset($canonical_url)) {
    $canonical_page = basename($_SERVER['SCRIPT_NAME'], '.php');
    $canonical_url = 'https://www.prayaghospital.in/' . ($canonical_page === 'index' ? '' : $canonical_page);
}
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q83RPQ6P5N"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-Q83RPQ6P5N');
</script>