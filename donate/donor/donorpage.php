<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Homepage - LifePulse</title>
    <link rel="stylesheet" href="styles/double.css">
</head>

<body>

    <!-- Top Navigation Bar -->
    <nav class="navbar">
        <a href="donor_home.php" class="brand">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
            </svg>
            LifeFlow
        </a>
        <div class="nav-actions">
            <button id="toggle-availability" class="btn btn-success">Available to Donate</button>
            <div class="user-profile">
                <div class="avatar">JD</div>
                <span>John Doe</span>
            </div>
            <a href="logout.php" class="btn btn-outline" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">Logout</a>
        </div>
    </nav>

    <div class="container">

        <!-- Status Hero Banner -->
        <div class="hero-card">
            <div class="hero-info">
                <h1>Welcome back, John!</h1>
                <p>You are registered as an active donor. Ready to respond to urgent requests nearby.</p>
                <div style="margin-top: 10px;">
                    <span class="status-badge eligible">Eligible to Donate</span>
                </div>
            </div>
            <div class="hero-stats">
                <div class="blood-type-badge">
                    <div class="type">O+</div>
                    <div class="label">Blood Group</div>
                </div>
            </div>
        </div>

        <!-- Main Layout -->
        <div class="grid-main">

            <!-- Left Column: Nearby Urgent Requests -->
            <div class="main-content">
                <div class="card">
                    <div class="card-title">
                        <span>Urgent Blood Requests Near You</span>
                        <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: normal;">Matching O+
                            Blood Group</span>
                    </div>

                    <!-- Request Item 1 -->
                    <div class="request-card">
                        <div class="request-info">
                            <span class="status-badge urgent">Critical</span>
                            <h3>St. John's General Hospital</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">Request ID: #REQ-8842</p>
                            <div class="request-meta">
                                <span>📍 Central District (3.2 km)</span>
                                <span>🩸 2 Units Needed</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary"
                                onclick="alert('Responding to Request #REQ-8842. Hospital and contact information retrieved.')">
                                Respond
                            </button>
                        </div>
                    </div>

                    <!-- Request Item 2 -->
                    <div class="request-card">
                        <div class="request-info">
                            <span class="status-badge urgent">Within 24 Hours</span>
                            <h3>City Memorial Clinic</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">Request ID: #REQ-8839</p>
                            <div class="request-meta">
                                <span>📍 Westside Branch (7.5 km)</span>
                                <span>🩸 1 Unit Needed</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary"
                                onclick="alert('Responding to Request #REQ-8839. Hospital and contact information retrieved.')">
                                Respond
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Donation Impact & Reminders -->
            <div class="sidebar">

                <!-- Donation Stats -->
                <div class="card">
                    <div class="card-title">Your Donation Impact</div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; text-align: center;">
                        <div style="background-color: var(--bg-color); padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color);">4</div>
                            <div style="font-size: 0.8rem; color: var(--text-muted);">Donations</div>
                        </div>
                        <div style="background-color: var(--bg-color); padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--success-color);">12</div>
                            <div style="font-size: 0.8rem; color: var(--text-muted);">Lives Impacted</div>
                        </div>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 1rem; text-align: center;">
                        Last donation recorded: <strong>May 14, 2026</strong>
                    </p>
                </div>

                <!-- Guidelines Card -->
                <div class="card">
                    <div class="card-title">Donation Checklist</div>
                    <ul style="font-size: 0.9rem; color: var(--text-muted); padding-left: 1.2rem; line-height: 1.8;">
                        <li>Ensure you are well hydrated.</li>
                        <li>Eat a healthy meal low in fat.</li>
                        <li>Bring a valid government identification card.</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <script>
        // Toggle availability status script
        const toggleBtn = document.getElementById('toggle-availability');
        let isAvailable = true;

        toggleBtn.addEventListener('click', function () {
            isAvailable = !isAvailable;
            if (isAvailable) {
                toggleBtn.textContent = 'Available to Donate';
                toggleBtn.className = 'btn btn-success';
            } else {
                toggleBtn.textContent = 'Status: Unavailable';
                toggleBtn.className = 'btn btn-outline';
            }
        });
    </script>
</body>

</html>