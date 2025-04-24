<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #fff;
  }
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
</style>

<body>
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
</body>
</html>



