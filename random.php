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
