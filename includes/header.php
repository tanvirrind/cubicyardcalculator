<?php
$page = $page ?? [];
$title = $page['title'] ?? 'Cubic Yard Calculator';
$description = $page['description'] ?? 'Calculate cubic yards for concrete, gravel, mulch, dirt, sand, and rock.';
$canonical = $page['canonical'] ?? 'https://cubicyardcalculator.site/';
$schema = $page['schema'] ?? null;
$root = $page['root'] ?? '';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:site_name" content="Cubic Yard Calculator">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='12' fill='%232e7d32'/%3E%3Cpath d='M16 24 32 15l16 9v18l-16 9-16-9z' fill='%23fff'/%3E%3Cpath d='M16 24 32 33l16-9M32 33v18' fill='none' stroke='%232e7d32' stroke-width='3'/%3E%3C/svg%3E">
  <link rel="stylesheet" href="<?= $root ?>assets/css/style.css">
<?php if ($schema): ?>
<?php
if (!empty($page['breadcrumbs']) && isset($schema['@graph']) && is_array($schema['@graph'])) {
  $crumbItems = [];
  foreach ($page['breadcrumbs'] as $i => $crumb) {
    $li = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb[0]];
    if (!empty($crumb[1])) $li['item'] = $crumb[1];
    $crumbItems[] = $li;
  }
  $schema['@graph'][] = ['@type' => 'BreadcrumbList', 'itemListElement' => $crumbItems];
}
?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endif; ?>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header">
    <nav class="site-nav" aria-label="Main navigation">
      <a class="brand" href="<?= $root ?>" aria-label="Cubic Yard Calculator home">
        <span class="brand-mark" aria-hidden="true">
          <svg viewBox="0 0 64 64" focusable="false">
            <path d="M16 24 32 15l16 9v18l-16 9-16-9z" fill="#fff"/>
            <path d="M16 24 32 33l16-9M32 33v18" fill="none" stroke="#2e7d32" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <span>Cubic Yard Calculator</span>
      </a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="navLinks">Menu</button>
      <div class="nav-links" id="navLinks">
        <a href="<?= $root ?>">Home</a>
        <a href="<?= $root ?>concrete-calculator/">Concrete</a>
        <a href="<?= $root ?>gravel-calculator/">Gravel</a>
        <a href="<?= $root ?>mulch-calculator/">Mulch</a>
        <a href="<?= $root ?>dirt-calculator/">Dirt &amp; Soil</a>
        <a href="<?= $root ?>sand-calculator/">Sand</a>
        <a href="<?= $root ?>tons-to-cubic-yards-calculator/">Tons &rarr; Yd&sup3;</a>
        <a href="<?= $root ?>square-feet-to-cubic-yards-calculator/">Sq Ft &rarr; Yd&sup3;</a>
        <a href="<?= $root ?>cubic-feet-to-cubic-yards-calculator/">Cu Ft &rarr; Yd&sup3;</a>
        <a href="<?= $root ?>how-to-calculate-cubic-yards/">Guide</a>
        <a href="<?= $root ?>contact/">Contact</a>
      </div>
    </nav>
  </header>
  <main id="main" class="site-main">
<?php if (!empty($page['breadcrumbs'])): ?>
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <?php foreach ($page['breadcrumbs'] as $i => $crumb): ?><?php if ($i > 0): ?><span class="crumb-sep" aria-hidden="true">/</span><?php endif; ?><?php if (!empty($crumb[1])): ?><a href="<?= htmlspecialchars($crumb[1], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($crumb[0], ENT_QUOTES, 'UTF-8') ?></a><?php else: ?><span aria-current="page"><?= htmlspecialchars($crumb[0], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?><?php endforeach; ?>
    </nav>
<?php endif; ?>
