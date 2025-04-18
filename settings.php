<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | StartupFund</title>
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
        
        .settings-container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        
        .settings-header {
            margin-bottom: 2em;
            padding-bottom: 1em;
            border-bottom: 1px solid var(--border-color);
        }
        
        .settings-tabs {
            display: flex;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 2em;
        }
        
        .tab {
            padding: 1em 2em;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            font-weight: 600;
        }
        
        .tab.active {
            border-bottom-color: var(--primary-color);
            color: var(--primary-color);
        }
        
        .settings-section {
            background: white;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-bottom: 2em;
        }
        
        .section-title {
            font-size: 1.2em;
            margin-bottom: 1.5em;
            color: var(--text-color);
        }
        
        .form-group {
            margin-bottom: 1.5em;
        }
        
        label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: 500;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 0.8em;
            border: 1px solid var(--border-color);
            border-radius: 4px;
        }
        
        .btn {
            background: var(--primary-color);
            color: white;
            padding: 0.8em 1.5em;
            border-radius: 4px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="settings-container">
        <div class="settings-header">
            <h1>Account Settings</h1>
        </div>
        
        <div class="settings-tabs">
            <div class="tab active">Profile</div>
            <div class="tab">Security</div>
            <div class="tab">Notifications</div>
            <div class="tab">Billing</div>
        </div>
        
        <div class="settings-section">
            <div class="section-title">Profile Information</div>
            
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" value="Jane Doe">
            </div>
            
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" value="jane.doe@example.com">
            </div>
            
            <div class="form-group">
                <label>Company</label>
                <input type="text" value="AI Robotics Inc.">
            </div>
            
            <div class="form-group">
                <label>Position</label>
                <input type="text" value="Founder & CEO">
            </div>
            
            <button class="btn">Save Changes</button>
        </div>
        
        <div class="settings-section">
            <div class="section-title">Change Password</div>
            
            <div class="form-group">
                <label>Current Password</label>
                <input type="password">
            </div>
            
            <div class="form-group">
                <label>New Password</label>
                <input type="password">
            </div>
            
            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password">
            </div>
            
            <button class="btn">Update Password</button>
        </div>
        
        <div class="settings-section" id="security-section" style="display: none;">
            <div class="section-title">Security Settings</div>
            
            <div class="form-group">
                <label>Two-Factor Authentication</label>
                <div style="display: flex; align-items: center; gap: 1em;">
                    <label style="display: flex; align-items: center; gap: 0.5em;">
                        <input type="radio" name="2fa" value="enabled"> Enabled
                    </label>
                    <label style="display: flex; align-items: center; gap: 0.5em;">
                        <input type="radio" name="2fa" value="disabled" checked> Disabled
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Login History</label>
                <div style="background: var(--secondary-color); padding: 1em; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5em;">
                        <span>Chrome, Windows - 192.168.1.1</span>
                        <span>Today, 10:30 AM</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Safari, MacOS - 192.168.1.2</span>
                        <span>Yesterday, 2:15 PM</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Active Sessions</label>
                <div style="background: var(--secondary-color); padding: 1em; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span>Chrome, Windows - 192.168.1.1</span>
                        <button class="btn" style="padding: 0.3em 0.8em; background: #dc2626;">End Session</button>
                    </div>
                </div>
            </div>
            
            <button class="btn">Save Security Settings</button>
        </div>

        <div class="settings-section" id="notifications-section" style="display: none;">
            <div class="section-title">Notification Preferences</div>
            
            <div class="form-group">
                <label style="font-weight: 600; margin-bottom: 1em;">Email Notifications</label>
                <div style="margin-left: 1em;">
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox" checked> New investment opportunities
                    </label>
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox" checked> Funding milestones
                    </label>
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox"> Investor messages
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label style="font-weight: 600; margin-bottom: 1em;">Mobile Notifications</label>
                <div style="margin-left: 1em;">
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox" checked> Important alerts
                    </label>
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox"> Daily digest
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label style="font-weight: 600; margin-bottom: 1em;">System Notifications</label>
                <div style="margin-left: 1em;">
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox" checked> Platform updates
                    </label>
                    <label style="display: block; margin-bottom: 0.8em;">
                        <input type="checkbox" checked> Maintenance alerts
                    </label>
                </div>
            </div>
            
            <button class="btn">Save Notification Settings</button>
        </div>

        <div class="settings-section" id="billing-section" style="display: none;">
            <div class="section-title">Billing Information</div>
            
            <div class="form-group">
                <label>Current Plan</label>
                <div style="background: var(--secondary-color); padding: 1em; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <div style="font-weight: 600;">Startup Pro</div>
                            <div style="color: var(--light-text);">$99/month</div>
                        </div>
                        <button class="btn">Change Plan</button>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Payment Method</label>
                <div style="background: var(--secondary-color); padding: 1em; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <div style="font-weight: 600;">VISA •••• 4242</div>
                            <div style="color: var(--light-text);">Expires 12/2025</div>
                        </div>
                        <button class="btn" style="background: white; color: var(--primary-color); border: 1px solid var(--primary-color);">Update</button>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Billing History</label>
                <div style="background: var(--secondary-color); padding: 1em; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.8em;">
                        <span>December 2023</span>
                        <span>$99.00</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>November 2023</span>
                        <span>$99.00</span>
                    </div>
                </div>
            </div>
            
            <button class="btn">Update Billing</button>
        </div>

        <div class="settings-section">
            <div class="section-title">Notification Preferences</div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" checked> Email Notifications
                </label>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" checked> SMS Notifications
                </label>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox"> Push Notifications
                </label>
            </div>
            
            <button class="btn">Save Preferences</button>
        </div>
    </div>
</body>
</html>

<script>
    // Tab switching functionality
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            tab.classList.add('active');
            
            // Hide all sections
            document.querySelectorAll('.settings-section').forEach(section => {
                section.style.display = 'none';
            });
            
            // Show corresponding section
            if(tab.textContent === 'Profile') {
                document.querySelector('.settings-section').style.display = 'block';
            } else if(tab.textContent === 'Security') {
                document.getElementById('security-section').style.display = 'block';
            } else if(tab.textContent === 'Notifications') {
                document.getElementById('notifications-section').style.display = 'block';
            } else if(tab.textContent === 'Billing') {
                document.getElementById('billing-section').style.display = 'block';
            }
        });
    });
</script>