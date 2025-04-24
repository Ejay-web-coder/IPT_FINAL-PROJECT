<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Organization Profile</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: #f9fafb;
    margin: 0; padding: 0;
    color: #333;
  }
  header {
    background: white;
    padding: 20px 30px;
    border-bottom: 1px solid #ddd;
    display: flex;
    align-items: center;
    gap: 40px;
  }
  header img {
    width: 140px;
    height: 48px;
    object-fit: contain;
  }
  nav a {
    margin-right: 20px;
    text-decoration: none;
    color: #555;
    font-weight: 600;
  }
  nav a.profile {
    color: #10b981;
  }
  nav a.logout {
    font-weight: 700;
    color: #000;
  }
  main {
    max-width: 600px;
    margin: 40px auto;
    background: white;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 0 8px #ccc;
  }
  h2 {
    margin-top: 0;
    margin-bottom: 25px;
    font-size: 24px;
    color: #111;
  }
  .field {
    margin-bottom: 18px;
  }
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 6px;
  }
  .value {
    background: #eee;
    padding: 10px 14px;
    border-radius: 6px;
  }
  input[type=text], input[type=email], input[type=tel], input[type=file] {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
  }
  button {
    background: #2563eb;
    color: white;
    border: none;
    padding: 12px 28px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
  }
  button.cancel {
    background: #ef4444;
    margin-left: 12px;
  }
  .actions {
    margin-top: 30px;
    text-align: right;
  }
  a.file-link {
    color: #2563eb;
    text-decoration: underline;
  }
</style>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['profile'])) {
  $_SESSION['profile'] = [
    'orgName' => '7-Eleven',
    'email' => '7eleven@hhcorp.com',
    'phone' => '09858787833',
    'contactPerson' => 'Arnold C. Galang',
    'address' => 'Payompon, Mamburao, Occidental Mindoro',
    'resume' => '',
    'logo' => ''
  ];
}

$profile = $_SESSION['profile'];
$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['cancel'])) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  }

  $orgName = trim($_POST['orgName'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $contactPerson = trim($_POST['contactPerson'] ?? '');
  $address = trim($_POST['address'] ?? '');

  if ($orgName === '') $errors[] = 'Organization Name is required.';
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid Email is required.';
  if ($phone === '' || !preg_match('/^\d+$/', $phone)) $errors[] = 'Valid Phone Number is required.';
  if ($contactPerson === '') $errors[] = 'Contact Person is required.';
  if ($address === '') $errors[] = 'Address is required.';

  // Handle resume upload
  if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
    if ($ext === 'pdf') {
      $target = 'uploads/resume_' . time() . '.' . $ext;
      if (!is_dir('uploads')) mkdir('uploads');
      move_uploaded_file($_FILES['resume']['tmp_name'], $target);
      $profile['resume'] = $target;
    } else {
      $errors[] = 'Resume must be a PDF file.';
    }
  }

  // Handle logo upload
  if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
    $ext = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));
    $allowed = ['jpg','jpeg','png','gif','webp'];
    if (in_array($ext, $allowed)) {
      $target = 'uploads/logo_' . time() . '.' . $ext;
      if (!is_dir('uploads')) mkdir('uploads');
      move_uploaded_file($_FILES['logo']['tmp_name'], $target);
      $profile['logo'] = $target;
    } else {
      $errors[] = 'Logo must be an image file (jpg, png, gif, webp).';
    }
  }

  if (empty($errors)) {
    $profile['orgName'] = htmlspecialchars($orgName);
    $profile['email'] = htmlspecialchars($email);
    $profile['phone'] = htmlspecialchars($phone);
    $profile['contactPerson'] = htmlspecialchars($contactPerson);
    $profile['address'] = htmlspecialchars($address);
    $_SESSION['profile'] = $profile;
    $success = 'Profile saved successfully!';
  }
}

$editing = isset($_POST['edit']) || ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors) === false);
?>

