<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Applications</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      background: white;
      overflow-x: hidden;
      min-height: 100vh;
      position: relative;
    }
    .orange-bg {
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
      width: 50vw;
      background-color: #f88c00;
      border-radius: 0 0 0 50vw;
      z-index: -1;
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
  nav a.Application {
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
      max-width: 800px;
      margin: 0 auto;
      padding: 0 24px 48px;
      display: flex;
      flex-direction: column;
      gap: 32px;
    }
    section {
      border: 1px solid #d1d5db;
      padding: 24px;
      background-color: white;
      box-shadow: 0 1px 2px rgb(0 0 0 / 0.05);
      max-width: 100%;
    }
    section.transparent {
      background-color: transparent !important;
    }
    ul {
      list-style-type: disc;
      padding-left: 20px;
      font-size: 13px;
      line-height: 1.3;
      color: black;
      max-width: 600px;
      margin: 0;
    }
    ul li {
      margin-bottom: 6px;
    }
    ul li span.font-bold {
      font-weight: 700;
    }
    a.view-details {
      color: #007aff;
      text-decoration: none;
      font-weight: 400;
      font-size: 13px;
      margin-left: 4px;
    }
    .status-emoji {
      display: inline-block;
      margin-left: 4px;
      margin-right: 4px;
    }
    .cancel-emoji {
      color: #dc2626;
      margin-right: 4px;
      display: inline-block;
    }
    @media (max-width: 640px) {
      header {
        flex-wrap: wrap;
        gap: 12px;
      }
      nav {
        flex-wrap: wrap;
        gap: 12px;
      }
      main {
        padding: 0 16px 32px;
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
  <div class="orange-bg"></div>
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
      <a href="My_Application.php" class="Application">My Applications</a>
      <a href="Profile_Resume.php">Profile/Resume</a>
      <a href="Notification.php">Notifications</a>
      <a href="?showLogout=true" class="logout">Logout</a>
    </nav>
  </header>
  <main>
    <section aria-label="Application for Store Assistant" class="transparent">
      <ul>
        <li><span class="font-bold">Job Title: Store Assistant</span></li>
        <li>Company/Organization:7-Eleven</li>
        <li>Status: <span class="status-emoji" role="img" aria-label="Submitted">✅</span> Submitted (March 2, 2025)</li>
        <li>Action: <span class="status-emoji" role="img" aria-label="Magnifying glass">🔍</span><a href="#" class="view-details">View Details</a></li>
        <li><span class="cancel-emoji" role="img" aria-label="Cross mark">❌</span>Cancel Application</li>
      </ul>
    </section>
    <section aria-label="Application for Sales Associate" class="transparent">
      <ul>
        <li>Job Title: Sales Associate</li>
        <li>Company/Organization: BEPER</li>
        <li>Status: <span class="status-emoji" role="img" aria-label="Under Review">🟡</span> Under Review</li>
        <li>Action: <span class="status-emoji" role="img" aria-label="Magnifying glass">🔍</span><a href="#" class="view-details">View Details</a></li>
        <li><span class="cancel-emoji" role="img" aria-label="Cross mark">❌</span>Cancel Application</li>
      </ul>
    </section>
    <section aria-label="Application for Food Delivery Driver" class="transparent">
      <ul>
        <li>Job Title: Food Delivery Driver</li>
        <li>Company/Organization: Local Business</li>
        <li>Status: <span class="cancel-emoji" role="img" aria-label="Rejected">❌</span> Rejected (Feedback: Lacking experience)</li>
        <li>Action: <span class="status-emoji" role="img" aria-label="Magnifying glass">🔍</span><a href="#" class="view-details">View Details</a></li>
      </ul>
    </section>
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