<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemira - Universitas Bengkulu</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/Logo.svg') }}">

    <!-- stylesheets tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/output.css') }}">
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body  class=" font-[Poppins]        overflow-hidden   ">

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

    <section class="  items-center w-full   duration-300 transform ">
        <div class="    mx-auto z-10 overflow-hidden h-screen justify-center relative   bg-[#E73530] pattern">
            <div class="h-[50vh]     grid">
                <div class="place-self-center grid">
                    <div class="flex space-x-2 mx-auto place-self-center">
                        <img src="{{ asset('assets/frontend/Logo.svg') }}" alt="logo" class="h-28  2xl:h-40 mr-4">
                         <img src="{{ asset('assets/frontend/src/logo.webp') }}" alt="logo" class="h-28  2xl:h-40 rounded-full">
                    </div>
                    <p class="text-white  md:leading-6 mt-3  max-w-5xl mx-auto text-center md:text-sm text-xs px-6 ">E-Pemiro merupakan sebuah sistem yang
                        memanfaatkan perangkat
                        elektronik dan mengolah informasi
                        digital untuk membuat surat suara, memberikan suara, menghitung perolehan suara, menayangkan
                        perolehan suara dan memelihara serta menghasilkan jejak audit.
                        Pemilihan berbasis online ini dilakukan sebagai alternatif proses pemilihan Universitas Bengkulu</p>
                </div>
            </div>
            <div
                class="h-[55vh]   relative -mt-[5vh] rounded-t-[50px] md:rounded-t-[100px] overflow-hidden
                bg-white pattern2 md:shadow-[inset_10px_0px_20px_2px_#000] shadow-[inset_5px_0px_10px_0px_#000] grid ">
                <div
                    class="  max-w-xl w-full   text-gray-800  mx-4 md:mx-auto    place-self-center  -mt-10  py-10  px-10  ">

                    <form method="POST" action="{{ route('panda.login.post') }}">
                        @csrf @method('POST')
                        <div class="my-2  ">
                            <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-800
                                after:ml-2 text-sm pb-2">Nomor Pokok Mahasiswa (NPM)</label>
                            <input type="text" id="username" name="username" class="   w-full rounded-lg border-2 mt-1 border-gray-700
                                bg-white px-3 py-2.5 text-sm font-normal text-gray-800  transition-all duration-500
                                   focus:border-black
                                 focus:ring-gray-300
                                focus:shadow-[-2px_2px_5px_0px_#444]
                                 " placeholder="Nomor Pokok Mahasiswa" />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>
                        <div class="my-2 relative" x-data="{ show: false }">
                            <label class="after:content-['*'] after:text-red-500 font-semibold text-gray-800
                                after:ml-2 text-sm pb-2">Password</label>
                            <div class="relative flex items-center">
                                <input :type="show ? 'text' : 'password'" type="password" name="password"
                                       class="w-full rounded-lg border-2 mt-1 border-gray-700 bg-white
                                              px-3 py-2.5 text-sm font-normal text-gray-800 transition-all duration-500
                                              focus:border-black focus:ring-gray-300 focus:shadow-[-2px_2px_5px_0px_#444]"
                                       placeholder="Password" />

                                <span class="absolute right-2 pt-1 bg-transparent flex items-center justify-center cursor-pointer "
                                      @click="show = !show">
                                    <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                        </path>
                                    </svg>

                                    <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                        </div>

                        <div class="mt-6 w-full ">
                            <button type="submit"
                                class=" h-full inline-block text-center rounded-lg border-2 mt-1 w-full bg-[#E73530]
                                hover:scale-[99%] focus:scale-95
                                font-bold tracking-widest  text-white hover:bg-red-800 px-3 py-2
                              text-sm    transition-all duration-500 focus:shadow-[-2px_2px_10px_0px_#eab308]
                                ">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>

        <footer class="absolute bottom-0     z-50 bg-[#E73530]    w-full shadow-[-10px_0px_20px_0px_#000] pattern ">
            <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
                <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                    <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
                </p>
            </div>
        </footer>
    </section>






</body>

<!-- script -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/frontend/scripts.js') }}"></script>
