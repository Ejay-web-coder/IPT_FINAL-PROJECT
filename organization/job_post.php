<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Board</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-white font-sans">
<?php
$showModal = isset($_GET['showLogout']) && $_GET['showLogout'] === 'true';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
  header("Location: Start.php"); exit;
}
?>
  <header class="bg-white shadow px-10 py-6 flex justify-between items-center">
    <div class="flex items-center gap-1 text-4xl font-extrabold select-none">
      <span class="text-indigo-400">E</span>
      <span class="text-orange-400">Q</span>
      <span class="text-green-400">C</span>
      <span class="text-sky-400">S</span>
      <i class="fas fa-search text-orange-400 -ml-1 -mt-1"></i>
    </div>
    <nav class="text-sm font-medium space-x-8">
      <a href="job_post.php" class="bg-green-500 text-white px-4 py-1 rounded-md font-semibold">Jobs Post</a>
      <a href="requirements.php">Requirements</a>
      <a href="manage_application.php">Manage Application</a>
      <a href="Profile.php">Profile</a>
      <a href="notification_org.php">Notification</a>
      <a href="?showLogout=true" class="font-bold">Logout</a>
    </nav>
  </header>
<?php
// Initialize session
if (!isset($_SESSION['jobs'])) {
  $_SESSION['jobs'] = [];
}

$jobs = &$_SESSION['jobs'];
$editIndex = $_POST['editIndex'] ?? null;
$formMode = 'add';
$showForm = isset($_POST['showAddForm']) || isset($_POST['showEditForm']);

// Handle Add/Edit/Delete
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['addJob'])) {
    $jobs[] = $_POST;
    $showForm = false;
  }

  if (isset($_POST['saveJob']) && isset($jobs[$editIndex])) {
    $jobs[$editIndex] = $_POST;
    $showForm = false;
  }

  if (isset($_POST['deleteJob']) && isset($jobs[$editIndex])) {
    array_splice($jobs, $editIndex, 1);
    $showForm = false;
  }

  if (isset($_POST['cancel'])) {
    $showForm = false;
  }

  if (isset($_POST['showEditForm'])) {
    $formMode = 'edit';
    $showForm = true;
  }
}

// Job form data
$job = [
  "jobTitle" => "",
  "companyName" => "",
  "jobType" => "",
  "location" => "",
  "salary" => "",
  "jobDescription" => "",
  "deadline" => ""
];

if ($formMode === 'edit' && isset($jobs[$editIndex])) {
  $job = $jobs[$editIndex];
}
?>

<?php if ($showForm): ?>
<!-- Job Form -->
<form method="POST" class="max-w-lg mx-auto bg-white p-6 border rounded shadow space-y-4">
  <h2 class="text-xl font-semibold text-center"><?= ucfirst($formMode) ?> Job</h2>
  <input type="hidden" name="editIndex" value="<?= $editIndex ?>">
  <?php foreach ($job as $key => $value): ?>
    <div>
      <label class="block text-sm font-medium"><?= ucfirst($key) ?></label>
      <?php if ($key === 'jobDescription'): ?>
        <textarea name="<?= $key ?>" rows="3" class="w-full border p-2 rounded"><?= $value ?></textarea>
      <?php elseif ($key === 'deadline'): ?>
        <input type="date" name="<?= $key ?>" value="<?= $value ?>" class="w-full border p-2 rounded">
      <?php else: ?>
        <input type="text" name="<?= $key ?>" value="<?= $value ?>" class="w-full border p-2 rounded">
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
  <div class="flex justify-end space-x-2">
    <button name="cancel" class="px-4 py-1 bg-gray-300 rounded">Cancel</button>
    <?php if ($formMode === 'edit'): ?>
      <button name="deleteJob" class="px-4 py-1 bg-red-500 text-white rounded">Delete</button>
      <button name="saveJob" class="px-4 py-1 bg-green-500 text-white rounded">Save</button>
    <?php else: ?>
      <button name="addJob" class="px-4 py-1 bg-green-500 text-white rounded">Add</button>
    <?php endif; ?>
  </div>
</form>
<?php else: ?>
<!-- Job List -->
<div class="space-y-6">
  <?php foreach ($jobs as $index => $j): ?>
    <div class="p-6 border rounded shadow">
      <p><strong>Job Title:</strong> <?= $j['jobTitle'] ?></p>
      <p><strong>Company:</strong> <?= $j['companyName'] ?></p>
      <p><strong>Type:</strong> <?= $j['jobType'] ?></p>
      <p><strong>Location:</strong> <?= $j['location'] ?></p>
      <p><strong>Salary:</strong> <?= $j['salary'] ?></p>
      <p><strong>Description:</strong> <?= $j['jobDescription'] ?></p>
      <p><strong>Deadline:</strong> <?= $j['deadline'] ?></p>
      <form method="POST" class="mt-4 inline-block">
        <input type="hidden" name="editIndex" value="<?= $index ?>">
        <button name="showEditForm" class="px-3 py-1 bg-blue-500 text-white text-sm rounded">Edit</button>
      </form>
    </div>
  <?php endforeach; ?>
</div>
<form method="POST" class="mt-8 text-center">
  <button name="showAddForm" class="px-6 py-2 bg-green-500 text-white rounded">Add New Job</button>
</form>
<?php endif; ?>
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


