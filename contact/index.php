<?php
$contact_status = null;
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
  $hp = trim($_POST['company'] ?? '');
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['message'] ?? '');
  if ($hp !== '') {
    $contact_status = 'sent';
  } elseif ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $contact_status = 'error';
  } else {
    $to = 'info@cubicyardcalculator.site';
    $subject = 'Cubic Yard Calculator contact: ' . mb_substr($name, 0, 80);
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = 'From: noreply@cubicyardcalculator.site' . "\r\n" .
               'Reply-To: ' . str_replace(["\r", "\n"], '', $email);
    $contact_status = mail($to, $subject, $body, $headers) ? 'sent' : 'failed';
  }
}
?>
<?php
$page = [
  'root' => '../',
  'title' => 'Contact - Cubic Yard Calculator',
  'description' => 'Contact Cubic Yard Calculator with questions, corrections, feedback or suggestions for the free cubic yard calculator website.',
  'canonical' => 'https://cubicyardcalculator.site/contact/'
];
$page['breadcrumbs'] = [['Home', 'https://cubicyardcalculator.site/'], ['Contact', null]];
include __DIR__ . '/../includes/header.php';
?>
<section class="hero">
  <p class="eyebrow">Send a message</p>
  <h1>Contact - Cubic Yard Calculator</h1>
  <p class="lead">Use the form to share feedback, report a calculation issue, or suggest a new material calculator.</p>
</section>
<section class="tool">
  <h2>Contact Form</h2>
  <?php if ($contact_status === 'sent'): ?>
    <p class="form-success" role="status">Thanks - your message was sent. We usually reply within a few days.</p>
  <?php else: ?>
    <?php if ($contact_status === 'error'): ?>
      <p class="form-error" role="alert">Please fill in your name, a valid email address, and a message.</p>
    <?php elseif ($contact_status === 'failed'): ?>
      <p class="form-error" role="alert">The message could not be sent right now. Please email <a href="mailto:info@cubicyardcalculator.site">info@cubicyardcalculator.site</a> directly.</p>
    <?php endif; ?>
    <form method="post" action="<?= htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/contact/', ENT_QUOTES, 'UTF-8') ?>">
      <div class="form-grid">
        <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" required autocomplete="name"></div>
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" required autocomplete="email"></div>
        <div class="field" aria-hidden="true" style="position:absolute;left:-9999px"><label for="company">Company</label><input id="company" name="company" type="text" tabindex="-1" autocomplete="off"></div>
        <div class="field full"><label for="message">Message</label><textarea id="message" name="message" required></textarea></div>
        <div class="button-row"><button class="button-primary" type="submit">Send Message</button><button class="button-secondary" type="reset">Reset</button></div>
      </div>
    </form>
  <?php endif; ?>
  <p>Prefer email? Write to <a href="mailto:info@cubicyardcalculator.site">info@cubicyardcalculator.site</a>.</p>
</section>
<section class="content-section">
  <h2>What to Include</h2>
  <p>If you are reporting a calculator result, include the length, width, depth, units, material, and price entered. For general questions, include the project type and the material you are estimating.</p>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
