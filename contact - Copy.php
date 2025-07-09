<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechTreasures</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="" /></a>
    <div>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>

                <?php

                if ($_SESSION['aid'] < 0) {
                    echo "   <li><a href='login.php'>login</a></li>
            <li><a href='signup.php'>SignUp</a></li>
            ";
                } else {
                    echo "   <li><a href='profile.php'>profile</a></li>
          ";
                }
                ?>
                <li><a href="admin.php">Admin</a></li>
                <li id="lg-bag">
                    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                </li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
        <div class="url">
                <button class="btn" onclick="logout()">Log out</button>
            </div>
            </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#GameTillTheEnd</h2>

        <p>Providing Premium Gaming Experience</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Pune</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>abcd@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>+00000000</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9am to 5pm</p>

                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!3m1!4b1!4m6!3m5!1s0x3bc2c0651787717b:0x7b6577cca27cb6eb!8m2!3d18.520367!4d73.8552978!16s%2Fg%2F11g64h_906?authuser=0&entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <div class="people">
            <div>
                <p>
                    <span>Rushi</span> Founder and CEO <br />
                    Phone: +00000001 <br />
                    Email:fandceo_rushi@gmail.com
                </p>
            </div>
            <div>
               
                <p>
                    <span>Rushikesh</span> Executive Marketing Manager <br />
                    Phone: +00000002 <br />
                    Email:emm_rushikesh@gmail.com
                </p>
            </div>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" />
            <h4>Contact</h4>
            <p>
                <strong>Address: </strong> Pune

            </p>
            <p>
                <strong>Phone: </strong> +00000000
            </p>
            <p>
                <strong>Hours: </strong> 9am-5pm
            </p>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="cart.php">View Cart</a>
            <a href="wishlist.php">My Wishlist</a>
        </div>

    </footer>

    <script src="script.js"></script>
</body>

</html>


<script>
function logout() {
    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "logout.php", false); 
    xhr.send();
    window.location.href = "logout.php";
}
</script>