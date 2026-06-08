<?php
$faqs = [
  ['How do you calculate cubic yards?', 'Multiply length by width by depth in feet, then divide the total cubic feet by 27. If depth is in inches, divide the inches by 12 before using the formula.'],
  ['What is a cubic yard?', 'A cubic yard is a volume that measures 3 feet long, 3 feet wide, and 3 feet deep. It equals 27 cubic feet.'],
  ['How many cubic feet are in a cubic yard?', 'There are 27 cubic feet in 1 cubic yard. Multiply cubic yards by 27 to convert to cubic feet.'],
  ['How do I calculate cubic yards from square feet?', 'Multiply square feet by depth in feet, then divide by 27. For example, 300 square feet at 3 inches deep is 300 x 0.25 / 27, or 2.78 cubic yards.'],
  ['How many cubic yards do I need for a 10x10 slab?', 'A 10x10 slab at 4 inches thick needs about 1.23 cubic yards before overage. Ordering 10 percent extra brings the recommendation to about 1.36 cubic yards.'],
  ['How much does a cubic yard weigh?', 'Weight depends on the material. Concrete is about 4,050 lbs per cubic yard, gravel is about 2,800 lbs, and mulch can be about 800 lbs.'],
  ['How many cubic yards are in a ton?', 'The answer depends on density. One ton of gravel is about 0.71 cubic yards, while one ton of concrete is about 0.49 cubic yards.'],
  ['How many bags of concrete make a cubic yard?', 'A cubic yard of concrete takes about 45 bags if using 60 lb bags. It takes about 34 bags if using 80 lb bags.'],
  ['What is the formula for cubic yards?', 'The formula is length x width x depth in feet divided by 27. The result is cubic yards.'],
  ['Should I order extra material?', 'Yes, most projects should include about 10 percent extra. This covers compaction, uneven ground, spillage, and small measuring differences.'],
  ['How do I convert inches to feet for depth?', 'Divide inches by 12. A 4 inch depth is 0.333 feet, and a 3 inch depth is 0.25 feet.'],
  ['What is the minimum cubic yard order for delivery?', 'Minimum delivery varies by supplier and material. Many landscape yards set minimums from 1 to 3 cubic yards, so confirm before ordering.']
];
$schemaFaqs = array_map(fn($faq) => ['@type' => 'Question', 'name' => $faq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]]], $faqs);
$page = [
  'root' => '',
  'title' => 'Cubic Yard Calculator - Free Tool for Concrete, Gravel and Mulch',
  'description' => 'Calculate cubic yards instantly for concrete, gravel, mulch, dirt, sand and rock. Enter length, width and depth to get cubic yards, weight and cost estimate free.',
  'canonical' => 'https://cubicyardcalculator.site/',
  'schema' => ['@context' => 'https://schema.org', '@graph' => [
    ['@type' => 'WebApplication', 'name' => 'Cubic Yard Calculator', 'url' => 'https://cubicyardcalculator.site/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any', 'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD']],
    ['@type' => 'FAQPage', 'mainEntity' => $schemaFaqs]
  ]]
];
include __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <p class="eyebrow">Free material volume tool</p>
  <h1>Cubic Yard Calculator</h1>
  <p class="lead">Calculate concrete, gravel, mulch, dirt, sand, and rock in cubic yards. Enter your dimensions to get volume, weight, cost, and a 10 percent overage recommendation.</p>
</section>

<div id="ad-top" class="ad-slot" aria-hidden="true"></div>

<section class="tool" aria-labelledby="toolTitle">
  <h2 id="toolTitle">Calculate Cubic Yards</h2>
  <form data-calculator="standard">
    <div class="form-grid">
      <div class="field">
        <label for="length">Length</label>
        <div class="input-row">
          <input id="length" name="length" type="number" min="0" step="any" required>
          <select name="length_unit" aria-label="Length unit"><option value="feet">feet</option><option value="inches">inches</option><option value="yards">yards</option><option value="meters">meters</option><option value="cm">cm</option></select>
        </div>
        <div class="error" data-error-for="length"></div>
      </div>
      <div class="field">
        <label for="width">Width</label>
        <div class="input-row">
          <input id="width" name="width" type="number" min="0" step="any" required>
          <select name="width_unit" aria-label="Width unit"><option value="feet">feet</option><option value="inches">inches</option><option value="yards">yards</option><option value="meters">meters</option><option value="cm">cm</option></select>
        </div>
        <div class="error" data-error-for="width"></div>
      </div>
      <div class="field">
        <label for="depth">Depth</label>
        <div class="input-row">
          <input id="depth" name="depth" type="number" min="0" step="any" required>
          <select name="depth_unit" aria-label="Depth unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option></select>
        </div>
        <div class="error" data-error-for="depth"></div>
      </div>
      <div class="field">
        <label for="material">Material</label>
        <select id="material" name="material">
          <option value="concrete">Concrete</option><option value="gravel">Gravel</option><option value="dirt">Dirt</option><option value="topsoil">Topsoil</option><option value="mulch">Mulch</option><option value="sand">Sand</option><option value="rock">Rock</option>
        </select>
      </div>
      <div class="field full">
        <label for="price">Price per cubic yard optional</label>
        <input id="price" name="price" type="number" min="0" step="any">
        <div class="error" data-error-for="price"></div>
      </div>
      <div class="button-row">
        <button class="button-primary" type="submit">Calculate</button>
        <button class="button-secondary" type="reset">Reset</button>
      </div>
      <section class="results" aria-live="polite">
        <h2>Results</h2>
        <div class="result-grid">
          <div class="result-card primary"><span>Cubic Yards</span><strong><span data-result="yards">0.00</span></strong></div>
          <div class="result-card"><span>Cubic Feet</span><strong><span data-result="feet">0.00</span></strong></div>
          <div class="result-card"><span>Cubic Meters</span><strong><span data-result="meters">0.00</span></strong></div>
          <div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong><p class="result-note"><span data-result="tons">0.00</span> tons</p></div>
          <div class="result-card"><span>Cost Estimate</span><strong><span data-result="cost">$0.00</span></strong></div>
          <div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div>
        </div>
        <p hidden data-result="copy"></p>
        <button class="button-secondary" type="button" data-copy-result>Copy to Clipboard</button>
      </section>
    </div>
  </form>
