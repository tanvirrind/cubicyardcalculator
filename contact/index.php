<?php
session_start();
$csrf_token = $_SESSION['contact_csrf'] ??= bin2hex(random_bytes(32));
$contact_status = null;
$form_name = '';
$form_email = '';
$form_message = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
  $submitted_token = (string) ($_POST['csrf_token'] ?? '');
  $hp = trim($_POST['company'] ?? '');
  $name = trim((string) ($_POST['name'] ?? ''));
  $email = trim((string) ($_POST['email'] ?? ''));
  $message = trim((string) ($_POST['message'] ?? ''));
  $form_name = $name;
  $form_email = $email;
  $form_message = $message;
  if (!hash_equals($csrf_token, $submitted_token)) {
    $contact_status = 'error';
  } elseif ($hp !== '') {
    $contact_status = 'sent';
  } elseif ($name === '' || $message === '' || strlen($name) > 120 || strlen($email) > 254 || strlen($message) > 5000 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $contact_status = 'error';
  } else {
    $to = 'info@cubicyardcalculator.site';
    $safe_subject_name = str_replace(["\r", "\n"], '', mb_substr($name, 0, 80));
    $subject = 'Cubic Yard Calculator contact: ' . $safe_subject_name;
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
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8') ?>">
      <div class="form-grid">
        <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" required maxlength="120" autocomplete="name" value="<?= htmlspecialchars($form_name, ENT_QUOTES, 'UTF-8') ?>"></div>
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" required maxlength="254" autocomplete="email" value="<?= htmlspecialchars($form_email, ENT_QUOTES, 'UTF-8') ?>"></div>
        <div class="field" aria-hidden="true" style="position:absolute;left:-9999px"><label for="company">Company</label><input id="company" name="company" type="text" tabindex="-1" autocomplete="off"></div>
        <div class="field full"><label for="message">Message</label><textarea id="message" name="message" required maxlength="5000"><?= htmlspecialchars($form_message, ENT_QUOTES, 'UTF-8') ?></textarea></div>
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
