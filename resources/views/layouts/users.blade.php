<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemira - Universitas Bengkulu</title>
  <title>Pemira - Universitas Bengkulu</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" font-[Poppins]   ">

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

  <section class="  items-center w-full   duration-300 transform  overflow-x-hidden">

    <div class="    mx-auto z-10   min-h-screen justify-center relative  overflow-hidden   pattern2">
      <header x-data="{isOpen: false }" class="  md:py-4 relative z-50   bg-white shadow-gray-300 mb-10   shadow-md md:mx-5 lg:mx-12 mt-2 mx-2  md:mt-4  duration-300 transform rounded-2xl ">
        <div class="  flex items-center  justify-between h-full pr-3 md:pr-6 mx-auto text-gray-100  ">
          <a href="{{route('welcome')}}" class="flex items-center text-black      mx-3 md:ml-6  ">
            <img src="{{ asset('assets/frontend/Logo.svg') }}" class=" w-8 md:w-10 md:h-10">

            <div class="ml-1 text-slate-100 font-sans  ">
              <strong class="text-xl md:text-3xl font-bold  text-black   uppercase">PEMIRA</strong>
              <p class="text-sm md:text-[16px]   text-yellow-600  whitespace-nowrap    uppercase -mt-2
                                relative">
                UNIVERSITAS BENGKULU</p>
            </div>

          </a>


          <div class="flex   flex-1 lg:mr-32">

          </div>
          <ul class="flex items-center flex-shrink-0 space-x-6   mr-3 lg:mr-0  ">
            <div class="     mt-20 md:mt-0 ">
              <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0   w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white   md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto
                    lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center " id="list-menu">
                <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8 ">
                  <a href="{{route('mahasiswa.dashboard')}}" class="px-3 py-2 mx-2 mt-2   text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] whitespace-nowrap @yield('kandidat', 'text-gray-700')">Kandidat</a>
                  <a href="{{route('mahasiswa.voting')}}" class="px-3 py-2 mx-2 mt-2   text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] whitespace-nowrap @yield('voting', 'text-gray-700')">Voting</a>
                  <a href="{{route('mahasiswa.quick-count')}}" class="px-3 py-2 mx-2 mt-2   text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] whitespace-nowrap @yield('quick-count', 'text-gray-700')">Quick Count</a>
                </div>

              </div>
            </div>

            <!-- Profile menu -->
            <div x-data="{ isOpen: false }" class="relative inline-block  ">
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
          </ul>
          <!-- Mobile menu button -->
          <div class="flex lg:hidden  ">
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-600 " aria-label="toggle menu">
              <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
              </svg>
              <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </header>
      @yield('content')

    </div>

    <footer class="absolute bottom-0     z-50      w-full   bg-[#c23935]  ">
      <div class="px-12 mx-auto py-4   flex flex-wrap flex-col sm:flex-row    ">
        <p class="text-white mx-auto  text-xs md:text-sm  text-center sm:text-left">Copyright&copy; 2023 |
          <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
        </p>
      </div>
    </footer>
  </section>






</body>

<!-- script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/frontend/scripts.js') }}"></script>
