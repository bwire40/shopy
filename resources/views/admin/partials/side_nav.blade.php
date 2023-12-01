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
        <a href="{{ route('products.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
            <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
            Products
        </a>
        {{--
        <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
    </nav>

</aside>
