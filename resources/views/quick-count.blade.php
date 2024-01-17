@extends('layouts.users')

@section('quick-count','text-yellow-500')
@section('content')
<div class=" container mx-auto   grid grid-cols-1 md:grid-cols-3">
    <div class=" ">
        <img src="{{ asset('assets/frontend/kotak.png') }}" alt="kotak-suara" style="filter: drop-shadow(2px 2px 5px #333);" class="w-1/3 ml-auto ">
    </div>
    <div class="md:col-span-2 h-full justify-center align-middle">
        <p class="mt-2 text-2xl   lg:text-4xl   text-red-600 text-center md:text-left font-[arial] font-extrabold
                            ">
            Quick Count Suara Masuk
        </p>
        <p class="text-gray-800 mb-5   leading-6 md:leading-7 mt-5   mx-auto  md:text-sm 2xl:text-base 2xl:leading-7 text-xs text-center md:text-left ">
            Quick Count menampilkan dan menghitung suara pemilih yang telah digunakan pada kandidat yang di pilih secara realtime.
        </p>
    </div>


</div>
<div class="min-h-[67vh]  relative     overflow-hidden pt-5
                from-[#E73530] bg-gradient-to-t from-50%   grid
                ">

    <div x-data class=" lg:flex w-full text-gray-800 mx-4 md:mx-auto place-self-center pb-20 px-10 justify-center
                    lg:flex-row md:grid md:grid-cols-2 flex-col gap-6">
        @foreach ($kandidats as $kandidat)
        <div data-aos="fade-up">
            <div class="rounded-md  max-w-[240px] mx-auto   my-2 w-full bg-gray-100       shadow-black duration-300 transform content-div
                                      group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110">
                <div class="py-2 mb-3 bg-black   w-full text-center font-bold text-white text-xl  "><b class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                </div>
                <img class=" relative flex items-end overflow-hidden rounded-full      duration-300 transform  h-36 mx-auto   " src="{{ asset('assets/frontend/logo.webp') }}" alt="Img" />
                <div class="   duration-200 transform mt-3 px-2 ">
                    <div class="mt-3 flex items-end justify-between border-t-gray-800 border-t-2 ">
                        <p class="text-gray-900 py-2 text-xs md:text-sm  text-center">
                            {{ $kandidat->nama_calon_ketua.' ('.$kandidat->npm_calon_ketua.')' }} <br><b>&</b> <br> {{ $kandidat->npm_calon_wakil_ketua.' ('.$kandidat->npm_calon_wakil_ketua.')' }}
                        </p>
                    </div>
                </div>
                <div class="   duration-200 transform   bg-black ">
                    <div class="mt-3     border-t-gray-800 border-t-2 ">
                        <p class="text-white py-2 text-xs px-2  md:text-sm  text-center">
                            <b class="text-yellow-500">{{ $kandidat->rekapitulasis_count  }}</b> Suara
                        </p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div x-data="app()" x-cloak class="px-4 bg-[#E73530] pb-20">
        <div class=" max-w-5xl mx-auto py-10">
            <div class="  p-6 rounded-lg relative bg-white bg-opacity-90 shadow-inner shadow-black">
                <div class="md:flex md:justify-between md:items-center">
                    <div>
                        <h2 class="text-xl text-gray-800 font-bold leading-tight">Quick Count</h2>
                        <p class="mb-2 text-gray-600 text-sm">Pemilihan Calon Presiden Mahasiswa</p>
                    </div>

                    <!-- Legends -->
                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-orange-600 mr-2 rounded-full"></div>
                            <div class="text-sm text-gray-700">Suara Masuk</div>
                        </div>
                    </div>
                </div>


                <div class="line my-8   mx-auto max-w-5xl w-full ">
                    <!-- Tooltip -->
                    <!-- <template x-if="tooltipOpen == true">
                        <div x-ref="tooltipContainer" class="  z-10 shadow-lg rounded-lg absolute h-auto block " :style="`  right:20px; top:60px`">
                            <div class="shadow-xs rounded-lg bg-orange-500 p-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div>Suara Masuk:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template> -->

                    <!-- Bar Chart -->
                    <div class="flex -mx-2 items-end   mt-20">
                        <template x-for="data in chartData">

                            <div class="px-2 w-1/{{count($kandidats)}}">

                                <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-orange-600 hover:bg-orange-400
                                              relative"  data-tooltip-target="tooltip" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                                    <div   class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"><p ><b x-text="data" ></b> Suara</p>
                                    </div>
                                </div>
                            </div>

                        </template>
                    </div>

                    <!-- Labels -->
                    <div class="  mx-auto border-t border-gray-400 " :style="`height: 1px;  "></div>
                    <div class="flex -mx-2 items-end mb-20">
                        <template x-for="data in labels">
                            <div class="px-2 w-1/{{count($kandidats)}}">
                                <div class="bg-red-600 relative">
                                    <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                    <div x-html="data" class="text-center absolute top-0 left-0 right-0 mt-3   text-gray-700 text-sm">
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function app() {

            return {
                chartData: @json($kandidats->pluck('rekapitulasis_count')->toArray()),
                labels:  @json($kandidats->map(fn($kandidat) => 'Kandidat<br> No  <b class="text-orange-500 text-xl font-bold">' . $kandidat->nomor_urut.'</br>')->toArray()),

                tooltipContent: '',
                tooltipOpen: false,
                tooltipX: 0,
                tooltipY: 0,
                showTooltip(e) {
                    console.log(e);
                    this.tooltipContent = e.target.textContent
                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                },
                hideTooltip(e) {
                    this.tooltipContent = '';
                    this.tooltipOpen = false;
                    this.tooltipX = 0;
                    this.tooltipY = 0;
                }
            }
        }
    </script>


    @endsection
