<!DOCTYPE html>
<htm; lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Founder Dashboard | StartupFund</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
          <div class="flex space-x-7">
            <a href="index.php" class="flex items-center py-4 px-2">
              <span class="font-semibold text-gray-500 text-2xl"
                >StartupFund</span
              >
            </a>
          </div>
          <div class="hidden md:flex items-center space-x-1">
            <a
              href="index.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >Home</a
            >
            <a
              href="listings.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >Invest</a
            >
            <a
              href="founder-dash.php"
              class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold"
              >For Founders</a
            >
            <a
              href="about.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >About Us</a
            >
            <a
              href="contact.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >Contact</a
            >
          </div>
          <div class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button">
              <svg
                class="w-6 h-6 text-gray-500"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mx-auto px-4 py-8">
      <div class="flex flex-col md:flex-row gap-8">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-6">
              <div
                class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4"
              >
                JD
              </div>
              <div>
                <h3 class="font-bold">Jane Doe</h3>
                <p class="text-gray-600 text-sm">Founder & CEO</p>
                <p class="text-blue-500 text-sm">AI Robotics Inc.</p>
              </div>
            </div>

            <div class="mb-6">
              <div class="flex justify-between items-center mb-2">
                <span class="font-semibold">Profile Completion</span>
                <span class="text-blue-500 font-bold">72%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div
                  class="bg-blue-500 h-2 rounded-full"
                  style="width: 72%"
                ></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li>
                <a
                  href="founder-dash.php"
                  class="flex items-center p-2 text-blue-500 bg-blue-50 rounded-lg"
                >
                  <i class="fas fa-tachometer-alt mr-3"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a
                  href="my-startup.php"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-building mr-3"></i>
                  <span>My Startup</span>
                </a>
              </li>
              <li>
                <a
                  href="campaign.php"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-chart-line mr-3"></i>
                  <span>Campaign</span>
                </a>
              </li>
              <li>
                <a
                  href="investors.php"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-users mr-3"></i>
                  <span>Investors</span>
                </a>
              </li>
              <li>
                <a
                  href="documents.php"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-file-alt mr-3"></i>
                  <span>Documents</span>
                </a>
              </li>
              <li>
                <a
                  href="settings.php"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-cog mr-3"></i>
                  <span>Settings</span>
                </a>
              </li>
            </ul>

            <div class="mt-8">
              <a
                href="new-campaign.php"
                class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
              >
                <i class="fas fa-plus mr-2"></i> New Campaign
              </a>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-3/4">
          <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h1 class="text-2xl font-bold mb-6">Founder Dashboard</h1>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
              <div class="bg-blue-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Total Raised</p>
                    <h3 class="text-2xl font-bold">$1,250,000</h3>
                  </div>
                  <div class="bg-blue-100 p-3 rounded-full">
                    <i class="fas fa-money-bill-wave text-blue-500 text-xl"></i>
                  </div>
                </div>
              </div>
              <div class="bg-green-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Investors</p>
                    <h3 class="text-2xl font-bold">24</h3>
                  </div>
                  <div class="bg-green-100 p-3 rounded-full">
                    <i class="fas fa-user-tie text-green-500 text-xl"></i>
                  </div>
                </div>
              </div>
              <div class="bg-purple-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Days Left</p>
                    <h3 class="text-2xl font-bold">15</h3>
                  </div>
                  <div class="bg-purple-100 p-3 rounded-full">
                    <i class="fas fa-clock text-purple-500 text-xl"></i>
                  </div>
                </div>
              </div>
            </div>

            <!-- Funding Progress -->
            <div class="mb-8">
              <h2 class="text-xl font-semibold mb-4">Funding Progress</h2>
              <div class="bg-gray-50 p-6 rounded-lg">
                <div class="mb-4">
                  <div class="flex justify-between text-sm mb-1">
                    <span>Current: $1,250,000 (62.5%)</span>
                    <span>Goal: $2,000,000</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-4">
                    <div
                      class="bg-blue-500 h-4 rounded-full"
                      style="width: 62.5%"
                    ></div>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <h3 class="font-semibold mb-2">Top Investors</h3>
                    <ul class="space-y-3">
                      <li class="flex justify-between items-center">
                        <span>TechVentures Capital</span>
                        <span class="font-bold">$250,000</span>
                      </li>
                      <li class="flex justify-between items-center">
                        <span>Angel Investor Group</span>
                        <span class="font-bold">$200,000</span>
                      </li>
                      <li class="flex justify-between items-center">
                        <span>John Smith</span>
                        <span class="font-bold">$150,000</span>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="font-semibold mb-2">Recent Investments</h3>
                    <ul class="space-y-3">
                      <li class="flex justify-between items-center">
                        <span>Sarah Johnson</span>
                        <span class="font-bold">$50,000</span>
                      </li>
                      <li class="flex justify-between items-center">
                        <span>FutureTech Fund</span>
                        <span class="font-bold">$75,000</span>
                      </li>
                      <li class="flex justify-between items-center">
                        <span>Michael Brown</span>
                        <span class="font-bold">$25,000</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Items -->
            <div class="mb-8">
              <h2 class="text-xl font-semibold mb-4">Action Items</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                  class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-500"
                >
                  <div class="flex items-start">
                    <div class="bg-yellow-100 p-2 rounded-full mr-4">
                      <i class="fas fa-exclamation text-yellow-500"></i>
                    </div>
                    <div>
                      <h3 class="font-semibold mb-1">Update Financials</h3>
                      <p class="text-gray-600 text-sm">
                        Your Q2 financial statements are due for submission.
                      </p>
                      <a
                        href="update-financials.php"
                        class="text-blue-500 text-sm font-semibold mt-2 inline-block"
                        >Complete Now</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500"
                >
                  <div class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-4">
                      <i class="fas fa-bullhorn text-blue-500"></i>
                    </div>
                    <div>
                      <h3 class="font-semibold mb-1">Campaign Update</h3>
                      <p class="text-gray-600 text-sm">
                        Post an update to keep your investors engaged.
                      </p>
                      <a
                        href="campaign-update.php"
                        class="text-blue-500 text-sm font-semibold mt-2 inline-block"
                        >Post Update</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Resources -->
            <div>
              <h2 class="text-xl font-semibold mb-4">Resources</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a
                  href="fundraising-guide.php"
                  class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300"
                >
                  <div class="text-blue-500 mb-2">
                    <i class="fas fa-book text-xl"></i>
                  </div>
                  <h3 class="font-semibold mb-1">Fundraising Guide</h3>
                  <p class="text-gray-600 text-sm">
                    Learn how to optimize your fundraising campaign.
                  </p>
                </a>
                <a
                  href="legal-templates.php"
                  class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300"
                >
                  <div class="text-green-500 mb-2">
                    <i class="fas fa-file-contract text-xl"></i>
                  </div>
                  <h3 class="font-semibold mb-1">Legal Templates</h3>
                  <p class="text-gray-600 text-sm">
                    Download ready-to-use legal documents.
                  </p>
                </a>
                <a
                  href="pitch-deck-examples.php"
                  class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300"
                >
                  <div class="text-purple-500 mb-2">
                    <i class="fas fa-chart-pie text-xl"></i>
                  </div>
                  <h3 class="font-semibold mb-1">Pitch Deck Examples</h3>
                  <p class="text-gray-600 text-sm">
                    View successful pitch decks from other startups.
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer (same as index.php) -->
    <footer class="bg-gray-800 text-white py-12">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div>
            <h3 class="text-xl font-semibold mb-4">StartupFund</h3>
            <p class="text-gray-400">
              The leading platform connecting innovative startups with visionary
              investors.
            </p>
          </div>
          <div>
            <h4 class="font-semibold mb-4">For Startups</h4>
            <ul class="space-y-2">
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >How It Works</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white">Pricing</a>
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >Success Stories</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white">Resources</a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4">For Investors</h4>
            <ul class="space-y-2">
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >Browse Startups</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >Due Diligence</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >Investment Process</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white"
                  >Portfolio Tracking</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4">Company</h4>
            <ul class="space-y-2">
              <li>
                <a href="about.php" class="text-gray-400 hover:text-white"
                  >About Us</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white">Team</a>
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white">Careers</a>
              </li>
              <li>
                <a href="contact.php" class="text-gray-400 hover:text-white"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div
          class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center"
        >
          <p class="text-gray-400">© 2023 StartupFund. All rights reserved.</p>
          <div class="flex space-x-6 mt-4 md:mt-0">
            <a href="#" class="text-gray-400 hover:text-white"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="#" class="text-gray-400 hover:text-white"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="#" class="text-gray-400 hover:text-white"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="#" class="text-gray-400 hover:text-white"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</php>
