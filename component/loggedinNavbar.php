<header class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex-1 md:flex md:items-center md:gap-12">
        <a class="block text-teal-600" href="index.php">
          <span class="sr-only">Home</span>
          <img src="assets/favicon.png" class="h-16" alt="">
        </a>
      </div>

      <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> About </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Careers </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> History </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Services </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projects </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Blog </a>
            </li>
          </ul>
        </nav>

        <div class="hidden md:relative md:block">
            <button
              type="submit"
              class="overflow-hidden rounded-full border border-gray-300 shadow-inner"
              onclick="toggleProfile()"
            >
            <span class="sr-only">Toggle dashboard menu</span>

            <img
              src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt=""
              class="size-10 object-cover"
            />
          </button>

          <div
            class="absolute end-0 z-10 mt-0.5 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg hidden"
            role="menu"
            id="toggleProfile"
          >
            <div class="p-2">
              <a
                href="#"
                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                role="menuitem"
              >
                My profile
              </a>

              <a
                href="#"
                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                role="menuitem"
              >
                Billing summary
              </a>

              <a
                href="#"
                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                role="menuitem"
              >
                Team settings
              </a>
            </div>

            <div class="p-2">
              <form method="POST" action="actions/deleteSession.php">
                <button
                  type="submit"
                  class="flex w-full items-center gap-2 rounded-lg px-4 py-2 text-sm text-red-700 hover:bg-red-50"
                  role="menuitem"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                    />
                  </svg>

                  Logout
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="block md:hidden">
          <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>