<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Login Container */
.login-container {
    background-color: #fff;
    padding: 2rem;
    width: 300px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.login-container h1 {
    margin-bottom: 1rem;
}

.login-container label {
    display: block;
    margin: 0.5rem 0 0.25rem;
    font-weight: bold;
    color: #333;
}

.login-container input {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 0.75rem;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

button:hover {
    background-color: #45a049;
}

.error {
    color: red;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Student Login</h1>
        
        <!-- Form to submit login details to the backend PHP script -->
        <form action="studentlogin.php" method="post">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        
        <p>Don't have an account? <a href="studentregister.php">Register here</a></p>
    </div>
</body>
</html>
