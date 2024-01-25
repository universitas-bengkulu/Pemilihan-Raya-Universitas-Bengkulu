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

<body class=" font-[Poppins]   " x-data="{ isShow: false  }">

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
      <header x-data="{isOpen: false }" class="   relative z-50     mb-10  bg-[#E73530]   md:px-5 lg:px-12   px-2     duration-300 transform   ">
        <div class="  flex items-center  justify-between h-full pr-3 md:pr-6 mx-auto text-gray-100  ">
          <a href="{{route('welcome')}}" class="flex items-center text-white  md:py-4    mx-3 md:ml-6  ">
            <img src="{{ asset('assets/frontend/Logo.svg') }}" class=" w-8 md:w-10 md:h-10">

            <div class="ml-1 text-slate-100 font-sans  ">
              <strong class="text-xl md:text-3xl font-bold  text-white   uppercase">PEMIRA</strong>
              <p class="text-sm md:text-[16px]   text-yellow-300  whitespace-nowrap    uppercase -mt-2
                                relative">
                UNIVERSITAS BENGKULU</p>
            </div>

          </a>
          <div class="flex   flex-1  "></div>

          <div class="     mt-20 lg:mt-0 mr-20 ">
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0   w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white   md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto
                    lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center " id="list-menu">
              <div class="flex flex-col -mx-6 lg:flex-row   lg:mx-8 px-2">
                <a href="{{route('mahasiswa.dashboard')}}" class="px-6  lg:mx-2   mt-2 w-full py-2 lg:py-[27px]  lg:w-32  lg:hover:text-white rounded-md lg:rounded-none   text-lg font-bold font-[arial] lg:text-center   text-[14px] transition-colors duration-300 transform   lg:mt-0  lg:hover:bg-black  hover:scale-[99%] active:scale-95 hover:shadow-gray-600 lg:active:bg-black active:shadow-gray-600 whitespace-nowrap @yield('kandidat', 'bg-white lg:shadow-inner shadow-gray-600 text-red-500')">Kandidat</a>
                @if($cek_jadwal)
                <a href="{{route('mahasiswa.voting')}}" class="px-6  lg:mx-2   mt-2 w-full py-2 lg:py-[27px]  lg:w-32  rounded-md lg:rounded-none   text-lg font-bold font-[arial] lg:text-center hover:scale-[99%] active:scale-95  text-[14px] transition-colors duration-300 transform   lg:mt-0 lg:hover:text-white  lg:hover:bg-black   hover:shadow-gray-600 lg:active:bg-black active:shadow-gray-600 whitespace-nowrap @yield('voting', 'bg-white lg:shadow-inner shadow-gray-600 text-red-500')">Voting</a>

                @else
                <button title="Voting hanya dapat di akses pada jadwal yang ditentukan" class="px-6  lg:mx-2   mt-2 w-full py-2 lg:py-[27px]  lg:w-32  rounded-md lg:rounded-none  opacity-90 cursor-not-allowed   text-lg font-bold font-[arial] lg:text-center    text-[14px] transition-colors duration-300 transform bg-white lg:shadow-inner shadow-gray-600 text-red-500  lg:mt-0   whitespace-nowrap  ">Voting</button>

                @endif
                <!-- <a href="{{route('mahasiswa.quick-count')}}" class="px-3 py-2 mx-2 mt-2   text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] whitespace-nowrap @yield('quick-count', 'text-gray-700')">Quick Count</a> -->
              </div>

            </div>
          </div>

          <div class="flex   flex-1  "></div>



          <ul class="flex items-center flex-shrink-0 space-x-6   mr-3 lg:mr-0 md:py-4  ">

            <!-- Profile menu -->
            <div x-data="{ isOpen: false }" class="relative inline-block  ">
              <button @click="isOpen = !isOpen" type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                <img class="w-8 h-8 rounded-full ring-2 mr-1 ring-gray-300  " src="https://www.gravatar.com/avatar/{{ md5(Session::get('nama')) }}?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{!! str_replace('+', ' ', Session::get('nama')) !!}/128" alt="Bordered avatar">
                <h3 class="ml-1  text-white md:text-sm  text-xs hidden lg:block    capitalize">
                  {{ Session::get('nama') }}
                </h3>
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
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-100 hover:text-gray-300 focus:outline-none focus:text-gray-300 " aria-label="toggle menu">
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
      @if ($message = Session::get('sucess'))
      <div x-data x-init="isShow = true"></div>
      <div x-show="isShow" style="z-index: 99;" class="fixed top-24 right-0 m-3 w-2/3 md:w-1/3" x-transition:enter="transition transform ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition transform ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
        <div class="bg-white border-gray-300 border p-3 flex items-start shadow-lg rounded-md space-x-2">
          <svg class="flex-shrink-0 h-6 w-6 text-green-400" stroke="currentColor" viewBox="0 0 20 20">
            <path stroke-width="1" d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
          </svg>
          <div class="flex-1 space-y-1">
            <p class="text-base leading-6 font-medium text-gray-700">Berhasil!</p>
            <p class="text-sm leading-5 text-gray-600">{!! $message !!}</p>
          </div>
          <svg class="flex-shrink-0 h-5 w-5 text-gray-400 cursor-pointer" x-on:click="isShow = false" stroke="currentColor" viewBox="0 0 20 20">
            <path stroke-width="1.2" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg>
        </div>
      </div>
      @endif

      @if ($message = Session::get('error'))
      <div x-data x-init="isShow = true"></div>
      <div x-show="isShow" style="z-index: 99;" class="fixed top-24 right-0 m-3 w-2/3 md:w-1/3" x-transition:enter="transition transform ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition transform ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
        <div class="bg-rose-800 border-red-500 border p-3 flex items-start shadow-lg rounded-md space-x-2">
          <svg class="flex-shrink-0 h-6 w-6 text-yellow-300 fill-yellow-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-yellow-300 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z" />
          </svg>
          <div class="flex-1 space-y-1">
            <p class="text-base leading-6 font-medium text-yellow-300">Mohon Maaf!</p>
            <p class="text-sm leading-6 text-gray-100 ">{!! $message !!}</p>
          </div>
          <svg class="flex-shrink-0 h-5 w-5 text-gray-400 cursor-pointer" x-on:click="isShow = false" stroke="currentColor" viewBox="0 0 20 20">
            <path stroke-width="1.2" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg>
        </div>
      </div>
      @endif
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
