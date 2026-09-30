<?php
$faqs = [
  ['How many cubic feet are in a cubic yard?', 'There are 27 cubic feet in 1 cubic yard.'],
  ['How do you convert cubic feet to cubic yards?', 'Divide cubic feet by 27. For example, 54 cubic feet divided by 27 equals 2 cubic yards.'],
  ['How do you convert cubic yards to cubic feet?', 'Multiply cubic yards by 27. For example, 3 cubic yards multiplied by 27 equals 81 cubic feet.'],
  ['Why is a cubic yard 27 cubic feet?', 'A cubic yard is 3 feet long, 3 feet wide, and 3 feet deep. Multiplying 3 × 3 × 3 gives 27 cubic feet.']
];
$page = [
  'root' => '../',
  'title' => 'How Many Cubic Feet in a Cubic Yard? The 27-Cubic-Foot Rule',
  'description' => 'Find out how many cubic feet are in a cubic yard and learn the simple formulas for converting cubic feet to cubic yards and back.',
  'canonical' => 'https://cubicyardcalculator.site/how-many-cubic-feet-in-a-cubic-yard/',
  'schema' => ['@context' => 'https://schema.org', '@graph' => [
    ['@type' => 'WebPage', 'name' => 'How Many Cubic Feet in a Cubic Yard?', 'url' => 'https://cubicyardcalculator.site/how-many-cubic-feet-in-a-cubic-yard/'],
    ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($faq) => ['@type' => 'Question', 'name' => $faq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]]], $faqs)]
  ]]
];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['How Many Cubic Feet in a Cubic Yard?', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Volume conversion guide</p><h1>How Many Cubic Feet in a Cubic Yard?</h1><p class="lead"><strong>1 cubic yard equals 27 cubic feet.</strong> This is the standard conversion for concrete, gravel, mulch, dirt, sand, and other bulk materials.</p></section>
<section class="answer-box"><p><strong class="lead-answer">Quick answer:</strong> 1 cubic yard = 27 cubic feet. Divide cubic feet by 27 to get cubic yards, or multiply cubic yards by 27 to get cubic feet.</p></section>
<section class="content-section"><h2>Why One Cubic Yard Equals 27 Cubic Feet</h2><p>A cubic yard is a cube measuring 3 feet on every side. The volume is:</p><p class="answer-box"><strong>3 ft × 3 ft × 3 ft = 27 cubic feet</strong></p><p>Suppliers commonly sell soil, gravel, mulch, sand, and concrete by the cubic yard, while project dimensions are often measured in feet and inches.</p></section>
<section class="content-section"><h2>Conversion Table</h2><div class="table-wrap"><table><thead><tr><th>Cubic yards</th><th>Cubic feet</th></tr></thead><tbody><tr><td>0.5</td><td>13.5</td></tr><tr><td>1</td><td>27</td></tr><tr><td>2</td><td>54</td></tr><tr><td>3</td><td>81</td></tr><tr><td>5</td><td>135</td></tr><tr><td>10</td><td>270</td></tr></tbody></table></div></section>
<section class="content-section"><h2>Use the Conversion Calculator</h2><p>Enter either cubic feet or cubic yards to convert between the two units.</p><p><a class="button button-primary" href="../cubic-feet-to-cubic-yards-calculator/">Open the cubic feet converter</a></p></section>
<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></p></div></div><?php endforeach; ?></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
