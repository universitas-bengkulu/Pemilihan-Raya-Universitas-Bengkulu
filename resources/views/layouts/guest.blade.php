<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemira - Universitas Bengkulu</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/Logo.svg') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class=" font-[Poppins] antialiased leading-normal tracking-wide 2xl:text-xl bg-white pattern2 text-slate-900">

    <!-- Preloader Start -->
    <div x-data="{ show: false }" x-transition:enter="transition duration-700" style="z-index: 99;" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white rounded p-4" x-show="show">
        <!-- Preloader Start -->
        <div id="loader-wrapper">
            <div id="loader-logo">
                <div id="loader"></div>
            </div>
        </div>
        <!-- Preloader Start -->
    </div>
    <!-- Preloader Start -->

    <!-- navbar  -->
    <nav x-data="{isOpen: false }" class="fixed top-0   z-50 w-full     ">
        <!-- Top Bar -->
        <div id="top-bar" class="w-full     bg-gray-900 duration-500">
            <div class="flex   w-full     text-gray-300 space-x-4 text-sm py-2">
                <marquee behavior="" direction="">
                    <p>
                        {{ (!empty($contact))? $contact->marquee : 'Selamat Datang pada Sistem informasi Pemira - Universitas Bengkulu' }}
                    </p>
                </marquee>

            </div>
        </div>

        <div id="navbar" class="px-6 py-5 mx-auto duration-300 bg-[#E73530]   ">
            <div class="lg:flex lg:items-center lg:justify-between  ">
                <div class="flex items-center justify-between">
                    <!-- logo -->
                    <a href="{{ route('welcome') }}" class="flex items-center text-black   mx-4 md:ml-6">
                        <img src="{{ asset('assets/frontend/Logo.svg') }}">

                        <div class="ml-3  text-white">
                            <!-- update  -->

                            <strong class="text-xl md:text-3xl font-bold  text-white   uppercase">PEMIRA</strong>
                            <p class="text-sm md:text-[16px]   text-yellow-300      uppercase -mt-2
                                relative">
                                UNIVERSITAS BENGKULU</p>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-100 " aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>
                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-[#E73530]   md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto
                    lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center " id="list-menu">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8 ">
                        <a href="@yield('menu')#home" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Home</a>
                        <a href="@yield('menu')#about" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Tentang E-Voting</a>
                        <a href="@yield('menu')#cara" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Cara Memilih</a>
                        <a href="@yield('menu')#waktu" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Waktu Pelaksanaan</a>
                        <a href="{{ route('cekDpt') }}" class="px-3 py-2 mx-2 mt-2  @yield('cek-dpt', 'text-gray-100') text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Cek DPT</a>
                        <a href="{{route('mahasiswa.quick-count')}}" class="px-3 py-2 mx-2 mt-2  @yield('quick-count', 'text-gray-100') text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Quick Count</a>
                        @if(empty(Session::get('npm')))
                        <a href="{{ route('panda.login') }}" class=" py-2 mx-4 mt-2 text-white text-[14px] transition-colors duration-300 transform
                            lg:mt-0 bg-gradient-to-r from-orange-500 to-yellow-500 border border-white rounded-lg
                            hover:from-orange-600 hover:to-yellow-600 px-5 ">Login</a>
                        @else
                        <!-- Profile menu -->
                        <div x-data="{ isOpen: false }" class="relative inline-block md:ml-3 ml-5 mt-2 md:mt-0 ">
                            <button @click="isOpen = !isOpen" type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                                <img class="w-8 h-8 rounded-full ring-2 mr-1 ring-gray-300  " src="https://www.gravatar.com/avatar/{{ md5(Session::get('nama')) }}?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{!! str_replace('+', ' ', Session::get('nama')) !!}/128" alt="Bordered avatar">
                                <!-- <h3 class="ml-1  text-gray-800 md:text-sm  text-xs hidden lg:block    capitalize">
                                    nama mahasiswa
                                </h3> -->
                            </button>
                            <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="absolute -right-5 z-20 py-2 mt-3 bg-black bg-opacity-80 rounded-md shadow-xl  min-w-60 w-72
                                md:text-sm  text-xs ">
                                <div class="flex items-center p-3 -mt-2 text-sm text-white transition-colors duration-300 transform hover:bg-black   ">
                                    <img class="w-8 h-8 rounded-full ring-2 ring-gray-300  " src="https://www.gravatar.com/avatar/{{ md5(Session::get('nama')) }}?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{!! str_replace('+', ' ', Session::get('nama')) !!}/128" alt="Bordered avatar">
                                    <div class="ml-2">
                                        <h1 class="md:text-sm  text-xs  font-semibold capitalize  ">
                                            {{ Session::get('nama') }}
                                        </h1>
                                        <p class="md:text-sm  text-xs  text-gray-200  ">
                                            {{ Session::get('npm') }}
                                        </p>
                                    </div>
                                </div>
                                <hr class="border-gray-200 ">
                                <a href="{{ route('panda.logout') }}" class="flex items-center p-3   text-gray-200 capitalize transition-colors
                                    duration-300 transform hover:bg-black  hover:text-yellow-600">
                                    <svg class="w-[16px] h-[16px] mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="mx-1">
                                        Logout
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </nav>
    <!-- end navbar -->

    @yield('content')




</body>

<!-- script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/frontend/scripts.js') }}"></script>

</html>
