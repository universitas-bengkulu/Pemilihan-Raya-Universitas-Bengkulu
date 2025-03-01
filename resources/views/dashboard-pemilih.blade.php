@extends('layouts.users')

@section('kandidat', 'bg-black lg:shadow-inner shadow-gray-600 text-white')
@section('content')
<div class="lg:fixed mb-20 md:mb-10 lg:mb-0 lg:top-32 lg:right-4 bg-white rounded-lg border-2 border-gray-300 mx-4 p-3">
    <div  class=" text-center   font-mono text-gray-700 font-extrabold">
        Sisa Waktu Pencoblosan
    </div>
    <div class="  flex items-center justify-center px-5    " x-data="beer()" x-init="start()">

        <div class="text-white" title="Waktu Pencobolsan">
            <!-- <h1 class="text-base lg:text-xl text-center mb-3 font-extrabold    ">Waktu Pencobolsan </h1> -->
            <div class="text-2xl md:text-3xl text-center flex w-full items-center justify-center px-3 pb-3">

                <div  class=" p-2  text-gray-700 font-extrabold ">
                    <div class="font-mono leading-none" x-text="hours">00</div>
                    <div class="font-mono capitalize text-sm leading-none">Jam</div>
                </div>
                <div  class=" p-2  text-gray-700 font-extrabold ">
                    <div class="font-mono leading-none" x-text="minutes">00</div>
                    <div class="font-mono capitalize text-sm leading-none">Menit</div>
                </div>
                <div  class=" p-2  text-gray-700 font-extrabold ">
                    <div class="font-mono leading-none" x-text="seconds">00</div>
                    <div class="font-mono capitalize text-sm leading-none">Detik</div>
                </div>

            </div>
        </div>
    </div>
