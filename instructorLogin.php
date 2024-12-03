<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Login</title>
    <style>
        /* Login Form Styling */
.login-container {
    max-width: 400px;
    margin: 2rem auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.login-container h1 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 1rem;
}

.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container label {
    margin-top: 1rem;
    text-align: left;
    font-weight: bold;
    color: #333;
}

.login-container input[type="email"],
.login-container input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    margin-top: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.login-container button {
    margin-top: 1.5rem;
    padding: 0.75rem;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
}

.login-container button:hover {
    background-color: #45a049;
}

.login-container a {
    color: #4CAF50;
    font-weight: bold;
    text-decoration: none;
}

.login-container a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Instructor Login</h1>
        <form action="instructorlogin.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="instructorregister.php">Register here</a></p>
    </div>
</body>
</html>
