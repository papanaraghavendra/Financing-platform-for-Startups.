<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investors | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3B82F6;
            --secondary-color: #f8fafc;
            --text-color: #1e293b;
            --light-text: #64748b;
            --border-color: #e2e8f0;
        }
        body {
            background-color: var(--secondary-color);
            color: var(--text-color);
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        .investors-container {
            max-width: 1400px;
            margin: 2em auto;
            padding: 0 2em;
        }
        .investors-header {
            display: flex;
            flex-direction: column;
            gap: 1.5em;
            margin-bottom: 2em;
        }
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .search-filter-container {
            display: flex;
            gap: 1em;
            width: 100%;
        }
        .search-bar {
            flex: 1;
            position: relative;
        }
        .search-input {
            width: 100%;
            padding: 1em 1em 1em 3em;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1em;
            background: white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E") no-repeat 1em center;
        }
        .filter-section {
            display: flex;
            gap: 1em;
            flex-wrap: wrap;
        }
        .filter-btn {
            background: white;
            border: 1px solid var(--border-color);
            padding: 0.8em 1.5em;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5em;
            font-size: 0.95em;
        }
        .filter-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        .investor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2em;
            margin-bottom: 3em;
        }
        .investor-card {
            background: white;
            padding: 1.5em;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }
        .investor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
            border-color: var(--primary-color);
        }
        .investor-header {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
            gap: 1em;
        }
        .investor-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            font-weight: 600;
            flex-shrink: 0;
        }
        .investor-info {
            flex: 1;
        }
        .investor-name {
            font-weight: 700;
            margin-bottom: 0.2em;
            font-size: 1.2em;
        }
        .investor-title {
            color: var(--light-text);
            font-size: 0.95em;
            margin-bottom: 0.5em;
        }
        .investor-bio {
            color: var(--text-color);
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 1.5em;
        }
        .investor-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1em;
            margin-bottom: 1.5em;
        }
        .stat-item {
            text-align: center;
            padding: 0.8em;
            background: var(--secondary-color);
            border-radius: 8px;
        }
        .stat-value {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.1em;
            margin-bottom: 0.3em;
        }
        .stat-label {
            font-size: 0.85em;
            color: var(--light-text);
        }
        .investor-interests {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5em;
            margin-bottom: 1.5em;
        }
        .interest-tag {
            background: #e0f2fe;
            color: var(--primary-color);
            padding: 0.4em 0.8em;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 500;
        }
        .investor-actions {
            display: flex;
            gap: 1em;
        }
        .action-btn {
            flex: 1;
            text-align: center;
            padding: 0.8em;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .primary-action {
            background: var(--primary-color);
            color: white;
        }
        .primary-action:hover {
            background: #2563eb;
        }
        .secondary-action {
            background: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        .secondary-action:hover {
            background: #f8fafc;
        }
        .load-more {
            text-align: center;
            margin: 3em 0;
        }
        .load-more-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 1em 2.5em;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .load-more-btn:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <div class="investors-container">
        <div class="investors-header">
            <div class="header-top">
                <h1>Investor Network</h1>
                <button class="filter-btn active">
                    <i class="fas fa-plus"></i> Add Investor
                </button>
            </div>
            
            <div class="search-filter-container">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search investors by name, company, or industry...">
                </div>
                
                <div class="filter-section">
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i> All
                    </button>
                    <button class="filter-btn">
                        <i class="fas fa-user-tie"></i> VCs
                    </button>
                    <button class="filter-btn">
                        <i class="fas fa-star"></i> Angels
                    </button>
                    <button class="filter-btn">
                        <i class="fas fa-building"></i> Firms
                    </button>
                </div>
            </div>
        </div>

        <div class="investor-grid">
            <!-- Investor Card 1 -->
            <div class="investor-card">
                <div class="investor-header">
                    <div class="investor-avatar">JD</div>
                    <div class="investor-info">
                        <div class="investor-name">John Davidson</div>
                        <div class="investor-title">Partner at TechVentures Capital</div>
                        <div class="investor-bio">
                            Focused on early-stage AI and machine learning startups. Former founder with two successful exits.
                        </div>
                    </div>
                </div>
                
                <div class="investor-stats">
                    <div class="stat-item">
                        <div class="stat-value">15</div>
                        <div class="stat-label">Investments</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">$2.5M</div>
                        <div class="stat-label">Avg. Check</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">3</div>
                        <div class="stat-label">Exits</div>
                    </div>
                </div>
                
                <div class="investor-interests">
                    <span class="interest-tag">Artificial Intelligence</span>
                    <span class="interest-tag">Machine Learning</span>
                    <span class="interest-tag">SaaS</span>
                </div>
                
                <div class="investor-actions">
                    <button class="action-btn primary-action">
                        <i class="fas fa-envelope"></i> Contact
                    </button>
                    <button class="action-btn secondary-action">
                        <i class="fas fa-eye"></i> View Profile
                    </button>
                </div>
            </div>

            <!-- Investor Card 2 -->
            <div class="investor-card">
                <div class="investor-header">
                    <div class="investor-avatar">SA</div>
                    <div class="investor-info">
                        <div class="investor-name">Sarah Anderson</div>
                        <div class="investor-title">Angel Investor</div>
                        <div class="investor-bio">
                            Serial entrepreneur turned angel investor. Specializes in fintech and blockchain startups.
                        </div>
                    </div>
                </div>
                
                <div class="investor-stats">
                    <div class="stat-item">
                        <div class="stat-value">32</div>
                        <div class="stat-label">Investments</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">$750K</div>
                        <div class="stat-label">Avg. Check</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">5</div>
                        <div class="stat-label">Exits</div>
                    </div>
                </div>
                
                <div class="investor-interests">
                    <span class="interest-tag">FinTech</span>
                    <span class="interest-tag">Blockchain</span>
                    <span class="interest-tag">Payments</span>
                </div>
                
                <div class="investor-actions">
                    <button class="action-btn primary-action">
                        <i class="fas fa-envelope"></i> Contact
                    </button>
                    <button class="action-btn secondary-action">
                        <i class="fas fa-eye"></i> View Profile
                    </button>
                </div>
            </div>

            <!-- Investor Card 3 -->
            <div class="investor-card">
                <div class="investor-header">
                    <div class="investor-avatar">MR</div>
                    <div class="investor-info">
                        <div class="investor-name">Michael Roberts</div>
                        <div class="investor-title">Managing Partner at GrowthFund</div>
                        <div class="investor-bio">
                            Leads investments in Series A and B rounds. Focused on scaling operations and go-to-market strategies.
                        </div>
                    </div>
                </div>
                
                <div class="investor-stats">
                    <div class="stat-item">
                        <div class="stat-value">28</div>
                        <div class="stat-label">Investments</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">$3.2M</div>
                        <div class="stat-label">Avg. Check</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">7</div>
                        <div class="stat-label">Exits</div>
                    </div>
                </div>
                
                <div class="investor-interests">
                    <span class="interest-tag">Enterprise SaaS</span>
                    <span class="interest-tag">Marketplaces</span>
                    <span class="interest-tag">Dev Tools</span>
                </div>
                
                <div class="investor-actions">
                    <button class="action-btn primary-action">
                        <i class="fas fa-envelope"></i> Contact
                    </button>
                    <button class="action-btn secondary-action">
                        <i class="fas fa-eye"></i> View Profile
                    </button>
                </div>
            </div>
        </div>

        <div class="load-more">
            <button class="load-more-btn">
                <i class="fas fa-sync-alt"></i> Load More Investors
            </button>
        </div>
    </div>
</body>
</html>