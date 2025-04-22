<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('online-job-search.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
    }
.content {
    display: flex;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.left, .right {
    padding: 40px;
}
.left {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
}
.left img {
    height: 100px;
    margin-bottom: 20px;
}
.left h1 {
    font-size: 24px;
    text-align: center;
    font-weight: bold;
}
.right {
    flex: 1;

}
.right h2 {
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}
.form-group {
    margin-bottom: 20px;
}
.form-group input {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group {
margin-bottom: 20px;
}

.form-group .file-upload {
display: flex;
align-items: center;
justify-content: center;
border: 2px dashed #ccc;
padding: 20px;
border-radius: 5px;
cursor: pointer;
transition: background 0.3s;
}

.form-group .file-upload:hover {
background-color: #f9f9f9;
}

.form-group .file-upload i {
font-size: 24px;
color: #888;
}

.form-group .file-upload span {
margin-left: 10px;
color: #888;
}

.form-group .file-upload input {
display: none;
}

.submit-btn {
padding: 10px 20px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

.submit-btn:hover {
background-color: #8E44AD;
}
.submit-btn {
    width: 100%;
    padding: 15px;
    background: #732D91;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
.login-link {
    text-align: center;
    margin-top: 20px;
}
.login-link a {
    color: #3182ce;
    text-decoration: none;
}
.login-link a:hover {
            text-decoration: underline;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 36px;
            height: 36px;
            cursor: pointer;
            user-select: none;
            text-decoration: none;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        .back-button img {
            width: 16px;
            height: 16px;
            display: block;
        }
    </style>
</head>
<body>
<a aria-label="Go back" class="back-button" href="Start.php">
   <img alt="Left arrow icon" height="16" src="back.png" width="16"/>
  </a>
<div class="container">
        <div class="content">
            <div class="left">
                <img src="193b33e5-8839-46b6-98e2-d56d3877a21c_removalai_preview.png" alt="EQCS Logo">
                <h1>Employment Opportunities for College Students at OMSC Mamburao Campus</h1>
            </div>
            <div class="right">
                <h2>Sign Up</h2>
                <form action="SignUp_Org.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="company_name" placeholder="Company name:" required>
    </div>
    <div class="form-group">
        <input type="text" name="organization_name" placeholder="Organization Name:" required>
    </div>
    <div class="form-group">
        <input type="text" name="phone_number" placeholder="Phone Number:" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Email Address:" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Create a Password:" required>
    </div>
    <div class="form-group">
        <input type="password" name="confirm_password" placeholder="Confirm Password:" required>
    </div>
    <div class="form-group">
        <label>Business Registration Certificate:</label>
        <label class="file-upload">
            <input type="file" name="business_certificate" required>
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Upload a File</span>
        </label>
    </div>
    <div class="form-group">
        <label>Company Logo (Optional):</label>
        <label class="file-upload">
            <input type="file" name="company_logo">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Upload a File</span>
        </label>
    </div>
    <button type="submit" class="submit-btn">Submit</button>
</form>
<div class="login-link">
    <p>Already have an account? <a href="login_Org.php">Log in Here</a></p>
</div>
            </div>
        </div>
    </div>
    <?php
    include 'db_organization_login-signup.php';


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $organization_name = $_POST['organization_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $business_certificate = $_FILES['business_certificate']['name'];
    $company_logo = $_FILES['company_logo']['name'];

    // Move uploaded files to a directory
    move_uploaded_file($_FILES['business_certificate']['tmp_name'], "uploads/" . $business_certificate);
    move_uploaded_file($_FILES['company_logo']['tmp_name'], "uploads/" . $company_logo);

    // Insert into database
    $sql = "INSERT INTO users (company_name, organization_name, phone_number, email, password, business_certificate, company_logo)
            VALUES ('$company_name', '$organization_name', '$phone_number', '$email', '$password', '$business_certificate', '$company_logo')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>