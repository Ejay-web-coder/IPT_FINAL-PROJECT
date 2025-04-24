<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Job Requirement Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
      background-color: white;
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2.5rem;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }
    .logo .eq {
      font-weight: 800;
      font-size: 32px;
      color: #8b8bff;
      line-height: 1;
    }
    .logo .cs {
      font-weight: 800;
      font-size: 32px;
      color: #00bfff;
      line-height: 1;
    }
    nav {
      display: flex;
      gap: 1.5rem;
      font-size: 14px;
      color: black;
      font-weight: 400;
    }
    nav a {
      text-decoration: none;
      color: black;
      cursor: pointer;
    }
    nav a:hover {
      text-decoration: underline;
    }
    nav a.active {
      background-color: #00e6a3;
      color: white;
      border-radius: 0.375rem;
      padding: 0.25rem 0.75rem;
      font-weight: 500;
    }
    nav a.logout {
      font-weight: 700;
    }
    main {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      padding: 2.5rem 1.5rem 0;
    }
    form {
      border: 1px solid #d1d5db;
      padding: 1.5rem;
      max-width: 36rem;
      width: 100%;
    }
    h2 {
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 1.5rem;
    }
    label {
      display: block;
      font-size: 14px;
      margin-bottom: 0.25rem;
    }
    .upload-box {
      border: 1px solid #d1d5db;
      height: 5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      margin-bottom: 1.5rem;
      border-radius: 0.125rem;
      transition: background-color 0.2s ease;
    }
    .upload-box:hover {
      background-color: #f3f4f6;
    }
    .upload-box i {
      font-size: 24px;
      margin-bottom: 0.25rem;
      color: black;
    }
    .upload-box .title {
      font-size: 12px;
      font-weight: 600;
      color: black;
      margin-bottom: 0.125rem;
    }
    .upload-box .subtitle {
      font-size: 9px;
      color: black;
    }
    input[type="file"] {
      display: none;
    }
    .submit-btn {
      background-color: #00e6a3;
      color: white;
      font-size: 14px;
      font-weight: 400;
      border: none;
      border-radius: 9999px;
      padding: 0.25rem 1.5rem;
      cursor: pointer;
      float: right;
    }
    .submit-btn:hover {
      background-color: #00c28a;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <span class="eq">EQ</span>
      <img
        src="https://storage.googleapis.com/a1aa/image/2af4fcb9-e110-4b03-821e-cf6d04ae272c.jpg"
        alt="Magnifying glass icon in orange color"
        width="24"
        height="24"
      />
      <span class="cs">CS</span>
    </div>
    <nav>
      <a href="#">Profile</a>
      <a href="#">Post Jobs</a>
      <a href="#" class="active">Requirements</a>
      <a href="#">Manage Application</a>
      <a href="#">Notification</a>
      <a href="#" class="logout">Logout</a>
    </nav>
  </header>
  <main>
    <form aria-label="Job Requirement Form">
      <h2>Job Requirement Form</h2>

      <label for="student-id">Student ID</label>
      <label for="student-id" class="upload-box" tabindex="0" role="button" aria-label="Upload Student ID file">
        <i class="fas fa-cloud-upload-alt"></i>
        <span class="title">Upload a File</span>
        <span class="subtitle">Drag and drop files here</span>
      </label>
      <input type="file" id="student-id" name="student-id" />

      <label for="cor">COR</label>
      <label for="cor" class="upload-box" tabindex="0" role="button" aria-label="Upload COR file">
        <i class="fas fa-cloud-upload-alt"></i>
        <span class="title">Upload a File</span>
        <span class="subtitle">Drag and drop files here</span>
      </label>
      <input type="file" id="cor" name="cor" />

      <label for="barangay-indigency">Barangay Indigency</label>
      <label for="barangay-indigency" class="upload-box" tabindex="0" role="button" aria-label="Upload Barangay Indigency file">
        <i class="fas fa-cloud-upload-alt"></i>
        <span class="title">Upload a File</span>
        <span class="subtitle">Drag and drop files here</span>
      </label>
      <input type="file" id="barangay-indigency" name="barangay-indigency" />

      <label for="resume">Resume</label>
      <label for="resume" class="upload-box" tabindex="0" role="button" aria-label="Upload Resume file">
        <i class="fas fa-cloud-upload-alt"></i>
        <span class="title">Upload a File</span>
        <span class="subtitle">Drag and drop files here</span>
      </label>
      <input type="file" id="resume" name="resume" />

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </main>
</body>
</html>