</section>

<div id="ad-mid" class="ad-slot" aria-hidden="true"></div>

<section class="content-section">
  <h2>How to Use</h2>
  <ol class="steps">
    <li>Enter the length and width of the project area.</li>
    <li>Enter the depth or thickness, using inches for most slab, driveway, garden, and landscape projects.</li>
    <li>Select the material and optional price per cubic yard, then calculate the volume, weight, cost, and overage.</li>
  </ol>
</section>

<section class="content-section cube-wrap">
  <svg viewBox="0 0 220 180" role="img" aria-label="A cube showing one cubic yard as 3 feet by 3 feet by 3 feet">
    <polygon points="55,55 125,20 195,55 125,90" fill="#f1f8e9" stroke="#2e7d32" stroke-width="3"/>
    <polygon points="55,55 125,90 125,160 55,125" fill="#ffffff" stroke="#2e7d32" stroke-width="3"/>
    <polygon points="125,90 195,55 195,125 125,160" fill="#dcedc8" stroke="#2e7d32" stroke-width="3"/>
    <text x="82" y="36" font-size="14">3 ft</text><text x="33" y="96" font-size="14">3 ft</text><text x="163" y="153" font-size="14">3 ft</text>
  </svg>
  <div>
    <h2>What is a Cubic Yard</h2>
    <p>A cubic yard is a three dimensional measurement used for bulk materials. One cubic yard is 3 feet long, 3 feet wide, and 3 feet deep, which equals 27 cubic feet. Suppliers use cubic yards because concrete, soil, gravel, mulch, and sand are delivered by volume.</p>
  </div>
</section>

<section class="content-section">
  <h2>How to Calculate Manually</h2>
  <p>Use this formula: length in feet x width in feet x depth in feet divided by 27. For a 12 ft by 10 ft area at 4 inches deep, convert 4 inches to 0.333 feet. The math is 12 x 10 x 0.333 = 40 cubic feet, then 40 / 27 = 1.48 cubic yards.</p>
</section>

<section class="content-section">
  <h2>Material Weight Reference Table</h2>
  <div class="table-wrap">
    <table>
      <thead><tr><th>Material</th><th>Approx. lbs per cubic yard</th><th>Common use</th></tr></thead>
      <tbody>
        <tr><td>Concrete</td><td>4,050</td><td>Slabs, footings, patios</td></tr>
        <tr><td>Gravel</td><td>2,800</td><td>Driveways, drainage, paths</td></tr>
        <tr><td>Dirt</td><td>2,200</td><td>Fill, grading, backfill</td></tr>
        <tr><td>Topsoil</td><td>2,400</td><td>Lawns, beds, garden prep</td></tr>
        <tr><td>Mulch</td><td>800</td><td>Landscape beds</td></tr>
        <tr><td>Sand</td><td>2,700</td><td>Pavers, pools, masonry</td></tr>
        <tr><td>Rock</td><td>4,500</td><td>Large drainage or decorative stone</td></tr>
      </tbody>
    </table>
  </div>
</section>

<section class="content-section">
  <h2>FAQ</h2>
  <?php foreach ($faqs as $i => $faq): ?>
    <?php if ($i === 6): ?><div id="ad-faq" class="ad-slot" aria-hidden="true"></div><?php endif; ?>
    <div class="faq-item">
      <h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3>
      <div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div>
    </div>
  <?php endforeach; ?>
</section>

<section class="content-section">
  <h2>Related Calculators</h2>
  <div class="link-grid">
    <a href="concrete-calculator/">Concrete cubic yard calculator</a>
    <a href="gravel-calculator/">Gravel and rock cubic yard calculator</a>
    <a href="mulch-calculator/">Mulch calculator</a>
    <a href="dirt-calculator/">Dirt and soil cubic yard calculator</a>
    <a href="tons-to-cubic-yards-calculator/">Tons to cubic yards calculator</a>
    <a href="square-feet-to-cubic-yards-calculator/">Square feet to cubic yards calculator</a>
  </div>
</section>

<div id="ad-bottom" class="ad-slot" aria-hidden="true"></div>
<?php include __DIR__ . '/includes/footer.php'; ?>
