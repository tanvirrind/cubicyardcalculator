<?php
$faqs = [
  ['How do I calculate cubic yards of dirt?', 'Measure length and width in feet, multiply by depth in feet, then divide by 27. Use inches for depth if you are filling a shallow area.'],
  ['Is fill dirt the same as topsoil?', 'No. Fill dirt is usually used for grading and backfill, while topsoil is screened for lawns and planting areas.'],
  ['How much does a cubic yard of dirt weigh?', 'Dry fill dirt is often about 2,200 lbs per cubic yard. Topsoil is commonly about 2,400 lbs per cubic yard.'],
  ['How many pickup loads are in a cubic yard?', 'A small pickup may safely carry less than 1 cubic yard. This calculator uses 2 cubic yards as a planning estimate for a larger pickup or light trailer.'],
  ['How deep should topsoil be for grass?', 'New grass usually needs 4 to 6 inches of good topsoil. Thin lawn repairs may need 1 to 2 inches.'],
  ['Should I order extra dirt?', 'Yes, order about 10 percent extra when filling uneven areas. Dirt settles and compacts after placement.'],
  ['Can I use garden soil for grading?', 'Garden soil is best for planting beds, not structural fill. Use fill dirt for grading and topsoil or garden soil for the top layer.'],
  ['How many cubic yards are in a dump truck?', 'Small dump trucks may carry 5 to 6 cubic yards. Larger trucks may carry 10 to 20 cubic yards depending on weight limits.'],
  ['How do I estimate dirt for raised beds?', 'Multiply bed length by width by soil depth in feet, then divide by 27. A 4x8 bed filled 12 inches deep needs about 1.19 cubic yards.'],
  ['Does wet dirt weigh more?', 'Yes. Moisture can add significant weight, so confirm hauling limits and supplier weights before transport.'],
  ['How many cubic yards of dirt do I need to fill a hole?', 'Measure the hole in feet (length x width x depth), multiply, and divide by 27. Then add 10 to 20 percent extra because fill dirt compacts and settles after placement.'],
  ['How many tons are in a cubic yard of dirt?', 'Fill dirt weighs about 2,200 lbs per cubic yard, or 1.10 tons. Topsoil is heavier at about 2,400 lbs, or 1.20 tons per yard.'],
  ['How much does a cubic yard of fill dirt cost?', 'Fill dirt often runs $15 to $40 per cubic yard plus delivery, while screened topsoil is usually more. Prices vary widely by region and supplier, so get local quotes.'],
  ['Should I use fill dirt or topsoil for grading?', 'Use fill dirt to raise grade and topsoil as the top 4 to 6 inches where grass or plants will grow. Topsoil has the nutrients and structure plants need; fill dirt does not.'],
  ['How deep should topsoil be for a new lawn?', 'Most new lawns do well with 4 to 6 inches of quality topsoil over the subgrade. Deeper is better for root growth but adds cost quickly.'],
  ['Does dirt settle after delivery?', 'Yes. Loose dirt compacts 10 to 30 percent when placed, watered, and tamped. Order extra and expect to top off low spots after the first heavy rain.']
];
$page = ['root' => '../', 'title' => 'Dirt Calculator - Cubic Yards of Fill Dirt and Topsoil', 'description' => 'Calculate cubic yards of dirt or topsoil for any project. Free dirt calculator for fill, raised beds and levelling. Instant weight and coverage results.', 'canonical' => 'https://cubicyardcalculator.site/dirt-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Cubic Yard Calculator for Dirt and Soil', 'url' => 'https://cubicyardcalculator.site/dirt-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Dirt Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Soil, fill, and garden projects</p><h1>Dirt Calculator - Fill Dirt and Topsoil</h1><p class="lead">Estimate dirt, topsoil, or garden soil volume, weight, coverage area, pickup loads, and recommended overage for landscaping or fill work.</p></section>
<section class="tool"><h2>Calculate Dirt or Soil</h2>
  <form data-calculator="standard">
    <div class="form-grid">
      <div class="field"><label for="length">Length</label><div class="input-row"><input id="length" name="length" type="number" step="any" required><select name="length_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="length"></div></div>
      <div class="field"><label for="width">Width</label><div class="input-row"><input id="width" name="width" type="number" step="any" required><select name="width_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="width"></div></div>
      <div class="field"><label for="depth">Depth</label><div class="input-row"><input id="depth" name="depth" type="number" step="any" required><select name="depth_unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option></select></div><div class="error" data-error-for="depth"></div></div>
      <div class="field"><span class="legend">Soil Type</span><div class="toggle-row"><button class="toggle-button" type="button" data-material-preset="dirt">Fill Dirt</button><button class="toggle-button" type="button" data-material-preset="topsoil">Topsoil</button><button class="toggle-button" type="button" data-material-preset="garden">Garden Soil</button></div><select name="material"><option value="dirt">Fill Dirt</option><option value="topsoil">Topsoil</option><option value="garden">Garden Soil</option></select></div>
      <div class="field full"><label for="price">Price per cubic yard optional</label><input id="price" name="price" type="number" step="any"><div class="error" data-error-for="price"></div></div>
      <div class="button-row"><button class="button-primary" type="submit">Calculate</button><button class="button-secondary" type="reset">Reset</button></div>
      <section class="results"><h2>Your Dirt and Soil Results</h2><div class="result-grid"><div class="result-card primary"><span>Cubic Yards</span><strong data-result="yards">0.00</strong></div><div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong><p class="result-note"><span data-result="tons">0.00</span> tons</p></div><div class="result-card"><span>Coverage</span><strong><span data-result="coverage">0</span> sq ft</strong></div><div class="result-card"><span>Pickup Loads</span><strong><span data-result="trucks">0</span></strong><p class="result-note">At 2 cubic yards each</p></div><div class="result-card"><span>Cost</span><strong data-result="cost">$0.00</strong></div><div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div></div><p hidden data-result="copy"></p><button class="button-secondary" type="button" data-copy-result>Copy to Clipboard</button></section>
    </div>
  </form>
</section>
<section class="content-section"><h2>Fill Dirt vs Topsoil vs Garden Soil</h2><div class="table-wrap"><table><tr><th>Type</th><th>Best use</th><th>Notes</th></tr><tr><td>Fill Dirt</td><td>Backfill and grading</td><td>Low organic content, better for shape and support.</td></tr><tr><td>Topsoil</td><td>Lawns and planting surface</td><td>Screened soil for the top few inches.</td></tr><tr><td>Garden Soil</td><td>Raised beds and vegetables</td><td>Usually blended with compost or amendments.</td></tr></table></div></section>
<section class="content-section"><h2>How Much Dirt Do I Need</h2><p>For raised beds, measure the inside length and width, then use the planned soil depth. For lawn levelling, use the area being dressed and the average depth, often 1 to 2 inches. For backfill, split irregular spaces into smaller rectangles and add the totals.</p></section>
<section class="content-section"><h2>Dirt Weight by Type</h2><div class="table-wrap"><table><tr><th>Material</th><th>Approx. lbs per cubic yard</th></tr><tr><td>Fill dirt</td><td>2,200</td></tr><tr><td>Topsoil</td><td>2,400</td></tr><tr><td>Garden soil</td><td>2,400</td></tr></table></div></section>
<section class="content-section"><h2>Worked Examples</h2><p>A 4x8 raised bed filled 12 inches deep needs 4 x 8 x 1 / 27 = 1.19 cubic yards. A 500 square foot lawn area levelled 1 inch deep needs 500 x 0.083 / 27 = 1.54 cubic yards before overage.</p></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Multiply length x width x depth in feet and divide by 27. A 10 x 10 ft area filled 6 inches deep needs (10 x 10 x 0.5) / 27 = <strong>1.85 cubic yards</strong>. Add 10 to 15 percent extra for compaction, since fill dirt settles after placement.</p>
</div>

<section class="content-section" id="dirt-compaction">
  <h2>Compaction: Why Dirt Needs Extra</h2>
  <p>Loose fill dirt compacts 10 to 30 percent once placed, watered, and tamped. A hole that measures 5 cubic yards often needs <strong>5.5 to 6.5 cubic yards</strong> of delivered dirt to finish level. For grading and backfill, order 10 to 15 percent over the measured volume; for deep fills compacted in lifts, plan for 20 percent or more and confirm with your contractor.</p>
</section>

<section class="content-section" id="dirt-projects">
  <h2>Dirt Volumes for Common Projects</h2>
  <div class="table-wrap"><table><thead><tr><th>Project</th><th>Dimensions</th><th>Cubic yards</th><th>Approx. tons</th></tr></thead><tbody><tr><td>Raised bed</td><td>4 ft x 8 ft x 1 ft</td><td>1.19</td><td>1.4</td></tr><tr><td>Garden bed topdress</td><td>200 sq ft x 3 in</td><td>1.85</td><td>2.2</td></tr><tr><td>Low spot fill</td><td>15 ft x 15 ft x 6 in</td><td>4.17</td><td>5.0</td></tr><tr><td>Backfill trench</td><td>40 ft x 2 ft x 3 ft</td><td>8.89</td><td>10.7</td></tr><tr><td>Grading 500 sq ft</td><td>500 sq ft x 4 in</td><td>6.17</td><td>7.4</td></tr></tbody></table></div>
  <p>Ton figures use 2,400 lbs per yard for topsoil/garden soil and 2,200 for fill dirt. All values are before compaction overage.</p>
</section>

<section class="content-section" id="dirt-buying">
  <h2>Buying Dirt: What to Ask the Supplier</h2>
  <p><strong>Screened or unscreened?</strong> Screened soil has rocks and debris removed - worth it for lawns and beds, overkill for deep fill.</p>
  <p><strong>Fill dirt or topsoil?</strong> Fill dirt is cheaper subsoil for raising grade; topsoil has the organic matter plants need. Do not plant directly in fill dirt.</p>
  <p><strong>Delivery minimums.</strong> Many yards require 1 to 3 cubic yard minimums, and delivery fees often apply under 5 to 10 yards.</p>
  <p><strong>Weight limits.</strong> A cubic yard of wet topsoil can exceed 2,400 lbs, so confirm your driveway and truck access can handle the load.</p>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../">Cubic yard calculator</a><a href="../mulch-calculator/">Mulch calculator</a><a href="../gravel-calculator/">Gravel calculator</a><a href="../sand-calculator/">Sand calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
