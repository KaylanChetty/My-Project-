<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up - RealHome</title>
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
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: black;
            }

            p {
                text-align: center;
                margin-bottom: 20px;
                color:black;
            }

            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                background: #f4f4f9;
            }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Buttons */
            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #03a864;
            }

            .cancelbtn {
                background-color: #f44336;
            }

            .cancelbtn:hover {
                background-color: #e02d27;
            }

            /* Float cancel and signup buttons and add an equal width */
            .cancelbtn, .signupbtn {
                float: left;
                width: 50%;
            }

            /* Clear floats */
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }

            /* Checkbox and link styling */
            label {
                display: block;
                margin-bottom: 10px;
            }

            .psw, .signup {
                text-align: right;
                margin-top: 10px;
            }

            .psw a, .signup a {
                color: dodgerblue;
                text-decoration: none;
            }

            .psw a:hover, .signup a:hover {
                text-decoration: underline;
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

            /* Responsive styling */
            @media screen and (max-width: 768px) {
                .cancelbtn, .signupbtn {
                    width: 100%;
                }
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

        <!-- Sign Up Form -->
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <form action="action_page2.php" method="post">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p class="signup">Already have an account? <a href="C:\xampp\htdocs\MyProject\login.php">Login</a></p>
                <p>By creating an account you agree to our <a href="C:\xampp\htdocs\MyProject\termsand condition.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </form>
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