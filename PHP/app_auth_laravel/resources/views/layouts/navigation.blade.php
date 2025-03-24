<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <!-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> -->
                         <img src="data:image/jpeg;base64,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"
                            alt="" srcset="" id="imgHeader" style="width:75px; height:auto;">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <!-- {{ __('Dashboard') }} -->
                        Home
                    </x-nav-link>
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        <!-- {{ __('Dashboard') }} -->
                        Perfil
                    </x-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link> -->

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
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

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <!-- {{ __('Dashboard') }} -->
                  Home
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
