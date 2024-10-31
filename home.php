<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealHome A Real Estate Listing Platform</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Reset and basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, black, orange);
            color: #fff;
            padding: 15px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            transition: background 0.3s, color 0.3s;
        }

        nav a:hover {
            background: #333;
            color: #fff;
            border-radius: 5px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 40px 0;
        }

        .property {
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.2s;
        }

        .property:hover {
            transform: scale(1.02);
        }

        .property img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .property-details {
            margin-top: 20px;
        }

        .contact-form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        footer {
            background: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        footer ul li {
            display: inline;
            margin: 0 15px;
        }

        footer ul li a {
            color: #ffd700;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer ul li a:hover {
            color: #ff4500;
        }

        marquee {
            font-size: 1.2rem;
            color: #ffd700;
        }

        .logo {
            position: absolute;
            left: 20px;
            top: 5px;
            height: 80px;
        }
        .video-container {
            text-align: center;
            margin: 20px 0;
        }
        @media screen and (max-width: 768px) {
            .logo {
                height: 80px;
            }

            nav {
                margin-top: 80px; /* Adjusted for smaller screens */
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <img src="C:\Users\kayla\OneDrive\Desktop\WIL work\logo\Screenshot 2024-10-28 200001.png" alt="RealHome A Real Estate Listing Platform" class="logo"> <!-- Replace with the correct path -->
        <h1>RealHome A Real Estate Listing Platform</h1>
        <nav>
        <a href="login.php">Login</a>
            <a href="sign up.php">Sign Up</a>
            <a href="home.php">Home</a>
            <a href="property list.php">Listings</a>
            <a href="Selling property.php">Selling Property</a>
            <a href="Renting property.php">Renting Property</a>
            <a href="wishlist.php">Wish List</a>
            <a href="calculater.php">Property Calculator</a>            
            <a href="Contact Us.php">Contact Us</a>
        </nav>
    </header>

    <!-- Homepage -->
    <div id="home" class="container">
        <h2>Welcome to RealHome A Real Estate Listing Platform</h2>
        <p>Your dream home is just a <a href="C:\Users\kayla\OneDrive\Desktop\WIL work\property list.html">click away!</a></p>
        <img src="C:\Users\kayla\OneDrive\Desktop\WIL work\RealHome A Real Estate Listing Platform pic\istockphoto-1308235771-612x612.jpg" alt="Property Image" style="width: 100%; max-height: 600px; object-fit: cover">
        <video width="100%" controls>
            <source src="" type="video/mp4"> <!-- Replace with actual path to your video -->
            why choose us for buying a home
        </video>
    </div>

    <!-- Footer -->
    <footer>
        <marquee behavior="alternate" direction="left">
            <p>&copy; 2024 RealHome A Real Estate Listing Platform. All rights reserved.</p>
        </marquee>
        <ul>
            <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
            <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
            <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
            <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
        </ul>
    </footer>
</body>
</html>