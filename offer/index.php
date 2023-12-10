<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wooble - Personal Website Builder</title>
    <link rel="stylesheet" href="styles.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11145056473"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11145056473'); </script>

</head>
<body>
<!-- Header -->
<header class="header">
    <img src="https://wooble.org/wooble-img/wooble%20logo%201.svg" alt="Wooble Logo" class="logo">
    <a href="https://wooble.org/contact-us"><button class="contact-button">Contact Us</button></a>
</header>

<section class="hero">
    <h1>Step into the Digital Realm with Wooble - Your Ultimate Personal Website Builder!</h1>
    <div class="carousel">
        <!-- Carousel Container -->
        <div id="carouselSlides" class="carousel-container">
            <!-- Replace with your images -->
            <div class="carousel-slide" style="background-image: url('https://wooble.org/offer/img/image1.webp');"></div>
            <div class="carousel-slide" style="background-image: url('https://wooble.org/offer/img/image2.webp');"></div>
            <div class="carousel-slide" style="background-image: url('https://wooble.org/offer/img/image3.webp');"></div>
        </div>


        <!-- Carousel Controls -->
        <button id="carouselPrev" class="carousel-control carousel-control-prev">&lt;</button>
        <button id="carouselNext" class="carousel-control carousel-control-next">&gt;</button>
    </div>
    <div class="carousel-dots">
        <!-- Dots will be added here via JavaScript -->
    </div>
</section>


<!-- Features Section -->
<section class="features">
    <!-- Feature Item 1 -->
    <div class="feature-item">
        <img src="blog-icon.webp" alt="Blogging Icon">
        <div>
            <h3>Blogging Made Simple</h3>
            <p>Share your thoughts, express your ideas, or chronicle your experiences with Wooble's intuitive blog writing feature. No technical skills required, just your passion for writing!</p>
        </div>
    </div>
    <!-- Feature Item 2 -->
    <div class="feature-item">
        <img src="seo-icon.webp" alt="SEO Icon">
        <h3>Master SEO</h3>
        <p>Scale the heights of Google rankings with our built-in SEO tools. Increase your online visibility and drive organic traffic like never before!</p>
    </div>
    <!-- Feature Item 3 -->
    <div class="feature-item">
        <img src="portfolio-icon.webp" alt="Portfolio Icon">
        <h3>Stunning Portfolio Showcasing</h3>
        <p>Let your work speak for itself. Showcase your projects, images, and video samples in a visually striking portfolio that captivates your audience.</p>
    </div>
    <!-- Feature Item 4 -->
    <div class="feature-item">
        <img src="media-icon.webp" alt="Media Icon">
        <h3>Seamless Media Integration</h3>
        <p>Enrich your site with multimedia content and valuable external links. Draw in your audience with engaging media and provide them with extra resources at their fingertips.</p>
    </div>
    <!-- Feature Item 5 -->
    <div class="feature-item">
        <img src="domain-icon.webp" alt="Domain Icon">
        <h3>Unique Sub-Domain</h3>
        <p>Claim your unique online identity with a personalized sub-domain. Make a lasting impression and enhance your brand image with a memorable web address.</p>
    </div>
    <!-- Feature Item 6 -->
    <div class="feature-item">
        <img src="mobile-icon.webp" alt="Mobile Icon">
        <h3>Mobile-Optimized Design</h3>
        <p>Never miss out on mobile users. Wooble websites are fully responsive, ensuring an optimal viewing experience across a variety of devices.</p>
    </div>
    <!-- Feature Item 7 -->
    <div class="feature-item">
        <img src="template-icon.webp" alt="Template Icon">
        <h3>Beautiful Templates</h3>
        <p>Choose from our array of beautifully crafted templates to find one that best suits your style. With Wooble, create websites that are as unique as you are!</p>
    </div>
    <!-- Feature Item 8 -->
    <div class="feature-item">
        <img src="manage-icon.webp" alt="Management Icon">
        <h3>User-Friendly Management</h3>
        <p>No need for a web developer! Wooble's easy-to-use interface puts you in control. Manage your website with just a few clicks!</p>
    </div>
    <!-- Feature Item 9 -->
    <div class="feature-item">
        <img src="bandwidth-icon.webp" alt="Bandwidth Icon">
        <h3>Limitless Bandwidth</h3>
        <p>Wooble offers unlimited bandwidth, ensuring your website remains accessible and responsive, no matter the amount of traffic.</p>
    </div>
    <!-- Feature Item 10 -->
    <div class="feature-item">
        <img src="visitors-icon.webp" alt="Visitors Icon">
        <h3>Unlimited Visitor Access</h3>
        <p>The sky's the limit with Wooble! Welcome an unlimited number of visitors to your website without any worries of exceeding limits.</p>
    </div>
    <!-- Feature Item 11 -->
    <div class="feature-item">
        <img src="social-icon.webp" alt="Social Media Icon">
        <h3>Integrated Social Media</h3>
        <p>Strengthen your online presence. Seamlessly integrate your social media profiles on your website to keep your audience connected and engaged across platforms.</p>
    </div>
    <!-- Feature Item 12 -->
    <div class="feature-item">
        <img src="lifetime-icon.webp" alt="Lifetime Access Icon">
        <h3>Lifetime Access</h3>
        <p>Enjoy unrestricted, lifetime access to your Wooble website. Make your digital presence permanent with no worries about subscription expiry!</p>
    </div>
