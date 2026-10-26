<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeker Homepage - LifeFlow</title>
    <link rel="stylesheet" href="styles/double.css">
</head>

<body>

    <!-- Top Navigation Bar -->
    <nav class="navbar">
        <a href="seeker_home.php" class="brand">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
            </svg>
            LifePulse
        </a>
        <div class="nav-actions">
            <div class="user-profile">
                <div class="avatar" style="background-color: var(--accent-color);">AS</div>
                <span>Alice Smith</span>
            </div>
            <a href="logout.php" class="btn btn-outline" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">Logout</a>
        </div>
    </nav>

    <div class="container">

        <!-- Seeker Hero Card -->
        <div class="hero-card" style="background: linear-gradient(135deg, #2b2d42, #457b9d);">
            <div class="hero-info">
                <h1>Need Urgent Blood Support?</h1>
                <p>Create a request to alert registered, verified donors in your immediate area.</p>
            </div>
            <div>
                <button class="btn btn-primary" id="open-request-modal"
                    style="padding: 0.8rem 1.5rem; font-size: 1rem;">
                    + Create Emergency Request
                </button>
            </div>
        </div>

        <!-- Main Grid Layout -->
        <div class="grid-main">

            <!-- Left Column: Active Requests & Available Donors -->
            <div class="main-content">

                <!-- Active Requests Section -->
                <div class="card">
                    <div class="card-title">Your Active Blood Requests</div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Req ID</th>
                                    <th>Blood Type</th>
                                    <th>Hospital / Location</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#REQ-9912</td>
                                    <td><strong>A-</strong></td>
                                    <td>Grace Medical Center</td>
                                    <td><span class="status-badge active">Searching (2 Matches)</span></td>
                                    <td>
                                        <button class="btn btn-outline"
                                            style="padding: 0.25rem 0.5rem; font-size: 0.8rem;"
                                            onclick="alert('Viewing matched donors for Request #REQ-9912')">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Available Peer Donors Directory -->
                <div class="card">
                    <div class="card-title">Available Peer Donors Nearby</div>

                    <!-- Donor Card 1 -->
                    <div class="request-card" style="border-left-color: var(--success-color);">
                        <div class="request-info">
                            <h3>Donor #D-402</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">Blood Type: <strong
                                    style="color: var(--primary-color);">A-</strong></p>
                            <div class="request-meta">
                                <span>📍 Central District (2.1 km)</span>
                                <span>✔ Verified Donor</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-outline"
                                onclick="alert('Sending direct alert notification to Donor #D-402...')">
                                Send Alert
                            </button>
                        </div>
                    </div>

                    <!-- Donor Card 2 -->
                    <div class="request-card" style="border-left-color: var(--success-color);">
                        <div class="request-info">
                            <h3>Donor #D-119</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">Blood Type: <strong
                                    style="color: var(--primary-color);">O-</strong> (Universal Donor)</p>
                            <div class="request-meta">
                                <span>📍 Northside Ward (4.8 km)</span>
                                <span>✔ Verified Donor</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-outline"
                                onclick="alert('Sending direct alert notification to Donor #D-119...')">
                                Send Alert
                            </button>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Emergency Helplines -->
            <div class="sidebar">
                <div class="card">
                    <div class="card-title">Emergency Direct Contacts</div>
                    <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                        If this is a critical emergency requiring immediate blood inventory, contact local facility
                        helplines directly:
                    </p>
                    <div
                        style="background-color: var(--bg-color); padding: 0.8rem; border-radius: 6px; font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;">
                        📞 Regional Blood Bank: 112
                    </div>
                    <div
                        style="background-color: var(--bg-color); padding: 0.8rem; border-radius: 6px; font-weight: 600; font-size: 0.9rem;">
                        📞 Emergency Hotline: 911
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Create Emergency Request Modal -->
    <div class="modal-overlay" id="request-modal">
        <div class="modal">
            <div class="modal-header">
                <h3>New Blood Request</h3>
                <button id="close-modal"
                    style="background:none; border:none; font-size:1.5rem; cursor:pointer;">&times;</button>
            </div>
            <form action="process_request.php" method="POST">
                <div class="form-group">
                    <label for="patient_name">Patient Name / Hospital ID</label>
                    <input type="text" id="patient_name" name="patient_name" class="form-control"
                        placeholder="e.g. John Smith" required>
                </div>
                <div class="form-group">
                    <label for="blood_group">Blood Type Required</label>
                    <select id="blood_group" name="blood_group" class="form-control" required>
                        <option value="">Select Blood Type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hospital">Hospital / Medical Center</label>
                    <input type="text" id="hospital" name="hospital" class="form-control"
                        placeholder="e.g. Grace Medical Center" required>
                </div>
                <div class="form-group">
                    <label for="units">Units Required</label>
                    <input type="number" id="units" name="units" class="form-control" min="1" max="10" value="1"
                        required>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-outline" id="cancel-modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Modal script
        const modal = document.getElementById('request-modal');
        const openBtn = document.getElementById('open-request-modal');
        const closeBtn = document.getElementById('close-modal');
        const cancelBtn = document.getElementById('cancel-modal');

        function showModal() { modal.classList.add('active'); }
        function hideModal() { modal.classList.remove('active'); }

        openBtn.addEventListener('click', showModal);
        closeBtn.addEventListener('click', hideModal);
        cancelBtn.addEventListener('click', hideModal);

        window.addEventListener('click', function (e) {
            if (e.target === modal) {
                hideModal();
            }
        });
    </script>
</body>

</html>