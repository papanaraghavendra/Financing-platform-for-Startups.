<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .campaign-container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        .campaign-header {
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
            transition: width 0.5s ease;
        }
        .investor-list {
            list-style: none;
            padding: 0;
        }
        .investor-list li {
            display: flex;
            align-items: center;
            padding: 1em 0;
            border-bottom: 1px solid #f3f4f6;
            gap: 1em;
        }
        .investor-list li:last-child {
            border-bottom: none;
        }
        .investor-list span:first-child {
            font-weight: 600;
            color: #111827;
        }
        .investor-list span:last-child {
            margin-left: auto;
            color: #3B82F6;
            font-weight: 700;
        }
        .action-buttons {
            display: flex;
            gap: 1em;
            flex-wrap: wrap;
        }
        .action-buttons .btn {
            flex: 1;
            min-width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="campaign-container">
        <div class="campaign-header">
            <h1>My Campaign Dashboard</h1>
            <a href="edit-campaign.php" class="btn">Edit Campaign</a>
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
            <h2>Campaign Progress</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 62.5%"></div>
            </div>
            <p>$1,250,000 raised of $2,000,000 goal (62.5%)</p>
        </div>

        <div class="section">
            <h2>Recent Investors</h2>
            <ul class="investor-list">
                <li>
                    <span>TechVentures Capital</span>
                    <span>$250,000</span>
                </li>
                <li>
                    <span>Angel Investor Group</span>
                    <span>$200,000</span>
                </li>
                <li>
                    <span>Venture Partners LLC</span>
                    <span>$150,000</span>
                </li>
            </ul>
            <a href="investors.php" class="btn" style="margin-top: 1em">View All Investors</a>
        </div>

        <div class="section">
            <h2>Campaign Actions</h2>
            <div style="display: flex; gap: 1em;">
                <a href="update-campaign.php" class="btn">
                    <i class="fas fa-edit"></i> Update Campaign
                </a>
                <a href="share-campaign.php" class="btn">
                    <i class="fas fa-share-alt"></i> Share Campaign
                </a>
                <a href="analytics.php" class="btn">
                    <i class="fas fa-chart-line"></i> View Analytics
                </a>
            </div>
        </div>
    </div>
</body>
</html>