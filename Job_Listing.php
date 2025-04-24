<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Job Listing</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #fff;
    color: #000;
  }
  .top-label {
    font-size: 10px;
    color: #f58200;
    padding: 6px 16px 0 16px;
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
  nav a.job-listing {
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
    max-width: 1120px;
    margin: 0 auto;
    padding: 0 16px 48px 16px;
  }
  .grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 24px;
  }
  @media (min-width: 640px) {
    .grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (min-width: 1024px) {
    .grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }
  .card {
    border: 1px solid #e5e7eb;
    box-shadow: 0 1px 2px rgb(0 0 0 / 0.05);
    padding: 16px;
    user-select: none;
  }
  .card img {
    width: 80px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 12px;
  }
  .card h3 {
    font-weight: 700;
    font-size: 14px;
    margin: 0 0 6px 0;
    line-height: 1.2;
  }
  .card p {
    font-size: 12px;
    margin: 0 0 4px 0;
    line-height: 1.2;
  }
  .card p:last-of-type {
    margin-bottom: 12px;
  }
  .btn-apply {
    background-color: #f58200;
    color: #fff;
    font-weight: 600;
    font-size: 12px;
    border: none;
    border-radius: 9999px;
    padding: 6px 16px;
    cursor: pointer;
  }
  .btn-apply:focus {
    outline: 2px solid #000;
    outline-offset: 2px;
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
      <a href="Job_Listing.php" class="job-listing" style="">Job Listing</a>
      <a href="Requirements.php">Requirements</a>
      <a href="My_Application.php">My Applications</a>
      <a href="Profile_Resume.php">Profile/Resume</a>
      <a href="Notification.php">Notifications</a>
      <a href="?showLogout=true" class="logout">Logout</a>
  </header>
  <main>
    <div class="grid">
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/0e6b58e8-08a9-4f36-610e-2d3e4b606dd8.jpg" alt="7-Eleven logo with red, green and orange colors on white background" />
        <h3>Store Assistant (Retail) – 7-Eleven</h3>
        <p>7-Eleven</p>
        <p>brgy. payompon, Mamburao</p>
        <p>Retail Assistants (Retail &amp; Consumer Products)</p>
        <p>Full-time / Part-time</p>
        <p>P50 per hrs</p>
        <p>Posted 15d ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/43fe8664-bf6c-46c0-6ca5-c6d3474ceeca.jpg" alt="Aling Inasal logo with green and yellow colors on white background" />
        <h3>Food Delivery Driver - Aling Inasal</h3>
        <p>Aling Inasal</p>
        <p>Capitol Road, Mamburao</p>
        <p>Food Delivery Driver</p>
        <p>Part-time</p>
        <p>P250-P400 (depends on the how many food delivered in a day)</p>
        <p>Posted 1 hour ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/eee77be1-881f-4e88-ecc8-2c46ebd78890.jpg" alt="BEPER Department Store logo with blue text on white background" />
        <h3>Sales Associate – BEPER Kanluran Department Store</h3>
        <p>BEPER Kanluran Department Store</p>
        <p>Brgy. 7, Mamburao</p>
        <p>Sales Associate</p>
        <p>Part-time</p>
        <p>P40 per hrs</p>
        <p>Posted 2 days ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/0e6b58e8-08a9-4f36-610e-2d3e4b606dd8.jpg" alt="7-Eleven logo with red, green and orange colors on white background" />
        <h3>Store Assistant (Retail) – 7-Eleven</h3>
        <p>7-Eleven</p>
        <p>brgy. payompon, Mamburao</p>
        <p>Retail Assistants (Retail &amp; Consumer Products)</p>
        <p>Full-time / Part-time</p>
        <p>P50 per hrs</p>
        <p>Posted 15d ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/43fe8664-bf6c-46c0-6ca5-c6d3474ceeca.jpg" alt="Aling Inasal logo with green and yellow colors on white background" />
        <h3>Food Delivery Driver - Aling Inasal</h3>
        <p>Aling Inasal</p>
        <p>Capitol Road, Mamburao</p>
        <p>Food Delivery Driver</p>
        <p>Part-time</p>
        <p>P250-P400 (depends on the how many food delivered in a day)</p>
        <p>Posted 1 hour ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
      <article class="card">
        <img src="https://storage.googleapis.com/a1aa/image/eee77be1-881f-4e88-ecc8-2c46ebd78890.jpg" alt="BEPER Department Store logo with blue text on white background" />
        <h3>Sales Associate – BEPER Kanluran Department Store</h3>
        <p>BEPER Kanluran Department Store</p>
        <p>Brgy. 7, Mamburao</p>
        <p>Sales Associate</p>
        <p>Part-time</p>
        <p>P40 per hrs</p>
        <p>Posted 2 days ago</p>
        <button class="btn-apply" type="button">Apply</button>
      </article>
    </div>
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