<nav class="sticky top-0 flex items-center justify-between px-4 py-4 shadow-sm bg-white border-b md:px-8">
    <a href="/" class="flex items-center gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="w-6 h-6">
            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
            <circle cx="9" cy="9" r="2"></circle>
             <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
        </svg>
        <h1 class="text-lg font-semibold">AsFrammed</h1>
    </a>
    <form class="flex items-center space-x-2">
        <input class="flex h-10 px-3 py-2 text-sm border border-gray-300 rounded-md w-80 placeholder:text-sm placeholder:font-thin focus-visible:outline-none focus:border-gray-200 focus:ring focus:ring-1 focus:ring-gray-300 focus:ring-offset-2"
            placeholder="Search images..."
            type="search" />
        <button type="button" class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                class="w-5 h-5"> <circle cx="11" cy="11" r="8"></circle> 
                <path d="m21 21-4.3-4.3"></path> </svg>
        </button>
    </form>
    <div class="flex items-center space-x-4">
        <div class="after:content-['|'] after:ml-4 hidden md:flex space-x-4">
            <a class="text-base font-normal hover:font-medium hover:underline-offset-8 hover:underline"      
                href="#">
                Explore
            </a>
            @auth
            <a class="text-base font-normal hover:font-medium hover:underline-offset-8 hover:underline"      
                hx-get="{{ route('stories.create') }}"
                hx-target="main"
                hx-swap="afterbegin">
                Create
            </a>
            @else
            <a class="text-base font-normal hover:font-medium hover:underline-offset-8 hover:underline"      
                href="{{ route('stories.create') }}">
                Create
            </a>
            @endauth
        </div>

        @auth

        <div class="hidden sm:flex sm:items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                        <x-user-icon />

                        <div class="ml-1">
                            <svg class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.index', auth()->user())">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Edit account') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST"
                        action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        
        @else    
        <a class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors bg-gray-700 rounded-md hover:bg-gray-800"
            href="{{ route('login') }}"> Log in </a>
        <a class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-transparent border rounded-md hover:bg-gray-100"
            href="{{ route('register') }}">Sing Up</a>
        @endauth
    </div>
</nav>
