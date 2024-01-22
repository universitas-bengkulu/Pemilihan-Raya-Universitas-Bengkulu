@extends('layouts.guest')

@section('kandidat','text-yellow-500')
@section('content')

<!-- slider -->
<section id="home" class="bg-gradient-to-b from-[#E73530] from-60%">

    <div class="  text-center pt-32   ">


        <div class="mx-auto container   px-4 sm:px-6 lg:px-8 relative bg-transparent   flex flex-wrap flex-col md:flex-row items-center  ">
            <!--Left Col-->
            <div data-aos="zoom-in-left" class="mt-16 w-full md:w-1/2 justify-center items-start md:px-5 text-center md:text-right order-last md:order-first
                      px-4   z-30">
                <img src="{{ asset('assets/frontend/hero.svg') }}" class="w-full h-full mx-auto  ">

            </div>
            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="   w-full  md:w-1/2   justify-center items-center md:px-5 text-center md:text-left
                      px-4   z-30 mt-20 md:mt-10">
                <!-- <img src="/src/Head-UNIB-3.png" class="w-2/3 mx-auto md:ml-auto md:mr-0    mb-5"> -->

                <p class="mt-2 text-2xl   lg:text-4xl   text-white text-center md:text-left font-[arial] font-extrabold
                            ">
                    Sistem Informasi E-Voting PEMIRA
                </p>
                <p class=" my-2 leading-7 text-sm mb-8   text-white
                            text-center md:text-left ">
                    <!-- Selamat Datang di <span class="text-yellow-200">PRisMa</span>. -->
                    Selamat datang di sistem informasi e-voting online. yang dibuat berbasis web.
                    Sehingga bisa diakses dari mana saja dan kapan saja.

                </p>
                <a href="{{ route('cekDpt') }}" class=" h-full inline-block text-center   mt-1 w-full md:max-w-[180px]
                                hover:scale-[99%] focus:scale-95
                                font-bold tracking-widest text-white bg-gradient-to-r from-orange-500 to-yellow-500
                                border border-white rounded-lg
                                hover:from-orange-600 hover:to-yellow-600 px-3 py-2
                              text-sm    transition-all duration-500 focus:shadow-[-2px_2px_10px_0px_#eab308]
                                ">Lihat Hak Suara</a>
            </div>
        </div>
    </div>
</section>
<!-- end slider -->

<!-- Tentang E-Voting Pemira -->
<section id="about">
    <div class="mx-auto container px-4 sm:px-6 lg:px-8 section-heading py-32  ">
        <h2 data-aos="fade-down" class="mb-6 text-center font-sans text-4xl lg:text-5xl font-bold text-[#E73530]   " style="text-shadow:5px 5px 5px #38383863;">
            Tentang E-Voting Pemira</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <div data-aos="fade-right" class="text-[14px] leading-7">
                <p class="text-[14px] leading-7 mb-5 "><b>E-voting</b> merupakan
                    sebuah
                    sistem yang memanfaatkan perangkat elektronik dan mengolah informasi digital untuk membuat
                    surat suara,
                    memberikan suara, menghitung perolehan suara, menayangkan perolehan suara dan memelihara serta
                    menghasilkan jejak audit.
                    Pemilihan berbasis online ini dilakukan sebagai alternatif proses PEMIRA.
                </p>
                <strong>Apa itu PEMIRA?</strong>
                <p class="mb-5">Pemira adalah suatu singkatan dari Pemilihan Raya atau apabila
                    lingkupnya nasional biasa di sebut
                    PEMILU atau Pemilihan
                    Umum. PEMIRA ini adalah suatu ajang Pesta Demokrasi yang diadakan di Perguruan Tinggi yang ada di
                    indonesia. PEMIRA ini
                    juga adalah gambaran dari sistem Demokrasi yang ada di indonesia.</p>
                <p class="mb-5">Pemira dilakukan 1 tahun sekali yang bertujuan untuk mencari
                    regenerasi penggerak
                    pergerakan kampus.
                    dalam beberapa
                    kasus PEMIRA dilakukan untuk pemilihan Ketua BEM/Presiden Mahasiswa dan Anggota Majelis/Dewan
                    Permusyawaratan Mahasiswa
                    yang merupakan badan resmi/legal di kampus yang berada langsung dibawah naungan perguruan tinggi
                    terkait. organisasi ini
                    yang nantinya akan menyampaikan aspirasi mahasiswa ke para petinggi perguruan tinggi agar fungsi dan
                    tujuan perguruan
                    tinggi terkait tercapai.</p>
                <strong>Asas Pemira</strong>
                <ul class="list-decimal pl-5">
                    <li><b>Langsung</b> berarti pemilih diharuskan memberikan suaranya secara langsung dan tidak boleh
                        diwakilkan.</li>
                    <li><b>Umum</b> berarti pemilihan umum dapat diikuti seluruh warga negara yang sudah memiliki
                        hak menggunakan
                        suara.</li>
                    <li><b>Bebas</b> berarti pemilih diharuskan memberikan suaranya tanpa ada paksaan dari pihak
                        manapun.</li>
                    <li><b>Rahasia</b> berarti suara yang diberikan oleh pemilih bersifat rahasia hanya diketahui
                        oleh si pemilih
                        itu sendiri.</li>
                </ul>
            </div>
            <div>
                <img data-aos="fade-down" src="{{ asset('assets/frontend/voting_nvu7.svg') }}" class="w-2/3 h-2/3 mx-auto  ">
                <div class="grid grid-cols-1 md:grid-cols-2  ">
                    <div data-aos="fade-right" class="  px-7 py-6   flex items-top justify-start space-x-4">
                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" id="candidate">
                            <defs>
                                <linearGradient id="a" x1="32" x2="32" y1="8.06" y2="33.64" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#524e7f"></stop>
                                    <stop offset="1" stop-color="#9b93e4"></stop>
                                </linearGradient>
                                <linearGradient id="b" x1="16" x2="16" y1="55.5" y2="44.5" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="c" x1="48" x2="48" y1="55.5" y2="44.5" xlink:href="#a">
                                </linearGradient>
                            </defs>
                            <rect width="4" height="6" x="30" y="35" fill="#443e64" rx="1" ry="1"></rect>
                            <path fill="#443e64" d="M39.77,33.64a14,14,0,0,1-15.54,0L25,28.92A7.3,7.3,0,0,1,25.62,27a7.09,7.09,0,0,1,12.76,0A7.3,7.3,0,0,1,39,28.92Z">
                            </path>
                            <path fill="url(#a)" d="M46,22a14,14,0,0,1-6.23,11.64L39,28.92A7.3,7.3,0,0,0,38.38,27a7.09,7.09,0,0,0-12.76,0A7.3,7.3,0,0,0,25,28.92l-.78,4.72A14,14,0,1,1,46,22Z">
                            </path>
                            <path fill="url(#b)" d="M24,56l-1-6.08A7.3,7.3,0,0,0,22.38,48,7.09,7.09,0,0,0,9.62,48,7.3,7.3,0,0,0,9,49.92L8,56Z">
                            </path>
                            <rect width="10" height="12" x="11" y="32" fill="#9b93e4" rx="5" ry="5"></rect>
                            <path fill="#fce191" d="M16,49a1,1,0,0,1-.89-.55l-1-2A1,1,0,0,1,15,45h2a1,1,0,0,1,.89,1.45l-1,2A1,1,0,0,1,16,49Z">
                            </path>
                            <path fill="#fce191" d="M16,56a1,1,0,0,1-1-1V48a1,1,0,0,1,2,0v7A1,1,0,0,1,16,56Z">
                            </path>
                            <path fill="url(#c)" d="M56,56l-1-6.08A7.3,7.3,0,0,0,54.38,48a7.09,7.09,0,0,0-12.76,0A7.3,7.3,0,0,0,41,49.92L40,56Z">
                            </path>
                            <rect width="10" height="12" x="43" y="32" fill="#9b93e4" rx="5" ry="5"></rect>
                            <path fill="#fce191" d="M48,49a1,1,0,0,1-.89-.55l-1-2A1,1,0,0,1,47,45h2a1,1,0,0,1,.89,1.45l-1,2A1,1,0,0,1,48,49Z">
                            </path>
                            <path fill="#fce191" d="M48,56a1,1,0,0,1-1-1V48a1,1,0,0,1,2,0v7A1,1,0,0,1,48,56Z">
                            </path>
                            <rect width="10" height="12" x="27" y="11" fill="#443e64" rx="5" ry="5"></rect>
                            <path fill="#fe92ae" d="M32,28a1,1,0,0,1-.89-.55l-1-2A1,1,0,0,1,31,24h2a1,1,0,0,1,.89,1.45l-1,2A1,1,0,0,1,32,28Z">
                            </path>
                            <path fill="#fe92ae" d="M32,35a1,1,0,0,1-1-1V27a1,1,0,0,1,2,0v7A1,1,0,0,1,32,35Z">
                            </path>
                            <path fill="#524e7f" d="M31,40h2a2,2,0,0,1,2,2V53a3,3,0,0,1-3,3h0a3,3,0,0,1-3-3V42A2,2,0,0,1,31,40Z">
                            </path>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 font-bold text-3xl">{{ $count_kandidat }}</p>
                            <p class="text-[14px] ">Calon Kanidat</p>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="  px-7 py-6   flex items-top justify-start space-x-4">
                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="verification">
                            <path fill="#82bcf4" d="m42.52 29 1.4 6.54-6.37 2-2 6.37L29 42.52 24 47l-5-4.48-6.54 1.4-2.05-6.37-6.37-2L5.48 29 1 24l4.48-5-1.4-6.5c7.29-2.35 6.32-1.88 6.5-2.46l1.92-6L19 5.48 24 1l5 4.48 6.54-1.4 2 6.37 6.37 2.05-1.39 6.5L47 24Z">
                            </path>
                            <path fill="#6fabe6" d="M39 37c0 .11.21 0-1.45.55l-2 6.37-6.55-1.4L24 47l-5-4.48-6.54 1.4-2.05-6.37-6.37-2L5.48 29 1 24l4.48-5-1.4-6.5c7.29-2.35 6.32-1.88 6.5-2.46A27 27 0 0 1 39 37Z">
                            </path>
                            <path fill="#edebf2" d="M39 24a15 15 0 1 1-27.42-8.42C19.91 3.38 39 9.28 39 24Z">
                            </path>
                            <path fill="#dad7e5" d="M35 28a15 15 0 0 1-2.58 8.42 15 15 0 0 1-20.84-20.84A15 15 0 0 1 35 28Z">
                            </path>
                            <path fill="#82bcf4" d="m32.5 20.68-9.38 9.38a3 3 0 0 1-4.24 0l-3.38-3.38a2.12 2.12 0 0 1 3-3l2.5 2.5c11.37-11.37 7.75-7.74 8.5-8.5a2.12 2.12 0 0 1 3 3Z">
                            </path>
                            <path fill="#6fabe6" d="m31.5 21.68-8.38 8.38a3 3 0 0 1-4.24 0l-3.38-3.38a2.11 2.11 0 0 1-.41-2.41 2.11 2.11 0 0 1 2.41.41l2.5 2.5c11.82-11.82 7.8-7.79 8.66-8.65a2.12 2.12 0 0 1 2.84 3.15Z">
                            </path>
                            <path d="M28.79 17 21 24.77 19.21 23a3.18 3.18 0 0 0-4.42 0 3.13 3.13 0 0 0 0 4.42c3.44 3.44 4.12 4.55 6.21 4.55s2.11-.46 12.21-10.55A3.13 3.13 0 0 0 28.79 17Zm3 3-9.38 9.38a2 2 0 0 1-2.82 0c-3.45-3.44-3.71-3.51-3.71-4.17a1.12 1.12 0 0 1 1.91-.79l2.5 2.5a1 1 0 0 0 1.42 0l8.5-8.5A1.12 1.12 0 0 1 31.79 20Z">
                            </path>
                            <path d="M24 8a16 16 0 1 0 16 16A16 16 0 0 0 24 8Zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14Z">
                            </path>
                            <path d="m47.74 23.33-4.14-4.58 1.3-6a1 1 0 0 0-.67-1.17l-5.88-1.93-1.89-5.88a1 1 0 0 0-1.17-.67l-6 1.3L24.67.26a1 1 0 0 0-1.34 0L18.75 4.4l-6-1.3a1 1 0 0 0-1.17.67L9.65 9.65l-5.88 1.89a1 1 0 0 0-.67 1.17l1.3 6-4.14 4.62a1 1 0 0 0 0 1.34l4.14 4.58-1.3 6a1 1 0 0 0 .67 1.17l5.88 1.89 1.89 5.88a1 1 0 0 0 1.17.67l6-1.3 4.58 4.14a1 1 0 0 0 1.34 0l4.58-4.14 6 1.3a1 1 0 0 0 1.17-.67l1.89-5.88 5.88-1.89a1 1 0 0 0 .67-1.17l-1.3-6 4.14-4.58a1 1 0 0 0 .08-1.34Zm-6 5c-.46.52-.33.42 1 6.54-5.75 1.85-5.93 1.74-6.15 2.42l-1.77 5.5-5.66-1.21c-.78-.16-1 .33-5.17 4.11-4.65-4.2-4.44-4.13-5-4.13-.16 0 .27-.08-5.87 1.23-1.85-5.75-1.73-5.93-2.42-6.15l-5.46-1.81 1.22-5.66c.15-.68.07-.55-4.11-5.17 4.22-4.68 4.26-4.5 4.11-5.17l-1.22-5.66 5.51-1.77c.76-.24.69-.78 2.42-6.15 6.16 1.32 6 1.44 6.54 1L24 2.35l4.29 3.88c.52.46.42.33 6.54-1 1.85 5.75 1.73 5.93 2.42 6.15l5.5 1.77-1.21 5.66c-.15.68-.08.53 4.11 5.17Z">
                            </path>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 font-bold text-3xl">{{ $count_dpt }}</p>
                            <p class="text-[14px] ">Daftar Pemilih (Terverifikasi)</p>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="  px-7 py-6   flex items-top justify-start space-x-4">
                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="64" height="64" enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="student-network">
                            <path fill="#5D9CEC" d="M56,58c2.13,0,3.86,1.66,3.99,3.75C58.86,62.54,57.49,63,56,63s-2.86-0.46-3.99-1.25
			C52.14,59.66,53.88,58,56,58z"></path>
                            <path fill="#48CFAD" d="M56,10c2.13,0,3.86,1.66,3.99,3.75C58.86,14.54,57.49,15,56,15s-2.86-0.46-3.99-1.25
			C52.14,11.66,53.88,10,56,10z"></path>
                            <path fill="#EAC6BB" d="M58,8c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S58,6.9,58,8z">
                            </path>
                            <polygon fill="#545C66" points="41 24.07 41 30 23 30 23 24.07 32 26"></polygon>
                            <path fill="#EAC6BB" d="M58,56c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S58,54.9,58,56z">
                            </path>
                            <path fill="#656D78" d="M54,8c0,1.1,0.9,2,2,2c-2.12,0-3.86,1.66-3.99,3.75c-0.34-0.24-0.66-0.5-0.96-0.8
			C49.78,11.68,49,9.94,49,8c0-3.87,3.13-7,7-7s7,3.13,7,7c0,2.39-1.19,4.49-3.01,5.75C59.86,11.66,58.13,10,56,10c1.1,0,2-0.9,2-2
			s-0.9-2-2-2S54,6.9,54,8z"></path>
                            <path fill="#EAC6BB" d="M10,56c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S10,54.9,10,56z">
                            </path>
                            <path fill="#AC92EC" d="M23,30v3v0.05c0.02,3.51,2.05,6.55,5,8.01v0.011V45h-3c-2.52,0-4.59,1.85-4.95,4.26
			c-1.04-0.71-2.01-1.52-2.899-2.41C13.35,43.05,11,37.8,11,32s2.35-11.05,6.15-14.85C20.95,13.35,26.2,11,32,11
			s11.05,2.35,14.85,6.15C50.65,20.95,53,26.2,53,32s-2.35,11.05-6.15,14.85c-0.89,0.891-1.859,1.7-2.899,2.41
			C43.59,46.85,41.52,45,39,45h-3v-3.93V41.06c2.95-1.46,4.98-4.5,5-8.01V33v-3v-5.93L46,23l-14-3l-14.01,3L23,24.07V30z">
                            </path>
                            <path fill="#656D78" d="M54 56c0 1.1.9 2 2 2-2.12 0-3.86 1.66-3.99 3.75C50.19 60.49 49 58.39 49 56c0-1.94.78-3.68 2.05-4.95C52.32 49.78 54.06 49 56 49c3.87 0 7 3.13 7 7 0 2.39-1.19 4.49-3.01 5.75C59.86 59.66 58.13 58 56 58c1.1 0 2-.9 2-2s-.9-2-2-2S54 54.9 54 56zM12.95 12.95c-.3.3-.62.56-.96.8C11.86 11.66 10.12 10 8 10c1.1 0 2-.9 2-2S9.1 6 8 6 6 6.9 6 8s.9 2 2 2c-2.13 0-3.86 1.66-3.99 3.75C2.19 12.49 1 10.39 1 8c0-3.87 3.13-7 7-7s7 3.13 7 7C15 9.94 14.22 11.68 12.95 12.95z">
                            </path>
                            <path fill="#5D9CEC" d="M8,10c2.12,0,3.86,1.66,3.99,3.75C10.86,14.54,9.49,15,8,15s-2.86-0.46-3.99-1.25C4.14,11.66,5.87,10,8,10
			z"></path>
                            <polygon fill="#656D78" points="46 23 41 24.07 32 26 23 24.07 17.99 23 32 20">
                            </polygon>
                            <path fill="#48CFAD" d="M8,58c2.12,0,3.86,1.66,3.99,3.75C10.86,62.54,9.49,63,8,63s-2.86-0.46-3.99-1.25C4.14,59.66,5.87,58,8,58
			z"></path>
                            <path fill="#656D78" d="M43.95,49.26v0.01C40.56,51.62,36.44,53,32,53s-8.56-1.38-11.95-3.73v-0.01C20.41,46.85,22.48,45,25,45h3
			l4,4l4-4h3C41.52,45,43.59,46.85,43.95,49.26z"></path>
                            <path fill="#545C66" d="M39,45h-3l0,0c2.518,0.002,4.587,1.851,4.947,4.26v0.01v1.722c1.05-0.495,2.058-1.066,3.003-1.722v-0.01
				C43.59,46.85,41.52,45,39,45z"></path>
                            <path fill="#EAC6BB" d="M36,41.07V45l-4,4l-4-4v-3.93V41.06C29.2,41.66,30.57,42,32,42s2.8-0.34,4-0.94V41.07z">
                            </path>
                            <path fill="#EAC6BB" d="M41,30v3v0.05c-0.02,3.51-2.05,6.55-5,8.01C34.8,41.66,33.43,42,32,42s-2.8-0.34-4-0.94
			c-2.95-1.46-4.98-4.5-5-8.01V33v-3H41z"></path>
                            <path fill="#D3B1A9" d="M37.997,30v3v0.05c-0.02,3.51-2.05,6.55-5,8.01c-0.771,0.386-1.616,0.649-2.498,0.8
			C30.989,41.942,31.488,42,32,42c1.43,0,2.8-0.34,4-0.94c2.95-1.46,4.98-4.5,5-8.01V33v-3H37.997z"></path>
                            <path fill="#EAC6BB" d="M10,8c0,1.1-0.9,2-2,2S6,9.1,6,8s0.9-2,2-2S10,6.9,10,8z">
                            </path>
                            <path fill="#656D78" d="M6,56c0,1.1,0.9,2,2,2c-2.13,0-3.86,1.66-3.99,3.75C2.19,60.49,1,58.39,1,56c0-3.87,3.13-7,7-7
			c1.94,0,3.68,0.78,4.95,2.05C14.22,52.32,15,54.06,15,56c0,2.39-1.19,4.49-3.01,5.75C11.86,59.66,10.12,58,8,58c1.1,0,2-0.9,2-2
			s-0.9-2-2-2S6,54.9,6,56z"></path>
                            <g>
                                <path d="M8,64c-4.411,0-8-3.589-8-8s3.589-8,8-8s8,3.589,8,8S12.411,64,8,64z M8,50c-3.309,0-6,2.691-6,6s2.691,6,6,6
				s6-2.691,6-6S11.309,50,8,50z"></path>
                                <path d="M8,59c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S9.654,59,8,59z M8,55c-0.552,0-1,0.448-1,1s0.448,1,1,1s1-0.448,1-1
				S8.552,55,8,55z"></path>
                                <path d="M11.99 62.75c-.524 0-.965-.408-.997-.938C10.896 60.235 9.581 59 7.999 59s-2.896 1.235-2.994 2.812c-.033.552-.514.969-1.06.937-.551-.034-.971-.508-.937-1.06C3.171 59.06 5.362 57 7.999 57s4.828 2.06 4.99 4.688c.034.552-.386 1.025-.937 1.06C12.032 62.749 12.011 62.75 11.99 62.75zM8 16c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8S12.411 16 8 16zM8 2C4.691 2 2 4.691 2 8s2.691 6 6 6 6-2.691 6-6S11.309 2 8 2z">
                                </path>
                                <path d="M8,11c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S9.654,11,8,11z M8,7C7.448,7,7,7.449,7,8s0.448,1,1,1s1-0.449,1-1
				S8.552,7,8,7z"></path>
                                <path d="M11.99 14.75c-.524 0-.965-.408-.997-.938C10.896 12.235 9.581 11 7.999 11s-2.896 1.235-2.994 2.812c-.033.551-.514.977-1.06.937-.551-.034-.971-.508-.937-1.06C3.171 11.06 5.362 9 7.999 9s4.828 2.06 4.99 4.688c.034.551-.386 1.026-.937 1.06C12.032 14.75 12.011 14.75 11.99 14.75zM32 54c-12.131 0-22-9.869-22-22s9.869-22 22-22 22 9.869 22 22S44.131 54 32 54zM32 12c-11.028 0-20 8.972-20 20 0 11.028 8.972 20 20 20s20-8.972 20-20C52 20.972 43.028 12 32 12z">
                                </path>
                                <path d="M12.949 52.051c-.256 0-.512-.098-.707-.293-.391-.391-.391-1.023 0-1.414l4.201-4.201c.391-.391 1.023-.391 1.414 0s.391 1.023 0 1.414l-4.201 4.201C13.461 51.953 13.205 52.051 12.949 52.051zM17.15 18.146c-.256 0-.512-.098-.707-.293l-4.201-4.201c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0l4.201 4.201c.391.391.391 1.023 0 1.414C17.662 18.049 17.406 18.146 17.15 18.146zM56 16c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8S60.411 16 56 16zM56 2c-3.309 0-6 2.691-6 6s2.691 6 6 6 6-2.691 6-6S59.309 2 56 2z">
                                </path>
                                <path d="M56,11c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S57.654,11,56,11z M56,7c-0.552,0-1,0.449-1,1s0.448,1,1,1
				s1-0.449,1-1S56.552,7,56,7z"></path>
                                <path d="M59.992,14.75c-0.524,0-0.965-0.408-0.997-0.938C58.897,12.235,57.583,11,56.001,11s-2.896,1.235-2.994,2.812
				c-0.033,0.551-0.511,0.977-1.06,0.937c-0.551-0.034-0.971-0.508-0.937-1.06C51.173,11.06,53.364,9,56.001,9
				s4.828,2.06,4.99,4.688c0.034,0.551-0.386,1.026-0.937,1.06C60.034,14.75,60.013,14.75,59.992,14.75z"></path>
                                <g>
                                    <path d="M46.848,18.148c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l4.203-4.203
			c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414l-4.203,4.203C47.359,18.051,47.104,18.148,46.848,18.148z">
                                    </path>
                                </g>
                                <g>
                                    <path d="M56,64c-4.411,0-8-3.589-8-8s3.589-8,8-8s8,3.589,8,8S60.411,64,56,64z M56,50c-3.309,0-6,2.691-6,6s2.691,6,6,6
				s6-2.691,6-6S59.309,50,56,50z"></path>
                                    <path d="M56,59c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S57.654,59,56,59z M56,55c-0.552,0-1,0.448-1,1s0.448,1,1,1
				s1-0.448,1-1S56.552,55,56,55z"></path>
                                    <path d="M59.992,62.75c-0.524,0-0.965-0.408-0.997-0.938C58.897,60.235,57.583,59,56.001,59s-2.896,1.235-2.994,2.812
				c-0.033,0.552-0.511,0.969-1.06,0.937c-0.551-0.034-0.971-0.508-0.937-1.06C51.173,59.06,53.364,57,56.001,57
				s4.828,2.06,4.99,4.688c0.034,0.552-0.386,1.025-0.937,1.06C60.034,62.749,60.013,62.75,59.992,62.75z"></path>
                                </g>
                                <g>
                                    <path d="M51.051,52.051c-0.256,0-0.512-0.098-0.707-0.293l-4.201-4.201c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0
			l4.201,4.201c0.391,0.391,0.391,1.023,0,1.414C51.563,51.953,51.307,52.051,51.051,52.051z"></path>
                                </g>
                                <g>
                                    <path d="M20.054,50.274c-0.048,0-0.096-0.003-0.145-0.011c-0.547-0.079-0.926-0.587-0.846-1.133
				c0.425-2.925,2.978-5.13,5.937-5.13c0.553,0,1,0.447,1,1s-0.447,1-1,1c-1.973,0-3.674,1.469-3.958,3.417
				C20.97,49.916,20.543,50.274,20.054,50.274z"></path>
                                    <path d="M28 46.001h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1S28.553 46.001 28 46.001zM43.947 50.274c-.489 0-.916-.358-.988-.856-.284-1.948-1.985-3.417-3.959-3.417-.553 0-1-.447-1-1s.447-1 1-1c2.96 0 5.513 2.205 5.938 5.13.08.546-.299 1.054-.846 1.133C44.043 50.271 43.995 50.274 43.947 50.274z">
                                    </path>
                                    <path d="M39 46.001h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1S39.553 46.001 39 46.001zM28 46.001c-.553 0-1-.447-1-1v-3.936c0-.553.447-1 1-1s1 .447 1 1v3.936C29 45.554 28.553 46.001 28 46.001z">
                                    </path>
                                    <path d="M36,46.001c-0.553,0-1-0.447-1-1v-3.936c0-0.553,0.447-1,1-1s1,0.447,1,1v3.936C37,45.554,36.553,46.001,36,46.001z">
                                    </path>
                                    <path d="M31.999,43.001c-5.514,0-9.999-4.485-9.999-9.998c0-0.552,0.447-1,1-1s1,0.448,1,1c0,4.41,3.588,7.998,7.999,7.998
				c4.412,0,8.001-3.588,8.001-7.998c0-0.552,0.447-1,1-1s1,0.448,1,1C42,38.516,37.514,43.001,31.999,43.001z"></path>
                                    <path d="M23 34.052c-.553 0-1-.447-1-1v-3.053c0-.552.447-1 1-1s1 .448 1 1v3.053C24 33.604 23.553 34.052 23 34.052zM32.002 50.004c-.256 0-.512-.098-.707-.293l-4.002-4.003c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0l4.002 4.003c.391.391.391 1.023 0 1.414C32.514 49.906 32.258 50.004 32.002 50.004z">
                                    </path>
                                    <path d="M31.998 50.004c-.256 0-.512-.098-.707-.293-.391-.391-.391-1.023 0-1.414l4.002-4.003c.391-.391 1.023-.391 1.414 0s.391 1.023 0 1.414l-4.002 4.003C32.51 49.906 32.254 50.004 31.998 50.004zM41 34.052c-.553 0-1-.447-1-1v-3.053c0-.552.447-1 1-1s1 .448 1 1v3.053C42 33.604 41.553 34.052 41 34.052zM31.995 27c-.07 0-.141-.007-.21-.022l-14.005-3c-.461-.099-.79-.506-.79-.978s.329-.879.791-.978l14.005-3c.137-.029.281-.029.418 0l14.005 3C46.671 22.121 47 22.528 47 23s-.329.879-.79.978l-14.005 3C32.136 26.993 32.065 27 31.995 27zM22.765 23l9.23 1.978L41.226 23l-9.23-1.977L22.765 23z">
                                    </path>
                                    <path d="M40.997,30.999H23c-0.553,0-1-0.448-1-1s0.447-1,1-1h17.997c0.553,0,1,0.448,1,1S41.55,30.999,40.997,30.999z">
                                    </path>
                                    <path d="M23 30.999c-.553 0-1-.448-1-1v-5.927c0-.552.447-1 1-1s1 .448 1 1v5.927C24 30.551 23.553 30.999 23 30.999zM41 30.999c-.553 0-1-.448-1-1v-5.927c0-.552.447-1 1-1s1 .448 1 1v5.927C42 30.551 41.553 30.999 41 30.999z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 font-bold text-3xl">{{ $count_dpt }}</p>
                            <p class="text-[14px] ">Mahasiswa Aktif</p>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="  px-7 py-6   flex items-top justify-start space-x-4">
                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 33.867 33.867" id="check-vote">
                            <path fill="#06f" d="M28.846961 25.116652h-2.30285c-.732896 0-1.473364.605628-1.322917 1.322916l1.058333 5.045848c.150447.717288.590021 1.322917 1.322917 1.322917h1.244517c.732896 0 1.322917-.590021 1.322917-1.322917v-5.045848c0-.732896-.590021-1.322916-1.322917-1.322916zM5.027083 25.116652h2.3028505c.7328958 0 1.4733632.605628 1.3229167 1.322916L7.5945169 31.485416C7.4440704 32.202704 7.004496 32.808333 6.2716002 32.808333H5.027083c-.7328958 0-1.3229166-.590021-1.3229166-1.322917v-5.045848c0-.732896.5900208-1.322916 1.3229166-1.322916z" paint-order="fill markers stroke"></path>
                            <path fill="#00a1ff" d="M 3.7041657,12.501561 H 30.162501 c 1.465792,0 2.645833,1.180042 2.645833,2.645833 v 11.310941 c 0,1.465792 -1.180041,2.645833 -2.645833,2.645833 H 3.7041657 c -1.4657916,0 -2.6458333,-1.180041 -2.6458333,-2.645833 V 15.147394 c 0,-1.465791 1.1800417,-2.645833 2.6458333,-2.645833 z" paint-order="fill markers stroke"></path>
                            <path fill="#a8d0ff" d="m 8.2351562,1.0583333 c -1.4657916,0 -2.6458333,1.1800418 -2.6458333,2.6458333 l 0,14.0902024 c 0,0.732896 0.5900209,1.322917 1.3229167,1.322917 H 26.954427 c 0.732896,0 1.322916,-0.590021 1.322916,-1.322917 l 0,-14.0902024 c 0,-1.4657915 -1.180041,-2.6458333 -2.645833,-2.6458333 z" paint-order="fill markers stroke"></path>
                            <path d="m 10.815488,22.234548 c -0.7309,-7.1e-4 -1.3239001,0.5914 -1.3242001,1.32228 3.9e-4,0.73088 0.5933001,1.32298 1.3242001,1.32226 h 12.23769 c 0.7301,-3.7e-4 1.3219,-0.59214 1.3222,-1.32226 -2.6e-4,-0.73013 -0.5921,-1.32191 -1.3222,-1.32228 z" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill="#fff" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers fill stroke"></path>
                            <path fill="#06f" d="m 16.933337,3.7047385 c -3.525276,0 -6.383075,2.8577991 -6.383075,6.3830675 0,3.525276 2.857799,6.383075 6.383075,6.383075 3.525268,0 6.383067,-2.857799 6.383067,-6.383075 0,-3.5252684 -2.857799,-6.3830675 -6.383067,-6.3830675 z" paint-order="markers fill stroke"></path>
                            <path d="M 19.523537,6.8568306 15.952432,9.4939719 14.2997,8.775098 c -1.057445,-0.5407465 -2.017515,0.3345102 -1.401481,1.401473 l 1.88562,2.819602 c 0.51601,0.723129 1.751167,0.763924 2.335419,0 L 20.923252,8.2582937 C 21.677271,7.2373183 20.488992,6.1270189 19.523537,6.8568306 Z" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill="#fff" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers fill stroke"></path>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 font-bold text-3xl">{{ $count_rekapitulasi }}</p>
                            <p class="text-[14px] ">Banyak Suara Masuk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- end Tentang E-Voting Pemira -->

<!-- Tata Cara Pimilihan -->
<section id="cara" class=" py-32 lg:py-20 pt-10 px-3 pb-20 ">
    <section class="  dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4   mx-auto  section-heading py-12  ">
            <h2 data-aos="fade-down" class="mb-6 text-center font-sans text-4xl lg:text-5xl font-bold text-[#E73530]   " style="text-shadow:5px 5px 5px #38383863;">
                Tata Cara Pimilihan</h2>

            <p data-aos="fade-down" class="  mt-2   text-sm text-gray-700 dark:text-gray-300   text-justify leading-8">
                Berikut tata cara menyalurkan hak suara pada Pemilihan Raya Universitas Bengkulu
            </p>



            <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3 mt-10">

                <div data-aos="fade-down" class="col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">01</div>
                        <figure class="icon-box"> <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 64 64" id="VerifyWebsite">
                                <g data-name="WEB PAGE" fill="#d85b53" class="color000000 svgShape">
                                    <path d="M52 20h7v-8H5v8h41a1 1 0 0 1 0 2H5v30h54V22h-7a1 1 0 0 1 0-2ZM9 18a2 2 0 1 1 2-2 2 2 0 0 1-2 2Zm6 0a2 2 0 1 1 2-2 2 2 0 0 1-2 2Zm6 0a2 2 0 1 1 2-2 2 2 0 0 1-2 2Zm12 29a10 10 0 1 1 10-10 10 10 0 0 1-10 10Zm16.92-25.62a1.15 1.15 0 0 1-.21.33A1.05 1.05 0 0 1 49 22h-.2l-.18-.06a.76.76 0 0 1-.18-.09l-.15-.12a1.15 1.15 0 0 1-.21-.33.83.83 0 0 1-.08-.4 1 1 0 0 1 1.71-.71l.12.16a.57.57 0 0 1 .09.17.62.62 0 0 1 .06.18 1.26 1.26 0 0 1 0 .2 1 1 0 0 1-.06.38Z" fill="#d85b53" class="color000000 svgShape"></path>
                                    <path d="M33 29a8 8 0 1 0 8 8 8 8 0 0 0-8-8Zm5.62 6.25L32.89 41a1 1 0 0 1-.29.19h-.08a1 1 0 0 1-.33.06 1 1 0 0 1-.33-.06h-.19l-4.09-2.45a1 1 0 1 1 1-1.71L32 39l5.18-5.18a1 1 0 0 1 1.41 1.41Z" fill="#d85b53" class="color000000 svgShape"></path>
                                </g>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Verifikasi Data</p>
                        </h4>
                        <div class="text-left line-clamp-2 text-sm group-hover:text-gray-200">Silahkan cek apakah
                            Anda terdaftar sebagai pemilih tetap atau klik <a href="{{ route('cekDpt') }}" class="text-blue-500 font-bold">Disini</a>.</div>
                    </div>
                </div>

                <div data-aos="fade-down" class="col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">02</div>

                        <figure class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" enable-background="new 0 0 48 48" viewBox="0 0 48 48" id="LoginAndPassword">
                                <path d="M38.6 47.3c0 .4-.3.7-.7.7H10.1c-.4 0-.7-.3-.7-.7s.3-.7.7-.7h5.4V47h17v-.4h5.4C38.3 46.5 38.6 46.9 38.6 47.3zM44.8 6.4h-8.5C36.7 7.2 37 8 37.2 8.9h5.6c.4 0 .7.3.7.7v27.6c0 .4-.3.7-.7.7H5.1c-.4 0-.7-.3-.7-.7V9.6c0-.4.3-.7.7-.7h5.6c.2-.8.5-1.7.9-2.5H3.2C2.5 6.4 1.9 7 1.9 7.7v31.6c0 .7.6 1.2 1.2 1.2h41.7c.7 0 1.2-.6 1.2-1.2V7.7C46.1 7 45.5 6.4 44.8 6.4zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24.8 4L24.8 4c.3 0 .5.1.6.3 0 0 .5.8 1.4.9-.4-1.2-1.5-2-2.8-2-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4zM36 10.3c-.2-1.4-.7-2.8-1.4-4C32.4 2.4 28.4 0 24 0s-8.4 2.4-10.6 6.2c-.7 1.3-1.2 2.6-1.4 4-.1.6-.1 1.3-.1 1.9 0 6.7 5.4 12.1 12.1 12.1s12.1-5.4 12.1-12.1C36.1 11.5 36.1 10.9 36 10.3zM19.5 5.9c.2-2.3 2.1-4.1 4.5-4.1 1.2 0 2.2.4 3 1.2.8.7 1.3 1.7 1.4 2.9 0 .1 0 .3 0 .4 0 1.8-1.1 3.7-2.6 4.6-.6.4-1.2.5-1.9.5-.6 0-1.3-.2-1.9-.5-1.5-.9-2.6-2.8-2.6-4.6C19.5 6.2 19.5 6 19.5 5.9zM28.5 21h-9c-1.4 0-2.6-1.2-2.6-2.6 0-3.8 3-6.5 7.1-6.5 1.9 0 3.7.6 5 1.7 1.4 1.2 2.1 2.9 2.1 4.8C31.1 19.8 29.9 21 28.5 21zM24 13.3c-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1 0-1.5-.6-2.8-1.6-3.7S25.5 13.3 24 13.3zM22.8 9.6c.8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8c-1 0-1.8-.5-2.2-1-.8.4-2 .7-3.7.8C21.1 7.8 21.9 9 22.8 9.6zM24.8 4L24.8 4c.3 0 .5.1.6.3 0 0 .5.8 1.4.9-.4-1.2-1.5-2-2.8-2-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM28 14.7c-1-.9-2.5-1.4-4-1.4-3.3 0-5.6 2.1-5.6 5 0 .7.5 1.2 1.1 1.2h9c.6 0 1.1-.5 1.1-1.1C29.6 16.9 29.1 15.6 28 14.7zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24.7 5.8c-.8.4-2 .7-3.7.8.1 1.2.8 2.4 1.8 3 .8.4 1.5.4 2.3 0C26 9 26.8 7.9 26.9 6.8 25.9 6.7 25.2 6.2 24.7 5.8zM24 3.3c-1.2 0-2.3.7-2.8 1.8 2.4-.2 2.9-.7 3-.8C24.4 4.1 24.6 4 24.8 4l0 0c.3 0 .5.1.6.3 0 0 .5.8 1.4.9C26.4 4.1 25.3 3.3 24 3.3zM37.5 10.4c.1.6.1 1.2.1 1.7 0 7.5-6.1 13.6-13.6 13.6s-13.6-6.1-13.6-13.6c0-.6 0-1.1.1-1.7H5.9v26.2h36.2V10.4H37.5zM16.1 31.2c.4.2.5.7.3 1-.1.2-.4.4-.6.4-.1 0-.3 0-.4-.1l-.6-.3v.7c0 .4-.3.7-.7.7s-.7-.3-.7-.7v-.7l-.6.3c-.1.1-.2.1-.4.1-.3 0-.5-.1-.6-.4-.2-.4-.1-.8.3-1l.6-.3-.6-.3c-.4-.2-.5-.7-.3-1 .2-.4.7-.5 1-.3l.6.3v-.7c0-.4.3-.7.7-.7s.7.3.7.7v.7l.6-.3c.4-.2.8-.1 1 .3s.1.8-.3 1l-.6.3L16.1 31.2zM22.7 31.2c.4.2.5.7.3 1-.1.2-.4.4-.6.4-.1 0-.3 0-.4-.1l-.6-.3v.7c0 .4-.3.7-.7.7-.4 0-.7-.3-.7-.7v-.7l-.6.3c-.1.1-.3.1-.4.1-.3 0-.5-.1-.6-.4-.2-.4-.1-.8.3-1l.6-.3-.6-.3c-.4-.2-.5-.7-.3-1 .2-.4.7-.5 1-.3l.6.3v-.7c0-.4.3-.7.7-.7.4 0 .7.3.7.7v.7l.6-.3c.4-.2.8-.1 1 .3s.1.8-.3 1l-.6.3L22.7 31.2zM29.4 31.2c.4.2.5.7.3 1-.1.2-.4.4-.6.4-.1 0-.3 0-.4-.1l-.6-.3v.7c0 .4-.3.7-.7.7-.4 0-.7-.3-.7-.7v-.7L26 32.5c-.1.1-.2.1-.4.1-.3 0-.5-.1-.6-.4-.2-.4-.1-.8.3-1l.6-.3-.6-.3c-.4-.2-.5-.7-.3-1 .2-.4.7-.5 1-.3l.6.3v-.7c0-.4.3-.7.7-.7.4 0 .7.3.7.7v.7l.6-.3c.4-.2.8-.1 1 .3s.1.8-.3 1l-.6.3L29.4 31.2zM36 31.2c.4.2.5.7.3 1-.1.2-.4.4-.6.4-.1 0-.3 0-.4-.1l-.6-.3v.7c0 .4-.3.7-.7.7s-.7-.3-.7-.7v-.7l-.6.3c-.1.1-.3.1-.4.1-.3 0-.5-.1-.6-.4-.2-.4-.1-.8.3-1l.6-.3L32 30.6c-.4-.2-.5-.7-.3-1 .2-.4.7-.5 1-.3l.6.3v-.7c0-.4.3-.7.7-.7s.7.3.7.7v.7l.6-.3c.4-.2.8-.1 1 .3s.1.8-.3 1l-.6.3L36 31.2z" fill="#d85b53" class="color000000 svgShape"></path>
                                <rect width="17" height="4.9" x="15.5" y="42" fill="#d85b53" class="color000000 svgShape"></rect>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Login</p>
                        </h4>
                        <div class="text-left line-clamp-2 text-sm group-hover:text-gray-200">Silahkan login
                            menggunakan akun anda pada tombol Login atau klik <a href="{{ route('panda.login') }}" class="text-blue-500 font-bold">Disini</a>.</div>
                    </div>
                </div>

                <div data-aos="fade-down" class="col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">03</div>

                        <figure class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="w-24 h-24" viewBox="0 0 24 24" id="Keyboard">
                                <path d="M6.71,10.29A1,1,0,0,0,5,11a1,1,0,1,0,1.92-.38A1,1,0,0,0,6.71,10.29ZM9.29,7.71A1,1,0,0,0,10,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,11,7a1.05,1.05,0,0,0-.29-.71l-.15-.12-.18-.09A.6.6,0,0,0,10.19,6a1,1,0,0,0-.9.27,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76A1.15,1.15,0,0,0,9.29,7.71ZM6.56,6.17a.76.76,0,0,0-.18-.09L6.2,6a1,1,0,0,0-.91.27,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21A.84.84,0,0,0,6,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,7,7a1.05,1.05,0,0,0-.29-.71Zm6.15,12.12a1,1,0,0,0-1.42,0l-2,2a1,1,0,0,0,1.42,1.42L12,20.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6-8a1,1,0,0,0-1.42,0,1,1,0,0,0-.21.33,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,19,11a.84.84,0,0,0-.08-.38A1,1,0,0,0,18.71,10.29ZM14,10H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6-8H4A3,3,0,0,0,1,5v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V5A1,1,0,0,1,4,4H20a1,1,0,0,1,1,1ZM17.62,6.08a.93.93,0,0,0-.33.21A1.05,1.05,0,0,0,17,7a1,1,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,18,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,19,7a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,17.62,6.08Zm-3.06.09-.18-.09L14.2,6a1,1,0,0,0-.58.06.93.93,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,14,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,15,7a1.05,1.05,0,0,0-.29-.71Z" fill="#d85b53" class="color000000 svgShape"></path>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Username & Password</p>
                        </h4>
                        <div class="text-left line-clamp-2 text-sm group-hover:text-gray-200">Masukkan username dan
                            password Anda dengan benar</div>
                    </div>
                </div>

                <div data-aos="fade-down" class=" col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">04</div>

                        <figure class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" enable-background="new 0 0 65 65" viewBox="0 0 65 65" id="selected-area">
                                <line x1="5.4" x2="5.4" y1="20.9" y2="26.1" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="5.4" x2="5.4" y1="35.1" y2="40.2" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <polyline fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" points="5.4 11.9 5.4 5.4 11.9 5.4"></polyline>
                                <polyline fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" points="11.9 55.7 5.4 55.7 5.4 49.3"></polyline>
                                <polyline fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" points="49.3 5.4 55.7 5.4 55.7 11.9"></polyline>
                                <line x1="20.9" x2="26.1" y1="5.4" y2="5.4" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="35.1" x2="40.2" y1="5.4" y2="5.4" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="20.9" x2="26.1" y1="55.7" y2="55.7" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="55.7" x2="55.7" y1="20.9" y2="26.1" fill="#fff" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></line>
                                <polygon fill="#fad1c4" stroke="#e54125" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" points="57 33.8 24.8 24.8 33.8 57 40.2 45.4 54.4 59.6 59.6 54.4 45.4 40.2">
                                </polygon>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Menu Kandidat </p>
                        </h4>
                        <div class="text-left line-clamp-3 text-sm group-hover:text-gray-200">Silahkan klik menu
                            kandidat. kemudian pilih kandidat untuk menampilkan informasi kandidat beserta visi dan misi</div>
                    </div>
                </div>

                <div data-aos="fade-down" class="col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">05</div>

                        <figure class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-24 h-24" id="howtovote">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M11.34 15.02c.39.39 1.02.39 1.41 0l6.36-6.36c.39-.39.39-1.02 0-1.41L14.16 2.3c-.38-.4-1.01-.4-1.4-.01L6.39 8.66c-.39.39-.39 1.02 0 1.41l4.95 4.95zm2.12-10.61L17 7.95l-4.95 4.95-3.54-3.54 4.95-4.95zm6.95 11l-2.12-2.12c-.18-.18-.44-.29-.7-.29h-.27l-2 2h1.91L19 17H5l1.78-2h2.05l-2-2h-.42c-.27 0-.52.11-.71.29l-2.12 2.12c-.37.38-.58.89-.58 1.42V20c0 1.1.9 2 2 2h14c1.1 0 2-.89 2-2v-3.17c0-.53-.21-1.04-.59-1.42z" fill="#d85b53" class="color000000 svgShape"></path>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Menu Voting</p>
                        </h4>
                        <div class="text-left   text-sm group-hover:text-gray-200">Tempat untuk memilih pasangan calon presma, pada tahap ini silahkan pilih salah
                            satu calon yang anda yakini.</div>
                    </div>
                </div>

                <div data-aos="fade-down" class="col-span-1 work-block group  bg-white border-2  rounded-xl hover:border-red-500 duration-300 transform bg-opacity-80 hover:bg-red-700">
                    <div class="inner-box">
                        <div class="count-text group-hover:text-red-300">06</div>

                        <figure class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 32 32" id="gearsetting">
                                <path d="M5.762 26.977a3.09 3.09 0 0 0 4.348 0l.612-.613c.546.277 1.107.513 1.689.702v.863A3.085 3.085 0 0 0 15.482 31h1.033c1.686 0 3.078-1.385 3.078-3.071v-.871a11.537 11.537 0 0 0 1.684-.694l.612.613a3.09 3.09 0 0 0 4.348 0l.738-.734a3.095 3.095 0 0 0 0-4.352l-.612-.605c.277-.546.513-1.108.701-1.69h.863c1.687 0 3.071-1.393 3.071-3.079v-1.033c0-1.686-1.386-3.078-3.071-3.078h-.871a11.586 11.586 0 0 0-.693-1.683l.612-.613a3.09 3.09 0 0 0 0-4.348l-.738-.738a3.09 3.09 0 0 0-4.348 0l-.612.612a11.715 11.715 0 0 0-1.684-.694v-.864A3.097 3.097 0 0 0 16.515 1h-1.033c-1.686 0-3.071 1.393-3.071 3.078v.856c-.582.189-1.145.424-1.689.701l-.612-.612a3.09 3.09 0 0 0-4.348 0l-.732.739a3.094 3.094 0 0 0 0 4.348l.605.613a11.699 11.699 0 0 0-.693 1.683h-.864a3.095 3.095 0 0 0-3.077 3.078v1.033a3.097 3.097 0 0 0 3.077 3.079h.864c.189.581.416 1.146.693 1.69l-.605.605a3.097 3.097 0 0 0 0 4.352l.732.734zm9.72-23.975h1.033c.612 0 1.078.465 1.078 1.078v1.521a1 1 0 0 0 .76.967 9.73 9.73 0 0 1 2.658 1.1 1 1 0 0 0 1.218-.148l1.078-1.078a1.053 1.053 0 0 1 1.521 0l.73.738c.433.433.433 1.08 0 1.513l-1.07 1.078a.999.999 0 0 0-.154 1.226 9.726 9.726 0 0 1 1.106 2.658c.113.442.511.752.967.753h1.521c.611 0 1.07.465 1.07 1.078v1.033c0 .612-.459 1.078-1.07 1.078h-1.521a1.001 1.001 0 0 0-.974.76 9.694 9.694 0 0 1-1.101 2.657c-.232.394-.17.896.154 1.218l1.07 1.078a1.053 1.053 0 0 1 0 1.521l-.73.731a1.053 1.053 0 0 1-1.521 0l-1.078-1.078a1 1 0 0 0-1.218-.147 9.755 9.755 0 0 1-2.658 1.1 1 1 0 0 0-.76.975v1.521a1.05 1.05 0 0 1-1.078 1.07H15.48a1.05 1.05 0 0 1-1.078-1.07v-1.521a1 1 0 0 0-.753-.975 9.723 9.723 0 0 1-2.657-1.1 1.001 1.001 0 0 0-1.226.147l-1.07 1.078a1.053 1.053 0 0 1-1.521 0l-.738-.731a1.053 1.053 0 0 1 0-1.521l1.078-1.078a1 1 0 0 0 .146-1.218 9.799 9.799 0 0 1-1.1-2.657 1 1 0 0 0-.975-.76H4.074a1.057 1.057 0 0 1-1.077-1.078v-1.033c0-.612.608-.883 1.077-1.078.469-.194 1.521 0 1.521 0 .457-.001.854-.311.968-.753a9.742 9.742 0 0 1 1.1-2.658 1.003 1.003 0 0 0-.146-1.226L6.438 8.693a1.044 1.044 0 0 1 0-1.513l.738-.738a1.045 1.045 0 0 1 1.514 0L9.768 7.52a1 1 0 0 0 1.226.148 9.749 9.749 0 0 1 2.657-1.1.999.999 0 0 0 .753-.974V4.08c0-.613.466-1.078 1.078-1.078zm.518 7.33c-3.118 0-5.662 2.552-5.662 5.669 0 3.117 2.544 5.669 5.662 5.669 3.117 0 5.669-2.552 5.669-5.669 0-3.117-2.552-5.669-5.669-5.669zm0 2a3.656 3.656 0 0 1 3.669 3.669A3.656 3.656 0 0 1 16 19.67a3.649 3.649 0 0 1-3.661-3.669A3.65 3.65 0 0 1 16 12.332z" fill="#d85b53" class="color000000 svgShape"></path>
                            </svg></figure>
                        <h4>
                            <p class=" text-red-600 font-bold text-left text-base group-hover:text-orange-300">Logout</p>
                        </h4>
                        <div class="text-left line-clamp-2 text-sm group-hover:text-gray-200">Silakan logout jika
                            sudah menggunakan hak pilih Anda</div>
                    </div>
                </div>

            </div>


        </div>
    </section>


    <div class="my-10 max-w-2xl mx-auto space-y-4 lg:space-y-6">

        <template x-for="(item, index) in faq" :key="`item-{$index}`">

            <div class="item bg-white shadow-md rounded-md p-3">
                <div class="flex items-center cursor-pointer" @click="faq_selected !== index ? faq_selected = index : faq_selected = null">
                    <div class="bg-indigo-100 text-indigo-400 w-8 h-8 md:w-10 md:h-10 rounded-md flex items-center justify-center font-bold text-lg font-display">
                        <span x-text="index + 1"></span>
                    </div>
                    <div class="ml-3 md:ml-4 lg:ml-6 md:text-lg text-indigo-600">
                        <span x-text="item.question"></span>
                    </div>
                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-bind:style="faq_selected === index ? `max-height:  ${ $el.scrollHeight }px` : ``">
                    <div class="text-gray-700 ml-8 md:ml-10 pl-3 md:pl-4 lg:pl-6 py-2 space-y-3">

                        <template x-for="(ans, index) in item.answer" :key="`item-ans-{$index}`">
                            <p x-text="ans"></p>
                        </template>

                    </div>
                </div>
            </div>

        </template>

    </div>
</section>
<!-- end Tata Cara Pimilihan -->

<!-- Waktu Pelaksanaan -->
<section id="waktu" class="   bg-[#E73530]       py-32  lg:py-20 text-center">
    <div class="px-4 py-20    mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl  mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

            <h2 data-aos="fade-down" class="mb-6 text-center font-sans text-4xl lg:text-5xl font-bold text-white   " style="text-shadow:5px 5px 5px #38383863;">
                Waktu Pelaksanaan</h2>

            <p data-aos="fade-down" class="text-[14px]   text-center   text-gray-300">Berikut Waktu dan Tahapan
                Pelaksanaan Pemilu.

            </p>
        </div>
        <!-- <div class="grid gap-8 row-gap-0 lg:grid-cols-4">
            <div data-aos="fade-right" class="relative text-center">
                <div class="flex items-center justify-center   mx-auto mb-4    ">
                    <svg class=" lg:w-20  lg:h-20 w-14 h-14 fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>
                </div>
                <h6 class="mb-2 text-base font-extrabold text-white">Pendaftaran Bakal Calon Ketua dan
                    Wakil</h6>
                <p class="max-w-md mx-auto mb-3 text-lg text-yellow-300 sm:mx-auto">
                    18-20 Maret 2023
                </p>
                <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
                    <svg class="w-8 text-white transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                        <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                    </svg>
                </div>
            </div>
            <div data-aos="fade-right" data-aos-delay="100" class="relative text-center">
                <div class="flex items-center justify-center   mx-auto mb-4    ">
                    <svg class=" lg:w-20  lg:h-20 w-14 h-14 fill-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                </div>
                <h6 class="mb-2 text-base font-extrabold text-white">Penetapan Calon Ketua dan Wakil Ketua
                </h6>
                <p class="max-w-md mx-auto mb-3 text-lg text-yellow-300 sm:mx-auto">
                    22 Maret 2023

                </p>
                <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
                    <svg class="w-8 text-white transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                        <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                    </svg>
                </div>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" class="relative text-center">
                <div class="flex items-center justify-center   mx-auto mb-4    ">
                    <svg class=" lg:w-20  lg:h-20 w-14 h-14 fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </div>
                <h6 class="mb-2 text-base font-extrabold text-white">Proses Pemungutan Suara</h6>
                <p class="max-w-md mx-auto mb-3 text-lg text-yellow-300 sm:mx-auto">
                    5 April 2023
                </p>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" class="relative text-center">
                <div class="flex items-center justify-center   mx-auto mb-4    ">
                    <svg class=" lg:w-20  lg:h-20 w-14 h-14 fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                        <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                    </svg>
                </div>
                <h6 class="mb-2 text-base font-extrabold text-white">Pengumuman Pemenang Pemilu</h6>
                <p class="max-w-md mx-auto mb-3 text-lg text-yellow-300 sm:mx-auto">
                    9 April 2023
                </p>
            </div>
        </div> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6  ">
            <div class="col-span-1 ">
                <ol>
                    @foreach ($jadwal_kegiatans as $jadwal_kegiatan)
                    <li class="border-l-2 border-white">
                        <div class="md:flex flex-start">
                            <div class="bg-white w-8 h-8 flex items-center justify-center rounded-full -ml-4">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-orange-500 w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                                </svg>
                            </div>
                            <div class="  px-4 py-2 rounded-lg   bg-gray-100   ml-6 md:mb-5 text-left md:w-full shadow-inner shadow-gray-600  ">
                                <div class="flex justify-between  ">
                                    <a href="#!" class="font-bold text-orange-800 hover:text-orange-700 focus:text-orange-800 duration-300 transition ease-in-out text-base  ">{{ $jadwal_kegiatan->judul }}</a>

                                </div>
                                <a href="#!" class="font-medium text-gray-600 hover:text-gray-700 focus:text-gray-800 duration-300 transition ease-in-out text-sm">{{$jadwal_kegiatan->tgl}}</a>
                                <p class="text-gray-700  text-sm">{{$jadwal_kegiatan->deskripsi}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach


                </ol>
            </div>
            <script>
                var elementPosition = $('#fixed').offset();

                $(window).scroll(function() {
                    if ($(window).scrollTop() > elementPosition.top) {
                        $('#fixed').css('position', 'fixed').css('top', '0');
                    } else {
                        $('#fixed').css('position', 'static');
                    }
                });
            </script>
            <div class="col-span-1 px-8  ">
                <div    >
                    <img src="{{ asset('assets/frontend/undraw_online_calendar_re_wk3t.svg') }}" alt="img" class="w-full       mx-auto">
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end Waktu Pelaksanaan -->



<!-- Footer  -->
<footer class="relative     " id="contact">
    <div class=" container px-5 pt-16 pb-16 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="lg:w-2/4   w-full flex-shrink-0 md:mx-0 mx-auto  ">
            <a href="/" class="flex items-center text-black   mx-4  ">
                <img src="{{ asset('assets/frontend/Logo.svg') }}">
                <div class="ml-3  text-white">
                    <strong class="text-xl md:text-3xl font-bold  text-black   uppercase">PEMIRA</strong>
                    <p class="text-sm md:text-[16px]   text-yellow-600      uppercase -mt-2
                                relative">
                        UNIVERSITAS BENGKULU</p>
                </div>
            </a>
            <p class="md:ml-[70px] mt-2 text-sm text-gray-700 leading-7"> <b>E-voting</b> merupakan
                sebuah
                sistem yang memanfaatkan perangkat elektronik dan mengolah informasi digital untuk membuat
                surat suara,
                memberikan suara, menghitung perolehan suara, menayangkan perolehan suara dan memelihara serta
                menghasilkan jejak audit.
                Pemilihan berbasis online ini dilakukan sebagai alternatif proses PEMIRA
            </p>


        </div>
        <div class=" md:pl-10   ">
            @if (!empty($contact))
            <h2 class="text-lg   font-bold  text-gray-700    ">Kontak Narahubung KPU Universitas Bengkulu </h2>
            @php
            $arrayData = explode(";", $contact->no_tlp);
            @endphp
            @foreach($arrayData as $item)
            <a class="flex  my-3 group" href="https://wa.me/{{ str_replace(' ', '', $item)  }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 group-hover:fill-red-500 w-5 h-5 mr-3 " width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
                <span class="  text-sm text-gray-600 group-hover:text-red-500  duration-300 transform break-normal">+{{ str_replace(' ', '', $item)  }}</span>
            </a>
            @endforeach


            <a class="flex  my-3 group" href="mailto: {{ $contact->email }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 group-hover:fill-red-500 w-5 h-5 mr-3  " fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
                <span class=" text-sm text-gray-600 group-hover:text-red-500  duration-300 transform
                            break-normal">{{ $contact->email }}</span>
            </a>
            <div class="  flex flex-wrap mt-5 gap-2">
                <a href="{{$contact->facebook}}" title="Facebook" class="bg-blue-500   hover:bg-blue-600 duration-200 transform py-2 px-2.5 font-semibold text-white inline-flex items-center space-x-2 rounded">
                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>

                <a href="{{$contact->twitter}}" title="Twitter" class="bg-blue-400  hover:bg-blue-500 duration-200 transform   py-2 px-2.5 font-semibold text-white inline-flex items-center space-x-2 rounded">
                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>

                <a href="{{$contact->instagram}}" title="Instagram" class="  font-semibold text-white inline-flex items-center space-x-2 rounded">
                    <svg class="w-[40px] h-[40px]  " viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"></rect>
                            <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"></rect>
                            <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"></rect>
                            <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"></path>
                            <defs>
                                <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                    <stop stop-color="#B13589"></stop>
                                    <stop offset="0.79309" stop-color="#C62F94"></stop>
                                    <stop offset="1" stop-color="#8A3AC8"></stop>
                                </radialGradient>
                                <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                    <stop stop-color="#E0E8B7"></stop>
                                    <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                                    <stop offset="0.71474" stop-color="#E2425C"></stop>
                                    <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop>
                                </radialGradient>
                                <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                    <stop offset="0.156701" stop-color="#406ADC"></stop>
                                    <stop offset="0.467799" stop-color="#6A45BE"></stop>
                                    <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop>
                                </radialGradient>
                            </defs>
                        </g>
                    </svg>
                </a>


            </div>
            @endif

        </div>
    </div>


</footer>
<div class="      z-50      w-full   bg-[#c23935]  ">
    <div class="px-12 mx-auto py-4   flex flex-wrap flex-col sm:flex-row    ">
        <p class="text-white mx-auto  text-xs md:text-sm  text-center sm:text-left">Copyright&copy; 2023 |
            <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
        </p>
    </div>
</div>
<!-- end Footer -->
<!-- back to top  -->
<div class="" x-data="{scrollBackTop: false}" x-cloak>
    <svg x-show="scrollBackTop" @click="window.scrollTo({top: 0, behavior: 'smooth'})" x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false" aria-label="Back to top" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-up-circle-fill fixed bottom-0 right-0 mx-3 my-10 h-8 w-8 dark:fill-orange-700 fill-orange-500 shadow-lg    cursor-pointer hover:fill-orange-400 bg-white       rounded-full " viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
    </svg>
</div>
@endsection
