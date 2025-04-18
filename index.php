<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StartupFund - Financing Platform for Startups</title>
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
              class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold"
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
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >About Us</a
            >
            <a
              href="contact.php"
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >Contact</a
            >
            <?php if (isset($_SESSION['user'])): ?>
              <span class="ml-4 py-2 px-4 text-blue-600 font-bold">
                <?= htmlspecialchars($_SESSION['user']) ?>
              </span>
              <a
                href="logout.php"
                class="ml-2 py-2 px-5 bg-red-500 text-white rounded-lg font-bold hover:bg-red-600 transition duration-300"
                >Logout</a
              >
            <?php else: ?>
              <a
                href="login.php"
                class="ml-4 py-2 px-5 bg-blue-500 text-white rounded-lg font-bold hover:bg-blue-600 transition duration-300"
                >Login</a
              >
            <?php endif; ?>
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
        <h1 class="text-4xl font-bold mb-6">
          Connecting Startups with Investors
        </h1>
        <p class="text-xl mb-8">
          The premier platform for early-stage funding and investment
          opportunities
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
          <a
            href="founder-dash.php"
            class="bg-white text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition duration-300"
            >Raise Capital</a
          >
          <a
            href="listings.php"
            class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition duration-300"
            >Browse Startups</a
          >
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          How It Works
        </h2>
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <div class="flex-1 text-center px-4 py-6 rounded-lg shadow-lg">
            <div class="text-blue-500 mb-4">
              <i class="fas fa-lightbulb text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">For Startups</h3>
            <p class="text-gray-600">
              Create your profile, showcase your business, and connect with
              potential investors who believe in your vision.
            </p>
          </div>
          <div class="flex-1 text-center px-4 py-6 rounded-lg shadow-lg">
            <div class="text-blue-500 mb-4">
              <i class="fas fa-chart-line text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">For Investors</h3>
            <p class="text-gray-600">
              Discover vetted startups, diversify your portfolio, and invest in
              the next big thing at an early stage.
            </p>
          </div>
          <div class="flex-1 text-center px-4 py-6 rounded-lg shadow-lg">
            <div class="text-blue-500 mb-4">
              <i class="fas fa-handshake text-4xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Secure Platform</h3>
            <p class="text-gray-600">
              Our secure platform ensures transparent deals with legal
              frameworks to protect both founders and investors.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Startups -->
    <section class="py-16 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          Featured Startups
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Startup Card 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-blue-500 h-32 flex items-center justify-center">
              <i class="fas fa-robot text-white text-6xl"></i>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">AI Robotics Inc.</h3>
              <p class="text-gray-600 mb-4">
                Revolutionizing warehouse automation with AI-powered robotics
                solutions.
              </p>
              <div class="flex justify-between items-center">
                <span class="text-blue-500 font-bold">$2M raised</span>
                <a
                  href="startup.php"
                  class="text-blue-500 hover:text-blue-700 font-semibold"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Startup Card 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-green-500 h-32 flex items-center justify-center">
              <i class="fas fa-leaf text-white text-6xl"></i>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">GreenTech Solutions</h3>
              <p class="text-gray-600 mb-4">
                Sustainable packaging alternatives to reduce plastic waste
                globally.
              </p>
              <div class="flex justify-between items-center">
                <span class="text-blue-500 font-bold">$1.5M raised</span>
                <a
                  href="startup.php"
                  class="text-blue-500 hover:text-blue-700 font-semibold"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Startup Card 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-purple-500 h-32 flex items-center justify-center">
              <i class="fas fa-brain text-white text-6xl"></i>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">NeuroTech Labs</h3>
              <p class="text-gray-600 mb-4">
                Developing non-invasive brain-computer interfaces for medical
                applications.
              </p>
              <div class="flex justify-between items-center">
                <span class="text-blue-500 font-bold">$3.2M raised</span>
                <a
                  href="startup.php"
                  class="text-blue-500 hover:text-blue-700 font-semibold"
                  >View Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-10">
          <a
            href="listings.php"
            class="bg-blue-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-600 transition duration-300"
            >View All Startups</a
          >
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
          Success Stories
        </h2>
        <div class="flex flex-col md:flex-row gap-8">
          <div class="flex-1 bg-gray-100 p-8 rounded-lg">
            <div class="flex items-center mb-4">
              <div
                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4"
              >
                JD
              </div>
              <div>
                <h4 class="font-semibold">Jane Doe</h4>
                <p class="text-gray-600">Founder, AI Robotics Inc.</p>
              </div>
            </div>
            <p class="text-gray-700 italic">
              "StartupFund connected us with the perfect investors who
              understood our vision. We raised $2M in just 3 months and are now
              scaling our operations globally."
            </p>
          </div>
          <div class="flex-1 bg-gray-100 p-8 rounded-lg">
            <div class="flex items-center mb-4">
              <div
                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4"
              >
                JS
              </div>
              <div>
                <h4 class="font-semibold">John Smith</h4>
                <p class="text-gray-600">Angel Investor</p>
              </div>
            </div>
            <p class="text-gray-700 italic">
              "I've invested in 5 startups through StartupFund's platform. The
              vetting process is thorough, and I've already seen 2x returns on
              my earliest investment."
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8">
          Join hundreds of startups and investors already growing together on
          our platform.
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

    <!-- Footer -->
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

    <script>
      // Mobile menu toggle
      const btn = document.querySelector(".mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");

      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>
  </body>
</php>