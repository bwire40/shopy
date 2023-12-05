<aside class="relative bg-slate-800 h-screen w-64 hidden sm:block shadow-xl">

    <div class="p-6">
        <a href="{{ secure_url(route('home')) }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>{{ config('app.name') }}

        </a>

    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ secure_url(route('home')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>

        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
            <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                class="flex items-center justify-center" type="button">Categories
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </a>
        <!-- Dropdown menu -->
        <div id="dropdownDivider"
            class=" z-10 hidden divide-y bg-slate-800 divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                <li>
                    <a href="{{ route('categories.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
                        New Category
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
                        Manage Categories
                    </a>
                </li>
            </ul>

        </div>

        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
            <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
            <button id="dropdownDividerButton2" data-dropdown-toggle="dropdownDivider2"
                class="flex items-center justify-center" type="button">Products
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </a>

        <!-- Dropdown menu -->
        <div id="dropdownDivider2"
            class=" z-10 hidden divide-y bg-slate-800 w-11/12 divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton2">
                <li>
                    <a href="{{ route('products.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
                        New Product
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
                        Manage Products
                    </a>
                </li>
            </ul>

        </div>
    </nav>

</aside>
