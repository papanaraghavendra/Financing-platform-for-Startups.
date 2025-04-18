<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startup Listings | StartupFund</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-50">
    <!-- Navigation (same as index.php) -->
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

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col md:flex-row gap-8">
        <!-- Filters Sidebar -->
        <div class="w-full md:w-1/4">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-6">Filters</h2>

            <div class="mb-6">
              <h3 class="font-semibold mb-3">Industry</h3>
              <select class="w-full p-2 border border-gray-300 rounded">
                <option>All Industries</option>
                <option>Technology</option>
                <option>Healthcare</option>
                <option>Fintech</option>
                <option>E-commerce</option>
                <option>Clean Energy</option>
              </select>
            </div>

            <div class="mb-6">
              <h3 class="font-semibold mb-3">Funding Stage</h3>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-500" />
                  <span class="ml-2">Pre-Seed</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-500" />
                  <span class="ml-2">Seed</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-500" />
                  <span class="ml-2">Series A</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-500" />
                  <span class="ml-2">Series B+</span>
                </label>
              </div>
            </div>

            <div class="mb-6">
              <h3 class="font-semibold mb-3">Investment Range</h3>
              <div class="flex items-center justify-between mb-2">
                <span>$10K</span>
                <span>$10M+</span>
              </div>
              <input
                type="range"
                class="w-full"
                min="10000"
                max="10000000"
                step="10000"
              />
            </div>

            <div class="mb-6">
              <h3 class="font-semibold mb-3">Location</h3>
              <select class="w-full p-2 border border-gray-300 rounded">
                <option>Any Location</option>
                <option>North America</option>
                <option>Europe</option>
                <option>Asia</option>
                <option>Africa</option>
                <option>South America</option>
              </select>
            </div>

            <button
              class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
            >
              Apply Filters
            </button>
          </div>
        </div>

        <!-- Startup Listings -->
        <div class="w-full md:w-3/4">
          <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Startup Investment Opportunities</h1>
            <div class="flex items-center">
              <span class="mr-2">Sort by:</span>
              <select class="p-2 border border-gray-300 rounded">
                <option>Newest First</option>
                <option>Funding Amount</option>
                <option>Closing Soon</option>
                <option>Most Popular</option>
              </select>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Startup Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="relative">
                <div class="h-48 bg-blue-500 flex items-center justify-center">
                  <i class="fas fa-robot text-white text-6xl"></i>
                </div>
                <div
                  class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                >
                  Trending
                </div>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-semibold">AI Robotics Inc.</h3>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded"
                    >Tech</span
                  >
                </div>
                <p class="text-gray-600 mb-4">
                  Revolutionizing warehouse automation with AI-powered robotics
                  solutions.
                </p>
                <div class="mb-4">
                  <div class="flex justify-between text-sm mb-1">
                    <span>Funding Progress</span>
                    <span>65%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                      class="bg-blue-500 h-2 rounded-full"
                      style="width: 65%"
                    ></div>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="block text-sm text-gray-500">Goal</span>
                    <span class="font-bold">$2,000,000</span>
                  </div>
                  <div>
                    <span class="block text-sm text-gray-500">Deadline</span>
                    <span class="font-bold">15 days left</span>
                  </div>
                </div>
                <div class="mt-6">
                  <a
                    href="startup.php"
                    class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    >View Details</a
                  >
                </div>
              </div>
            </div>

            <!-- Startup Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="relative">
                <div class="h-48 bg-green-500 flex items-center justify-center">
                  <i class="fas fa-leaf text-white text-6xl"></i>
                </div>
                <div
                  class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                >
                  Closing Soon
                </div>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-semibold">GreenTech Solutions</h3>
                  <span
                    class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded"
                    >Sustainability</span
                  >
                </div>
                <p class="text-gray-600 mb-4">
                  Sustainable packaging alternatives to reduce plastic waste
                  globally.
                </p>
                <div class="mb-4">
                  <div class="flex justify-between text-sm mb-1">
                    <span>Funding Progress</span>
                    <span>82%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                      class="bg-green-500 h-2 rounded-full"
                      style="width: 82%"
                    ></div>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="block text-sm text-gray-500">Goal</span>
                    <span class="font-bold">$1,500,000</span>
                  </div>
                  <div>
                    <span class="block text-sm text-gray-500">Deadline</span>
                    <span class="font-bold">5 days left</span>
                  </div>
                </div>
                <div class="mt-6">
                  <a
                    href="startup.php"
                    class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    >View Details</a
                  >
                </div>
              </div>
            </div>

            <!-- Startup Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="h-48 bg-purple-500 flex items-center justify-center">
                <i class="fas fa-brain text-white text-6xl"></i>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-semibold">NeuroTech Labs</h3>
                  <span
                    class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded"
                    >HealthTech</span
                  >
                </div>
                <p class="text-gray-600 mb-4">
                  Developing non-invasive brain-computer interfaces for medical
                  applications.
                </p>
                <div class="mb-4">
                  <div class="flex justify-between text-sm mb-1">
                    <span>Funding Progress</span>
                    <span>45%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                      class="bg-purple-500 h-2 rounded-full"
                      style="width: 45%"
                    ></div>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="block text-sm text-gray-500">Goal</span>
                    <span class="font-bold">$3,200,000</span>
                  </div>
                  <div>
                    <span class="block text-sm text-gray-500">Deadline</span>
                    <span class="font-bold">22 days left</span>
                  </div>
                </div>
                <div class="mt-6">
                  <a
                    href="startup.php"
                    class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    >View Details</a
                  >
                </div>
              </div>
            </div>

            <!-- Startup Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="h-48 bg-red-500 flex items-center justify-center">
                <i class="fas fa-utensils text-white text-6xl"></i>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-semibold">FoodGenius</h3>
                  <span
                    class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded"
                    >FoodTech</span
                  >
                </div>
                <p class="text-gray-600 mb-4">
                  AI-powered personalized meal planning and grocery delivery
                  service.
                </p>
                <div class="mb-4">
                  <div class="flex justify-between text-sm mb-1">
                    <span>Funding Progress</span>
                    <span>28%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                      class="bg-red-500 h-2 rounded-full"
                      style="width: 28%"
                    ></div>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="block text-sm text-gray-500">Goal</span>
                    <span class="font-bold">$750,000</span>
                  </div>
                  <div>
                    <span class="block text-sm text-gray-500">Deadline</span>
                    <span class="font-bold">18 days left</span>
                  </div>
                </div>
                <div class="mt-6">
                  <a
                    href="startup.php"
                    class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <div class="mt-10 flex justify-center">
            <nav class="flex items-center space-x-2">
              <a
                href="#"
                class="px-3 py-1 rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-100"
                >&laquo;</a
              >
              <a href="#" class="px-3 py-1 rounded-lg bg-blue-500 text-white"
                >1</a
              >
              <a
                href="#"
                class="px-3 py-1 rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-100"
                >2</a
              >
              <a
                href="#"
                class="px-3 py-1 rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-100"
                >3</a
              >
              <a
                href="#"
                class="px-3 py-1 rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-100"
                >&raquo;</a
              >
            </nav>
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
