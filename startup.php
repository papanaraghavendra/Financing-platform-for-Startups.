<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StartupFund | For Startups</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      header {
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        padding: 0;
        position: relative;
        z-index: 10;
      }
      /* Only style the top navigation bar horizontally */
      .topnav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 1em 2em;
      }
      .logo {
        font-size: 2em;
        font-weight: bold;
        color: #2b2d42;
        letter-spacing: 1px;
      }
      .topnav ul {
        list-style: none;
        display: flex;
        gap: 1.5em;
        margin: 0;
        padding: 0;
      }
      .topnav ul li a {
        text-decoration: none;
        color: #2b2d42;
        font-weight: 500;
        padding: 0.5em 1em;
        border-radius: 4px;
        transition: background 0.2s, color 0.2s;
      }
      .topnav ul li a.active,
      .topnav ul li a:hover {
        background: #edf2f4;
        color: #3B82F6;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(59, 130, 246, 0.2);
      }
      
      .btn {
        background: #3B82F6;
        color: #fff !important;
        border: none;
        border-radius: 4px;
        padding: 0.5em 1.2em;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-left: 0.5em;
        position: relative;
        overflow: hidden;
      }
      
      .btn:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(59, 130, 246, 0.3);
      }
      
      .btn:active {
        transform: translateY(0);
      }
      
      .option-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        padding: 1.5em;
        min-width: 200px;
        text-align: center;
        border-top: 4px solid #3B82F6;
        transition: all 0.3s ease;
      }
      
      .option-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      }
      
      .option-card ul {
        text-align: left;
        padding-left: 1.5em;
      }
      
      .option-card li {
        margin-bottom: 0.5em;
        position: relative;
      }
      
      .option-card li:before {
        content: "•";
        color: #3B82F6;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
      }
      .btn.secondary {
        background: #2b2d42;
      }
      .btn.large {
        padding: 1em 2em;
        font-size: 1.2em;
      }
      main {
        max-width: 1200px;
        margin: 2em auto;
        padding: 0 2em;
      }
      .page-hero {
        background: linear-gradient(90deg, #edf2f4 60%, #fff 100%);
        border-radius: 12px;
        padding: 2.5em 2em;
        text-align: center;
        margin-bottom: 2em;
      }
      .page-hero h1 {
        font-size: 2.5em;
        color: #2b2d42;
        margin-bottom: 0.5em;
      }
      .page-hero p {
        color: #555;
        font-size: 1.2em;
        margin-bottom: 1.5em;
      }
      .options-grid {
        display: flex;
        gap: 2em;
        justify-content: center;
        margin-bottom: 2em;
      }
      .option-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        padding: 1.5em;
        min-width: 200px;
        text-align: center;
        border-top: 4px solid #3B82F6;
      }
      .option-card h3 {
        color: #3B82F6;
        margin-bottom: 0.5em;
      }
      .startup-benefits {
        margin-bottom: 2em;
      }
      .benefits-container {
        display: flex;
        gap: 2em;
        flex-wrap: wrap;
        justify-content: center;
      }
      .benefit-item {
        display: flex;
        align-items: center;
        gap: 1em;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        padding: 1em 2em;
        min-width: 250px;
      }
      .benefit-icon {
        font-size: 2em;
        color: #3B82F6;
      }
      .application-process {
        margin-bottom: 2em;
      }
      .process-steps {
        display: flex;
        gap: 2em;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 1.5em;
      }
      .process-step {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        padding: 1.5em;
        min-width: 200px;
        text-align: center;
        position: relative;
      }
      .step-number {
        background: #3B82F6;
        color: #fff;
        border-radius: 50%;
        width: 2.2em;
        height: 2.2em;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3em;
        font-weight: bold;
        margin: 0 auto 0.7em auto;
      }
      .cta-center {
        text-align: center;
        margin-top: 1em;
      }
      .success-metrics {
        margin-bottom: 2em;
      }
      .metrics-grid {
        display: flex;
        gap: 2em;
        justify-content: center;
      }
      .metric-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        padding: 1.5em;
        min-width: 150px;
        text-align: center;
      }
      .metric-card h3 {
        color: #3B82F6;
        font-size: 2em;
        margin-bottom: 0.3em;
      }
      .startup-resources {
        margin-bottom: 2em;
      }
      .resources-grid {
        display: flex;
        gap: 2em;
        flex-wrap: wrap;
        justify-content: center;
      }
      .resource-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        padding: 1.5em;
        min-width: 200px;
        text-decoration: none;
        color: inherit;
        transition: box-shadow 0.2s, transform 0.2s;
      }
      .resource-card:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        transform: translateY(-4px) scale(1.03);
      }
      /* Sidebar styles */
      .sidebar {
        display: none;
      }
      @media (min-width: 1000px) {
        .sidebar {
          display: flex;
          flex-direction: column;
          position: fixed;
          top: 0;
          left: 0;
          width: 220px;
          height: 100vh;
          background: #2b2d42;
          color: #fff;
          padding: 2em 1em;
          z-index: 100;
        }
        .sidebar .logo {
          color: #fff;
          font-size: 2em;
          margin-bottom: 2em;
        }
        .sidebar ul {
          list-style: none;
          padding: 0;
          margin: 0;
          display: flex;
          flex-direction: column;
          gap: 0;
        }
        .sidebar ul li {
          margin-bottom: 1.2em;
        }
        .sidebar ul li a {
          color: #fff;
          text-decoration: none;
          font-size: 1.1em;
          padding: 0.5em 1em;
          border-radius: 4px;
          display: block;
          transition: background 0.2s, color 0.2s;
        }
        .sidebar ul li a.active,
        .sidebar ul li a:hover {
          background: #3B82F6;
          color: #fff;
        }
        main {
          margin-left: 240px;
        }
        header {
          margin-left: 220px;
        }
      }
      /* Footer styles */
      footer {
        background: #2b2d42;
        color: #fff;
        text-align: center;
        padding: 2em 0 1em 0;
        margin-top: 3em;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
      }
      /* Responsive styles */
      @media (max-width: 999px) {
        nav ul {
          flex-wrap: wrap;
          gap: 0.7em;
        }
        .options-grid,
        .benefits-container,
        .metrics-grid,
        .resources-grid,
        .process-steps {
          flex-direction: column;
          align-items: center;
        }
        main {
          margin: 1em 0;
          padding: 0 1em;
        }
      }
    </style>
  </head>
  <body>
    <!-- Sidebar for desktop -->
    <nav class="sidebar">
      <div class="logo">StartupFund</div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="investors.php">For Investors</a></li>
        <li><a href="startups.php" class="active">For Startups</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <!-- Login and Register buttons removed -->
      </ul>
    </nav>
    <header>
      <nav class="topnav">
        <div class="logo">StartupFund</div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="investors.php">For Investors</a></li>
          <li><a href="startups.php" class="active">For Startups</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <!-- Login and Register buttons removed -->
        </ul>
      </nav>
    </header>

    <main>
      <section class="page-hero">
        <h1>Funding for Your Startup</h1>
        <p>Connect with investors who believe in your vision</p>
        <a href="apply-for-funding.php" class="btn large">Apply for Funding</a>
      </section>
      <section class="funding-options">
        <h2>Funding Options</h2>
        <div class="options-grid">
          <div class="option-card">
            <h3>Pre-Seed</h3>
            <p>$50K - $500K</p>
            <ul>
              <li>For concept validation</li>
              <li>Prototype development</li>
              <li>Initial market testing</li>
            </ul>
          </div>
          <div class="option-card">
            <h3>Seed</h3>
            <p>$500K - $2M</p>
            <ul>
              <li>Product development</li>
              <li>Early customer acquisition</li>
              <li>Team expansion</li>
            </ul>
          </div>
          <div class="option-card">
            <h3>Series A</h3>
            <p>$2M - $15M</p>
            <ul>
              <li>Scaling operations</li>
              <li>Market expansion</li>
              <li>Product line extension</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="startup-benefits">
        <h2>Why Raise Through StartupFund?</h2>
        <div class="benefits-container">
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="benefit-text">
              <h3>Access to Investor Network</h3>
              <p>
                Connect with thousands of accredited investors actively looking
                for opportunities
              </p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <div class="benefit-text">
              <h3>Marketing Exposure</h3>
              <p>
                Featured placement in our investor newsletters and social media
              </p>
            </div>
          </div>
          <!-- More benefit items -->
        </div>
      </section>

      <section class="application-process">
        <h2>Simple Application Process</h2>
        <div class="process-steps">
          <div class="process-step">
            <div class="step-number">1</div>
            <div class="step-content">
              <h3>Create Your Startup Profile</h3>
              <p>Complete your company profile with key information</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-number">2</div>
            <div class="step-content">
              <h3>Submit Application</h3>
              <p>Answer questions about your business and funding needs</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-number">3</div>
            <div class="step-content">
              <h3>Due Diligence</h3>
              <p>
                Our team reviews your application (typically 3-5 business days)
              </p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-number">4</div>
            <div class="step-content">
              <h3>Go Live</h3>
              <p>If approved, your profile becomes visible to investors</p>
            </div>
          </div>
        </div>
        
      </section>

      <section class="success-metrics">
        <h2>Startup Success Metrics</h2>
        <div class="metrics-grid">
          <div class="metric-card">
            <h3>83%</h3>
            <p>of startups raise their target amount</p>
          </div>
          <div class="metric-card">
            <h3>2.5x</h3>
            <p>average oversubscription for featured startups</p>
          </div>
          <div class="metric-card">
            <h3>4 weeks</h3>
            <p>average time to complete a funding round</p>
          </div>
        </div>
      </section>

      <section class="startup-resources">
        <h2>Resources for Founders</h2>
        <div class="resources-grid">
          <a href="resources/pitch-guide.php" class="resource-card">
            <h3>Pitch Deck Guide</h3>
            <p>Learn how to create an investor-ready pitch deck</p>
          </a>
          <a href="resources/valuation.php" class="resource-card">
            <h3>Valuation Basics</h3>
            <p>Understand how to value your startup</p>
          </a>
          <a href="resources/legal.php" class="resource-card">
            <h3>Legal Considerations</h3>
            <p>Key legal aspects of fundraising</p>
          </a>
          <a href="blog.php" class="resource-card">
            <h3>Founder Blog</h3>
            <p>Advice from successful entrepreneurs</p>
          </a>
        </div>
      </section>
    </main>

    <footer>
      <!-- Same footer as index.php -->
    </footer>
    <script src="scripts.js"></script>
  </html>
</body>
</html>
