<?php
$faqs = [
  ['How do I calculate cubic yards of sand?', 'Multiply length by width by depth in feet, then divide by 27. Use inches for shallow paver or pool base depths.'],
  ['How much does a cubic yard of sand weigh?', 'Sand is about 2,700 lbs per cubic yard. Wet sand can weigh more, so confirm hauling limits.'],
  ['How many tons are in a cubic yard of sand?', 'Using 2,700 lbs per cubic yard, sand is about 1.35 tons per cubic yard.'],
  ['How deep should paver sand be?', 'A 1 inch bedding layer is common for pavers after the base is prepared. Follow the paver manufacturer or contractor guidance.'],
  ['Can this calculator be used for play sand?', 'Yes. It estimates volume and weight, but bagged play sand packaging may use cubic feet or pounds.'],
  ['Should I order extra sand?', 'Yes, about 10 percent extra helps cover leveling, compaction, and waste.'],
  ['Is mason sand the same as fill sand?', 'No. Mason sand is finer and cleaner, while fill sand is used for general filling and grading.'],
  ['How do I convert sand tons to yards?', 'Use the tons to cubic yards calculator and choose sand. The conversion depends on sand density and moisture.'],
  ['How many 50 lb bags of sand are in a cubic yard?', 'About 54 bags. A cubic yard of sand weighs roughly 2,700 lbs, and 2,700 / 50 = 54 bags. For large areas, bulk delivery is much cheaper.'],
  ['How much sand do I need for a 10x10 paver patio?', 'At 1 inch of bedding sand, a 10x10 ft patio needs about 0.31 cubic yards. Order about 0.4 yards to cover screeding waste and settling.'],
  ['How much sand for an above-ground pool base?', 'Most round pools need 2 to 3 inches of sand under the liner. A 24 ft round pool at 2 inches needs about 2.8 cubic yards. Check the pool manufacturer guidance for the exact base spec.'],
  ['What is the difference between concrete sand and mason sand?', 'Concrete sand is coarser and used for paver bedding and mixing concrete. Mason sand is finer and used for mortar and softer applications. They are not interchangeable.'],
  ['How many tons is a cubic yard of sand?', 'About 1.35 tons dry (2,700 lbs / 2,000). Wet sand can push past 1.5 tons per yard.'],
  ['Can I use play sand for pavers?', 'No. Play sand is too fine - it washes out and does not interlock. Use coarse concrete sand for paver bedding.']
];
$page = ['root' => '../', 'title' => 'Sand Cubic Yard Calculator - Free Sand Volume Tool', 'description' => 'Calculate cubic yards of sand for pavers, pools, leveling and fill. Get cubic yards, tons, weight and overage with this free sand calculator.', 'canonical' => 'https://cubicyardcalculator.site/sand-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Sand Cubic Yard Calculator', 'url' => 'https://cubicyardcalculator.site/sand-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Sand Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Pavers, pools, leveling, and fill</p><h1>Sand Cubic Yard Calculator</h1><p class="lead">Calculate sand volume in cubic yards, cubic feet, cubic meters, pounds, tons, cost, and recommended overage.</p></section>
<section class="tool"><h2>Calculate Sand</h2><form data-calculator="standard" data-material="sand"><div class="form-grid"><div class="field"><label for="length">Length</label><div class="input-row"><input id="length" name="length" type="number" step="any" required><select name="length_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="length"></div></div><div class="field"><label for="width">Width</label><div class="input-row"><input id="width" name="width" type="number" step="any" required><select name="width_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="width"></div></div><div class="field"><label for="depth">Depth</label><div class="input-row"><input id="depth" name="depth" type="number" step="any" required><select name="depth_unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option></select></div><div class="preset-row"><button class="preset-button" type="button" data-depth-preset="1">1 in bedding</button><button class="preset-button" type="button" data-depth-preset="2">2 in leveling</button><button class="preset-button" type="button" data-depth-preset="4">4 in base</button></div><div class="error" data-error-for="depth"></div></div><div class="field"><label>Material</label><input value="Sand" disabled></div><div class="field full"><label for="price">Price per cubic yard optional</label><input id="price" name="price" type="number" step="any"><div class="error" data-error-for="price"></div></div><div class="button-row"><button class="button-primary" type="submit">Calculate</button><button class="button-secondary" type="reset">Reset</button></div><section class="results"><h2>Your Sand Results</h2><div class="result-grid"><div class="result-card primary"><span>Cubic Yards</span><strong data-result="yards">0.00</strong></div><div class="result-card"><span>Tons</span><strong data-result="tons">0.00</strong></div><div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong></div><div class="result-card"><span>Cubic Feet</span><strong data-result="feet">0.00</strong></div><div class="result-card"><span>Cost</span><strong data-result="cost">$0.00</strong></div><div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div></div><p hidden data-result="copy"></p><button class="button-secondary" type="button" data-copy-result>Copy to Clipboard</button></section></div></form></section>
<section class="content-section"><h2>Common Sand Uses</h2><p>Sand is used for paver bedding, pool bases, leveling, trench fill, play areas, and masonry work. The right depth depends on the base and the type of sand being placed.</p></section>
<section class="content-section"><h2>Sand Depth Guide</h2><div class="table-wrap"><table><tr><th>Project</th><th>Typical depth</th></tr><tr><td>Paver bedding</td><td>1 inch</td></tr><tr><td>Leveling layer</td><td>2 inches</td></tr><tr><td>Base or fill layer</td><td>4 inches or more</td></tr></table></div></section>
<section class="content-section"><h2>Sand Weight and Ordering</h2><p>Sand is commonly priced by ton or cubic yard depending on supplier. Because moisture changes weight, use the calculator for planning and confirm final order quantities with the yard before delivery.</p></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Multiply length x width x depth in feet and divide by 27. A 10 x 10 ft area leveled 2 inches deep needs (10 x 10 x 0.167) / 27 = <strong>0.62 cubic yards</strong> of sand - about 0.83 tons. Add 10 to 15 percent extra for compaction and leveling waste.</p>
</div>

<section class="content-section" id="sand-bags">
  <h2>Sand Bags Per Cubic Yard</h2>
  <p>A cubic yard of sand weighs about 2,700 lbs. Divide by bag weight for bag counts:</p>
  <div class="table-wrap"><table><thead><tr><th>Bag size</th><th>Bags per cubic yard</th></tr></thead><tbody><tr><td>50 lb bag</td><td>54</td></tr><tr><td>60 lb bag</td><td>45</td></tr><tr><td>70 lb tube sand</td><td>39</td></tr></tbody></table></div>
  <p>For anything over a few bags, bulk delivery by the yard or ton is far cheaper than bagged sand.</p>
</section>

<section class="content-section" id="sand-pavers">
  <h2>Sand for Pavers: How Much Bedding Sand</h2>
  <p>Paver bedding is typically <strong>1 inch of coarse concrete sand</strong> screeded over a compacted gravel base. Estimate 1 inch, then add 15 to 25 percent extra because screeding and settling consume more than the math suggests. A 200 sq ft patio at 1 inch needs (200 x 0.0833) / 27 = <strong>0.62 cubic yards</strong> - order about 0.75 yards. Do not use fine play sand for paver bedding; it washes out and does not lock pavers in place.</p>
</section>

<section class="content-section" id="sand-weight">
  <h2>Dry vs Wet Sand Weight</h2>
  <p>Dry sand runs about 2,700 lbs per cubic yard, but <strong>wet sand can exceed 3,000 lbs</strong>. That matters twice: your truck or trailer payload, and the tons-to-yards conversion when ordering by weight. If the pile has been rained on, assume the heavy end and confirm hauling limits before loading.</p>
</section>

<section class="content-section" id="sand-mistakes">
  <h2>Common Sand Estimating Mistakes</h2>
  <p><strong>Using play sand for construction.</strong> Play sand is fine and clean but wrong for paver bedding or masonry - use concrete sand or mason sand as specified.</p>
  <p><strong>Skipping compaction allowance.</strong> Sand compacts under pavers and foot traffic. The 10 percent overage is a minimum for leveling work.</p>
  <p><strong>Ordering by weight without checking moisture.</strong> A ton of wet sand is less volume than a ton of dry sand.</p>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../gravel-calculator/">Gravel calculator</a><a href="../tons-to-cubic-yards-calculator/">Tons to cubic yards calculator</a><a href="../square-feet-to-cubic-yards-calculator/">Square feet to cubic yards calculator</a><a href="../">Cubic yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
