<?php
$faqs = [
  ['How do you convert tons to cubic yards?', 'Divide tons by the tons per cubic yard for the selected material. Density changes by material, so the same tonnage gives different volumes.'],
  ['How many cubic yards are in a ton of gravel?', 'Using 2,800 lbs per cubic yard, 1 ton of gravel is about 0.71 cubic yards. Local rock type and moisture can change that estimate.'],
  ['How many tons are in a cubic yard of concrete?', 'A cubic yard of concrete weighs about 4,050 lbs, or 2.03 tons. Wet mixes and reinforcement are not included in this simple estimate.'],
  ['Why are tons and cubic yards different?', 'Tons measure weight, while cubic yards measure volume. Heavy materials have more tons per cubic yard than light materials.'],
  ['Do suppliers sell by ton or cubic yard?', 'Aggregates like gravel and sand are often sold by ton. Mulch, soil, and concrete are commonly sold by cubic yard.'],
  ['Can I use one conversion for every material?', 'No. Material density changes the conversion, so always select the closest material type.'],
  ['Is a short ton 2,000 lbs?', 'Yes. This calculator uses the US short ton, which equals 2,000 lbs.'],
  ['Should I round up my order?', 'Yes, most bulk material orders should be rounded up. Rounding helps cover compaction, waste, and delivery minimums.'],
  ['How many cubic yards are in a ton of sand?', 'About 0.74 cubic yards. Sand weighs roughly 2,700 lbs per cubic yard, so 2,000 / 2,700 = 0.74 yards per ton. Wet sand weighs more, which shrinks the volume per ton.'],
  ['How many cubic yards are in a ton of mulch?', 'About 2.50 cubic yards. Mulch is light at roughly 800 lbs per cubic yard, so 2,000 / 800 = 2.5 yards per ton - much more volume per ton than stone or soil.'],
  ['How many tons are in a cubic yard of topsoil?', 'About 1.20 tons. Topsoil weighs roughly 2,400 lbs per cubic yard, so 2,400 / 2,000 = 1.2 tons per yard.'],
  ['Why does my supplier sell gravel by the ton?', 'Heavy materials are weighed on truck scales, so tons are the natural billing unit. Volume still matters for planning how much ground the load will cover.'],
  ['How do I convert yards to tons for a dump truck?', 'Multiply cubic yards by the material density in lbs per yard, then divide by 2,000. For example, 7 yards of gravel at 2,800 lbs/yard is 9.8 tons - right at many truck weight limits.'],
  ['Does wet material change the conversion?', 'Yes. Water adds weight without adding much volume, so wet sand, soil, or mulch gives fewer cubic yards per ton than dry material.']
];
$page = ['root' => '../', 'title' => 'Tons to Cubic Yards Calculator - Convert Any Material', 'description' => 'Convert tons to cubic yards or cubic yards to tons instantly. Supports concrete, gravel, dirt, sand and more. Free two-way conversion calculator.', 'canonical' => 'https://cubicyardcalculator.site/tons-to-cubic-yards-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Tons to Cubic Yards Calculator', 'url' => 'https://cubicyardcalculator.site/tons-to-cubic-yards-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Tons to Cubic Yards Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Two-way bulk material converter</p><h1>Tons to Cubic Yards Calculator</h1><p class="lead">Convert tons to cubic yards, or cubic yards to tons, using common material densities for concrete, gravel, dirt, mulch, sand, and rock.</p></section>
<section class="tool"><h2>Convert Tons and Cubic Yards</h2><form data-calculator="tons"><div class="form-grid"><div class="field full"><span class="legend">Convert from</span><label><input type="radio" name="convert_mode" value="tons" checked> Tons</label><label><input type="radio" name="convert_mode" value="yards"> Cubic yards</label></div><div class="field"><label for="amount">Amount</label><input id="amount" name="amount" type="number" step="any" required><div class="error" data-error-for="amount"></div></div><div class="field"><label for="material">Material</label><select id="material" name="material"><option value="concrete">Concrete</option><option value="gravel">Gravel</option><option value="dirt">Dirt</option><option value="topsoil">Topsoil</option><option value="mulch">Mulch</option><option value="sand">Sand</option><option value="rock">Rock</option></select></div><div class="button-row"><button class="button-primary" type="submit">Convert</button><button class="button-secondary" type="reset">Reset</button></div><section class="results"><h2>Your Conversion Results</h2><div class="result-grid"><div class="result-card primary"><span>Converted Value</span><strong data-result="converted">0.00</strong></div><div class="result-card"><span>Weight Confirmation</span><strong data-result="confirmation">0.00</strong></div></div></section></div></form></section>
<section class="content-section"><h2>Why Tons and Cubic Yards Differ by Material</h2><p>A ton is a weight measurement, while a cubic yard is a volume measurement. One cubic yard of mulch is light, one cubic yard of concrete is heavy, and gravel or sand usually sits between those examples. That is why a material selector is required for a useful conversion.</p></section>
<section class="content-section"><h2>Conversion Table by Material</h2><p>These typical densities power the converter above. Actual material varies with moisture, compaction, and rock type, so use supplier figures for final orders.</p><div class="table-wrap"><table><thead><tr><th>Material</th><th>Lbs per cubic yard</th><th>Tons per cubic yard</th><th>Cubic yards per ton</th></tr></thead><tbody><tr><td>Concrete</td><td>4,050</td><td>2.03</td><td>0.49</td></tr><tr><td>Gravel</td><td>2,800</td><td>1.40</td><td>0.71</td></tr><tr><td>Dirt</td><td>2,200</td><td>1.10</td><td>0.91</td></tr><tr><td>Topsoil</td><td>2,400</td><td>1.20</td><td>0.83</td></tr><tr><td>Mulch</td><td>800</td><td>0.40</td><td>2.50</td></tr><tr><td>Sand</td><td>2,700</td><td>1.35</td><td>0.74</td></tr><tr><td>Rock</td><td>4,500</td><td>2.25</td><td>0.44</td></tr></tbody></table></div></section>
<section class="content-section"><h2>How Suppliers Sell Bulk Materials</h2><p>Stone yards often quote gravel, rock, and sand by the ton because truck scales make weight easy to verify. Landscape suppliers often quote mulch and soil by the cubic yard because these products are loaded by bucket volume. Concrete is ordered by cubic yard because the project form volume determines the order.</p></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Cubic yards = tons x 2,000 / density in lbs per cubic yard. One ton of gravel (2,800 lbs/yd) is about <strong>0.71 cubic yards</strong>, while one ton of mulch (800 lbs/yd) is about <strong>2.50 cubic yards</strong>. The material density decides everything - convert with the right material selected.</p>
</div>

<section class="content-section" id="tons-formula">
  <h2>Tons to Cubic Yards Formula</h2>
  <p><strong>Tons to yards:</strong> cubic yards = tons x 2,000 / density in lbs per cubic yard.</p>
  <p><strong>Yards to tons:</strong> tons = cubic yards x density in lbs per cubic yard / 2,000.</p>
  <p>For example, 3 tons of gravel at 2,800 lbs per yard: 3 x 2,000 / 2,800 = <strong>2.14 cubic yards</strong>. Going the other way, 5 cubic yards of sand at 2,700 lbs per yard: 5 x 2,700 / 2,000 = <strong>6.75 tons</strong>.</p>
</section>

<section class="content-section" id="tons-examples">
  <h2>Worked Conversion Examples</h2>
  <div class="table-wrap"><table><thead><tr><th>Order</th><th>Material</th><th>Cubic yards</th></tr></thead><tbody><tr><td>2 tons</td><td>Sand</td><td>1.48</td></tr><tr><td>5 tons</td><td>Gravel</td><td>3.57</td></tr><tr><td>1 ton</td><td>Topsoil</td><td>0.83</td></tr><tr><td>3 tons</td><td>Mulch</td><td>7.50</td></tr><tr><td>10 tons</td><td>Dirt</td><td>9.09</td></tr></tbody></table></div>
  <p>Notice how light mulch gives far more volume per ton than heavy rock. This is why suppliers price gravel by the ton but quote mulch by the yard.</p>
</section>

<section class="content-section" id="tons-mistakes">
  <h2>Common Tons to Yards Mistakes</h2>
  <p><strong>Using one density for everything.</strong> A ton of mulch is 2.5 cubic yards; a ton of rock is under half a yard. The material setting is the whole calculation.</p>
  <p><strong>Forgetting moisture.</strong> Wet sand and soil weigh noticeably more, which shrinks the volume you get per ton.</p>
  <p><strong>Ignoring truck weight limits.</strong> A truck rated for 10 tons carries about 7 yards of gravel but 25 yards of mulch - volume and weight limits hit at different points.</p>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../gravel-calculator/">Gravel calculator</a><a href="../sand-calculator/">Sand calculator</a><a href="../concrete-calculator/">Concrete calculator</a><a href="../">Cubic yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
