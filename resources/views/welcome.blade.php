<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet" />
      <!-- font -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  </head>

  <body class="bg-gray-100">

    <header>
    <!-- navbar -->
    <nav
      class="bg-white p-5 md:fixed w-full top-0 flex flex-col md:flex-row justify-between items-center">
          <!-- Logo -->
          <div class="flex items-center shrink-0">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
            </a>
        </div>

        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-nav-link :href="route('register')" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
          </x-nav-link>
          <x-nav-link :href="route('stories.index')" :active="request()->routeIs('stories.index')">
              {{ __('Stories') }}
          </x-nav-link>
          <x-nav-link :href="route('stories.create')" :active="request()->routeIs('stories.create')">
              {{ __('Create') }}
          </x-nav-link>
        </div>
      </nav>
    </header>

    <div class="text-blue-950 font-bold text-center text-3xl p-4">
      <h2>Find Your Experience</h2>
    </div>
  </body>
</html>
