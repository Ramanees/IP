<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog</title>
    <style>
        .catalog-container {
    max-width: 900px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.catalog-container h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 1.5rem;
}

.course-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.course-card {
    background-color: #fff;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.course-card h2 {
    font-size: 1.5rem;
    color: #4CAF50;
    margin-bottom: 0.5rem;
}

.course-card p {
    color: #666;
    font-size: 1rem;
    margin-bottom: 1rem;
}

.enroll-btn {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.enroll-btn:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <div class="catalog-container">
        <h1>Course Catalog</h1>
        <div class="course-list">

            <!-- Sample Course 1 -->
            <div class="course-card">
                <h2>Introduction to Web Development</h2>
                <p>Learn the fundamentals of web development, including HTML, CSS, and JavaScript, to build responsive websites.</p>
                <button class="enroll-btn">Enroll Now</button>
            </div>

            <!-- Sample Course 2 -->
            <div class="course-card">
                <h2>Data Science with Python</h2>
                <p>Explore data science concepts and tools, with hands-on practice using Python for data analysis and visualization.</p>
                <button class="enroll-btn">Enroll Now</button>
            </div>

            <!-- Sample Course 3 -->
            <div class="course-card">
                <h2>Machine Learning Basics</h2>
                <p>Get introduced to machine learning techniques and algorithms with practical applications and projects.</p>
                <button class="enroll-btn">Enroll Now</button>
            </div>

            <!-- Add more courses as needed -->
            <div class="course-card">
                <h2>Advanced JavaScript</h2>
                <p>Dive deep into JavaScript concepts, including ES6+, asynchronous programming, and frameworks like React.</p>
                <button class="enroll-btn">Enroll Now</button>
            </div>
            
            <!-- Add more courses as needed -->
            <div class="course-card">
                <h2>Cloud Computing with AWS</h2>
                <p>Understand the basics of cloud computing with Amazon Web Services and gain hands-on experience with AWS tools.</p>
                <button class="enroll-btn">Enroll Now</button>
            </div>
        </div>
    </div>
</body>
</html>
