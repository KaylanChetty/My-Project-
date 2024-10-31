<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Real Estate Agent Website">
    <title>Real Estate Agent</title>
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

        /* Header and Navigation styles */
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

        /* Hero Section styles */
        .hero {
            text-align: center;
            background: url('real-estate.jpg') no-repeat center center;
            background-size: cover;
            color: black;
            padding: 150px 20px;
        }

        .hero h1 {
            font-size: 3rem;
        }

        /* Section styles */
        section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        /* Services Section styles */
        .services .service-item,
        .properties .property-item,
        .testimonials .testimonial-item {
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Properties Section styles */
        .properties img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .property-item {
            transition: transform 0.2s;
        }

        .property-item:hover {
            transform: scale(1.02);
        }

        /* Contact Form styles */
        .contact-form,
        .review-form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input,
        .contact-form textarea,
        .review-form input,
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact input[type="submit"],
        .review input[type="submit"] {
            background-color: #ff5722;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 5px;
        }

        .contact input[type="submit"]:hover,
        .review input[type="submit"]:hover {
            background-color: #ff784e;
        }

        /* Star Rating styles */
        .star-rating {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: color 0.2s;
        }

        .star-rating input:checked~label {
            color: #ff5722;
        }

        .star-rating input:checked+label:hover,
        .star-rating input:checked~label:hover {
            color: #ff784e;
        }

        /* Footer styles */
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

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <h1>John Doe - Real Estate Agent</h1>
        <nav>
            <a href="#services">Services</a>
            <a href="#properties">Properties</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Find Your Dream Home Today</h1>
        <p>Professional real estate services to help you buy, sell, or rent properties.</p>
        <img src="C:\Users\kayla\OneDrive\Desktop\WIL work\agents\real es1.jpg" alt="Property Image"
            style="width: 100%; max-height: 600px; object-fit: cover">
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2>My Services</h2>
        <div class="service-item">
            <h3>Property Buying</h3>
            <p>Assistance in finding and purchasing the perfect property for you and your family.</p>
        </div>
        <div class="service-item">
            <h3>Property Selling</h3>
            <p>Expert marketing strategies to sell your home at the best price possible.</p>
        </div>
        <div class="service-item">
            <h3>Rental Services</h3>
            <p>Help in finding rental properties and ensuring you get the best deal.</p>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="properties" id="properties">
        <h2>Available Properties</h2>
        <div class="property-item">
            <h3>Luxury Villa</h3>
            <img src="luxury-villa.jpg" alt="Luxury Villa">
            <p>Price: $1,500,000 - 5 bedrooms, 4 bathrooms, swimming pool, garden.</p>
        </div>
        <div class="property-item">
            <h3>Modern Apartment</h3>
            <img src="modern-apartment.jpg" alt="Modern Apartment">
            <p>Price: $750,000 - 3 bedrooms, 2 bathrooms, city view.</p>
        </div>
        <div class="property-item">
            <h3>Family Home</h3>
            <img src="family-home.jpg" alt="Family Home">
            <p>Price: $500,000 - 4 bedrooms, 3 bathrooms, near schools and parks.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <h2>What My Clients Say</h2>
        <div class="testimonial-item">
            <p>"John helped me find my dream home in no time. Professional and attentive to all my needs!"</p>
            <p>- Sarah P.</p>
        </div>
        <div class="testimonial-item">
            <p>"Selling my house was stress-free thanks to John's expert marketing strategy."</p>
            <p>- Michael R.</p>
        </div>
        <div class="testimonial-item">
            <p>"Great service and excellent communication. Highly recommend!"</p>
            <p>- Linda T.</p>
        </div>
    </section>

    

    <!-- Footer Section -->
    <footer>
        <marquee behavior="alternate" direction="left">
            <p>&copy; 2024 John Doe Real Estate. All rights reserved.</p>
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