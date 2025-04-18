<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Startup | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .dashboard-container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        .startup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2em;
            padding-bottom: 1em;
            border-bottom: 1px solid #e5e7eb;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5em;
            margin-bottom: 2em;
        }
        .stat-card {
            background: white;
            padding: 1.5em;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            color: #3B82F6;
            font-size: 2em;
            margin-bottom: 0.3em;
            font-weight: 700;
        }
        .stat-card p {
            color: #6b7280;
            font-size: 0.9em;
        }
        .section {
            background: white;
            padding: 2em;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 2.5em;
        }
        .section h2 {
            color: #111827;
            font-size: 1.5em;
            margin-bottom: 1em;
            padding-bottom: 0.5em;
            border-bottom: 1px solid #f3f4f6;
        }
        .btn {
            background: #3B82F6;
            color: white;
            padding: 0.8em 1.8em;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5em;
        }
        .btn:hover {
            background: #2563eb;
            transform: scale(1.02);
        }
        .progress-bar {
            height: 10px;
            background: #f3f4f6;
            border-radius: 10px;
            margin: 1em 0;
            overflow: hidden;
        }
        .progress {
            height: 100%;
            border-radius: 10px;
        }
        .activity-list {
            list-style: none;
            padding: 0;
        }
        .activity-list li {
            display: flex;
            align-items: center;
            padding: 1em 0;
            border-bottom: 1px solid #f3f4f6;
            gap: 1em;
        }
        .activity-list li:last-child {
            border-bottom: none;
        }
        .activity-list i {
            color: #3B82F6;
            font-size: 1.2em;
        }
        .date {
            margin-left: auto;
            color: #9ca3af;
            font-size: 0.9em;
        }
        .action-buttons {
            display: flex;
            gap: 1em;
            flex-wrap: wrap;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5em;
        }
        .info-grid p {
            margin-bottom: 0.8em;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="startup-header">
            <h1>My Startup Dashboard</h1>
            <a href="edit-startup.php" class="btn">Edit Profile</a>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>$1,250,000</h3>
                <p>Total Raised</p>
            </div>
            <div class="stat-card">
                <h3>24</h3>
                <p>Investors</p>
            </div>
            <div class="stat-card">
                <h3>15</h3>
                <p>Days Left</p>
            </div>
        </div>

        <div class="section">
            <h2>Basic Information</h2>
            <div class="info-grid">
                <div>
                    <p><strong>Company Name:</strong> TechInnovate Inc.</p>
                    <p><strong>Industry:</strong> Artificial Intelligence</p>
                </div>
                <div>
                    <p><strong>Founded:</strong> January 2022</p>
                    <p><strong>Location:</strong> San Francisco, CA</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Funding Details</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 62.5%; background: #3B82F6;"></div>
            </div>
            <p>$1,250,000 raised of $2,000,000 goal (62.5%)</p>
            <a href="funding-settings.php" class="btn">Manage Funding</a>
        </div>

        <div class="section">
            <h2>Recent Activity</h2>
            <ul class="activity-list">
                <li>
                    <i class="fas fa-user-plus"></i>
                    <span>New investor joined - TechVentures Capital</span>
                    <span class="date">2 days ago</span>
                </li>
                <li>
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Investment received - $250,000</span>
                    <span class="date">5 days ago</span>
                </li>
            </ul>
        </div>

        <div class="section">
            <h2>Quick Actions</h2>
            <div class="action-buttons">
                <a href="update-milestones.php" class="btn">
                    <i class="fas fa-flag"></i> Update Milestones
                </a>
                <a href="upload-documents.php" class="btn">
                    <i class="fas fa-file-upload"></i> Upload Documents
                </a>
                <a href="message-investors.php" class="btn">
                    <i class="fas fa-envelope"></i> Message Investors
                </a>
            </div>
        </div>
    </div>
</body>
</html>