<?php

$connection = mysqli_connect("localhost", "root", "", "ramaness",3306);



if (!$connection) {

    die("Connection failed: " . mysqli_connect_error());

}



if (isset($_POST["submit"])) {

    $name = $_POST['name'];

    $phone = $_POST['phone'];

    $email =$_POST['email'];

    

    $sql = "insert into students(name,phone,email)values('$name','$phone','$email')";

    if (mysqli_query($connection, $sql)) {

        echo '<script>location.replace("courseCategory.php")</script>';

    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($connection);

    }

}



mysqli_close($connection);

?>





<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <style>

            * {

                box-sizing: border-box;

                margin: 0;

                padding: 0;

                font-family: Arial, sans-serif;

            }

            body {

                display: flex;

                justify-content: center;

                align-items: center;

                min-height: 100vh;

                background-color: #f4f4f9;

            }

            .registration-container,

            .login-container {

                background-color: #fff;

                padding: 2rem;

                width: 100%;

                max-width: 400px;

                border-radius: 8px;

                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

                text-align: center;

            }

            .registration-container h1,

            .login-container h1 {

                font-size: 1.8rem;

                color: #333;

                margin-bottom: 1rem;

            }

            label {

                display: block;

                margin-top: 1rem;

                font-weight: bold;

                color: #333;

                text-align: left;

            }

            input[type="text"],

            input[type="password"],

            input[type="submit"],

            button {

                width: 100%;

                padding: 0.75rem;

                margin-top: 0.5rem;

                border: 1px solid #ddd;

                border-radius: 4px;

                font-size: 1rem;

            }



            input[type="text"]:focus,

            input[type="password"]:focus {

                border-color: #4CAF50;

                outline: none;

                box-shadow: 0 0 5px rgba(76, 175, 80, 0.2);

            }

            button,

            input[type="submit"] {

                background-color: #4CAF50;

                color: #fff;

                border: none;

                cursor: pointer;

                font-weight: bold;

            }



            button:hover,

            input[type="submit"]:hover {

                background-color: #45a049;

            }

            a {

                color: #4CAF50;

                text-decoration: none;

                font-weight: bold;

            }



            a:hover {

                text-decoration: underline;

            }

            .error {

                color: red;

                font-size: 0.9rem;

                margin-top: 1rem;

            }



</style>

</head>

<body>

    <div class="registration-container">

        <h1>Student Registration</h1>

        <form action="studentregister.php" method="post">

            <label for="name">Name:</label>

            <input type="text" id="name" name="name" required>



            <label for="phone">Phone Number:</label>

            <input type="text" id="phone" name="phone" required>

            <label for="email">Password:</label>

            <input type="email" id="email" name="email" required>



            <input type="submit" name="submit" value="Register">

        </form>

        <br>

        <p>Already have an account? <a href="studentlogin.php">Login here</a></p>

    </div>

</body>

</html>