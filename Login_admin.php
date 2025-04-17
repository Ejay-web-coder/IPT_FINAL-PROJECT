<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background: url('Picture/online-job-search.jpeg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}
.container {
    display: flex;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}
.left, .right {
    padding: 30px;
}
.left {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
}
.left .logo .logoimg {
    width: 290px;
    height: 120px;
}
.left p {
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: 600;
}
.right {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.right h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}
.right form {
    width: 100%;
}
.right form .input-group {
    margin-bottom: 15px;
}
.right form .input-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}
.right form .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
.right form button {
    width: 100%;
    padding: 10px;
    background: #8E44AD;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
 
}
.right form button:hover {
    background: #732D91;
}
.right .signup {
    margin-top: 20px;
    text-align: center;
}
.right .signup a {
    color: #3498DB;
    text-decoration: none;
}
.right .signup a span {
    text-decoration: underline;
}
    </style>
</head>
<body>
<div class="container">
        <div class="left">
            <div class="logo">
                <img class="logoimg" src="Picture/193b33e5-8839-46b6-98e2-d56d3877a21c_removalai_preview.png" alt="">
            </div>
            <p>Employment Opportunities for College Students at <br>OMSC — Mamburao Campus</p>
        </div>
        <div class="right">
            <h2>Oraganization <br> Log in</h2>
            <form>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                </div>
                <button type="submit">Submit</button>
            </form>
            <div class="signup">
            <p>Already have an account? <a href="SignUp_Org.php">Sign up Here</a></p>
            </div>
        </div>
    </div>
</body>
</html>