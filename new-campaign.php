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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Campaign | StartupFund</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navigation (same as founder-dash.php) -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="index.php" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-2xl">StartupFund</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Home</a>
                    <a href="listings.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Invest</a>
                    <a href="founder-dash.php" class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">For Founders</a>
                    <a href="about.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About Us</a>
                    <a href="contact.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6">Create New Campaign</h1>
            
            <form action="process-campaign.php" method="POST" class="space-y-6">
                <!-- Campaign Details -->
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold">Campaign Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="campaign-name" class="block text-sm font-medium text-gray-700">Campaign Name</label>
                            <input type="text" id="campaign-name" name="campaign_name" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="funding-goal" class="block text-sm font-medium text-gray-700">Funding Goal ($)</label>
                            <input type="number" id="funding-goal" name="funding_goal" min="1000" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label for="campaign-description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="campaign-description" name="campaign_description" rows="4" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                </div>

                <!-- Campaign Duration -->
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold">Campaign Duration</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="start-date" class="block text-sm font-medium text-gray-700">Start Date</label>
                            <input type="date" id="start-date" name="start_date" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="end-date" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" id="end-date" name="end_date" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Investment Terms -->
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold">Investment Terms</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="valuation" class="block text-sm font-medium text-gray-700">Company Valuation ($)</label>
                            <input type="number" id="valuation" name="valuation" min="1000" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="min-investment" class="block text-sm font-medium text-gray-700">Minimum Investment ($)</label>
                            <input type="number" id="min-investment" name="min_investment" min="100" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="equity-offered" class="block text-sm font-medium text-gray-700">Equity Offered (%)</label>
                            <input type="number" id="equity-offered" name="equity_offered" min="1" max="100" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Campaign Media -->
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold">Campaign Media</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="cover-image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                            <input type="file" id="cover-image" name="cover_image" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        <div>
                            <label for="pitch-deck" class="block text-sm font-medium text-gray-700">Pitch Deck (PDF)</label>
                            <input type="file" id="pitch-deck" name="pitch_deck" accept=".pdf"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                    </div>
                    <div>
                        <label for="video-pitch" class="block text-sm font-medium text-gray-700">Video Pitch (URL)</label>
                        <input type="url" id="video-pitch" name="video_pitch"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="https://youtube.com/...">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full md:w-auto px-6 py-3 bg-blue-600 text-white font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-plus mr-2"></i> Create Campaign
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer (same as founder-dash.php) -->
    <footer class="bg-gray-800 text-white py-12">
        <!-- ... existing footer code ... -->
    </footer>
</body>
</html>