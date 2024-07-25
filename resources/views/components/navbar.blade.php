<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Laravel 11</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <x-navbar-link href="/" :active="request()->is('/')">Home</x-navbar-link>
                <x-navbar-link href="/posts" :active="request()->is('posts')">Post</x-navbar-link>
                @if (Auth::check() && Auth::user()->is_admin)
                <x-navbar-link href="/admin" :active="request()->is('admin')">Admin</x-navbar-link>
                @endif
                @guest
                    <x-navbar-link href="{{ route('login') }}" :active="request()->is('login')">Login</x-navbar-link>
                    <x-navbar-link href="{{ route('register') }}" :active="request()->is('register')">Register</x-navbar-link>
                @endguest
                @auth
                <span class="font-semibold text-blue-600 dark:text-blue-400">{{Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                            <x-navbar-link href="{{ route('logout') }}" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </x-navbar-link>

                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
