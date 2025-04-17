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
        .container {
            display: flex;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .left-panel, .right-panel {
            padding: 20px;
        }
        .left-panel {
            border-right: 1px solid #ccc;
            text-align: center;
            flex: 1;
        }
        .left-panel img {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .left-panel h1 {
            font-size: 20px;
            font-weight: bold;
        }
        .right-panel {
            flex: 1;
        }
        .right-panel h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input, .form-group select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        .form-group .radio-group {
            display: flex;
            gap: 10px;
        }
        .form-group .radio-group label {
            display: flex;
            align-items: center;
        }
        .form-group .radio-group input {
            margin-right: 5px;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #6b46c1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .submit-btn:hover {
            background: #5a3aa1;
        }
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="left-panel">
            <img src="193b33e5-8839-46b6-98e2-d56d3877a21c_removalai_preview.png" alt="EQCS Logo">
            <h1>Employment Opportunities for College Students at OMSC Mamburao Campus</h1>
        </div>
        <div class="right-panel">
            <h2>Sign Up</h2>
            <form>
                <div class="form-group">
                    <label>Complete Name:</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email">
                </div>
                <div class="form-group">
                    <label>Birthday:</label>
                    <div class="radio-group">
                        <select>
                            <option>Mar</option>
                        </select>
                        <select>
                            <option>05</option>
                        </select>
                        <select>
                            <option>2005</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sex:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="sex"> Male</label>
                        <label><input type="radio" name="sex"> Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Current Address:</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Create a Password:</label>
                    <input type="password">
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password">
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login_Student.php">Log in Here</a></p>
            </div>
        </div>
    </div>
</body>
</html>