<header>
  <img src="https://storage.googleapis.com/a1aa/image/e92f4942-1320-41c0-67dc-ebf54ffb653a.jpg" alt="EQCS logo" />
  <nav>
    <a href="#" class="profile">Profile</a>
    <a href="#">Post Jobs</a>
    <a href="#">Requirements</a>
    <a href="#">Manage Application</a>
    <a href="#">Notification</a>
    <a href="#" class="logout">Logout</a>
  </nav>
</header>

<main>
  <h2>Organization Profile</h2>

  <?php if ($errors): ?>
    <div style="color:#b91c1c; margin-bottom:20px;">
      <ul>
        <?php foreach ($errors as $e): ?>
          <li><?= $e ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($success): ?>
    <div style="color:#065f46; margin-bottom:20px;">
      <?= $success ?>
    </div>
  <?php endif; ?>

  <?php if (!$editing): ?>
    <div class="field"><label>Organization Name</label><div class="value"><?= $profile['orgName'] ?></div></div>
    <div class="field"><label>Email</label><div class="value"><?= $profile['email'] ?></div></div>
    <div class="field"><label>Phone Number</label><div class="value"><?= $profile['phone'] ?></div></div>
    <div class="field"><label>Contact Person</label><div class="value"><?= $profile['contactPerson'] ?></div></div>
    <div class="field"><label>Address</label><div class="value"><?= $profile['address'] ?></div></div>
    <div class="field"><label>Company Registration</label>
      <div class="value">
        <?php if ($profile['resume'] && file_exists($profile['resume'])): ?>
          <a href="<?= $profile['resume'] ?>" class="file-link" target="_blank">📂 View Resume</a>
        <?php else: ?>
          📂 [View Resume] (resume.pdf)
        <?php endif; ?>
      </div>
    </div>
    <div class="field"><label>Company Logo</label>
      <div class="value">
        <?php if ($profile['logo'] && file_exists($profile['logo'])): ?>
          <img src="<?= $profile['logo'] ?>" alt="Company Logo" style="max-height:80px; border-radius:6px;" />
        <?php else: ?>
          🖼️ [View Picture]
        <?php endif; ?>
      </div>
    </div>
    <form method="post" style="text-align:right; margin-top:30px;">
      <button type="submit" name="edit" value="1">Edit</button>
    </form>
  <?php else: ?>
    <form method="post" enctype="multipart/form-data" novalidate>
      <div class="field">
        <label for="orgName">Organization Name</label>
        <input type="text" id="orgName" name="orgName" value="<?= htmlspecialchars($profile['orgName']) ?>" required />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($profile['email']) ?>" required />
      </div>
      <div class="field">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($profile['phone']) ?>" pattern="\d+" required />
      </div>
      <div class="field">
        <label for="contactPerson">Contact Person</label>
        <input type="text" id="contactPerson" name="contactPerson" value="<?= htmlspecialchars($profile['contactPerson']) ?>" required />
      </div>
      <div class="field">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="<?= htmlspecialchars($profile['address']) ?>" required />
      </div>
      <div class="field">
        <label>Company Registration</label>
        <?php if ($profile['resume'] && file_exists($profile['resume'])): ?>
          <a href="<?= $profile['resume'] ?>" class="file-link" target="_blank">📂 View Resume</a>
        <?php else: ?>
          <span>📂 [View Resume] (resume.pdf)</span>
        <?php endif; ?>
        <input type="file" name="resume" accept=".pdf" />
      </div>
      <div class="field">
        <label>Company Logo</label>
        <?php if ($profile['logo'] && file_exists($profile['logo'])): ?>
          <img src="<?= $profile['logo'] ?>" alt="Company Logo" style="max-height:80px; border-radius:6px; display:block; margin-bottom:8px;" />
        <?php else: ?>
          <span>🖼️ [View Picture]</span>
        <?php endif; ?>
        <input type="file" name="logo" accept="image/*" />
      </div>
      <div class="actions">
        <button type="submit">Save</button>
        <button type="submit" name="cancel" value="1" class="cancel">Cancel</button>
      </div>
    </form>
  <?php endif; ?>
</main>
</body>
</html>