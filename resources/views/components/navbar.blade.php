<nav class="shadow-md bg-primary p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-.707-6.293a1 1 0 1 1 1.414-1.414A2 2 0 0 0 10 8a2 2 0 0 0-1.707 1.707z" />
            </svg>
            <span class="font-semibold text-xl ml-2 mr-6">Logo</span>

        </div>

        <!-- Navigation Links -->
        <div class="hidden md:block">
            <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                Home
            </a>
            <a href="{{ route('dashboard') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                Dashboard
            </a>
            <a href="{{ route('products.index') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                Products
            </a>
            <a href="{{ route('account') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300">
                Account
            </a>

        </div>

        <!-- Hamburger Menu for Mobile -->
        <div class="block md:hidden">
            <button class="text-gray-300 hover:text-white focus:outline-none">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M2 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1z" />
                </svg>
            </button>
        </div>
    </div>
</nav>
