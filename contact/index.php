<?php
$page = [
  'root' => '../',
  'title' => 'Contact - Cubic Yard Calculator',
  'description' => 'Contact Cubic Yard Calculator with questions, corrections, feedback or suggestions for the free cubic yard calculator website.',
  'canonical' => 'https://cubicyardcalculator.site/contact/'
];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero">
  <p class="eyebrow">Send a message</p>
  <h1>Contact - Cubic Yard Calculator</h1>
  <p class="lead">Use the form to share feedback, report a calculation issue, or suggest a new material calculator.</p>
</section>
<section class="tool">
  <h2>Contact Form</h2>
  <form action="mailto:info@cubicyardcalculator.site" method="post" enctype="text/plain">
    <div class="form-grid">
      <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" required></div>
      <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" required></div>
      <div class="field full"><label for="message">Message</label><textarea id="message" name="message" required></textarea></div>
      <div class="button-row"><button class="button-primary" type="submit">Send Message</button><button class="button-secondary" type="reset">Reset</button></div>
    </div>
  </form>
</section>
<section class="content-section">
  <h2>What to Include</h2>
  <p>If you are reporting a calculator result, include the length, width, depth, units, material, and price entered. For general questions, include the project type and the material you are estimating.</p>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
