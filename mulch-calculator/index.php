<?php
$faqs = [
  ['How do I calculate cubic yards of mulch?', 'Multiply bed length by width by mulch depth in feet, then divide by 27. A 3 inch depth is 0.25 feet.'],
  ['How deep should mulch be?', 'Most beds use 2 to 3 inches of mulch. Use 4 inches only where extra weed control or moisture protection is needed.'],
  ['How many 2 cubic foot bags are in a cubic yard?', 'There are 13.5 bags of 2 cubic feet in 1 cubic yard. Round up to 14 bags for ordering.'],
  ['Is bulk mulch cheaper than bags?', 'Bulk mulch is often cheaper for larger areas. Bags are convenient for small beds, repairs, and areas without easy delivery access.'],
  ['How much does a cubic yard of mulch weigh?', 'Mulch is much lighter than stone or soil and is often about 800 lbs per cubic yard. Wet mulch can weigh more.'],
  ['Should old mulch be removed first?', 'If old mulch is too thick, pull some back before adding more. A total depth over 4 inches can hold too much moisture around plants.'],
  ['How often should mulch be replaced?', 'Organic mulch usually needs refreshing every year or two. Color, breakdown, and bed depth determine timing.'],
  ['Should I order extra mulch?', 'A small overage is helpful for settling and thin spots. Ten percent extra is a practical planning estimate.'],
  ['How many bags of mulch do I need for 100 square feet?', 'At 3 inches deep, 100 sq ft needs about 0.93 cubic yards, or roughly 13 bags of 2 cu ft mulch. Round up to 14 bags, or 15 to 16 with overage.'],
  ['How many 2 cubic foot bags of mulch are in a cubic yard?', '13.5 bags, so round up to 14 for ordering. With 10 percent overage, plan on 15 bags per cubic yard.'],
  ['How much does a yard of mulch cover at 2 inches?', 'One cubic yard covers about 162 square feet at 2 inches deep. At 3 inches it covers 108 square feet, and at 4 inches it covers 81 square feet.'],
  ['Is rubber mulch measured the same as wood mulch?', 'Yes for volume - a cubic yard is a cubic yard. Rubber mulch is heavier per yard though, so check weight limits if you are hauling it yourself.'],
  ['How many cubic yards of mulch fit in a pickup truck?', 'A full-size pickup bed holds roughly 2 to 3 cubic yards of mulch heaped. Mulch is light, so volume fills the bed before weight becomes an issue.'],
  ['Should I put landscape fabric under mulch?', 'It helps with weeds initially but can block water and air over time, and mulch breaks down into soil above it anyway. Many gardeners skip fabric in planting beds and just maintain proper depth.']
];
$page = ['root' => '../', 'title' => 'Mulch Calculator - Cubic Yards and Bags Needed', 'description' => 'Calculate cubic yards of mulch for garden beds and landscaping. Find out how many bags you need. Free mulch calculator with depth guide and coverage estimates.', 'canonical' => 'https://cubicyardcalculator.site/mulch-calculator/', 'schema' => ['@context' => 'https://schema.org', '@graph' => [['@type' => 'WebApplication', 'name' => 'Mulch Calculator', 'url' => 'https://cubicyardcalculator.site/mulch-calculator/', 'applicationCategory' => 'CalculatorApplication', 'operatingSystem' => 'Any'], ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)]]]];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Mulch Calculator', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero"><p class="eyebrow">Beds, borders, and landscape areas</p><h1>Mulch Calculator - Cubic Yards</h1><p class="lead">Estimate bulk mulch, 2 cubic foot bags, coverage area, cost, and overage for wood chips, shredded bark, or rubber mulch.</p></section>
<section class="tool"><h2>Calculate Mulch</h2><form data-calculator="standard"><div class="form-grid"><div class="field"><label for="length">Length</label><div class="input-row"><input id="length" name="length" type="number" step="any" required><select name="length_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="length"></div></div><div class="field"><label for="width">Width</label><div class="input-row"><input id="width" name="width" type="number" step="any" required><select name="width_unit"><option value="feet">feet</option><option value="yards">yards</option><option value="meters">meters</option><option value="inches">inches</option><option value="cm">cm</option></select></div><div class="error" data-error-for="width"></div></div><div class="field"><label for="depth">Depth</label><div class="input-row"><input id="depth" name="depth" type="number" step="any" required><select name="depth_unit"><option value="inches">inches</option><option value="feet">feet</option><option value="yards">yards</option><option value="cm">cm</option></select></div><div class="preset-row"><button class="preset-button" type="button" data-depth-preset="2">2 in</button><button class="preset-button" type="button" data-depth-preset="3">3 in</button><button class="preset-button" type="button" data-depth-preset="4">4 in</button></div><div class="error" data-error-for="depth"></div></div><div class="field"><label for="material">Mulch Type</label><select id="material" name="material"><option value="mulch">Wood Chips</option><option value="mulch">Shredded Bark</option><option value="mulch">Rubber Mulch</option></select></div><div class="field full"><label for="price">Price per cubic yard optional</label><input id="price" name="price" type="number" step="any"><div class="error" data-error-for="price"></div></div><div class="button-row"><button class="button-primary" type="submit">Calculate</button><button class="button-secondary" type="reset">Reset</button></div><section class="results"><h2>Your Mulch Results</h2><div class="result-grid"><div class="result-card primary"><span>Cubic Yards</span><strong data-result="yards">0.00</strong></div><div class="result-card"><span>2 cu ft Bags</span><strong data-result="bags2cf">0</strong></div><div class="result-card"><span>Coverage</span><strong><span data-result="coverage">0</span> sq ft</strong></div><div class="result-card"><span>Weight</span><strong><span data-result="pounds">0</span> lbs</strong></div><div class="result-card"><span>Cost</span><strong data-result="cost">$0.00</strong></div><div class="result-card"><span>With 10% Overage</span><strong><span data-result="overage">0.00</span> yards</strong></div></div><p hidden data-result="copy"></p><button class="button-secondary" type="button" data-copy-result>Copy to Clipboard</button></section></div></form></section>
<section class="content-section"><h2>How Deep Should Mulch Be</h2><p>Use 2 inches for refreshing existing beds, 3 inches for most new beds, and 4 inches for coarse mulch or weed control. Keep mulch away from trunks, stems, and siding so moisture does not collect against sensitive surfaces.</p></section>
<section class="content-section"><h2>Bulk vs Bags Cost Comparison</h2><p>Bulk mulch usually wins when the project is several cubic yards or more. Bags make sense for small beds, touch ups, and homes where a delivery pile would be difficult to place.</p></section>
<section class="content-section"><h2>Coverage Reference Table</h2><div class="table-wrap"><table><tr><th>Depth</th><th>Coverage per cubic yard</th></tr><tr><td>2 inches</td><td>162 sq ft</td></tr><tr><td>3 inches</td><td>108 sq ft</td></tr><tr><td>4 inches</td><td>81 sq ft</td></tr></table></div></section>
<div class="answer-box">
  <p><strong class="lead-answer">Quick answer:</strong> Multiply bed length x width x mulch depth in feet and divide by 27. A 200 sq ft bed at 3 inches deep needs (200 x 0.25) / 27 = <strong>1.85 cubic yards</strong> - about 25 bags of 2 cu ft mulch, or 27 to 28 bags with 10 percent overage.</p>
