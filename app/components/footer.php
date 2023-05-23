<footer
  aria-label="Site Footer"
  class="bg-black lg:grid lg:grid-cols-5"
  >
  <div class="relative h-32 lg:col-span-2 lg:h-full invisible md:visible">
    <img
      src="https://github.com/unifiedorg/.github/blob/main/img/logo_bg-xd.png?raw=true"
      alt=""
      class="absolute inset-0 object-cover w-full h-full"
      />
  </div>
  <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
      <div>
        <p>
          <span
            class="text-xs tracking-wide uppercase text-gray-400"
            >
          Email
          </span>
          <a
            href="#"
            class="block text-2xl font-medium hover:opacity-75 text-white sm:text-3xl"
            >
          hello@unified.org.in
          </a>
        </p>
        <ul class="mt-8 space-y-1 text-sm text-gray-200">
          <li>Making the internet,</li>
          <li>better than ever before</li>
        </ul>
        <ul class="flex gap-6 mt-8">
          <li>
            <a
              href="https://github.com/unifiedorg"
              rel="noreferrer"
              target="_blank"
              class="transition hover:opacity-75 text-gray-200"
              >
              <span class="sr-only">GitHub</span>
              <svg
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
                >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                  />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div>
          <p class="font-medium text-white">Main</p>
          <nav aria-label="Footer Navigation - Main" class="mt-6">
            <ul class="space-y-4 text-sm">
              <li>
                <a
                  href="https://unified.org.in/"
                  class="relative font-medium text-gray-300 hover:text-white before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-right before:scale-x-0 before:bg-gradient-to-l before:from-pink-500 before:via-red-500 before:to-yellow-500 before:transition hover:before:scale-100"
                  >
                Home
                </a>
              </li>
              <li>
                <a
                  href="https://blog.unified.org.in"
                  class="relative font-medium text-gray-300 hover:text-white before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-right before:scale-x-0 before:bg-gradient-to-l before:from-pink-500 before:via-red-500 before:to-yellow-500 before:transition hover:before:scale-100"
                  >
                Blog
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div>
          <p class="font-medium text-white">Team</p>
          <nav aria-label="Footer Navigation - Team" class="mt-6">
            <ul class="space-y-4 text-sm">
              <li>
                <a
                  href="https://unified.org.in/#about"
                  class="relative font-medium text-gray-300 hover:text-white before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-right before:scale-x-0 before:bg-gradient-to-l before:from-pink-500 before:via-red-500 before:to-yellow-500 before:transition hover:before:scale-100"
                  >
                About
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="pt-12 mt-12 border-t border-gray-800">
      <div class="sm:flex sm:items-center sm:justify-between">
        <nav aria-label="Footer Navigation - Support">
          <ul class="flex flex-wrap gap-4 text-xs">
            <li>
              <a
                href="https://unified.org.in/toc"
                class="relative font-medium text-gray-500 before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-right before:scale-x-0 before:bg-gradient-to-l before:from-pink-500 before:via-red-500 before:to-yellow-500 before:transition hover:before:scale-100 hover:text-gray-400"
                >
              Terms & Conditions
              </a>
            </li>
            <li>
              <a
                href="https://unified.org.in/privacy"
                class="relative font-medium text-gray-500 before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-right before:scale-x-0 before:bg-gradient-to-l before:from-pink-500 before:via-red-500 before:to-yellow-500 before:transition hover:before:scale-100 hover:text-gray-400"
                >
              Privacy Policy
              </a>
            </li>
          </ul>
        </nav>
        <p class="mt-8 text-xs text-gray-400 sm:mt-0">
          &copy; <?= date("Y") ?> Unified Org. All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
