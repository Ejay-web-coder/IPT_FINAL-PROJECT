<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Employment Opportunities</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

    body {
      margin: 0;
      font-family: 'Roboto Slab', serif;
      background-color: white;
      color: black;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 2rem 5rem;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 0.25rem;
      user-select: none;
    }

    .logo .e {
      font-weight: 800;
      font-size: 2.5rem;
      color: #8B8BE6;
    }

    .logo .c {
      font-weight: 800;
      font-size: 2.5rem;
      color: #00E676;
    }

    .logo .s {
      font-weight: 800;
      font-size: 2.5rem;
      color: #0066FF;
    }

    .logo svg {
      width: 28px;
      height: 28px;
      stroke: #FF9800;
      stroke-width: 3;
      stroke-linecap: round;
      stroke-linejoin: round;
      fill: none;
    }

    .seal {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }

    main {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 0 5rem 5rem 5rem;
      gap: 2.5rem;
      flex-wrap: wrap;
    }

    .content {
      max-width: 480px;
      flex: 1 1 480px;
    }

    h2 {
      color: #8B8BE6;
      font-weight: 600;
      font-size: 1.75rem;
      line-height: 1.4;
      margin-bottom: 1.5rem;
    }

    p {
      font-family: Georgia, serif;
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    details {
      border: 1px solid #d1d5db;
      max-width: 280px;
      font-family: inherit;
      font-size: 1rem;
    }

    summary {
      list-style: none;
      cursor: pointer;
      padding: 0.5rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      user-select: none;
    }

    summary::-webkit-details-marker {
      display: none;
    }

    summary svg {
      width: 20px;
      height: 20px;
      stroke: black;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
      fill: none;
      transition: transform 0.3s ease;
    }

    details[open] summary svg {
      transform: rotate(180deg);
    }

    ul {
      margin: 0;
      padding: 0;
      list-style: none;
      border-top: 1px solid #d1d5db;
    }

    ul li {
      border-top: 1px solid #d1d5db;
      padding: 0.5rem 0;
      font-weight: 700;
      text-align: center;
      cursor: pointer;
      user-select: none;
    }

    ul li:hover {
      background-color: #f3f4f6;
    }

    .image-container {
      flex: 1 1 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    @media (max-width: 768px) {
      header {
        padding: 1.5rem 2rem;
      }
      main {
        padding: 0 2rem 3rem 2rem;
        flex-direction: column;
        align-items: flex-start;
      }
      .content, .image-container {
        flex: 1 1 100%;
        max-width: 100%;
      }
      h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo" aria-label="EQCS logo">
      <span class="e">E</span>
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" >
        <circle cx="11" cy="11" r="7"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <span class="c">C</span>
      <span class="s">S</span>
    </div>
    <img
      src="https://storage.googleapis.com/a1aa/image/bb8ac882-6e0b-42cb-3904-844833f8b05e.jpg"
      alt="Seal of Occidental Mindoro State College, circular emblem with yellow and blue colors"
      class="seal"
      width="80"
      height="80"
    />
  </header>
  <main>
    <section class="content">
      <h2>Employment Opportunities for College Students at OMSC – Mamburao Campus</h2>
      <p>
        We are committed to supporting our students beyond academics. Our Student Employment Program offers valuable opportunities for college students to gain work experience, develop professional skills, and earn income while pursuing their education.
      </p>
      <details>
        <summary>
          Select type of user
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </summary>
        <ul>
          <li>Student</li>
          <li>Organization</li>
          <li>Admin</li>
        </ul>
      </details>
    </section>
    <section class="image-container">
      <img
        src="https://storage.googleapis.com/a1aa/image/7fa42115-3684-4c74-f394-3f10e9afa5c2.jpg"
        alt="Illustration of hands holding a tablet with a magnifying glass over a document showing the text 'JOB OFFER' in red, with papers and an envelope in the background"
        width="400"
        height="300"
      />
    </section>
  </main>
</body>
</html>