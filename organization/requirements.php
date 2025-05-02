<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Requirement Form</title>
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
      <a href="job_post.php">Jobs Post</a>
      <a href="requirements.php" class="bg-green-500 text-white px-4 py-1 rounded-md font-semibold">Requirements</a>
      <a href="manage_application.php">Manage Application</a>
      <a href="Profile.php">Profile</a>
      <a href="notification_org.php">Notification</a>
      <a href="?showLogout=true" class="font-bold">Logout</a>
    </nav>
  </header>
  
  <main class="flex justify-center p-6">
    <form class="border p-6 w-full max-w-xl">
      <h2 class="text-xl font-medium mb-6">Job Requirement Form</h2>

      <div class="mb-6">
        <label for="student-id" class="block text-sm mb-2">Student ID</label>
        <label for="student-id" class="border p-6 flex flex-col items-center cursor-pointer hover:bg-gray-100">
          <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
          <span class="font-medium">Upload a File</span>
          <span class="text-xs">Drag and drop files here</span>
        </label>
        <input type="file" id="student-id" name="student-id" class="hidden" />
      </div>

      <div class="mb-6">
        <label for="cor" class="block text-sm mb-2">COR</label>
        <label for="cor" class="border p-6 flex flex-col items-center cursor-pointer hover:bg-gray-100">
          <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
          <span class="font-medium">Upload a File</span>
          <span class="text-xs">Drag and drop files here</span>
        </label>
        <input type="file" id="cor" name="cor" class="hidden" />
      </div>

      <div class="mb-6">
        <label for="barangay-indigency" class="block text-sm mb-2">Barangay Indigency</label>
        <label for="barangay-indigency" class="border p-6 flex flex-col items-center cursor-pointer hover:bg-gray-100">
          <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
          <span class="font-medium">Upload a File</span>
          <span class="text-xs">Drag and drop files here</span>
        </label>
        <input type="file" id="barangay-indigency" name="barangay-indigency" class="hidden" />
      </div>

      <div class="mb-6">
        <label for="resume" class="block text-sm mb-2">Resume</label>
        <label for="resume" class="border p-6 flex flex-col items-center cursor-pointer hover:bg-gray-100">
          <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
          <span class="font-medium">Upload a File</span>
          <span class="text-xs">Drag and drop files here</span>
        </label>
        <input type="file" id="resume" name="resume" class="hidden" />
      </div>

      <button type="submit" class="bg-teal-500 text-white px-6 py-2 rounded-full float-right">Submit</button>
    </form>
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
