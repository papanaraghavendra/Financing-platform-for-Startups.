<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Investor Dashboard | StartupFund</title>
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
              class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold"
              >Invest</a
            >
            <a
              href="founder-dash.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
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
                <h3 class="font-bold">John Doe</h3>
                <p class="text-gray-600 text-sm">Angel Investor</p>
                <p class="text-blue-500 text-sm">
                  Verified <i class="fas fa-check-circle ml-1"></i>
                </p>
              </div>
            </div>

            <div class="mb-6">
              <div class="flex justify-between items-center mb-2">
                <span class="font-semibold">Investor Score</span>
                <span class="text-blue-500 font-bold">87/100</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div
                  class="bg-blue-500 h-2 rounded-full"
                  style="width: 87%"
                ></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li>
                <a
                  href="investor-dash.php"
                  class="flex items-center p-2 text-blue-500 bg-blue-50 rounded-lg"
                >
                  <i class="fas fa-tachometer-alt mr-3"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-briefcase mr-3"></i>
                  <span>My Investments</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-heart mr-3"></i>
                  <span>Saved Startups</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-bell mr-3"></i>
                  <span>Notifications</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg"
                >
                  <i class="fas fa-cog mr-3"></i>
                  <span>Settings</span>
                </a>
              </li>
            </ul>

            <div class="mt-8">
              <a
                href="#"
                class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
              >
                <i class="fas fa-plus mr-2"></i> New Investment
              </a>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-3/4">
          <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h1 class="text-2xl font-bold mb-6">Investor Dashboard</h1>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
              <div class="bg-blue-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Total Invested</p>
                    <h3 class="text-2xl font-bold">$245,000</h3>
                  </div>
                  <div class="bg-blue-100 p-3 rounded-full">
                    <i class="fas fa-wallet text-blue-500 text-xl"></i>
                  </div>
                </div>
              </div>
              <div class="bg-green-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Current Value</p>
                    <h3 class="text-2xl font-bold">$387,500</h3>
                  </div>
                  <div class="bg-green-100 p-3 rounded-full">
                    <i class="fas fa-chart-line text-green-500 text-xl"></i>
                  </div>
                </div>
              </div>
              <div class="bg-purple-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-gray-600 text-sm">Portfolio</p>
                    <h3 class="text-2xl font-bold">7 Startups</h3>
                  </div>
                  <div class="bg-purple-100 p-3 rounded-full">
                    <i
                      class="fas fa-project-diagram text-purple-500 text-xl"
                    ></i>
                  </div>
                </div>
              </div>
            </div>

            <!-- Portfolio Performance -->
            <div class="mb-8">
              <h2 class="text-xl font-semibold mb-4">Portfolio Performance</h2>
              <div class="bg-gray-50 p-6 rounded-lg">
                <!-- Placeholder for chart -->
                <div
                  class="h-64 bg-white border border-gray-200 rounded-lg flex items-center justify-center"
                >
                  <p class="text-gray-500">Portfolio Growth Chart</p>
                </div>
              </div>
            </div>

            <!-- Recent Investments -->
            <div class="mb-8">
              <h2 class="text-xl font-semibold mb-4">Recent Investments</h2>
              <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                  <thead>
                    <tr class="bg-gray-100">
                      <th class="py-3 px-4 text-left">Startup</th>
                      <th class="py-3 px-4 text-left">Date</th>
                      <th class="py-3 px-4 text-left">Amount</th>
                      <th class="py-3 px-4 text-left">Status</th>
                      <th class="py-3 px-4 text-left">Return</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                      <td class="py-3 px-4">AI Robotics Inc.</td>
                      <td class="py-3 px-4">15 Jan 2023</td>
                      <td class="py-3 px-4">$50,000</td>
                      <td class="py-3 px-4">
                        <span
                          class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                          >Active</span
                        >
                      </td>
                      <td class="py-3 px-4 text-green-500 font-semibold">
                        +42%
                      </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                      <td class="py-3 px-4">GreenTech Solutions</td>
                      <td class="py-3 px-4">22 Nov 2022</td>
                      <td class="py-3 px-4">$75,000</td>
                      <td class="py-3 px-4">
                        <span
                          class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                          >Active</span
                        >
                      </td>
                      <td class="py-3 px-4 text-green-500 font-semibold">
                        +28%
                      </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                      <td class="py-3 px-4">FoodGenius</td>
                      <td class="py-3 px-4">05 Sep 2022</td>
                      <td class="py-3 px-4">$30,000</td>
                      <td class="py-3 px-4">
                        <span
                          class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs"
                          >Pending</span
                        >
                      </td>
                      <td class="py-3 px-4 text-gray-500 font-semibold">-</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      <td class="py-3 px-4">NeuroTech Labs</td>
                      <td class="py-3 px-4">18 Jul 2022</td>
                      <td class="py-3 px-4">$90,000</td>
                      <td class="py-3 px-4">
                        <span
                          class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                          >Active</span
                        >
                      </td>
                      <td class="py-3 px-4 text-green-500 font-semibold">
                        +65%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Recommended Startups -->
            <div>
              <h2 class="text-xl font-semibold mb-4">Recommended For You</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                  class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-300"
                >
                  <div class="flex items-center mb-3">
                    <div
                      class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white mr-3"
                    >
                      <i class="fas fa-car text-xl"></i>
                    </div>
                    <div>
                      <h3 class="font-semibold">AutoDrive</h3>
                      <p class="text-gray-600 text-sm">
                        Autonomous Vehicle Tech
                      </p>
                    </div>
                  </div>
                  <p class="text-gray-600 mb-4 text-sm">
                    Developing next-gen autonomous driving systems for
                    commercial vehicles.
                  </p>
                  <div class="flex justify-between items-center">
                    <span class="text-blue-500 font-bold">$1.2M raised</span>
                    <a
                      href="startup.php"
                      class="text-blue-500 hover:text-blue-700 text-sm font-semibold"
                      >View Details</a
                    >
                  </div>
                </div>
                <div
                  class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-300"
                >
                  <div class="flex items-center mb-3">
                    <div
                      class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white mr-3"
                    >
                      <i class="fas fa-dna text-xl"></i>
                    </div>
                    <div>
                      <h3 class="font-semibold">GeneCure</h3>
                      <p class="text-gray-600 text-sm">Biotechnology</p>
                    </div>
                  </div>
                  <p class="text-gray-600 mb-4 text-sm">
                    CRISPR-based gene therapies for rare genetic disorders.
                  </p>
                  <div class="flex justify-between items-center">
                    <span class="text-blue-500 font-bold">$3.5M raised</span>
                    <a
                      href="startup.php"
                      class="text-blue-500 hover:text-blue-700 text-sm font-semibold"
                      >View Details</a
                    >
                  </div>
                </div>
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
