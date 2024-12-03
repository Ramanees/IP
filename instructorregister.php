<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Registration</title>
    <style>
        /* Registration Form Styling */
.registration-container {
    max-width: 400px;
    margin: 2rem auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.registration-container h1 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 1rem;
}

.registration-container form {
    display: flex;
    flex-direction: column;
}

.registration-container label {
    margin-top: 1rem;
    text-align: left;
    font-weight: bold;
    color: #333;
}

.registration-container input[type="text"],
.registration-container input[type="email"],
.registration-container input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    margin-top: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.registration-container button {
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

.registration-container button:hover {
    background-color: #45a049;
}

.registration-container a {
    color: #4CAF50;
    font-weight: bold;
    text-decoration: none;
}

.registration-container a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="registration-container">
        <h1>Instructor Registration</h1>
        <form action="instructorregister.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">

            <label for="subject">Subject Specialization:</label>
            <input type="text" id="subject" name="subject">

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="instructorlogin.html">Login here</a></p>
    </div>
</body>
</html>
