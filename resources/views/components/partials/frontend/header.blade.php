<div>
    {{ $slot }}

    <!-- Desktop Navbar -->
    <div class="bg-gray-100 font-sans w-full m-0 xxsm:max-md:hidden">
        <div class="bg-white shadow">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <div>
                        <a href="{{ route('site.home') }}" class="object-cover">
                            <img src="{{ asset('frontend/assets/images/upload/645e53bbf24a8.png') }}"
                                class="object-scale-down h-10" alt="Logo">
                        </a>

                    </div>

                    <!-- Nav Links -->
                    <div class="sm:flex sm:items-center">
                        <ul class="navbar-nav flex space-x-4 xxsm:max-xl:hidden">
                            <!-- Home -->
                            <li class="nav-item">
                                <a href="{{ route('site.home') }}"
                                    class="nav-link md:px-1 font-poppins text-base text-gray-700 {{ request()->routeIs('site.home') ? 'active' : '' }}">
                                    Home
                                </a>
                            </li>


                            <!-- Events -->
                            <li class="nav-item">
                                <a href="{{ route('site.events') }}"
                                    class="nav-link md:px-1 font-poppins text-base text-gray-700 {{ request()->routeIs('site.events') ? 'active' : '' }}">
                                    Events
                                </a>
                            </li>
                            <!-- Blog -->
                            <li class="nav-item">
                                <a href="{{ url('blog') }}"
                                    class="nav-link md:px-1 font-poppins text-base text-gray-700 {{ request()->is('blog') ? 'active' : '' }}">
                                    Blog
                                </a>
                            </li>
                            <!-- Category -->
                            <li class="xxsm:max-lg:hidden nav-item  ">
                                <div class="relative inline-block text-left">
                                    <a href="#"
                                        class="nav-link md:px-1 capitalize font-poppins font-normal text-base leading-6 text-gray flex focus:outline-none categories"
                                        id="">Categories
                                        <img src="https://eventrights.saasmonks.in/images/dropdown.png" alt=""
                                            class=" ml-1 h-2 w-3 mt-2">
                                    </a>
                                    <div
                                        class="categoriesClass hidden origin-top-left absolute left-0 w-44 rounded-md shadow-2xl z-30">
                                        <div class="rounded-md bg-white shadow-lg p-3">
                                            <div class="">
                                                {{-- Loop through categories --}}
                                                @foreach ($categories as $category)
                                                    <div class="flex items-left justify-left">
                                                        <a href="{{ route('category', $category->id) }}"
                                                            class="flex items-left text-base font-poppins font-normal leading-5 capitalize p-2 hover:bg-primary-light rounded-md w-full">
                                                            {{ $category->name }}
                                                        </a>
                                                    </div>
                                                @endforeach

                                                {{-- All Categories --}}
                                                <div class="flex items-left justify-left mt-1 border-t pt-1">
                                                    <a href="{{ url('category/all') }}"
                                                        class="flex items-left text-base font-poppins font-normal leading-5 capitalize p-2 hover:bg-primary-light rounded-md w-full {{ request()->is('category/all') ? 'bg-gray-200 font-bold' : '' }}">
                                                        All Categories
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            {{-- All Categories --}}



                            <!-- Contact Us -->
                            <li class="nav-item">
                                <a href="{{ url('contact-us') }}"
                                    class="nav-link md:px-1 font-poppins text-base text-gray-700 {{ request()->is('contact-us') ? 'active' : '' }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Search & Auth Buttons -->
                    <div class="sm:flex sm:items-center sm:gap-3">
                        <form action="https://eventrights.saasmonks.in/user/search_event" method="post"
                            class="relative">
                            @csrf
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <img src="https://eventrights.saasmonks.in/images/search.svg" class="w-5 h-5"
                                    alt="">
                            </div>
                            <input type="search" name="search"
                                class="block p-2 pl-10 text-gray-700 bg-white border border-gray-300 rounded-md xxsm:w-full sm:w-48 lg:w-72"
                                placeholder="Search.." required>
                        </form>
                        <div>
                            @if (Route::has('login'))
                                @auth
                                    @if (auth()->user()->user_role === 'organizer')
                                        <a href="{{ route('dashboard') }}"
                                            class="px-5 py-2 bg-primary text-white rounded-md font-poppins text-base mr-2">Organizer
                                            Dashboard</a>
                                    @else
                                        <a href="{{ route('profile.edit') }}"
                                            class="px-5 py-2 bg-primary text-white rounded-md font-poppins text-base mr-2">User
                                            Dashboard</a>
                                    @endif
                                    <form method="POST" action="{{ route('logout') }}" class="inline-block">
                                        @csrf
                                        <button type="submit"
                                            class="px-5 py-2 bg-red-600 text-white rounded-md font-poppins text-base">Logout</button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="px-5 py-2 bg-primary text-white rounded-md font-poppins text-base mr-2">Sign
                                        In</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="px-5 py-2 bg-primary text-white rounded-md font-poppins text-base">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
