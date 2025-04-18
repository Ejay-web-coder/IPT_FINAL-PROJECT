<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile/Resume</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #fff;
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
  nav a.Profile-Resume {
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
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 0 auto;
      max-width: 960px;
    }
    thead tr {
      background-color: #E5E5E5;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px 16px;
      text-align: left;
      font-size: 14px;
      font-weight: 400;
    }
    th {
      font-weight: 700;
    }
    @media (max-width: 768px) {
      header {
        flex-wrap: wrap;
        padding: 16px 24px;
      }
      nav {
        gap: 16px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 12px;
      }
      table {
        font-size: 12px;
        max-width: 100%;
      }
      th, td {
        padding: 6px 8px;
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
  // Start session if needed
  session_start();

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
      <a href="Requirements.php">Requirements</a>
      <a href="My_Application.php">My Applications</a>
      <a href="Profile_Resume.php" class="Profile-Resume">Profile/Resume</a>
      <a href="Notification.php">Notifications</a>
      <a href="?showLogout=true" class="logout">Logout</a>
    </nav>
  </header>

  <main>
    <table>
      <thead>
        <tr>
          <th>Field</th>
          <th>Current Information</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Full Name</td>
          <td>Chrisnaire Jake Allado</td>
          <td>📝 Edit</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>alladoej@gmail.com</td>
          <td>📝 Edit</td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td>09858787833</td>
          <td>📝 Edit</td>
        </tr>
        <tr>
          <td>Course</td>
          <td>BS Information Technology</td>
          <td>📝 Edit</td>
        </tr>
        <tr>
          <td>Location</td>
          <td>Balansay, Mamburao, Occidental Mindoro</td>
          <td>📝 Edit</td>
        </tr>
        <tr>
          <td>Resume</td>
          <td>📄 [View Resume] (resume.pdf)</td>
          <td>📄 Upload New</td>
        </tr>
        <tr>
          <td>Profile Picture</td>
          <td>🖼️ [View Picture]</td>
          <td>📄 Upload New</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Save</td>
        </tr>
      </tbody>
    </table>
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


