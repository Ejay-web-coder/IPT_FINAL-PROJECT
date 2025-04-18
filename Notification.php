<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Notifications</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #fff;
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
  nav a.Notification {
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
    padding: 0 80px 80px 80px;
  }
  section.notifications-container {
    border: 1px solid #D1D5DB;
    max-width: 768px;
    padding: 24px;
  }
  section.notifications-container h2 {
    font-size: 20px;
    margin: 0 0 16px 0;
  }
  .notifications-header {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid black;
    padding-bottom: 8px;
    margin-bottom: 16px;
    font-size: 14px;
    font-weight: 400;
  }
  .notifications-header .left a {
    color: #3B82F6;
    text-decoration: none;
    font-weight: 400;
    display: inline-flex;
    align-items: center;
    gap: 4px;
  }
  .notifications-header .left a .badge {
    background-color: #3B82F6;
    color: white;
    font-size: 10px;
    font-weight: 600;
    border-radius: 9999px;
    width: 16px;
    height: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .notifications-header .right {
    display: flex;
    gap: 32px;
    color: black;
  }
  .notifications-header .right a {
    color: #DC2626;
    text-decoration: none;
  }
  .notification-item {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-bottom: 24px;
  }
  .notification-item .dot {
    width: 14px;
    height: 14px;
    background-color: #0B5394;
    border-radius: 50%;
    margin-right: -30px;
    margin-left: 0;
  }
  .notification-item img {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    border: 1px solid #D1D5DB;
    background: white;
    object-fit: contain;
  }
  .notification-item p {
    margin: 0;
    font-size: 16px;
    font-weight: 400;
  }
  .notification-item.gray-text p {
    color: #4B5563;
  }
  hr {
    border: none;
    border-top: 1px solid black;
    margin: 0 0 24px 80px;
  }
  @media (max-width: 768px) {
    header {
      flex-wrap: wrap;
      padding: 24px 24px;
    }
    nav {
      gap: 16px;
      font-size: 12px;
      margin-top: 12px;
      width: 100%;
      justify-content: center;
    }
    main {
      padding: 0 24px 40px 24px;
    }
    section.notifications-container {
      max-width: 100%;
      padding: 16px;
    }
    .notification-item {
      gap: 16px;
    }
    hr {
      margin-left: 72px;
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
      <a href="Profile_Resume.php">Profile/Resume</a>
      <a href="Notification.php" class="Notification">Notifications</a>
      <a href="?showLogout=true" class="logout">Logout</a>
    </nav>
  </header>
<main>
  <section class="notifications-container" aria-label="Notifications section">
    <h2>Notifications</h2>
    <div class="notifications-header">
      <div class="left">
        <a href="#">Today <span class="badge" aria-label="3 new notifications">3</span></a>
      </div>
      <div class="right">
        <span>previous</span>
        <span>Mark as read</span>
        <a href="#">clear all</a>
      </div>
    </div>
    <div class="notification-item">
      <span class="dot" aria-hidden="true"></span>
      <img src="https://placehold.co/60x60/png?text=7-Eleven+Logo" alt="7-Eleven logo in a white circle with thin gray border" />
      <p>Congratulations! You've been selected for an interview.</p>
    </div>
    <hr />
    <div class="notification-item gray-text">
      <img src="https://placehold.co/60x60/png?text=BEPER+Logo" alt="BEPER logo in a white circle with thin gray border" />
      <p>We're sorry, this position has been filled.</p>
    </div>
    <hr />
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