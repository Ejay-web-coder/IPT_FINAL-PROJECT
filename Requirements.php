<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Job Requirement Form</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #fff;
    color: #000;
  }
  header {
    max-width: 1120px;
    margin: 0 auto;
    padding: 24px 16px 24px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .logo {
    font-weight: 800;
    font-size: 32px;
    display: flex;
    align-items: center;
    gap: 4px;
    user-select: none;
  }
  .logo .e {
    color: #9b8ffb;
  }
  .logo .magnify {
    color: #f58200;
    position: relative;
    top: 2px;
  }
  .logo .c {
    color: #00f2a8;
  }
  .logo .s {
    color: #0070f2;
  }
  nav {
    display: flex;
    gap: 24px;
    font-size: 14px;
    user-select: none;
    align-items: center; /* Align nav items vertically center */
  }
  nav a {
    text-decoration: none;
    color: #000;
    font-weight: 400;
    line-height: 1.5; /* Ensure consistent vertical alignment */
    display: inline-flex;
    align-items: center;
    height: 32px; /* Match height of Job Listing button */
  }
  nav a.Requirements {
    background-color: #f58200;
    color: #fff;
    padding: 6px 12px;
    border-radius: 6px;
    font-weight: 600;
    height: 32px;
    line-height: normal;
  }
  nav a.logout {
    font-weight: 700;
  }
  main {
    max-width: 720px;
    margin: 24px auto 48px;
    padding: 0 24px;
  }
  form {
    border: 1px solid #ccc;
    padding: 24px;
  }
  h1 {
    font-weight: 400;
    font-size: 18px;
    margin-bottom: 24px;
  }
  label {
    display: block;
    font-size: 12px;
    margin-bottom: 6px;
  }
  .upload-label {
    border: 1px solid #ccc;
    height: 64px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 24px;
    cursor: pointer;
  }
  .upload-label img {
    width: 20px;
    height: 20px;
    margin-bottom: 4px;
  }
  .upload-label .bold-text {
    font-weight: 700;
    font-size: 9px;
    line-height: 1;
  }
  .upload-label .small-text {
    font-size: 8px;
    line-height: 1;
  }
  input[type="file"] {
    display: none;
  }
  .submit-container {
    text-align: right;
  }
  button {
    background-color: #f7941d;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    padding: 4px 24px;
    border: none;
    border-radius: 9999px;
    box-shadow: 3px 3px 3px rgba(255,140,0,0.7);
    cursor: pointer;
  }
  button:focus {
    outline: 2px solid #000;
    outline-offset: 2px;
  }
  @media (max-width: 640px) {
    header {
      flex-wrap: wrap;
      gap: 12px;
    }
    nav {
      gap: 12px;
      font-size: 12px;
      flex-wrap: wrap;
    }
    main {
      padding: 0 16px;
      margin: 16px auto 32px;
    }
  }
  #logoutModal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      width: 350px;
      background: white;
      border: 2px solid #007AFF;
      border-radius: 8px;
      padding: 24px;
      transform: translate(-50%, -50%);
      z-index: 9999;
      box-sizing: border-box;
      text-align: center;
    }
    #logoutModal .icon {
      font-size: 40px;
      color: black;
      margin-bottom: 16px;
    }
    #logoutModal p {
      font-size: 10px;
      margin-bottom: 24px;
    }
    #logoutModal .buttons {
      display: flex;
      justify-content: center;
      gap: 24px;
    }
    #logoutModal button,
    #logoutModal input[type="submit"] {
      font-weight: 700;
      cursor: pointer;
      border: none;
      border-radius: 6px;
      padding: 6px 16px;
      font-size: 14px;
    }
    #logoutModal .logout-btn {
      background: none;
      color: #007AFF;
    }
    #logoutModal .cancel-btn {
      background-color: #7ED6FF;
      color: black;
    }
    /* Overlay */
    #modalOverlay {
      display: none;
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.3);
      z-index: 9998;
    }
</style>
</head>
<body>
<?php


  // Check if logout is requested
  $showModal = false;
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    header("Location: Start.php");
    exit;
  }

  // Check if user clicked logout nav to show modal
  if (isset($_GET['showLogout']) && $_GET['showLogout'] === 'true') {
    $showModal = true;
  }
?>
<div class="top-label">STUDENTS</div>
  <header>
    <div class="logo" aria-label="EQCS logo">
      <span class="e">E</span>
      <span class="magnify" aria-hidden="true">🔍</span>
      <span class="c">C</span>
      <span class="s">S</span>
    </div>
    <nav>
      <a href="Job_Listing.php">Job Listing</a>
      <a href="Requirements.php" class="Requirements">Requirements</a>
      <a href="My_Application.php">My Applications</a>
      <a href="Profile_Resume.php">Profile/Resume</a>
      <a href="Notification.php">Notifications</a>
      <a href="?showLogout=true" class="logout">Logout</a>
    </nav>
  </header>
<main>
  <form>
    <h1>Job Requirement Form</h1>
    <label for="student-id">Student ID</label>
    <label for="student-id" class="upload-label" tabindex="0">
      <img src="https://storage.googleapis.com/a1aa/image/b8a860bc-37a9-47b0-b5f7-6ca4fac3dbf5.jpg" alt="Upload cloud icon black" />
      <span class="bold-text">Upload a File</span>
      <span class="small-text">Drag and drop files here</span>
      <input type="file" id="student-id" name="student-id" />
    </label>

    <label for="cor">COR</label>
    <label for="cor" class="upload-label" tabindex="0">
      <img src="https://storage.googleapis.com/a1aa/image/b8a860bc-37a9-47b0-b5f7-6ca4fac3dbf5.jpg" alt="Upload cloud icon black" />
      <span class="bold-text">Upload a File</span>
      <span class="small-text">Drag and drop files here</span>
      <input type="file" id="cor" name="cor" />
    </label>

    <label for="barangay-indigency">Barangay Indigency</label>
    <label for="barangay-indigency" class="upload-label" tabindex="0">
      <img src="https://storage.googleapis.com/a1aa/image/b8a860bc-37a9-47b0-b5f7-6ca4fac3dbf5.jpg" alt="Upload cloud icon black" />
      <span class="bold-text">Upload a File</span>
      <span class="small-text">Drag and drop files here</span>
      <input type="file" id="barangay-indigency" name="barangay-indigency" />
    </label>

    <label for="resume">Resume</label>
    <label for="resume" class="upload-label" tabindex="0">
      <img src="https://storage.googleapis.com/a1aa/image/b8a860bc-37a9-47b0-b5f7-6ca4fac3dbf5.jpg" alt="Upload cloud icon black" />
      <span class="bold-text">Upload a File</span>
      <span class="small-text">Drag and drop files here</span>
      <input type="file" id="resume" name="resume" />
    </label>

    <div class="submit-container">
      <button type="submit">Submit</button>
    </div>
  </form>
</main>
<?php if ($showModal): ?>
<div id="modalOverlay"></div>
  <div id="logoutModal" role="dialog" aria-modal="true" aria-labelledby="logoutTitle" aria-describedby="logoutDesc" style="display:block;">
    <div class="icon" aria-hidden="true"><i class="fas fa-sign-out-alt"></i></div>
    <p id="logoutDesc">Are you sure to log-out?</p>
    <div class="buttons">
      <form method="post" action="">
        <input type="submit" name="logout" value="Logout" class="logout-btn" />
      </form>
      <form method="get" action="">
        <input type="submit" value="Cancel" class="cancel-btn" />
      </form>
    </div>
  </div>
<?php endif; ?>
</body>
</html>