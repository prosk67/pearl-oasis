<?php
$index = 0;
require "includes/getData.php";
require "includes/session.security.php" ?>

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
    <link rel="stylesheet" href="css/products.css" />
    <script src="jquery-3.7.1.js"></script>
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
                <a href="https://www.facebook.com/theoasisjewellers/"><img class="link-img" src="img/Vector.svg"
                        alt=""></a>
                <a href="https://www.instagram.com/thepearloasisjewellers?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img class="link-img" src="img/ig-logo.svg"
                        alt=""></a>
                <button class="menu" onclick="sidepane()"><img class="hamburger" src="img/Hamburger-menu.png" alt="">
                </button>

            </div>
        </div>

    </header>
    <main>
        <div class="products">
            <h1 style="padding: 20px;">Products</h1>
            <?php

            for ($j = 0; $j < 6; $j++) {
                $i = 0;
                ?>

                <div style="margin-top: 32px;">
                    <div style="display:flex; justify-content:center;">
                        <h3 id="<?php echo $category[$index] ?>"><?php echo ucwords($category[$index]); ?></h3>

                    </div>
                    <div id="carouselExampleControls-<?php echo $j; ?>" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner" id="carousel<?php echo $j; ?>">

                            <?php foreach ($results as $result) {
                                $product_name = htmlspecialchars($result["product_name"]);
                                $img = htmlspecialchars($result["img"]);
                                $description = htmlspecialchars($result["description"]);



                                ?>
                                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">


                                    <?php $message = "Hi%20there!Can%20you%20please%20check%20the%20pricing%20for%20" . $product_name . "?" ?>

                                    <div class="card"
                                        onclick="window.location.href='https://wa.me/+8801892411397?text=<?php echo $message ?>'">
                                        <div class="img-wrapper">
                                            <img src="<?php echo $img ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product_name; ?></h5>
                                            <p class="card-text"><?php echo $description; ?></p>

                                        </div>
                                        <div class="additional-content">
                                            <p>This premium-quality product is crafted with exceptional materials. Available now
                                                in
                                                multiple sizes and
                                                colors.</p>
                                            <a
                                                href="https://wa.me/+8801892411397?text=<?php echo $message ?>"><button>Pricing</button></a>
                                        </div>
                                    </div>



                                </div>

                                <?php $i = 1;
                            } ?>



                        </div>
                        <button id="prev<?php echo $j; ?>" class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls-<?php echo $j; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button id="next<?php echo $j; ?>" class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls-<?php echo $j; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <?php
                $index++;
                require "includes/getData.php";
                $i = 1;
            } ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div>
                whatsapp
            </div>
            <p>&copy; 2025 Pearl Oasis. All rights reserved.</p>
            <form action="https://api.web3forms.com/submit" method="POST" id="contactForm"
                name="submit-to-google-sheet">
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

    <body src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <script src="js/carousel.js"></script>
        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxGm9MF6tGpO3xOQYih9BA8Ka8wAjTlJBmxu2oF4HQnGV6f0LdUgsBJ70paovuM2Zaelg/exec'
            const form = document.forms['submit-to-google-sheet']

            form.addEventListener('submit', e => {
                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                    .then(response => console.log('Success!', response))
                    .catch(error => console.error('Error!', error.message))
            })
        </script>


    </body>


</html>