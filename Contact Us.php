<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealHome A Real Estate Listing Platform</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Basic styles and resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, black, orange); 
            color: #fff; 
            padding: 15px 0; 
            text-align: center; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            transition: background 0.3s, color 0.3s;
        }

        nav a:hover {
            background: #fff;
            color: #333;
            border-radius: 5px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 40px 0;
        }

        .contact-form {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(90deg, #ff512f, #dd2476);
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: linear-gradient(90deg, #dd2476, #ff512f);
        }

        footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        marquee {
            font-size: 1.2rem;
            color: #ffd700;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .social-icons a {
            color: #ffd700;
            margin: 0 15px;
            font-size: 1.8rem;
            transition: color 0.3s;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #ff4500;
        }

        .social-icons i {
            font-size: 1.8rem;
        }

        footer p {
            margin: 0;
        }
        .logo {
            position: absolute;
            left: 20px;
            top: 5px;
            height: 80px;
        }
    </style>
    <!-- Adding Font Awesome CDN for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

    <!-- Contact Us -->
    <div id="contact" class="container">
        <h2>Contact Us</h2>
        <form action="contact_process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <marquee behavior="alternate" direction="left">
            <p>&copy; 2024 RealHome A Real Estate Listing Platform. All rights reserved.</p>
        </marquee>
        <!-- Social media icons -->
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>

    <!-- Optional JavaScript (Font Awesome for icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>