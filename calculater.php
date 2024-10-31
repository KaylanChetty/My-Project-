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

        .property, .calculator {
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.2s;
        }

        .property:hover, .calculator:hover {
            transform: scale(1.02);
        }

        .property img, .calculator img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .contact-form, .calculator form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea, .calculator input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-calculate {
            width: 100%;
            padding: 10px;
            background-color: #ff4500;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-calculate:hover {
            background-color: #ff6347;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #ff4500;
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
        
        <!-- Mortgage Calculator Section -->
        <div class="calculator">
            <h3>Mortgage Calculator</h3>
            <form onsubmit="calculateMortgage(); return false;">
                <label for="homePrice">Home Price ($)</label>
                <input type="number" id="homePrice" placeholder="Enter home price">
                
                <label for="downPayment">Down Payment ($)</label>
                <input type="number" id="downPayment" placeholder="Enter down payment">
                
                <label for="loanTerm">Loan Term (years)</label>
                <input type="number" id="loanTerm" placeholder="Enter loan term in years">
                
                <label for="interestRate">Interest Rate (%)</label>
                <input type="number" id="interestRate" step="0.01" placeholder="Enter interest rate">
                
                <button type="submit" class="btn-calculate">Calculate</button>
            </form>
            
            <div class="result" id="result"></div>
        </div>

       
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

    <script>
        function calculateMortgage() {
            const homePrice = parseFloat(document.getElementById("homePrice").value) || 0;
            const downPayment = parseFloat(document.getElementById("downPayment").value) || 0;
            const loanTerm = parseFloat(document.getElementById("loanTerm").value) || 0;
            const interestRate = parseFloat(document.getElementById("interestRate").value) || 0;

            const loanAmount = homePrice - downPayment;
            const monthlyInterestRate = (interestRate / 100) / 12;
            const numberOfPayments = loanTerm * 12;

            const monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -numberOfPayments));

            document.getElementById("result").textContent = 
                "Estimated Monthly Payment: $" + (monthlyPayment ? monthlyPayment.toFixed(2) : "0.00");
        }
    </script>
</body>
</html>