</div>

    <div class="min-h-[33vh] pt-10    grid">
        <div class="place-self-center grid">
            <div class="flex space-x-2 mx-auto place-self-center ">
                <img src="{{ asset('assets/frontend/logo.webp') }}" alt="kotak-suara"
                    style="filter: drop-shadow(2px 2px 5px #333);"
                    class="h-40 rounded-full md:h-56 md:mt-10 animate-[bounce_3s_infinite]   ">
            </div>
            <p
                class="text-gray-800 mb-5   leading-6 md:leading-7 mt-5  max-w-4xl mx-auto text-center md:text-sm 2xl:text-base 2xl:leading-7 text-xs px-6 ">
                E-voting merupakan sebuah sistem yang
                memanfaatkan perangkat
                elektronik dan mengolah informasi
                digital untuk membuat surat suara, memberikan suara, menghitung perolehan suara, menayangkan
                perolehan suara dan memelihara serta menghasilkan jejak audit.
                Pemilihan berbasis online ini dilakukan sebagai alternatif proses pemilihan Universitas Bengkulu
            </p>

        </div>
    </div>
    <div
        class="min-h-[67vh]  relative     overflow-hidden pt-5
                 from-50%   grid   bg-gradient-to-t
                ">

        <div x-data
            class=" flex w-full text-gray-800 mx-4 md:mx-auto place-self-center pb-20 px-10 justify-center
                    md:flex-row flex-col">
            @foreach ($kandidats as $kandidat)
                <div data-aos="fade-up">
                    <div
                        class="rounded-md max-w-[240px] md:w-60 mx-auto md:mx-3  w-full bg-gray-100 hover:bg-opacity-80 hover:bg-black mb-8  shadow-black duration-300 transform content-div
                                      group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110">
                        <div class="py-2  bg-black   w-full text-center font-bold text-white text-xl  "><b
                                class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                        </div>
                        <img class=" relative flex items-end overflow-hidden    group-hover:opacity-25 duration-300 transform h-48 object-cover  mx-auto   "
                            src="{{ asset('storage/' . $kandidat->banner) }}" alt="Img" />
                        <div class="   duration-200 transform    ">
                            <div
                                class=" flex items-end justify-between border-t-gray-800 group-hover:border-t-gray-300 border-t-2 px-2">
                                <div
                                    class="text-gray-900 group-hover:text-gray-200 py-2 text-xs w-full md:text-sm  text-center  ">
                                    <p class="line-clamp-1 font-bold">{{ $kandidat->nama_calon_ketua }}</p>
                                    <p class="text-yellow-600">({{ $kandidat->npm_calon_ketua }})</p>
                                    <p class="  font-bold">&</p>
                                    <p class="line-clamp-1 font-bold">{{ $kandidat->nama_calon_wakil_ketua }}</p>
                                    <p class="text-yellow-600">({{ $kandidat->npm_calon_wakil_ketua }})</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute w-full top-0 left-0  text-center  grid  h-full  opacity-0
                                             group-hover:opacity-100
                                             duration-200 transform">
                            <div class="  text-center   place-self-center  ">
                                <a href="{{ route('mahasiswa.visi-misi', [$kandidat->id]) }}"
                                    class="text-center px-4 py-3 mx-auto   md:text-sm
                                                     bg-[#cd514d] rounded-lg hover:bg-[#db6d6a] focus:ring
                                                     focus:ring-gray-300 focus:ring-opacity-80 duration-300 transform inline-block
                                                     text-white font-semibold text-xs ">Visi
                                    dan Misi</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach



        </div>
        <style>
            .custom-shape-divider-bottom-1716998772 svg {
                position: relative;
                display: block;
                width: calc(131% + 1.3px);
            }
        </style>
        <section class="group">
            <div class="relative w-full">
                <div class="custom-shape-divider-bottom-1739182196" style="filter: drop-shadow(0px 5px 2px #000)">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="fill-[#C23935] group-hover:fill-black  " ></path>
                    </svg>
                </div>
            </div>
            <div   class=" bg-gradient-to-r from-red-800 via-black to-red-600 group-hover:from-black group-hover:to-gray-800  from-50% via-10% to-50%   -mt-1 mb-8    relative     text-center">
                <div class="absolute w-full h-screen pattren z-40"></div>
                <div class=" py-44 lg:py-12">
                    <style>
                        .custom-shape-divider-top-1739182018 {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            overflow: hidden;
                            line-height: 0;
                        }

                        .custom-shape-divider-top-1739182018 svg {
                            position: relative;
                            display: block;
                            width: calc(100% + 1.3px);
                            height: 105px;
                        }

                        .custom-shape-divider-top-1739182018 .shape-fill {
                            fill: #C23935 ;

                        }

                        .custom-shape-divider-bottom-1739182196 {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 100%;
                            overflow: hidden;
                            line-height: 0;
                            transform: rotate(180deg);
                        }

                        .custom-shape-divider-bottom-1739182196 svg {
                            position: relative;
                            display: block;
                            width: calc(100% + 1.3px);
                            height: 87px;
                        }

                        .custom-shape-divider-bottom-1739182196 .shape-fill {
                            fill: #C23935;
                        }
                    </style>

                    <div class="custom-shape-divider-top-1739182018" style="filter: drop-shadow(0px 10px 2px #000)">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="fill-[#C23935] group-hover:fill-black  "></path>
                        </svg>
                    </div>
                    <div
                        class="  relative z-40   lg:-mt-32 lg:mb-32 -mt-[17rem]  px-4 py-12 mx-auto text-center  ">

                        <h2 class="max-w-2xl text-xl font-bold text-center text-slate-50 2xl:text-2xl ">

                        </h2>
                        <div class="md:inline-flex w-full mt-6 space-x-1 lg:space-x-4 sm:w-auto">
                            <img src="{{ asset('assets/frontend/download-removebg-preview.png') }}" alt="img" class="absolute z-50 w-28 translate-x-full transform ml-32 group-hover:ml-10 mx-auto -mt-24
                        md:group-hover:-mt-14 group-hover:-mt-[75px] group-active:ml-10 group-active:-mt-10
                          duration-300">
                            <a href="{{route('mahasiswa.voting')}}"
                                class="  py-2  mt-2  text-black font-semibold text-[14px] transition-colors  group-hover:bg-yellow-500 group-hover:text-white    lg:mt-0  duration-300 transfrom   bg-white shadow-[inset_0px_0px_10px_2px_#333] border border-slate-50 rounded-lg     px-12  mx-auto">COBLOS
                                SEKARANG</a>
                        </div>

                    </div>



                </div>
            </div>

        </section>


    </div>
    <script>
        function beer() {
            return {
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '00',
                distance: 0,
                countdown: null,
                beerTime: new Date('{{ $jadwal_aktif->tanggal }} {{ $jadwal_aktif->waktu_selesai }}').getTime(),
                now: new Date().getTime(),
                start: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.beerTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)));
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                        }
                    }, 100);
                },
                padNum: function(num) {
                    var zero = '';
                    for (var i = 0; i < 2; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-2);
                }
            }
        }
    </script>
@endsection
