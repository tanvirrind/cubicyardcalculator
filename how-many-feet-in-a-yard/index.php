<?php
$faqs = [
  ['How many feet are in a yard?', 'There are 3 linear feet in 1 yard.'],
  ['How many inches are in a yard?', 'There are 36 inches in 1 yard because 3 feet multiplied by 12 inches equals 36 inches.'],
  ['Is a yard the same as a cubic yard?', 'No. A yard measures length. A cubic yard measures volume and equals 27 cubic feet.'],
  ['How many feet are in a cubic yard?', 'A cubic yard is 3 feet long, 3 feet wide, and 3 feet deep. It contains 27 cubic feet, but it is not a linear measurement.']
];
$page = [
  'root' => '../',
  'title' => 'How Many Feet in a Yard? Feet, Inches and Cubic Yards',
  'description' => 'Learn how many feet and inches are in a yard, plus the difference between a yard and a cubic yard. Includes quick conversion examples.',
  'canonical' => 'https://cubicyardcalculator.site/how-many-feet-in-a-yard/',
  'schema' => ['@context' => 'https://schema.org', '@graph' => [
    ['@type' => 'WebPage', 'name' => 'How Many Feet in a Yard?', 'url' => 'https://cubicyardcalculator.site/how-many-feet-in-a-yard/'],
    ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($faq) => ['@type' => 'Question', 'name' => $faq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]]], $faqs)]
  ]]
];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['How Many Feet in a Yard?', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Quick measurement answer</p><h1>How Many Feet in a Yard?</h1><p class="lead">There are <strong>3 feet in 1 yard</strong> and <strong>36 inches in 1 yard</strong>. Use the guide below to avoid confusing linear yards with cubic yards.</p></section>
<section class="answer-box"><p><strong class="lead-answer">Quick answer:</strong> 1 yard = 3 feet = 36 inches. A cubic yard is different: it is a 3 ft × 3 ft × 3 ft volume equal to 27 cubic feet.</p></section>
<section class="content-section"><h2>Yard Conversion Table</h2><div class="table-wrap"><table><thead><tr><th>Measurement</th><th>Equivalent</th></tr></thead><tbody><tr><td>1 yard</td><td>3 feet</td></tr><tr><td>1 yard</td><td>36 inches</td></tr><tr><td>2 yards</td><td>6 feet</td></tr><tr><td>3 yards</td><td>9 feet</td></tr><tr><td>10 yards</td><td>30 feet</td></tr></tbody></table></div></section>
<section class="content-section"><h2>Yards Versus Cubic Yards</h2><p>A yard is a unit of length. It describes how long something is. A cubic yard is a unit of volume used for concrete, gravel, mulch, dirt, sand, and other bulk materials.</p><p>To calculate cubic yards, multiply length × width × depth in feet, then divide by 27. For example, a 10 ft × 10 ft area at 4 inches deep needs about 1.23 cubic yards.</p><p><a class="button button-primary" href="../">Open the Cubic Yard Calculator</a></p></section>
<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Conversions</h2><div class="link-grid"><a href="../how-many-cubic-feet-in-a-cubic-yard/">How many cubic feet are in a cubic yard?</a><a href="../cubic-feet-to-cubic-yards-calculator/">Cubic feet to cubic yards calculator</a><a href="../square-yard-calculator/">Square yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
