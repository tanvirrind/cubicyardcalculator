<?php
$faqs = [
  ['How do you convert square feet to cubic yards?', 'Multiply square feet by depth in feet, then divide by 27. Convert inches to feet before calculating.'],
  ['How many cubic yards cover 1,000 square feet at 3 inches?', 'Three inches is 0.25 feet. 1,000 x 0.25 / 27 = 9.26 cubic yards before overage.'],
  ['Can square feet alone become cubic yards?', 'No. You also need depth or thickness because cubic yards measure volume.'],
  ['What depth should I use for mulch?', 'Use 2 to 3 inches for most mulch projects. Use 4 inches only when the bed needs a heavier layer.'],
  ['What depth should I use for concrete?', 'Many patios and sidewalks use 4 inches. Driveways and heavier slabs may need 5 to 6 inches or more.'],
  ['Does this work for gravel?', 'Yes. Enter the area, planned depth, and gravel material to estimate cubic yards and tons.'],
  ['Should I include overage?', 'Yes, 10 percent extra is a useful planning amount. It helps cover compaction, waste, and uneven ground.'],
  ['How many cubic feet are in a cubic yard?', 'There are 27 cubic feet in 1 cubic yard. The calculator converts that automatically.'],
  ['How do I convert 1,000 square feet to cubic yards?', 'Multiply by depth in feet and divide by 27. At 3 inches (0.25 ft): (1,000 x 0.25) / 27 = 9.26 cubic yards before overage.'],
  ['How many cubic yards is 500 square feet at 4 inches?', 'About 6.17 cubic yards. Convert 4 inches to 0.333 feet, then (500 x 0.333) / 27 = 6.17 yards.'],
  ['How do you convert square yards to cubic yards?', 'Multiply square yards by depth in yards. One square yard at 1 yard deep is 1 cubic yard. For inches, divide by 36 first (36 inches = 1 yard).'],
  ['Can I convert square feet to cubic yards without depth?', 'No. Square feet measures area and cubic yards measures volume, so depth is required. If you only have area, pick the depth from the guide above.'],
  ['How many cubic yards cover 2,000 square feet at 2 inches?', 'About 12.35 cubic yards. (2,000 x 0.167) / 27 = 12.35 yards before the 10 percent overage.'],
  ['What is the easiest way to estimate mulch from square feet?', 'Divide square footage by 100 for a rough 3-inch estimate in cubic yards: 300 sq ft at 3 inches needs about 2.78 yards. The calculator gives the exact figure.']
];
$page = ['root' => '../', 'title' => 'Square Feet to Cubic Yards Calculator - Free Converter', 'description' => 'Convert square feet to cubic yards by entering area and depth. Instant results for concrete, gravel, mulch and more. Free tool.', 'canonical' => 'https://cubicyardcalculator.site/square-feet-to-cubic-yards-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Square Feet to Cubic Yards Calculator', 'url' => 'https://cubicyardcalculator.site/square-feet-to-cubic-yards-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Square Feet to Cubic Yards Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Area plus depth converter</p><h1>Square Feet to Cubic Yards Calculator</h1><p class="lead">Enter square feet and depth to calculate cubic yards, cubic feet, cubic meters, weight, tons, and overage for common bulk materials.</p></section>
<section class="tool"><h2>Convert Square Feet to Cubic Yards</h2><form data-calculator="square-feet"><div class="form-grid"><div class="field"><label for="area">Square feet</label><input id="area" name="area" type="number" step="any" required><div class="error" data-error-for="area"></div></div><div class="field"><label for="depth">Depth</label><div class="input-row"><input id="depth" name="depth" type="number" step="any" required><select name="depth_unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option><option value="meters">meters</option></select></div><div class="error" data-error-for="depth"></div></div><div class="field full"><label for="material">Material</label><select id="material" name="material"><option value="concrete">Concrete</option><option value="gravel">Gravel</option><option value="dirt">Dirt</option><option value="topsoil">Topsoil</option><option value="mulch">Mulch</option><option value="sand">Sand</option><option value="rock">Rock</option></select></div><div class="button-row"><button class="button-primary" type="submit">Calculate</button><button class="button-secondary" type="reset">Reset</button></div><section class="results"><h2>Your Conversion Results</h2><div class="result-grid"><div class="result-card primary"><span>Cubic Yards</span><strong data-result="yards">0.00</strong></div><div class="result-card"><span>Cubic Feet</span><strong data-result="feet">0.00</strong></div><div class="result-card"><span>Cubic Meters</span><strong data-result="meters">0.00</strong></div><div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong><p class="result-note"><span data-result="tons">0.00</span> tons</p></div><div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div></div></section></div></form></section>
<section class="content-section"><h2>How to Convert Sq Ft to Cubic Yards</h2><p>Square feet measures area. Cubic yards measures volume, so depth is required. Convert depth to feet, multiply by the area, then divide by 27.</p></section>
<section class="content-section"><h2>Formula Explanation</h2><p>The formula is square feet x depth in feet / 27 = cubic yards. A 600 square foot area at 2 inches deep is 600 x 0.167 / 27 = 3.70 cubic yards.</p></section>
<section class="content-section"><h2>Common Project Examples</h2><div class="table-wrap"><table><tr><th>Area and depth</th><th>Cubic yards</th></tr><tr><td>100 sq ft at 4 in</td><td>1.23</td></tr><tr><td>500 sq ft at 3 in</td><td>4.63</td></tr><tr><td>1,000 sq ft at 2 in</td><td>6.17</td></tr></table></div></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Cubic yards = square feet x depth in feet / 27. For example, 1,000 sq ft at 3 inches deep = (1,000 x 0.25) / 27 = <strong>9.26 cubic yards</strong>. Convert inches to feet first: divide inches by 12.</p>
</div>

<section class="content-section" id="sqft-depth-table">
  <h2>Square Feet to Cubic Yards by Depth</h2>
  <p>Cubic yards needed per 100 square feet at common depths. Scale up by area - for 500 sq ft, multiply by 5:</p>
  <div class="table-wrap"><table><thead><tr><th>Depth</th><th>Per 100 sq ft</th><th>Per 500 sq ft</th><th>Per 1,000 sq ft</th></tr></thead><tbody><tr><td>1 inch</td><td>0.31</td><td>1.54</td><td>3.09</td></tr><tr><td>2 inches</td><td>0.62</td><td>3.09</td><td>6.17</td></tr><tr><td>3 inches</td><td>0.93</td><td>4.63</td><td>9.26</td></tr><tr><td>4 inches</td><td>1.23</td><td>6.17</td><td>12.35</td></tr><tr><td>6 inches</td><td>1.85</td><td>9.26</td><td>18.52</td></tr><tr><td>8 inches</td><td>2.47</td><td>12.35</td><td>24.69</td></tr><tr><td>12 inches</td><td>3.70</td><td>18.52</td><td>37.04</td></tr></tbody></table></div>
</section>

<section class="content-section" id="sqft-examples">
  <h2>Worked Examples</h2>
  <p><strong>Driveway gravel:</strong> 600 sq ft at 4 inches. 4 in = 0.333 ft. (600 x 0.333) / 27 = <strong>7.41 cubic yards</strong>. With 10 percent overage: 8.15 yards.</p>
  <p><strong>Mulch bed:</strong> 350 sq ft at 3 inches. 3 in = 0.25 ft. (350 x 0.25) / 27 = <strong>3.24 cubic yards</strong>, or about 44 bags of 2 cu ft mulch (48 with 10 percent overage).</p>
  <p><strong>Concrete patio:</strong> 400 sq ft at 4 inches. (400 x 0.333) / 27 = <strong>4.94 cubic yards</strong>. With overage: 5.43 yards - order 5.5 or 6.</p>
</section>

<section class="content-section" id="sqft-depth-guide">
  <h2>What Depth Should You Enter?</h2>
  <div class="table-wrap"><table><thead><tr><th>Material</th><th>Typical depth</th></tr></thead><tbody><tr><td>Mulch beds</td><td>2 to 3 inches (4 max)</td></tr><tr><td>Decorative gravel</td><td>2 to 3 inches</td></tr><tr><td>Driveway gravel</td><td>4 to 6 inches total base</td></tr><tr><td>Concrete patio/slab</td><td>4 inches</td></tr><tr><td>Concrete driveway</td><td>4 to 6 inches</td></tr><tr><td>Topsoil for lawn</td><td>4 to 6 inches</td></tr><tr><td>Paver bedding sand</td><td>1 inch over prepared base</td></tr></tbody></table></div>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../concrete-calculator/">Concrete calculator</a><a href="../mulch-calculator/">Mulch calculator</a><a href="../gravel-calculator/">Gravel calculator</a><a href="../">Cubic yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
