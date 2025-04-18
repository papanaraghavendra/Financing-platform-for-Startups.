<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | StartupFund</title>
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
              class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300"
              >About Us</a
            >
            <a
              href="contact.php"
              class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold"
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
        <h1 class="text-4xl font-bold mb-6">Contact Us</h1>
        <p class="text-xl mb-8">
          We'd love to hear from you! Reach out with questions, feedback, or
          partnership opportunities.
        </p>
      </div>
    </div>

    <!-- Contact Content -->
    <div class="container mx-auto px-4 py-16">
      <div class="flex flex-col md:flex-row gap-12">
        <!-- Contact Form -->
        <div class="w-full md:w-1/2">
          <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>

            <form>
              <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium mb-2"
                  >Your Name</label
                >
                <input
                  type="text"
                  id="name"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>

              <div class="mb-6">
                <label for="email" class="block text-gray-700 font-medium mb-2"
                  >Email Address</label
                >
                <input
                  type="email"
                  id="email"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>

              <div class="mb-6">
                <label
                  for="subject"
                  class="block text-gray-700 font-medium mb-2"
                  >Subject</label
                >
                <select
                  id="subject"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                  <option>General Inquiry</option>
                  <option>Investor Relations</option>
                  <option>Startup Support</option>
                  <option>Technical Support</option>
                  <option>Partnerships</option>
                  <option>Press Inquiries</option>
                </select>
              </div>

              <div class="mb-6">
                <label
                  for="message"
                  class="block text-gray-700 font-medium mb-2"
                  >Your Message</label
                >
                <textarea
                  id="message"
                  rows="5"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
              </div>

              <button
                type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg font-bold hover:bg-blue-600 transition duration-300"
              >
                Send Message
              </button>
            </form>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="w-full md:w-1/2">
          <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Contact Information</h2>

            <div class="space-y-6">
              <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                  <i class="fas fa-map-marker-alt text-blue-500"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-lg mb-1">Our Office</h3>
                  <p class="text-gray-600">
                    123 Startup Street<br />San Francisco, CA 94107<br />United
                    States
                  </p>
                </div>
              </div>

              <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                  <i class="fas fa-phone-alt text-blue-500"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-lg mb-1">Phone</h3>
                  <p class="text-gray-600">
                    +1 (555) 123-4567<br />Mon-Fri, 9am-5pm PST
                  </p>
                </div>
              </div>

              <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                  <i class="fas fa-envelope text-blue-500"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-lg mb-1">Email</h3>
                  <p class="text-gray-600">
                    hello@startupfund.com<br />support@startupfund.com
                  </p>
                </div>
              </div>
            </div>

            <div class="mt-8">
              <h3 class="font-semibold text-lg mb-4">Follow Us</h3>
              <div class="flex space-x-4">
                <a
                  href="#"
                  class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300"
                >
                  <i class="fab fa-twitter"></i>
                </a>
                <a
                  href="#"
                  class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300"
                >
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a
                  href="#"
                  class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300"
                >
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a
                  href="#"
                  class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300"
                >
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>

            <div class="mt-8">
              <h3 class="font-semibold text-lg mb-4">Office Hours</h3>
              <ul class="space-y-2 text-gray-600">
                <li class="flex justify-between">
                  <span>Monday - Friday</span>
                  <span>9:00 AM - 5:00 PM</span>
                </li>
                <li class="flex justify-between">
                  <span>Saturday</span>
                  <span>10:00 AM - 2:00 PM</span>
                </li>
                <li class="flex justify-between">
                  <span>Sunday</span>
                  <span>Closed</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Map -->
      <div class="mt-16 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Find Us</h2>
        <div
          class="h-96 bg-gray-200 rounded-lg flex items-center justify-center"
        >
          <!-- Map placeholder - replace with actual map embed -->
          <p class="text-gray-500">
            Map of our location would be displayed here
          </p>
        </div>
      </div>

      <!-- FAQ Section -->
      <div class="mt-16">
        <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>

        <div class="space-y-4">
          <!-- FAQ Item 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <button class="flex justify-between items-center w-full text-left">
              <h3 class="font-semibold text-lg">
                How do I list my startup on your platform?
              </h3>
              <i class="fas fa-chevron-down text-blue-500"></i>
            </button>
            <div class="mt-4 text-gray-600 hidden">
              <p>
                To list your startup, first create a founder account. Once your
                account is verified, you can complete your startup profile and
                submit it for our review team to evaluate. The process typically
                takes 3-5 business days.
              </p>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <button class="flex justify-between items-center w-full text-left">
              <h3 class="font-semibold text-lg">
                What are the fees for using StartupFund?
              </h3>
              <i class="fas fa-chevron-down text-blue-500"></i>
            </button>
            <div class="mt-4 text-gray-600 hidden">
              <p>
                For startups, we charge a 5% success fee on funds raised through
                our platform. For investors, there are no fees to browse or
                invest - we make money through carried interest on select
                investment opportunities.
              </p>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <button class="flex justify-between items-center w-full text-left">
              <h3 class="font-semibold text-lg">
                How are startups vetted before being listed?
              </h3>
              <i class="fas fa-chevron-down text-blue-500"></i>
            </button>
            <div class="mt-4 text-gray-600 hidden">
              <p>
                All startups go through a rigorous vetting process that includes
                business model evaluation, market potential analysis, founder
                background checks, and financial review. Only about 30% of
                applicants are approved to list on our platform.
              </p>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <button class="flex justify-between items-center w-full text-left">
              <h3 class="font-semibold text-lg">
                What investment amounts are typical on your platform?
              </h3>
              <i class="fas fa-chevron-down text-blue-500"></i>
            </button>
            <div class="mt-4 text-gray-600 hidden">
              <p>
                Investment sizes vary widely based on the startup's stage.
                Typical rounds range from $25,000 for pre-seed companies to $2M+
                for Series A opportunities. The average investment per investor
                is about $50,000.
              </p>
            </div>
          </div>
        </div>

        <div class="text-center mt-8">
          <a
            href="#"
            class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-600 transition duration-300"
          >
            View All FAQs
          </a>
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

    <script>
      // FAQ toggle functionality
      document.querySelectorAll("button").forEach((button) => {
        button.addEventListener("click", () => {
          const faqItem = button.parentElement;
          const answer = faqItem.querySelector("div");
          const icon = button.querySelector("i");

          answer.classList.toggle("hidden");
          icon.classList.toggle("fa-chevron-down");
          icon.classList.toggle("fa-chevron-up");
        });
      });
    </script>
  </body>
</php>
