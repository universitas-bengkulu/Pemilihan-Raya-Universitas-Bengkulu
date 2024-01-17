
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

<body class=" font-[Poppins]            ">

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
    <nav x-data="{isOpen: false }" class="fixed top-0   z-50 w-full     ">
        <!-- Top Bar -->
        <div id="top-bar" class="w-full     bg-gray-900 duration-500">
            <div class="flex   w-full     text-gray-300 space-x-4 text-sm py-2">
                <marquee behavior="" direction=""><p>
                    Kontak Narahubung KPU Universitas Bengkulu, E-mail : kpu.unib22@gmail.com, WhatsApp : +62 831-8716-1914, +62 813-6962-1347
                </p> </marquee>
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
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-[#E73530]   md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto
                    lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center " id="list-menu">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8 ">
                        <a href="{{ route('welcome') }}"
                            class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Home</a>
                        <a href="{{ route('welcome') }}" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Tentang E-Voting</a>
                        <a href="{{ route('welcome') }}" class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Cara Memilih</a>
                        <a href="{{ route('welcome') }}"
                            class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Waktu
                            Pelaksanaan</a>
                        <a href="{{ route('cekDpt') }}"
                            class="px-3 py-2 mx-2 mt-2  text-gray-100 text-[14px] transition-colors
                            duration-300 transform rounded-md lg:mt-0 hover:text-[#EAB308] ">Cek DPT</a>
                        <a href="login.html" class=" py-2 mx-4 mt-2 text-white text-[14px] transition-colors duration-300 transform
                            lg:mt-0 bg-gradient-to-r from-orange-500 to-yellow-500 border border-white rounded-lg
                            hover:from-orange-600 hover:to-yellow-600 px-5 ">Login</a>
                    </div>
                    <!-- <div class="flex items-center mt-4 mr-8 lg:mt-0">
                        <div x-data="{ isOpen: false }" class="relative inline-block ">
                            <button @click="isOpen = !isOpen" type="button" class="flex items-center focus:outline-none"
                                aria-label="toggle profile dropdown">
                                <img class="w-8 h-8 rounded-full ring-2 mr-3 ring-gray-300  "
                                    src="https://www.gravatar.com/avatar/{{ md5(Session::get('mhsNama')) }}?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{!! str_replace('+', ' ', Session::get('mhsNama')) !!}/128"
                                    alt="Bordered avatar">
                                <h3 class="mx-2  text-gray-100 lg:hidden">
                                    budi
                                </h3>
                            </button>
                            <div x-show="isOpen" @click.away="isOpen = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                class="absolute right-0 z-20 py-2 mt-2 -mr-16 bg-white    rounded-md shadow-xl lg:w-72 lg:mr-0 ">
                                <a href="#"
                                    class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform hover:bg-gray-100  ">
                                    <img class="w-8 h-8 rounded-full ring-2 ring-gray-300  "
                                        src="https://www.gravatar.com/avatar/budi?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/budi/128"
                                        alt="Bordered avatar">
                                    <div class="ml-2">
                                        <h1 class="text-sm font-semibold   ">
                                            Budi
                                        </h1>
                                        <p class="text-sm text-gray-500  ">
                                            Budi@gmail.com</p>
                                    </div>
                                </a>
                                <hr class="border-gray-200 ">
                                <a href="dashboard.html"
                                    class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100  ">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        Dashboard
                                    </span>
                                </a>
                                <hr class="border-gray-200 ">
                                <a href=" "
                                    class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100   ">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="mx-1">
                                        Keluar
                                    </span>
                                </a>
                            </div>
                        </div>


                    </div> -->
                </div>
            </div>
        </div>

    </nav>
    <!-- end navbar -->

    <section class="  items-center w-full   duration-300 transform ">
        <div class="grid grid-cols-1 md:grid-cols-2  ">
            <div class="col-span-1    md:block hidden  ">
                <div class="h-screen    justify-center grid">
                    <img src="{{ asset('assets/frontend/src/confirm.svg') }}" alt="img" class="w-2/3 h-2/3 place-self-center">
                </div>


            </div>
            <div class="col-span-1 grid h-screen">
                <div class="place-self-center w-2/3">
                    <h2 data-aos="fade-down"
                        class="mb-6   font-sans text-2xl lg:text-3xl font-bold text-[#E73530]   "
                        style="text-shadow:5px 5px 5px #38383863;">
                        Status Hak Suara</h2>
                        <p class="text-[14px] leading-7 text-gray-700">
                            Mahasiswa yang berhak menggunakan hak suaranya adalah mahasiswa aktif pada semester
                            berjalan, Silahkan Masukkan <b>Nomor Pokok Mahasiswa</b> Anda Untuk Mengecek Hak Suara Anda

                        </p>
                    <form method="POST" action=" ">
                        <div class="my-2  ">
                            <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-800
                                after:ml-2 text-sm pb-2">Nomor Pokok Mahasiswa</label>
                            <input type="text" id="npm" name="npm" class="   w-full rounded-lg border-2 mt-1 border-gray-700
                                bg-white px-3 py-2.5 text-sm font-normal text-gray-800  transition-all duration-500
                                   focus:border-black
                                 focus:ring-gray-300
                                focus:shadow-[-2px_2px_5px_0px_#444]
                                 " placeholder="Nomor Pokok Mahasiswa" />
                        </div>
                    </form>
                    <div class="mt-5"></div>
                    <div style="display: none;" id="sedangMencari" class="p-4 mb-4   text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <i class="fa fa-refresh fa-spin"></i>&nbsp;<span class="font-medium">Sedang Mencari!</span> Proses Pencarian Sedang Dilakukan
                    </div>
                    <div style="display: none;" id="tidakDitemukan" class="p-4 mb-4   text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">Mohon Maaf!</span> Data anda tidak ditemukan dan belum terdaftar sebagai Daftar Pemilih Tetap (DPT), silahkan hubungi KPU Universitas Bengkulu pada kontak narahubung tersedia.
                    </div>
                    <div style="display: none;" id="ditemukan" class="p-4 mb-4   text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">Data Ditemukan, !</span> Data anda ditemukan dan sudah terdaftar sebagai Daftar Pemilih Tetap (DPT)
                      </div>

                    <div class="relative   overflow-x-auto shadow-md sm:rounded-lg" id="tableDitemukan" style="display: none;">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nomor Pokok Mahasiswa (NPM)
                                </th>
                                <td class="px-6 py-4" id="npm_data">
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Lengkap
                                </th>
                                <td class="px-6 py-4" id="nama_data">
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Program Studi
                                </th>
                                <td class="px-6 py-4" id="prodi_data">
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Jenjang Pendidikan
                                </th>
                                <td class="px-6 py-4" id="jenjang_data">
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Angkatan
                                </th>
                                <td class="px-6 py-4" id="angkatan_data">
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Fakultas
                                </th>
                                <td class="px-6 py-4" id="fakultas_data">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <footer class="absolute bottom-0      z-50 bg-[#E73530]   w-full   ">
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

<script>
    $(document).ready(function(){
        $(document).on('keyup','#npm',function(){
            var npm = $(this).val();
            $('#ditemukan').hide();
            $("#ditemukan").hide();
            $("#sedangMencari").show();
            $.ajax({
            type :'get',
            url: "{{ url('cek_status_dpt') }}",
            data:{'npm':npm},
                success:function(data){
                    if (Object.keys(data).length > 0) {
                        $('#sedangMencari').hide();
                        $('#tidakDitemukan').hide();
                        $("#defaultModal").removeClass("hidden");
                        $("#ditemukan").show();
                        $("#tableDitemukan").show();
                        $('#npm_data').text(data.npm)
                        $('#nama_data').text(data.nama_lengkap)
                        $('#prodi_data').text(data.prodi)
                        $('#jenjang_data').text(data.jenjang)
                        $('#angkatan_data').text(data.angkatan)
                        $('#fakultas_data').text(data.nama_lengkap_fakultas)
                    } else {
                        $('#tidakDitemukan').show();
                        $("#tableDitemukan").hide();
                        $("#sedangMencari").hide();
                    }
                },
                    error:function(){
                }
            });
        })
    });
</script>