</section>

<!-- Get Started Section -->
<section class="get-started">

    <?php

    function redirect($url)
    {
        if (!headers_sent())
        {
            header('Location: '.$url);
            exit;
        }
        else
        {
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }
    if(isset($_POST['full_name'])){
        include '../inc/dbconnection.php';

        // Get form data
        $full_name = $_POST['full_name'];
        $email_id = $_POST['email_id'];
        $phone_number = $_POST['phone_number'];

        // SQL Query to insert data
        $sql = "INSERT INTO offer_leads (full_name, email_id, phone_number) VALUES (?, ?, ?)";

        // Prepare and bind
        $stmt = $link->prepare($sql);
        $stmt->bind_param("sss", $full_name, $email_id, $phone_number);


        // Execute the query
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        // Close connection
        $link->close();

        redirect('../offer_acknowledge');
    }
    ?>
    <h2>Ready to build your own portfolio?</h2>
    <p>Join us today and craft a compelling online presence with Wooble! Just fill in your details and our team will get in touch to kickstart your journey.</p>
    <form class="contact-form" method="post" action="">
        <input type="text" name="full_name" placeholder="Your Name" required>
        <input type="email" name="email_id" placeholder="Your Email" required>
        <input type="number" name="phone_number" placeholder="Your Mobile No. (with Country code)">
        <button type="submit" class="submit-button">Get Started</button>
    </form>
</section>

<!-- Footer -->
<footer class="footer">
    <!-- Add your footer content such as contact info and social media links -->
</footer>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var slideIndex = 0;
        var slides = document.querySelectorAll(".carousel-slide");
        var prevButton = document.getElementById("carouselPrev");
        var nextButton = document.getElementById("carouselNext");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? "block" : "none";
            });
        }

        prevButton.addEventListener("click", function() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        });

        nextButton.addEventListener("click", function() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        });

        showSlide(slideIndex); // Show the first slide initially
    });

    document.addEventListener("DOMContentLoaded", function() {
        var slideIndex = 0;
        var slides = document.querySelectorAll(".carousel-slide");
        var prevButton = document.getElementById("carouselPrev");
        var nextButton = document.getElementById("carouselNext");
        var dotsContainer = document.querySelector('.carousel-dots');

        // Function to display the current slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? "block" : "none";
            });

            // Update active dot
            var dots = document.querySelectorAll('.carousel-dots span');
            dots.forEach((dot, i) => {
                dot.className = i === index ? "active" : "";
            });
        }

        // Create dots
        for (var i = 0; i < slides.length; i++) {
            var dot = document.createElement('span');
            dot.addEventListener('click', (function(index) {
                return function() {
                    slideIndex = index;
                    showSlide(slideIndex);
                }
            })(i));
            dotsContainer.appendChild(dot);
        }

        // Event listeners for the prev/next buttons
        prevButton.addEventListener("click", function() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        });

        nextButton.addEventListener("click", function() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        });

        // Show the first slide initially
        showSlide(slideIndex);
    });


    document.addEventListener("DOMContentLoaded", function() {
        var slideIndex = 0;
        var slides = document.querySelectorAll(".carousel-slide");
        var prevButton = document.getElementById("carouselPrev");
        var nextButton = document.getElementById("carouselNext");
        var dotsContainer = document.querySelector('.carousel-dots');

        // Function to display the current slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? "block" : "none";
            });

            // Update active dot
            var dots = document.querySelectorAll('.carousel-dots span');
            dots.forEach((dot, i) => {
                dot.className = i === index ? "active" : "";
            });
        }

        // Create dots
        for (var i = 0; i < slides.length; i++) {
            var dot = document.createElement('span');
            dot.addEventListener('click', (function(index) {
                return function() {
                    slideIndex = index;
                    showSlide(slideIndex);
                }
            })(i));
            dotsContainer.appendChild(dot);
        }

        // Event listeners for the prev/next buttons
        prevButton.addEventListener("click", function() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        });

        nextButton.addEventListener("click", function() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        });

        // Show the first slide initially
        showSlide(slideIndex);
    });


</script>


</body>
</html>
