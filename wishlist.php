<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wish List - RealHome</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header Styling */
        header {
            background: linear-gradient(90deg, black, orange);
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        .logo {
            position: absolute;
            left: 20px;
            top: 5px;
            height: 80px;
        }

        header nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }

        /* Main Content Styling */
        .property-container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .property {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .property img {
            width: 150px;
            height: 100px;
            border-radius: 8px;
            margin-right: 20px;
        }

        .property h3 {
            margin: 0 0 10px;
            color: #333;
        }

        .property p {
            margin: 0;
            color: #666;
        }

        .remove-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            margin-left: auto;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .remove-btn:hover {
            background-color: #e02d27;
        }

        .empty-wishlist {
            text-align: center;
            margin: 40px 0;
            color: #555;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <img src="path/to/logo.png" alt="RealHome Logo" class="logo"> <!-- Replace with the actual path to your logo -->
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

<!-- Wish List Content -->
<div class="property-container" id="wishListContainer">
    <h1>Your Wish List</h1>
</div>

<footer>
    <p>&copy; 2024 RealHome. All rights reserved.</p>
</footer>

<script>
    // Sample properties to add to the wish list if it's empty
    const sampleProperties = [
        {
            imageUrl: 'path/to/image1.jpg',  // Replace with an actual image path
            title: 'Cozy Apartment in Downtown',
            location: '123 Elm St, Metropolis',
            price: '$350,000'
        },
        {
            imageUrl: 'path/to/image2.jpg',  // Replace with an actual image path
            title: 'Luxurious Beachside Villa',
            location: '789 Ocean Ave, Seaside',
            price: '$1,250,000'
        },
        {
            imageUrl: 'path/to/image3.jpg',  // Replace with an actual image path
            title: 'Modern Townhouse',
            location: '456 Maple St, Suburbia',
            price: '$500,000'
        },
        {
            imageUrl: 'path/to/image4.jpg',  // Replace with an actual image path
            title: 'Charming Cottage',
            location: '321 Oak St, Countryside',
            price: '$280,000'
        }
    ];

    // Load the wish list from localStorage
    function loadWishList() {
        const wishListContainer = document.getElementById('wishListContainer');
        let wishList = JSON.parse(localStorage.getItem('wishList')) || [];

        // If the wish list is empty, add sample properties
        if (wishList.length === 0) {
            wishList = sampleProperties;
            localStorage.setItem('wishList', JSON.stringify(wishList));
        }

        // Render each property in the wish list
        wishList.forEach((property, index) => {
            const propertyDiv = document.createElement('div');
            propertyDiv.classList.add('property');
            propertyDiv.innerHTML = `
                <img src="${property.imageUrl}" alt="${property.title}">
                <div>
                    <h3>${property.title}</h3>
                    <p>Location: ${property.location}</p>
                    <p>Price: ${property.price}</p>
                </div>
                <button class="remove-btn" onclick="removeFromWishList(${index})">Remove</button>
            `;
            wishListContainer.appendChild(propertyDiv);
        });
    }

    // Function to remove a property from the wish list
    function removeFromWishList(index) {
        const wishList = JSON.parse(localStorage.getItem('wishList'));
        wishList.splice(index, 1); // Remove item at specified index
        localStorage.setItem('wishList', JSON.stringify(wishList)); // Update localStorage
        location.reload(); // Refresh to show updated wish list
    }

    // Load wish list on page load
    document.addEventListener('DOMContentLoaded', loadWishList);
</script>
</body>
</html>