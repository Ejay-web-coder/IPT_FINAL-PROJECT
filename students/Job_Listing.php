<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body class="font-sans bg-white text-black">
  <?php
$showModal = isset($_GET['showLogout']) && $_GET['showLogout'] === 'true';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
  header("Location: ../homepage.php"); exit;
}
?>
  <header class="flex justify-between items-center bg-white shadow px-6 py-4">
    <div class="text-4xl font-extrabold text-indigo-400">
      <span>E</span><span class="text-orange-400">Q</span><span class="text-green-400">C</span><span class="text-sky-400">S</span>
      <i class="fas fa-search text-orange-400 -ml-1 -mt-1"></i>
    </div>
    <nav class="text-sm font-medium space-x-6">
      <a href="Job_Listing.php" class="bg-orange-500 text-white px-4 py-1 rounded-md">Job Listing</a>
      <a href="Requirements.php">Requirements</a>
      <a href="My_Application.php">My Applications</a>
      <a href="Profile_Resume.php">Profile/Resume</a>
      <a href="Notification.php">Notifications</a>
      <a href="?showLogout=true" class="font-bold">Logout</a>
    </nav>
  </header>

  <main class="max-w-screen-lg mx-auto px-4 pb-12">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php
      $jobs = [
        ["img" => "https://storage.googleapis.com/a1aa/image/0e6b58e8-08a9-4f36-610e-2d3e4b606dd8.jpg", "title" => "Store Assistant (Retail) – 7-Eleven", "company" => "7-Eleven", "location" => "brgy. payompon, Mamburao", "type" => "Retail", "sched" => "Full-time / Part-time", "rate" => "P50 per hrs", "posted" => "15d ago"],
        ["img" => "https://storage.googleapis.com/a1aa/image/43fe8664-bf6c-46c0-6ca5-c6d3474ceeca.jpg", "title" => "Food Delivery Driver - Aling Inasal", "company" => "Aling Inasal", "location" => "Capitol Road, Mamburao", "type" => "Delivery", "sched" => "Part-time", "rate" => "P250-P400/day", "posted" => "1 hour ago"],
        ["img" => "https://storage.googleapis.com/a1aa/image/eee77be1-881f-4e88-ecc8-2c46ebd78890.jpg", "title" => "Sales Associate – BEPER", "company" => "BEPER Dept. Store", "location" => "Brgy. 7, Mamburao", "type" => "Sales", "sched" => "Part-time", "rate" => "P40 per hrs", "posted" => "2 days ago"]
      ];
      foreach (array_merge($jobs, $jobs) as $job): ?>
        <div class="border rounded-md shadow-sm p-4">
          <img src="<?= $job['img'] ?>" alt="<?= $job['title'] ?>" class="w-20 h-14 object-contain mb-3" />
          <h3 class="font-bold text-sm mb-1"><?= $job['title'] ?></h3>
          <p class="text-xs"><?= $job['company'] ?></p>
          <p class="text-xs"><?= $job['location'] ?></p>
          <p class="text-xs"><?= $job['type'] ?></p>
          <p class="text-xs"><?= $job['sched'] ?></p>
          <p class="text-xs"><?= $job['rate'] ?></p>
          <p class="text-xs mb-3"><?= $job['posted'] ?></p>
          <button class="bg-orange-500 text-white text-xs font-semibold rounded-full px-4 py-1">Apply</button>
        </div>
      <?php endforeach; ?>
    </div>
  </main>


  <?php if ($showModal): ?>
<div class="fixed inset-0 bg-black bg-opacity-30 z-50"></div>
<div class="fixed top-1/2 left-1/2 w-80 bg-white border-2 border-blue-500 rounded-lg p-6 transform -translate-x-1/2 -translate-y-1/2 z-50 text-center">
  <div class="text-4xl text-black mb-4"><i class="fas fa-sign-out-alt"></i></div>
  <p class="text-sm mb-6">Are you sure you want to log out?</p>
  <div class="flex justify-center gap-4">
    <form method="post"><input type="submit" name="logout" value="Logout" class="text-blue-600 font-bold" /></form>
    <form method="get"><input type="submit" value="Cancel" class="bg-blue-200 px-4 py-1 rounded font-bold" /></form>
  </div>
</div>
<?php endif; ?>

</body>
</html>
