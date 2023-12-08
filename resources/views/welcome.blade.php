
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemira FMIPA UNIB</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}">
    <!-- stylesheets tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/output.css') }}">
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <!-- tailwindcss flag-icon  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">

    <style>
        .glow {
            border: 3px solid white;
        }

        .card-container {
            display: flex;
            justify-content: center;
        }

        .max-w-sm {
            width: 100%; /* Atur lebar sesuai kebutuhan */
            max-width: 400px; /* Atur lebar maksimum sesuai kebutuhan */
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background-color: #fff;
        }

        #loader-logo {
            background: url('assets/img/logo.svg') no-repeat;
            background-size: 70px;

            width: 80px;
            text-align: center;
            margin: auto;
            bottom: 0px;
            height: 80px;
            top: 0;
            left: 0px;
            right: 0px;
            position: absolute;
        }

        #loader {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 120px;
            height: 120px;
            margin: -62px 0 0 -65px;
            border: 5px solid #152042;
            z-index: 1500;
        }

        #loader {
            border: 5px solid #152042;
            border-top-color: #eeeeee;
            border-radius: 50%;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);
                /* IE 9 */
                transform: rotate(0deg);
                /* Firefox 16+, IE 10+, Opera */
            }

            100% {
                -webkit-transform: rotate(360deg);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);
                /* IE 9 */
                transform: rotate(360deg);
                /* Firefox 16+, IE 10+, Opera */
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);
                /* IE 9 */
                transform: rotate(0deg);
                /* Firefox 16+, IE 10+, Opera */
            }

            100% {
                -webkit-transform: rotate(360deg);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);
                /* IE 9 */
                transform: rotate(360deg);
                /* Firefox 16+, IE 10+, Opera */
            }
        }

        @keyframes zoom-in {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .animated-image {
            animation: zoom-in 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .modal-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 0.5rem;
            max-height: 80vh;
            overflow-y: auto;
            padding: 2rem;
            width: 90%;
            max-width: 640px;
        }
    </style>

    @stack('styleshome')
</head>

<body class="  antialiased leading-normal tracking-wide 2xl:text-xl font-nunito  bg-red   text-slate-900"
    x-data="{ switcher: translationSwitcher() }">
    <div id="home"></div>

    <!-- Preloader Start -->
    <div x-data="{ show: false }" x-transition:enter="transition duration-700" style="z-index: 99;"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        class="bg-white rounded p-4" x-show="show">
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
    <nav x-data="{isOpen: false }" class="fixed top-0 z-50 w-full     ">
        <!-- Top Bar -->
        
        <div id="navbar" class="px-6 py-4 mx-auto duration-300 bg-[#152042]   ">
            <div class="lg:flex lg:items-center lg:justify-between  ">
                <div class="flex items-center justify-between">
                    <!-- logo -->
                    <a href="{{ route('welcome') }}" class="flex items-center text-black   mx-4 md:ml-6">
                        <img src="{{ asset('assets/img/logo.svg') }}" style="height: 50px">

                        <div class="ml-3 text-white">
                            <strong>PEMILIHAN RAYA</strong> <br>
                            <span>FMIPA UNIVERSITAS BENGKULU</span>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-100 "
                            aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>
                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-[#152042]   md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto
                    lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center " id="list-menu">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8 ">
                        <a href="#home" class="px-3 py-2 mx-2 mt-2 text-gray-100 transition-colors active-menu duration-300 transform rounded-md
                            lg:mt-0 hover:text-[#fbbf24] font-medium">Home</a>
                        <a href="{{ route('panda.login') }}"
                            class="px-3 py-2 mx-2 mt-2 text-gray-100 transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#fbbf24]       font-medium">Login</a>
                    </div>

                </div>
            </div>
        </div>

    </nav>
    <!-- end navbar -->

    <!-- slider -->
    <section id="home" class="bg-[#152042]  sliderAx font-sans p-12 mt-22 pattren">
        <div class="container px-6 p-8 mx-auto mt-24 md:mt-4 lg:mt-4">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-6/6">
                    <div class=" ">
                        <h1 class="text-gray-200 lg:text-6xl md:text-4xl text-4xl font-bold mb-4"
                            style="text-shadow:5px 5px 5px #000;">SELAMAT<span class="text-yellow-600 ">&nbsp; DATANG</span>
                        </h1>

                        <h2 class="text-gray-200 lg:text-2xl md:text-2xl text-xl font-bold mb-4 "
                            style="text-shadow:5px 5px 5px #000;">APLIKASI PEMILIHAN RAYA FAKULTAS MIPA UNIVERSITAS BENGKULU
                        </h2>

                        
                    <a href="{{ route('panda.login') }}" class="inline-flex items-center justify-center w-auto my-5 px-8 py-3 bg-yellow-600
                    hover:shadow-none
                    text-white font-bold hover:scale-[99%] focus:bg-yellow-700 overflow-hidden
                    text-sm transition-colors duration-300 rounded-lg shadow
                     hover:bg-yellow-500 focus:ring
                    focus:ring-gray-300 focus:ring-opacity-80">Login</a>
                        {{--  <div class="user_box_login user_box_link text-xs pr-6"><a href="{{ route('login') }}">Login</a></div>  --}}
                        {{--  <div class="user_box_register user_box_link text-xs"><a href="{{ route('register') }}">Register</a></div>  --}}
                    </div>
                </div>
                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-6/6">
                     <lottie-player src="{{ asset('assets/img/hello.json') }} " background="transparent" speed="1"
                            class="w-10/12 h-10/12 " loop autoplay></lottie-player> 
                            {{-- <img src="{{ asset('assets/frontend/hero.json') }}" alt="Hero Image" class="w-12/12 h-12/12 animated-image"> --}}
                        </div>
            </div>
        </div>
    </section>
    <!-- end slider -->

    <!-- Footer  -->
    <footer class="relative bg-[#152042] border-b-2 border-white  ">
        <div class="px-12 mx-auto py-4   flex flex-wrap flex-col sm:flex-row bg-gray-100  ">
            <p class="text-gray-700  text-sm text-center sm:text-left">Copyright&copy; 2023 | Aplikasi Pemilihan Raya
                <a target="_blank" href="https://science.unib.ac.id/" class="text-yellow-600 font-bold">FMIPA Universitas Bengkulu</a>. All rights reserved.
            </p>
        </div>
    </footer>
    <!-- end Footer -->
    <!-- back to top  -->
    <div class="" x-data="{scrollBackTop: false}" x-cloak>
        <svg x-show="scrollBackTop" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
            x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false"
            aria-label="Back to top" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            class="bi bi-arrow-up-circle-fill fixed bottom-0 right-0 mx-3 my-10 h-8 w-8 dark:fill-blue-700 fill-blue-500 shadow-lg    cursor-pointer hover:fill-blue-400 bg-white       rounded-full "
            viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </div>

</body>

<!-- script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/frontend/scripts1.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/frontend/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>