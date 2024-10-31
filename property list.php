<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealHome A Real Estate Listing Platform</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Reset and Basic Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, black, orange); 
            color: #fff; 
            padding: 15px 0; 
            text-align: center; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            position: relative;
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

        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .search-bar input[type="text"] {
            width: 300px;
            padding: 8px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-bar button {
            padding: 8px 15px;
            border: none;
            background-color: #ff5722;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #ff784e;
        }

        .property {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 20px 0;
            padding: 15px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }

        .property img {
            width: 300px;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .property-details {
            padding: 15px;
        }

        .property:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .property-details h3 {
            margin-bottom: 10px;
            color: #dd2476;
        }

        .wishlist-button {
            background-color: #ff5722;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .wishlist-button:hover {
            background-color: #ff784e;
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
            margin: 15px 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        footer ul li a {
            color: #ffd700;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        footer ul li a:hover {
            color: #ff4500;
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

    <!-- Property Listings -->
    <div id="listings" class="container">
        <h2>Explore Our Property Listings</h2>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search properties...">
            <button type="button">Search</button>
        </div>

        <div class="property">
            <img src="house picture\image1.jpeg" alt="Property 1">
            <div class="property-details">
                <a href="Property\property1.php"><h3>Beautiful Family Home</h3></a>
                <p>Location: 123 Main St, Cape Town</p>
                <p>Price: R500,000</p>
                <p>Description: A lovely family home with 4 bedrooms, 3 baths, and a large backyard.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>

        <div class="property">
            <img src="house picture\image2.jpeg" alt="Property 2">
            <div class="property-details">
                <a href="Property\property2.php"><h3>Beautiful Modern Home</h3></a>
                <p>Location: hul street</p>
                <p>Price: R540,000</p>
                <p>Description: A safe and lovely home perfect for a couple, 2 bedrooms, 1 bath, a large lounge, and a marble kitchen.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>

        <div class="property">
            <img src="house picture\image3.jpeg" alt="Property 3">
            <div class="property-details">
                <a href="Property\property3.php"><h3>Modern Apartment</h3></a>
                <p>Location: 456 Elm St, Florida</p>
                <p>Price: R300,000</p>
                <p>Description: A modern apartment with 2 bedrooms, 1 bath, and close to downtown.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>

        <div class="property">
            <img src="house picture\image4.jpeg" alt="Property 4">
            <div class="property-details">
                <a href="Property\property4.php"><h3>Cozy Cottage</h3></a>
                <p>Location: Lakeside Avenue, Durban</p>
                <p>Price: R250,000</p>
                <p>Description: Quaint 2-bedroom cottage with a charming garden.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>
    
        <!-- Property 5 -->
        <div class="property">
            <img src="house picture\image5.jpeg" alt="Property 5">
            <div class="property-details">
                <a href="Property\property5.php"><h3>Beachfront Villa</h3></a>
                <p>Location: Ocean Drive, Port Elizabeth</p>
                <p>Price: R1,200,000</p>
                <p>Description: Stunning beachfront villa with private access to the beach.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>
    
        <!-- Property 6 -->
        <div class="property">
            <img src="house picture\image6.jpeg" alt="Property 6">
            <div class="property-details">
                <a href="Property\property6.php"><h3>Mountain Cabin</h3></a>
                <p>Location: Rocky Hills, Drakensberg</p>
                <p>Price: R450,000</p>
                <p>Description: Secluded cabin with breathtaking mountain views.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>
    
        <!-- Property 7 -->
        <div class="property">
            <img src="house picture\image7.jpeg" alt="Property 7">
            <div class="property-details">
                <a href="Property\property7.php"><h3>City Penthouse</h3></a>
                <p>Location: Downtown, Pretoria</p>
                <p>Price: R1,500,000</p>
                <p>Description: Luxurious penthouse with a view of the city skyline.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>
    
        <!-- Property 8 -->
        <div class="property">
            <img src="house picture\image8.jpeg" alt="Property 8">
            <div class="property-details">
                <a href="Property\property8.php"><h3>Suburban House</h3></a>
                <p>Location: Oak Street, Centurion</p>
                <p>Price: R550,000</p>
                <p>Description: Family-friendly home with 3 bedrooms, large yard, and garage.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>
    
        <div class="property">
            <img src="house picture\image9.jpeg" alt="Property 9">
            <div class="property-details">
                <a href="Property\property9.php"><h3>Country Estate</h3></a>
                <p>Location: Green Valley, Mpumalanga</p>
                <p>Price: R2,000,000</p>
                <p>Description: Luxurious estate with 6 bedrooms and a large pool.</p>
                <button class="wishlist-button">Add to Wishlist</button>
            </div>
        </div>

        <!-- More properties can be added similarly -->
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