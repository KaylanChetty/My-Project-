<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealHome A Real Estate Listing Platform</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f4f9; 
            color: #333; 
        }
        header, footer { 
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
        }
        nav a { 
            color: #fff; 
            text-decoration: none; 
            padding: 5px 10px; 
            transition: background 0.3s ease; 
        }
        nav a:hover { 
            background-color: #ff784e; 
            border-radius: 5px; 
        }
        .container { 
            width: 80%; 
            margin: auto; 
            padding: 40px 0; 
        }
        .property { 
            border: 1px solid #ddd; 
            margin: 10px 0; 
            padding: 10px; 
            background-color: #fff; 
            border-radius: 5px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        .property img { 
            width: 100%; 
            height: auto; 
            border-radius: 5px; 
        }
        .property-details { 
            margin-top: 20px; 
        }
        form input, form textarea, form button { 
            width: 100%; 
            padding: 12px; 
            margin-bottom: 10px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        form input[type="file"] {
            border: none; 
            padding: 0; 
            margin-bottom: 15px; 
        }
        form button { 
            background-color: #ff5722; 
            color: #fff; 
            border: none; 
            cursor: pointer; 
            font-size: 1rem; 
            transition: background 0.3s ease; 
        }
        form button:hover { 
            background-color: #ff784e; 
        }
        footer ul { 
            list-style-type: none; 
            padding: 0; 
            display: flex; 
            justify-content: center; 
            gap: 20px; 
            margin: 15px 0; 
        }
        footer ul li a { 
            color: #ffd700; 
            font-size: 1.5rem; 
            transition: color 0.3s ease; 
            text-decoration: none; 
        }
        footer ul li a:hover { 
            color: #ff4500; 
        }
        .footer-social-icons { 
            display: flex; 
            justify-content: center; 
            gap: 20px; 
        }
        .footer-social-icons li {
            display: inline-block;
        }
        .footer-social-icons li a { 
            text-decoration: none; 
            font-size: 1.5rem;
        }
        .logo {
            position: absolute;
            left: 20px;
            top: 5px;
            height: 80px;
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

    <!-- Selling Property Section -->
    <div class="container">
        <h2>Property to Sell</h2>
        <p>Want to sell your property? Please fill in the following details:</p>
        <form class="property-info" action="uploadproperty.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" required>
        
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
        
            <label for="property-img">Image of the property</label>
            <input type="file" id="property-img" name="property-img" accept="image/*" required>
        
            <button type="submit">Send Info</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <marquee behavior="alternate" direction="left">
            <p>&copy; 2024 RealHome A Real Estate Listing Platform. All rights reserved.</p>
        </marquee>
        <ul class="footer-social-icons">
            <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
            <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
            <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
            <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
        </ul>
    </footer>
</body>
</html>