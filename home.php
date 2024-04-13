<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Raleway', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://www.rajalakshmi.org/image/banner-1.jpg") center/cover fixed;
            color: white;
        }

        header {
            display: flex;
            justify-content: center ;
            align-items: center;
            padding: 20px;
            position: relative;
            background-color: #6002D5;
            z-index: 3;
            border-radius: 20px;
        }
        .menu{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: relative;
            background-color: #6002D5;
            z-index: 3;
            border-radius: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-left: 20px;
            position: relative;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }

        nav ul li:hover ul {
            display: block;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            background-color: #333;
            padding: 10px;
            border-radius: 0 0 5px 5px;
        }

        nav ul li ul li {
            display: block;
        }

        nav ul li ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 0;
            display: block;
        }

        footer {
            text-align: right;
            padding: 20px;
            color: white;
            position: relative;
            z-index: 3;
        }

        /* Adjustments for DeepMind style */
        .hero {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .video-container {
            margin: 50px auto;
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            width: 80%; /* Adjust the width */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* Added styles for the sections */
        .section-container {
            position: relative;
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .section-container h2 {
            font-size: 48px;
        }

        .section-container p,
        .section-container ul {
            font-size: 24px;
        }

        /* Positioning for each section */
        .about-section {
            top: 0;
        }

        /* Removed features-section and benefits-section */

    </style>
    <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://www.youtube.com;">
</head>

<body>
    <header>
        <h2>boards</h2>
        <div class="menu">
        <nav>
            <ul>
                <!-- Dropdown menu for My Account -->
                <li>
                    <a href="#">Menu</a>
                    <ul>
                        <li><a href="#">  My Account</a></li>
                        <li><a href="#">Tasks</a></li>
                        <li><a href="#">Exchanges</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    </header>
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Website</h1>
            <p>Discover what makes us unique.</p>
        </div>
    </div>
    <div class="content">
        <p style="font-size: 24px;">Watch this video to learn about the barter system:</p> <!-- Added line -->
        <div class="video-container">
            <iframe width="960" height="540" src="https://www.youtube.com/embed/WCr5UVf-vKM" allowfullscreen></iframe>
        </div>
        <!-- About section -->
        <div class="section-container about-section">
            <h2>About</h2>
            <p>This project aims to build a website that empowers local communities to exchange goods, services, and skills through bartering and sharing.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 YourWebsite. All rights reserved.</p>
    </footer>
</body>

</html>
