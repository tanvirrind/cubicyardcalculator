<?php
$faqs = [
  ['How do I calculate cubic yards of gravel?', 'Measure length and width in feet, multiply by gravel depth in feet, then divide by 27. A 3 inch depth is 0.25 feet.'],
  ['How many tons are in a cubic yard of gravel?', 'Using 2,800 lbs per cubic yard, gravel is about 1.40 tons per cubic yard. River rock and crushed stone can vary.'],
  ['How deep should gravel be for a driveway?', 'A light top layer may be 2 inches, but a full driveway base is usually deeper. Confirm the base design for vehicle traffic.'],
  ['Is pea gravel lighter than crushed stone?', 'Pea gravel and crushed stone are close, but exact weight varies by rock type and moisture. Use supplier weights for hauling.'],
  ['Should gravel be ordered by ton or yard?', 'Many suppliers sell gravel by the ton. Use cubic yards for volume planning and tons for ordering when needed.'],
  ['How much extra gravel should I order?', 'Order about 10 percent extra for compaction, uneven base, and spreading loss. Larger jobs may need a supplier review.'],
  ['What depth is best for a walkway?', 'A 3 inch layer is common for a walkway surface over a prepared base. Drainage and soil conditions may require more.'],
  ['Can this calculator estimate river rock?', 'Yes, select rock for heavier decorative stone or gravel for standard aggregate. Ask your supplier for exact density if available.'],
  ['How many cubic feet are in a cubic yard of gravel?', 'There are 27 cubic feet in 1 cubic yard. The calculator shows both values.'],
  ['Does gravel compact after spreading?', 'Yes. Angular gravel compacts more than rounded stone, so overage is useful for final grade.'],
  ['How many tons of gravel do I need for a 2-car driveway?', 'A 20x20 ft driveway at 4 inches needs about 4.94 cubic yards, or roughly 6.9 tons of standard gravel. At 6 inches deep it needs about 7.41 yards (10.4 tons). Add 15 percent for compaction.'],
  ['How deep should gravel be for a parking pad?', 'Plan 4 to 6 inches of compacted crushed stone total, including the base layer. Heavy vehicles and soft soil push toward the deeper end.'],
  ['How much does a cubic yard of gravel weigh?', 'Standard gravel and crushed stone weigh about 2,800 lbs (1.40 tons) per cubic yard. River rock is heavier at about 4,500 lbs per yard.'],
  ['How many cubic yards of gravel fit in a dump truck?', 'A single-axle dump truck carries about 5 to 6 cubic yards of gravel. Tri-axle trucks carry 10 to 20 yards, but gravel weight often hits the legal limit first.'],
  ['What size gravel is best for driveways?', 'A compacted base of larger crushed stone (such as crusher run) topped with 2 to 3 inches of 3/4 inch crushed stone (#57) is the standard durable combination.'],
  ['How much gravel do I need for a 10x10 shed base?', 'At 4 inches deep, a 10x10 ft shed pad needs about 1.23 cubic yards before overage (about 1.4 yards with 15 percent extra for compaction). Use compactable crusher run rather than decorative stone under a shed.']
];
$page = ['root' => '../', 'title' => 'Cubic Yard Calculator for Gravel and Rock - Free Tool', 'description' => 'Calculate cubic yards of gravel for driveways, walkways and drainage. Get weight in tons instantly. Free gravel calculator with coverage estimates.', 'canonical' => 'https://cubicyardcalculator.site/gravel-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Cubic Yard Calculator for Gravel and Rock', 'url' => 'https://cubicyardcalculator.site/gravel-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Gravel Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Driveways, paths, drainage, and rock</p><h1>Cubic Yard Calculator for Gravel and Rock</h1><p class="lead">Estimate gravel or rock in cubic yards and tons, with depth presets for driveways, paths, and drainage projects.</p></section>
<section class="tool"><h2>Calculate Gravel</h2><form data-calculator="standard"><div class="form-grid"><div class="field"><label for="length">Length</label><div class="input-row"><input id="length" name="length" type="number" step="any" required><select name="length_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="length"></div></div><div class="field"><label for="width">Width</label><div class="input-row"><input id="width" name="width" type="number" step="any" required><select name="width_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="width"></div></div><div class="field"><label for="depth">Depth</label><div class="input-row"><input id="depth" name="depth" type="number" step="any" required><select name="depth_unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option></select></div><div class="preset-row"><button class="preset-button" type="button" data-depth-preset="2">2in driveway</button><button class="preset-button" type="button" data-depth-preset="3">3in path</button><button class="preset-button" type="button" data-depth-preset="4">4in drainage</button></div><div class="error" data-error-for="depth"></div></div><div class="field"><label for="material">Gravel Type</label><select id="material" name="material"><option value="gravel">Pea Gravel</option><option value="gravel">Crushed Stone</option><option value="rock">River Rock</option><option value="gravel">Decomposed Granite</option></select></div><div class="field full"><label for="price">Price per cubic yard optional</label><input id="price" name="price" type="number" step="any"><div class="error" data-error-for="price"></div></div><div class="button-row"><button class="button-primary" type="submit">Calculate</button><button class="button-secondary" type="reset">Reset</button></div><section class="results"><h2>Your Gravel Results</h2><div class="result-grid"><div class="result-card primary"><span>Tons</span><strong data-result="tons">0.00</strong></div><div class="result-card"><span>Cubic Yards</span><strong data-result="yards">0.00</strong></div><div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong></div><div class="result-card"><span>Cubic Feet</span><strong data-result="feet">0.00</strong></div><div class="result-card"><span>Cost</span><strong data-result="cost">$0.00</strong></div><div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div></div><p hidden data-result="copy"></p><button class="button-secondary" type="button" data-copy-result>Copy to Clipboard</button></section></div></form></section>
<section class="content-section"><h2>Gravel Types and Their Uses</h2><p>Pea gravel works well for decorative beds and low traffic paths. Crushed stone locks together for driveways and bases. River rock is heavier and often used for drainage channels or visible landscape areas.</p></section>
<section class="content-section"><h2>Tons vs Cubic Yards</h2><p>Gravel is often sold by ton because it is weighed at the yard. Cubic yards tell you how much volume will cover the ground, while tons help match supplier tickets and truck capacity.</p></section>
<section class="content-section"><h2>Depth Guide by Project Type</h2><div class="table-wrap"><table><tr><th>Project</th><th>Typical depth</th></tr><tr><td>Driveway top layer</td><td>2 inches</td></tr><tr><td>Walkway</td><td>3 inches</td></tr><tr><td>Drainage area</td><td>4 inches or more</td></tr></table></div></section>
<section class="content-section"><h2>Gravel Weight by Type</h2><div class="table-wrap"><table><tr><th>Type</th><th>Approx. lbs per cubic yard</th></tr><tr><td>Pea gravel</td><td>2,800</td></tr><tr><td>Crushed stone</td><td>2,800</td></tr><tr><td>River rock</td><td>4,500</td></tr><tr><td>Decomposed granite</td><td>2,800</td></tr></table></div></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Multiply length x width x depth in feet and divide by 27. A 20 x 20 ft driveway at 4 inches deep needs (20 x 20 x 0.333) / 27 = <strong>4.94 cubic yards</strong> of gravel - about 6.9 tons. Add 10 to 15 percent extra for compaction.</p>
</div>

<section class="content-section" id="gravel-driveway">
  <h2>Gravel Driveway Calculator Guide</h2>
  <p>A proper gravel driveway is built in layers: a 4 to 6 inch compacted base of large crushed stone plus a 2 to 3 inch top layer of smaller gravel. Estimate the full depth, not just the top layer.</p>
  <div class="table-wrap"><table><thead><tr><th>Driveway size</th><th>4 in deep</th><th>6 in deep</th><th>Approx. tons (4 in)</th></tr></thead><tbody><tr><td>10 x 20 (single car)</td><td>2.47 yd</td><td>3.70 yd</td><td>3.5</td></tr><tr><td>12 x 40</td><td>5.93 yd</td><td>8.89 yd</td><td>8.3</td></tr><tr><td>20 x 20 (two car)</td><td>4.94 yd</td><td>7.41 yd</td><td>6.9</td></tr><tr><td>20 x 50</td><td>12.35 yd</td><td>18.52 yd</td><td>17.3</td></tr></tbody></table></div>
  <p>Ton figures use 2,800 lbs per yard for standard gravel. All values are before the 10 to 15 percent compaction overage.</p>
</section>

<section class="content-section" id="gravel-compaction">
  <h2>Compaction and Overage for Gravel</h2>
  <p>Angular crushed stone compacts 10 to 15 percent when rolled; rounded pea gravel compacts less. For driveways and parking pads, <strong>order 15 percent over</strong> the measured volume. For decorative beds that will not be compacted, 10 percent covers spreading loss and uneven ground.</p>
</section>

<section class="content-section" id="gravel-types-detail">
  <h2>Which Gravel for Which Project</h2>
  <p><strong>Crushed stone (#57 / 3/4 in):</strong> the all-rounder for driveways, bases, and drainage. Angular edges lock together under load.</p>
  <p><strong>Pea gravel (3/8 in):</strong> comfortable underfoot for paths, patios, and play areas. Shifts more than crushed stone, so edge restraints help.</p>
  <p><strong>River rock (1 to 3 in):</strong> decorative beds, dry creek beds, and drainage swales. Heavier per yard - about 4,500 lbs.</p>
  <p><strong>Decomposed granite:</strong> natural-looking paths and patios that compact into a firm surface. Needs a stabilizer in rainy climates.</p>
  <p><strong>Crusher run / road base:</strong> the compactable base layer under driveways and shed pads. Contains fines that bind it solid.</p>
</section>

<section class="content-section" id="gravel-mistakes">
  <h2>Common Gravel Estimating Mistakes</h2>
  <p><strong>Estimating only the top layer.</strong> A driveway needs its base depth counted too - often double the visible layer.</p>
  <p><strong>Using pea gravel for a driveway base.</strong> Rounded stone shifts under tires. Use angular crushed stone where vehicles drive.</p>
  <p><strong>Ignoring delivery access.</strong> A tri-axle dump truck needs wide, firm access. Tight sites may need smaller loads at higher per-yard cost.</p>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../tons-to-cubic-yards-calculator/">Tons to cubic yards calculator</a><a href="../sand-calculator/">Sand calculator</a><a href="../dirt-calculator/">Dirt calculator</a><a href="../">Cubic yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
