<?php
    $page = service('uri')->getSegment(1);
?>

<header class="bg-white">

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="flex h-16 items-center justify-between">

      <div class="flex-1 md:flex md:items-center md:gap-12">

        <a class="text-2xl block text-blue-600" href="/">

          Inventory Management
         
        </a>
      </div>

      <div class="md:flex md:items-center md:gap-12">

        <nav aria-label="Global" class="hidden md:block">

          <ul class="flex items-center gap-6 text-sm">

            <li>
              <a 
              class="transition <?= $page === '' ? 'text-blue-600 hover:text-blue-500': ' text-gray-500 hover:text-gray-400' ?>" " 
              href="/"> Home </a>
            </li>

            <li>
              <a class="
              transition <?= $page === 'about' ? 'text-blue-600 hover:text-blue-500': ' text-gray-500 hover:text-gray-400' ?>" 
              href="/about"
              > About </a>
            </li>       

          </ul>

        </nav>

        <div class="flex items-center gap-4">

          <div class="sm:flex sm:gap-4">

            <a
              class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-blue-500"
              href="/auth/login"
            >
              Login
            </a>

          </div>

          <div class="sm:flex sm:gap-4">

            <a
              class="rounded-md bg-yellow-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-yellow-500"
              href="/auth/register"
            >
              Register
            </a>

          </div>

          <div class="block md:hidden">
            
            <button
              class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
            >
              <span class="sr-only"> Toggle menu </span>

              <svg
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>

            </button>

          </div>

        </div>

      </div>

    </div>

  </div>

</header>