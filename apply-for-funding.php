<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply for Funding | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        .application-form {
            max-width: 800px;
            margin: 2em auto;
            padding: 2em;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: 1px solid #e5e7eb;
        }
        .form-group {
            margin-bottom: 1.8em;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.6em;
            font-weight: 600;
            color: #1f2937;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.9em;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 1em;
            background-color: #f9fafb;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
            background-color: #ffffff;
        }
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        .submit-btn {
            background: #ef233c;
            color: white;
            border: none;
            padding: 1em 2em;
            font-size: 1em;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .submit-btn:hover {
            background: #d90429;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        h1 {
            color: #1f2937;
            margin-bottom: 0.5em;
        }
        p {
            color: #4b5563;
            margin-bottom: 2em;
        }
        select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
        }
    </style>
</head>
<body>
    <div class="application-form">
        <h1>Apply for Funding</h1>
        <p>Welcome, <?= htmlspecialchars($_SESSION['user']) ?>! Please complete your funding application below.</p>
        
        <form action="process-application.php" method="POST">
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name" name="company_name" required>
            </div>

            <div class="form-group">
                <label for="funding-amount">Funding Amount Requested ($)</label>
                <input type="number" id="funding-amount" name="funding_amount" min="10000" required>
            </div>

            <div class="form-group">
                <label for="funding-stage">Funding Stage</label>
                <select id="funding-stage" name="funding_stage" required>
                    <option value="">Select stage</option>
                    <option value="pre-seed">Pre-Seed</option>
                    <option value="seed">Seed</option>
                    <option value="series-a">Series A</option>
                    <option value="series-b">Series B</option>
                </select>
            </div>

            <div class="form-group">
                <label for="business-description">Business Description</label>
                <textarea id="business-description" name="business_description" required></textarea>
            </div>

            <div class="form-group">
                <label for="problem-solving">What problem does your business solve?</label>
                <textarea id="problem-solving" name="problem_solving" required></textarea>
            </div>

            <div class="form-group">
                <label for="target-market">Target Market</label>
                <textarea id="target-market" name="target_market" required></textarea>
            </div>

            <div class="form-group">
                <label for="revenue-model">Revenue Model</label>
                <textarea id="revenue-model" name="revenue_model" required></textarea>
            </div>

            <div class="form-group">
                <label for="competitors">Main Competitors</label>
                <textarea id="competitors" name="competitors"></textarea>
            </div>

            <div class="form-group">
                <label for="use-of-funds">Use of Funds</label>
                <textarea id="use-of-funds" name="use_of_funds" required></textarea>
            </div>

            <div class="form-group">
                <label for="milestones">Key Milestones Achieved</label>
                <textarea id="milestones" name="milestones"></textarea>
            </div>

            <div class="form-group">
                <label for="team">Team Members (Names and Roles)</label>
                <textarea id="team" name="team"></textarea>
            </div>

            <div class="form-group">
                <label for="contact-email">Contact Email</label>
                <input type="email" id="contact-email" name="contact_email" required>
            </div>

            <div class="form-group">
                <label for="contact-phone">Contact Phone</label>
                <input type="tel" id="contact-phone" name="contact_phone">
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
</body>
</html>