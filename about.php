<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | StartupFund</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-50">
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
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >For Founders</a
            >
            <a
              href="about.php"
              class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold"
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

    <!-- Hero Section -->
    <div class="bg-blue-600 text-white py-20">
      <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold mb-6">About StartupFund</h1>
        <p class="text-xl mb-8">
          Empowering innovation by connecting visionary founders with strategic
          investors
        </p>
      </div>
    </div>

    <!-- Our Story -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h2>
            <p class="text-gray-600 mb-4">
              Founded in 2018, StartupFund began with a simple mission: to
              democratize access to startup funding and make the investment
              process more transparent and efficient.
            </p>
            <p class="text-gray-600 mb-4">
              What started as a small platform with a handful of startups has
              grown into a thriving community of over 5,000 founders and 15,000
              investors worldwide.
            </p>
            <p class="text-gray-600">
              We've facilitated over $250 million in funding to date, helping
              innovative companies scale and investors discover high-potential
              opportunities.
            </p>
          </div>
          <div class="md:w-1/2">
            <img
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
              alt="Team meeting"
              class="rounded-lg shadow-xl w-full h-auto"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-16 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          Our Mission & Values
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-blue-500 mb-4">
              <i class="fas fa-bullseye text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Our Mission</h3>
            <p class="text-gray-600">
              To break down barriers in startup financing by creating a
              transparent, efficient platform that connects the most promising
              companies with the right investors.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-green-500 mb-4">
              <i class="fas fa-lightbulb text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Innovation</h3>
            <p class="text-gray-600">
              We believe in the power of innovation to solve problems and create
              value. We're constantly improving our platform to better serve our
              community.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-purple-500 mb-4">
              <i class="fas fa-handshake text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Integrity</h3>
            <p class="text-gray-600">
              Trust is the foundation of our business. We maintain the highest
              standards of transparency and ethical conduct in all our
              operations.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          Meet The Team
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Team Member 1 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a"
              alt="Sarah Johnson"
              class="w-full h-64 object-cover"
            />
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1">Sarah Johnson</h3>
              <p class="text-blue-500 mb-3">CEO & Founder</p>
              <p class="text-gray-600">
                Former venture capitalist with 15 years experience in
                early-stage investing.
              </p>
              <div class="mt-4 flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-twitter"></i
                ></a>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e"
              alt="Michael Chen"
              class="w-full h-64 object-cover"
            />
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1">Michael Chen</h3>
              <p class="text-blue-500 mb-3">CTO</p>
              <p class="text-gray-600">
                Tech entrepreneur with expertise in fintech platforms and
                security.
              </p>
              <div class="mt-4 flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-github"></i
                ></a>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1573497019709-4a9d8a427f7a"
              alt="David Rodriguez"
              class="w-full h-64 object-cover"
            />
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1">David Rodriguez</h3>
              <p class="text-blue-500 mb-3">Head of Investor Relations</p>
              <p class="text-gray-600">
                Former investment banker with deep connections in the VC
                community.
              </p>
              <div class="mt-4 flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <a href="#" class="text-gray-500 hover:text-blue-500"
                  ><i class="fab fa-twitter"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-12">
          <a
            href="#"
            class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-600 transition duration-300"
          >
            View All Team Members
          </a>
        </div>
      </div>
    </section>

    <!-- Milestones -->
    <section class="py-16 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          Our Milestones
        </h2>

        <div class="relative">
          <!-- Timeline -->
          <div
            class="border-l-2 border-blue-500 absolute h-full left-1/2 transform -translate-x-1/2"
          ></div>

          <!-- Milestone items -->
          <div class="space-y-8">
            <!-- Milestone 1 -->
            <div
              class="relative flex items-center justify-between md:justify-start md:odd:flex-row-reverse"
            >
              <div
                class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white absolute left-1/2 -translate-x-1/2"
              ></div>
              <div class="w-5/12 bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Platform Launch</h3>
                <p class="text-gray-600">2018</p>
                <p class="text-gray-600 mt-2">
                  Launched with 50 startups and 200 investors on board.
                </p>
              </div>
            </div>

            <!-- Milestone 2 -->
            <div
              class="relative flex items-center justify-between md:justify-start md:odd:flex-row-reverse"
            >
              <div
                class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white absolute left-1/2 -translate-x-1/2"
              ></div>
              <div class="w-5/12 bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">$100M Funded</h3>
                <p class="text-gray-600">2020</p>
                <p class="text-gray-600 mt-2">
                  Crossed $100M in total funding facilitated through our
                  platform.
                </p>
              </div>
            </div>

            <!-- Milestone 3 -->
            <div
              class="relative flex items-center justify-between md:justify-start md:odd:flex-row-reverse"
            >
              <div
                class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white absolute left-1/2 -translate-x-1/2"
              ></div>
              <div class="w-5/12 bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Global Expansion</h3>
                <p class="text-gray-600">2021</p>
                <p class="text-gray-600 mt-2">
                  Expanded operations to Europe and Asia with localized
                  platforms.
                </p>
              </div>
            </div>

            <!-- Milestone 4 -->
            <div
              class="relative flex items-center justify-between md:justify-start md:odd:flex-row-reverse"
            >
              <div
                class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white absolute left-1/2 -translate-x-1/2"
              ></div>
              <div class="w-5/12 bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">250K Community</h3>
                <p class="text-gray-600">2023</p>
                <p class="text-gray-600 mt-2">
                  Reached 250,000 members in our global founder-investor
                  community.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Join Our Growing Community</h2>
        <p class="text-xl mb-8">
          Whether you're building the next big thing or looking to invest in
          innovation, we've got you covered.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
          <a
            href="founder-dash.php"
            class="bg-white text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition duration-300"
            >Apply as Founder</a
          >
          <a
            href="investor-dash.php"
            class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition duration-300"
            >Join as Investor</a
          >
        </div>
      </div>
    </section>

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
