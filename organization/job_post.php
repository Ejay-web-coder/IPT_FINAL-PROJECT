<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Board</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans px-6 py-10">
<style>
     header {
      background: white;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
      padding: 1.5rem 2.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 0.25rem;
      font-weight: 800;
      font-size: 2.5rem;
      user-select: none;
    }
    .logo span:nth-child(1) { color: #818cf8; }
    .logo span:nth-child(2) { color: #fb923c; }
    .logo span:nth-child(3) { color: #4ade80; }
    .logo span:nth-child(4) { color: #0ea5e9; }
    .logo .fa-search {
      position: relative;
      left: -0.25rem;
      top: -0.25rem;
      color: #fb923c;
    }
    nav a {
      margin-left: 2rem;
      text-decoration: none;
      color: black;
      font-weight: 500;
      font-size: 1rem;
    }
    nav a.active, nav a.btn-green {
      background-color: #22c55e;
      color: white;
      padding: 0.25rem 1rem;
      border-radius: 0.375rem;
      font-weight: 600;
    }
    nav a.logout {
      font-weight: 700;
    }
</style>

<header>
    <div class="logo" aria-label="EQCS Logo">
      <span>E</span><span>Q</span><span>C</span><span>S</span>
      <i class="fas fa-search"></i>
    </div>
    <nav aria-label="Primary Navigation">
      <a href="#" >Profile</a>
      <a href="#" class="btn-green active">Jobs Post</a>
      <a href="#">Requirements</a>
      <a href="#">Manage Application</a>
      <a href="#">Notification</a>
      <a href="#" class="logout">Logout</a>
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

</body>
</html>


