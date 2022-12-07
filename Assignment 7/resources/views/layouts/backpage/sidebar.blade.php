<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Menu
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('admin') }}" class="nav-link flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('admin_listdoctor') }}" class="nav-link flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user-md mr-3"></i>
            Doctor List
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-pills mr-3"></i>
            Medicine List
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="far fa-newspaper mr-3"></i>
            Information List
        </a>
        {{-- <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
    </nav>
</aside>