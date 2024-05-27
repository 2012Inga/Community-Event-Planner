<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Event Planner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="#">EventPlanner</a>
            </div>
    
            <!-- Navigation -->
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#events">Upcoming Events</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
    
            <!-- Login/Profile/Logout -->
            <div class="user-options">
                <?php
                if(isset($_COOKIE['user_email'])) {
                    // If user cookie is set, display profile and logout links
                    echo '<div class="profile-link"><a href="#">Profile</a></div>';
                    echo '<div class="logout-link"><a href="login/logout.php">Logout</a></div>';
                } else {
                    // If user cookie is not set, display login link
                    echo '<div class="login-link"><a href="login/index.php">Login</a></div>';
                }
                ?>
            </div>
    
            <!-- Menu toggle for mobile responsiveness -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    

    <section id="hero" class="hero-section">
        <div class="container">
            <h1 class="hero-title">Welcome to EventPlanner</h1>
            <p class="hero-subtitle">Your Ultimate Community Event Management Solution</p>
            <a href="#book-event" class="btn hero-btn">Get Started</a>
        </div>
    </section>

    <!-- Book Event Section -->
    <section id="book-event" class="book-event-section">
        <div class="container">
            <h2>Book or Create an Event</h2>
            <form id="event-form">
                <input type="text" id="event-name" placeholder="Event Name" required>
                <input type="date" id="event-date" required>
                <input type="text" id="event-location" placeholder="Location" required>
                <button type="submit" class="btn">Create Event</button>
            </form>
            <p id="login-warning" class="hidden">Please sign in to create an event.</p>
            <ul id="event-list" class="event-list"></ul>
        </div>
    </section>
        </div>
    </section>

      <!-- About Us Section -->
      <section id="about" class="about-section">
        <div class="container">
            <h2>About Us</h2>
            <p>At EventPlanner, we are dedicated to making community event planning simple and efficient. Our platform allows users to create, manage, and participate in community events with ease. Our mission is to foster community engagement and bring people together through well-organized events.</p>
            <div class="about-content">
                <div class="about-item">
                    <h3>Our Vision</h3>
                    <p>To be the leading platform for community events, bringing people together and enhancing community bonds.</p>
                </div>
                <div class="about-item">
                    <h3>Our Mission</h3>
                    <p>To provide a user-friendly platform that simplifies the process of organizing and participating in community events.</p>
                </div>
                <div class="about-item">
                    <h3>Our Values</h3>
                    <p>Community, Simplicity, Efficiency, and Engagement.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="events-section">
        <div class="container">
            <h2>Upcoming Events</h2>
            <div class="event-card">
                <h3>Community Picnic</h3>
                <p>Date: June 15, 2024</p>
                <p>Location: Central Park</p>
                <a href="#" class="btn">Register</a>
            </div>
            <div class="event-card">
                <h3>Summer Music Festival</h3>
                <p>Date: July 5, 2024</p>
                <p>Location: Downtown Amphitheater</p>
                <a href="#" class="btn">Register</a>
            </div>
            <div class="event-card">
                <h3>Charity Run</h3>
                <p>Date: August 10, 2024</p>
                <p>Location: City Streets</p>
                <a href="#" class="btn">Register</a>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="how-it-works-section">
        <div class="container">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">
                        <img src="icon1.png" alt="Step 1">
                    </div>
                    <h3>Step 1</h3>
                    <p>Sign up for an account on EventPlanner.</p>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="icon2.png" alt="Step 2">
                    </div>
                    <h3>Step 2</h3>
                    <p>Create your event by providing necessary details.</p>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="icon3.png" alt="Step 3">
                    </div>
                    <h3>Step 3</h3>
                    <p>Promote your event and start accepting registrations.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>"EventPlanner made organizing our community event so much easier! Highly recommended."</p>
                </div>
                <div class="testimonial-author">
                    <p>- John Doe, Community Organizer</p>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>"I love how intuitive and user-friendly EventPlanner is. It saved me a lot of time and effort!"</p>
                </div>
                <div class="testimonial-author">
                    <p>- Jane Smith, Event Participant</p>
                </div>
            </div>
        </div>
    </section>

    <section id="community-impact" class="community-impact-section">
        <div class="container">
            <h2>Community Impact</h2>
            <p>Community Event Planner is committed to making a positive impact in our community. We strive to bring people together and create memorable experiences for everyone involved.</p>
            <div class="impact-stats">
                <div class="impact-stat">
                    <h3>100+</h3>
                    <p>Events Organized</p>
                </div>
                <div class="impact-stat">
                    <h3>5000+</h3>
                    <p>Participants Engaged</p>
                </div>
                <div class="impact-stat">
                    <h3>50+</h3>
                    <p>Communities Served</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="cta-section">
        <div class="container">
            <h2>Ready to Plan Your Next Event?</h2>
            <p>Sign up now to start organizing your community event with ease!</p>
            <a href="#signup" class="btn">Get Started</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-logo">
                <a href="#">EventPlanner</a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>



    <script src="script.js"></script>
</body>
</html>