<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifePulse | Direct Blood Donation Matching</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>

    <!-- Navigation Header -->
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="images/logo.jpeg" alt="LifePulse Logo" class="logo-image">
                LifePulse
            </a>
            <ul class="nav-links">
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#emergency">Emergency Request</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="../donor/donorregistration.php" class="btn btn-primary">Register</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Connect Directly with <span>Blood Donors</span> Near You</h1>
                <p>Skip the delay. LifePulse enables recipients and family members to search for verified donors in
                    real-time and coordinate directly at the hospital.</p>
                <div class="hero-buttons">
                    <a href="../seeker/seekerregistration.php?role=seeker" class="btn btn-primary">Find Blood Now</a>
                    <a href="../donor/donorregistration.php?role=donor" class="btn btn-outline">Become a Donor</a>
                </div>
            </div>
            <div>
                <img src="images/logo.jpeg" alt="logo" class="picture">
            </div>
        </div>
    </section>

    <!-- Live Statistics Bar -->
    <section class="stats-bar">
        <div class="container stats-grid">
            <div class="stat-item">
                <h2>1,250+</h2>
                <p>Active Donors</p>
            </div>
            <div class="stat-item">
                <h2>840+</h2>
                <p>Successful Matches</p>
            </div>
            <div class="stat-item">
                <h2>15 mins</h2>
                <p>Avg. Response Time</p>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="container">
        <div class="section-title">
            <h2>How LifePulse Works</h2>
            <p>A simple 3-step peer-to-peer donation matching platform.</p>
        </div>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">1</div>
                <h3>Search Donors</h3>
                <p>Enter required blood type and location to view verified, eligible donors currently nearby.</p>
            </div>
            <div class="step-card">
                <div class="step-icon">2</div>
                <h3>Send Request</h3>
                <p>Provide your hospital location and contact phone. The donor receives an instant notification.</p>
            </div>
            <div class="step-card">
                <div class="step-icon">3</div>
                <h3>Hospital Transfusion</h3>
                <p>The donor accepts and meets you at the designated hospital for pre-screening and donation.</p>
            </div>
        </div>
    </section>

    <!-- Emergency Feature Banner (Monetization Call-out) -->
    <section id="emergency" class="container">
        <div class="emergency-banner">
            <div class="emergency-info">
                <h3>Critical Emergency Requirement?</h3>
                <p>Use our **Emergency Fast-Track** broadcast to send automated SMS notifications to all local donors
                    simultaneously.</p>
            </div>
            <a href="register.php?role=seeker&alert=urgent" class="btn btn-secondary">Trigger Emergency Alert</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div>
                <h4 style="color: var(--primary); margin-bottom: 10px;">LifePulse P2P</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Connecting blood donors directly with patient relatives in
                    critical need.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul style="list-style:none; font-size: 0.9rem; margin-top: 10px;">
                    <li><a href="register.php?role=donor">Become a Donor</a></li>
                    <li><a href="register.php?role=seeker">Find Blood</a></li>
                    <li><a href="login.php">Account Login</a></li>
                </ul>
            </div>
            <div>
                <h4>Contact & Safety</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-top: 10px;">Always ensure pre-donation testing is
                    performed at certified hospital laboratories.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> LifePulse Project. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>