<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Learning Platform</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        a{
            text-decoration:none;
        }
        header nav {
            width: 100%;
            background-color:#e74c3c;
            display: flex;
            justify-content:space-between;
            padding: 20px;
        }
        header nav ul{
            display: flex;
        }
        header nav ul li{
            list-style: none;
            padding: 10px;
            
        }
        header nav ul li a{
            text-decoration:none;
            color:#ecf0f1;
        }
        /* Hero Section */
.hero {
    background: url('hero-image.jpg') no-repeat center center/cover;
    color: #fff;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero h2 {
    color:black;
    font-size: 3rem;
    margin-bottom: 1rem;
}

.hero p {
    color:black;
    font-size: 1.25rem;
    margin-bottom: 2rem;
}

.hero .cta-btn {
    padding: 10px 20px;
    background: #ff5722;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.hero .cta-btn:hover {
    background: #e64a19;
}

/* Courses Section */
.courses {
    padding: 2rem 0;
    background: #f4f4f4;
    text-align: center;
}

.courses h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}

.course-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.course-card {
    background: #fff;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.course-card h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.course-card p {
    font-size: 1rem;
    color: #666;
}

/* Footer */
footer {
    background: #333;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
    font-size: 0.875rem;
}
#download button{
    background: #2ecc71;
    padding: 5px;
    font-size:16px;
    border:none;
}
#download button a{
    color:#ecf0f1;
}
#contact {
    padding: 4rem 2rem;
    background-color: #f9f9f9;
    text-align: center;
}

.contact-container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#contact h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 1rem;
}

#contact p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 2rem;
}

/* Form Styles */
#contact form {
    display: flex;
    flex-direction: column;
}

#contact label {
    text-align: left;
    margin-top: 1rem;
    font-weight: bold;
    color: #333;
}

#contact input[type="text"],
#contact input[type="email"],
#contact textarea {
    width: 100%;
    padding: 0.75rem;
    margin-top: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

#contact textarea {
    resize: vertical;
}

#contact button {
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

#contact button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <section id="navbar">
    <header>
        <nav>
            <div><h2>Online Learning Platform</h2></div>
            <div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="instructorLogin.php">Instructor Login</a></li>
                    <li><a href="studentLogin.php">Student Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div id="download"><button><a href="https://play.google.com/store/games?hl=en">Download App</a></button></div>
        </nav>
    </header>
    </section>
    <section class="hero" id="home">
        <div class="container">
            <h2>Welcome to LearnHub</h2>
            <p>Your gateway to quality online education. Explore a variety of courses and start learning today!</p>
            <a href="#courses" class="cta-btn">Browse Courses</a>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses" id="courses">
        <div class="container">
            <h2>Our Courses</h2>
            <div class="course-list">
                <a href="studentLogin.php">
                <div class="course-card">
                    <h3>Web Development</h3>
                    <p>Learn HTML, CSS, JavaScript, and build responsive websites.</p>
                </div>
                </a>
                <a href="studentLogin.php">
                <div class="course-card">
                    <h3>Data Science</h3>
                    <p>Explore Python, data analysis, and machine learning techniques.</p>
                </div>
                </a>
                <a href="studentLogin.php">
                <div class="course-card">
                    <h3>Cloud Computing</h3>
                    <p>Master cloud platforms and become a certified cloud professional.</p>
                </div>
                </a>
                <a href="studentLogin.php">
                <div class="course-card">
                    <h3>Cybersecurity</h3>
                    <p>Understand cybersecurity fundamentals and protect digital assets.</p>
                </div>
                </a>
            </div>
        </div>
    </section>
    <section id="contact">
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>We’d love to hear from you! Please fill out the form below, and we’ll get in touch with you shortly.</p>
        
        <form action="contactform.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>


    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 LearnHub. All rights reserved.</p>
    </footer>
</body>
</html>