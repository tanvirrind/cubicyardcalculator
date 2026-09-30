<?php
$faqs = [
  ['How many 2-cubic-foot bags are in a cubic yard?', 'There are 13.5 two-cubic-foot bags in a cubic yard, so round up to 14 bags before adding overage.'],
  ['How many bags of mulch do I need?', 'Multiply the area by depth to get cubic feet, divide by 27 for cubic yards, then multiply cubic yards by 13.5 for two-cubic-foot bags.'],
  ['How deep should mulch be?', 'Most beds use 2 to 3 inches. Four inches is usually a practical maximum for a fresh layer.'],
  ['Should I add extra mulch?', 'Add around 10 percent for settling, uneven areas, and waste.']
];
$page = ['root' => '../', 'title' => 'Mulch Bag Calculator - Cubic Yards to Bags', 'description' => 'Calculate how many bags of mulch you need from square feet and depth. Convert cubic yards to 2-cubic-foot bags with coverage examples.', 'canonical' => 'https://cubicyardcalculator.site/mulch-bag-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebPage', 'name' => 'Mulch Bag Calculator', 'url' => 'https://cubicyardcalculator.site/mulch-bag-calculator/'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($faq) => ['@type' => 'Question', 'name' => $faq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Mulch Bag Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Landscape bag estimator</p><h1>Mulch Bag Calculator</h1><p class="lead">Estimate cubic yards of mulch and convert the volume into two-cubic-foot bags for garden beds, borders, tree rings, and landscaping.</p></section>
<section class="answer-box"><p><strong class="lead-answer">Quick reference:</strong> One cubic yard equals 27 cubic feet, or 13.5 bags that each hold 2 cubic feet. Round up to 14 bags before adding overage.</p></section>
<section class="content-section"><h2>Calculate Mulch Bags</h2><p>Enter your area and depth in the mulch calculator. It estimates cubic yards, two-cubic-foot bags, coverage, weight, and overage.</p><p><a class="button button-primary" href="../mulch-calculator/">Open the Mulch Calculator</a></p></section>
<section class="content-section"><h2>Mulch Coverage Examples</h2><div class="table-wrap"><table><thead><tr><th>Area</th><th>Depth</th><th>Mulch needed</th><th>2-cu-ft bags</th></tr></thead><tbody><tr><td>100 sq ft</td><td>2 inches</td><td>0.62 yd³</td><td>9 bags</td></tr><tr><td>100 sq ft</td><td>3 inches</td><td>0.93 yd³</td><td>13 bags</td></tr><tr><td>200 sq ft</td><td>3 inches</td><td>1.85 yd³</td><td>25 bags</td></tr><tr><td>300 sq ft</td><td>3 inches</td><td>2.78 yd³</td><td>38 bags</td></tr></tbody></table></div></section>
<section class="content-section"><h2>Mulch Planning Tips</h2><ul><li>Measure the bed after edging so the area reflects the actual space to cover.</li><li>Use 2 inches for a light refresh and 3 inches for a new layer.</li><li>Keep mulch away from direct contact with tree trunks and building siding.</li><li>Compare bagged and bulk pricing after accounting for delivery.</li></ul></section>
<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></p></div></div><?php endforeach; ?></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
