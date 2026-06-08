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
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='12' fill='%232e7d32'/%3E%3Cpath d='M16 24 32 15l16 9v18l-16 9-16-9z' fill='%23fff'/%3E%3Cpath d='M16 24 32 33l16-9M32 33v18' fill='none' stroke='%232e7d32' stroke-width='3'/%3E%3C/svg%3E">
  <link rel="stylesheet" href="<?= $root ?>assets/css/style.css">
<?php if ($schema): ?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endif; ?>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header">
    <nav class="site-nav" aria-label="Main navigation">
      <a class="brand" href="<?= $root ?>">Cubic Yard Calculator</a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="navLinks">Menu</button>
      <div class="nav-links" id="navLinks">
        <a href="<?= $root ?>concrete-calculator/">Concrete</a>
        <a href="<?= $root ?>gravel-calculator/">Gravel</a>
        <a href="<?= $root ?>mulch-calculator/">Mulch</a>
        <a href="<?= $root ?>dirt-calculator/">Dirt</a>
      </div>
    </nav>
  </header>
  <main id="main" class="site-main">