</div>

<section class="content-section" id="mulch-bags">
  <h2>Mulch Bags Per Cubic Yard by Bag Size</h2>
  <p>One cubic yard equals 27 cubic feet. Divide 27 by the bag size to get bags per yard:</p>
  <div class="table-wrap"><table><thead><tr><th>Bag size</th><th>Bags per cubic yard</th><th>Round up to</th></tr></thead><tbody><tr><td>1 cu ft</td><td>27</td><td>27</td></tr><tr><td>1.5 cu ft</td><td>18</td><td>18</td></tr><tr><td>2 cu ft</td><td>13.5</td><td>14</td></tr><tr><td>3 cu ft</td><td>9</td><td>9</td></tr></tbody></table></div>
</section>

<section class="content-section" id="mulch-wheelbarrow">
  <h2>How Many Wheelbarrows of Mulch Per Yard</h2>
  <p>A standard 6 cubic foot wheelbarrow holds about 0.22 cubic yards, so one cubic yard is roughly <strong>4 to 5 heaped wheelbarrow loads</strong>. For a 3-yard delivery, plan on 12 to 15 trips from the pile to the beds.</p>
</section>

<section class="content-section" id="mulch-bulk-vs-bags">
  <h2>Bulk vs Bagged Mulch: The Real Math</h2>
  <p>Bulk mulch is usually cheaper once you pass about 2 to 3 cubic yards. A yard of bulk hardwood mulch often costs less than the 14 bags of 2 cu ft mulch that equal the same volume, and you skip hauling dozens of plastic bags. Bags win for small beds under 100 sq ft, touch-ups, and homes where a delivery truck cannot reach. If delivery has a minimum (often 1 to 3 yards) or a delivery fee, compare the all-in totals before deciding.</p>
</section>

<section class="content-section" id="mulch-mistakes">
  <h2>Common Mulch Estimating Mistakes</h2>
  <p><strong>Mulching too deep.</strong> More than 4 inches total can suffocate roots and hold moisture against trunks. Measure existing mulch before adding more.</p>
  <p><strong>Forgetting bed edges.</strong> Mulch migrates onto lawns and paths. A small overage covers the thin spots that appear after the first rain.</p>
  <p><strong>Ordering by bags for big beds.</strong> A 1,000 sq ft bed at 3 inches needs 9.26 yards - that is 125 bags of 2 cu ft mulch. Bulk delivery is the sane choice.</p>
</section>

<section class="content-section"><h2>FAQ</h2><?php foreach ($faqs as $faq): ?><div class="faq-item"><h3><button class="faq-question" type="button" aria-expanded="false"><?= htmlspecialchars($faq[0]) ?><span>+</span></button></h3><div class="faq-answer"><p><?= htmlspecialchars($faq[1]) ?></p></div></div><?php endforeach; ?></section>
<section class="content-section"><h2>Related Calculators</h2><div class="link-grid"><a href="../dirt-calculator/">Dirt calculator</a><a href="../square-feet-to-cubic-yards-calculator/">Square feet to cubic yards calculator</a><a href="../gravel-calculator/">Gravel calculator</a><a href="../">Cubic yard calculator</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
