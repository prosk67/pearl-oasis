<?php require "includes/session.security.php" ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <!-- <a href="index.php#category">Categories</a> -->
            <a href="about.php">Contact Us</a>

        </div>


        <div class="container">
            <div class="logo">
                <img class="logo-main" src="img/logo-single.png" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="link" href="index.php">Home</a></li>
                    <li><a class="link" href="products.php">Products</a></li>
                    <!-- <li><a class="link" href="index.php#category">Categories</a></li> -->
                    <li><a class="link" href="about.php">Contact Us</a></li>
                </ul>
            </nav>
            <div class="links">

                <a href="https://www.facebook.com/theoasisjewellers/"><img class="link-img" src="img/Vector-1.svg"
                        alt=""></a>
                <a href="https://wa.me/+8801892411397?text=Hi%20there!"><img class="link-img" src="img/Vector.svg"
                        alt=""></a>
                <a href="https://www.instagram.com/thepearloasisjewellers?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img class="link-img" src="img/ig-logo.svg"
                        alt=""></a>
                <button class="menu" onclick="sidepane()"><img class="hamburger" src="img/Hamburger-menu.png" alt="">
                </button>

            </div>
        </div>

    </header>
    <main>
        <div class="about">

            <div class="contact-form-container">
                <h2>Contact Us</h2>
                <form name="submit-to-google-sheet">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                        <span class="error-message" id="nameError"></span>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="access_key" value="cc171ee3-ff6d-4607-b89a-f60c5d040d72">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
                        <span class="error-message" id="phoneError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                        <span class="error-message" id="messageError"></span>
                    </div>
                    <button type="submit" class="submit-button">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div>
                whatsapp
            </div>
            <p>&copy; 2025 Pearl Oasis. All rights reserved.</p>
            <form action="https://api.web3forms.com/submit" method="POST" id="contactForm"
                name="submit-to-google-sheet-2">
                <div class="form-group" style="display: none;">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" value="DEFAULT">
                    <span class="error-message" id="nameError"></span>
                </div>
                <div class="form-group email-form">
                    <input type="hidden" name="access_key" value="cc171ee3-ff6d-4607-b89a-f60c5d040d72">
                    <label style="display: none;" for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <span class="error-message" id="emailError"></span>
                    <button type="submit" class="submit-button">
                        Subscribe
                    </button>
                </div>
                <div class="form-group" style="display: none;">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" value="DEFAULT">
                    <span class="error-message" id="phoneError"></span>
                </div>
                <div class="form-group" style="display: none;">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5">DEFAULT</textarea>
                    <span class="error-message" id="messageError"></span>
                </div>

            </form>

            <!-- <div class="email-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </div> -->
        </div>
    </footer>
</body>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxGm9MF6tGpO3xOQYih9BA8Ka8wAjTlJBmxu2oF4HQnGV6f0LdUgsBJ70paovuM2Zaelg/exec'
    const form = document.forms['submit-to-google-sheet']

    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
    })

    const form_2 = document.forms['submit-to-google-sheet-2']

    form_2.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form_2) })
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
    })
</script>


</html>